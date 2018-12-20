<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
<?php include '../../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Fequip%2Fmanage%2Freturn");
		exit();
	}
	if('1'!=($_SESSION['equip'])){
		header("Location: /astro/user/noauth.php");
		exit();
	}
?>
</head>
<body>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php include '../../../header.html'; ?>
		<?php include '../../nav.html'; ?>	
			<div class="jumbotron">
<!-- article -->
	<div>
		<center><h3>已为您列出已借出的设备</h3></center>
	</div>
	<div class="table-responsive"><table  class="table table-hover table-striped" style="text-align:center;"><thead><tr><th style="text-align:center;">No.</th><th style="text-align:center;">ID</th><th style="text-align:center;">设备类型</th><th style="text-align:center;">特征值1</th><th style="text-align:center;">特征值2</th><th style="text-align:center;">借用人</th><th style="text-align:center;">借用人学工号</th><th style="text-align:center;">借出日期</th><th style="text-align:center;">应还日期</th><th style="text-align:center;">联系方式</th><th style="text-align:center;">备注</th></tr></thead><tbody>
<?php	
	require "../../mysqlconnection.php";
	if (mysqli_connect_errno()){
		echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
	}else{
	
	//显示已借出申请
	$result1=$connection->query("SELECT * FROM records WHERE no IN (SELECT MAX(no) FROM records WHERE id IN (SELECT id FROM equipment WHERE state='已借出') GROUP BY id);");
	
	while($row1=$result1->fetch_object()){
		$stmt=$connection->prepare("SELECT * FROM equipment WHERE id=?;");
		$id=$connection->real_escape_string($row1->id);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result2=$stmt->get_result();
		$row2=$result2->fetch_object();
		echo "<tr><td>",$row1->no,"</td><td><a href=\"/astro/equip/detail/index.php?id=",$row1->id,"\" >",$row1->id,"</a></td><td>",$row2->type,"</td><td>",$row2->value1,"</td><td>",$row2->value2,"</td><td>",$row1->name,"</td><td>",$row1->stunb,"</td><td>",$row1->borrow_time,"</td><td>",$row1->return_time,"</td><td>",$row1->contact,"</td><td>",$row1->remarks,"</td><td><a href=\"./return.php?no=",$row1->no,"\" >确认设备已归还</a></td></tr>\n";			
		$result2->close();
	}
	$result1->close();
	$stmt->close();
	$connection->close();
	}
	
?>
		</tbody>
	</table>
	</div>
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../../footer.html'; ?>
</div>
</body>
</html>
