<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
<?php include '../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Fequip%2Fborrow");
		exit();
	}
	if($_SESSION['vip']<1){
		header("Location: /astro/user/noauth.php");
		exit();
	}
?>
</head>
<body>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php include '../../header.html'; ?>
		<?php include '../nav.html'; ?>	
			<div class="jumbotron">
<!-- article -->
	<?php
		require "../mysqlconnection.php";
		if (mysqli_connect_errno()){
			echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
		}else{
		$id=$connection->real_escape_string($_POST['id']);
		$name=$connection->real_escape_string($_SESSION['name']);
		$stunb=$connection->real_escape_string($_SESSION['stunb']);
		$borrow_time=date("Y-m-d");
		$return_time=$connection->real_escape_string($_POST['return_time']);
		$contact=$connection->real_escape_string($_POST['contact']);
		$remarks=$connection->real_escape_string($_POST['remarks']);
		
		
			$stmt=$connection->prepare("SELECT * FROM equipment WHERE id=?;");
			$stmt->bind_param("s",$id);
			$stmt->execute();
			$result=$stmt->get_result();
			if($row=$result->fetch_object()){
				echo "<h3>查询结果：</h3>\n";
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">设备类型</th><th style=\"text-align:center;\">特征值1</th><th style=\"text-align:center;\">特征值2</th><th style=\"text-align:center;\">设备状态</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
				echo "</tbody></table></div>\n";
				if(($row->state)!='可借'){
					echo "<h3>当前设备不可借，请尝试其他设备</h3>\n";
				}else{
					$stmt=$connection->prepare("INSERT INTO records(id,name,stunb,borrow_time,return_time,contact,remarks) VALUES(?,?,?,?,?,?,?);");
					$stmt->bind_param("issssss",$id,$name,$stunb,$borrow_time,$return_time,$contact,$remarks);
					$stmt->execute();
					$stmt=$connection->prepare("UPDATE equipment SET state='待审核' WHERE id=?;");
					$stmt->bind_param("i",$id);
					$stmt->execute();
					echo "<h3>申请成功！等待管理员审核，请保持联系方式畅通.</h3>\n";
				
				}
			}else{
				echo "<h3>查询无结果，请检查您输入的设备ID.</h3>\n";
			}
			$result->close();
			$stmt->close();
			$connection->close();
		}
	?>

<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../footer.html'; ?>
</div>
</body>
</html>
