<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
<?php include '../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Fequip%2Fdetail%2Findex.php%3Fid%3D".$_GET['id']);
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
	<p>
	<h3>设备ID:
	<?php
		require "../mysqlconnection.php";
		$id=$connection->real_escape_string($_GET['id']);
		
		echo $id;
	?>
	</h3><br />
	<h3>设备数据:</h3>
	<div class="table-responsive"><table  class="table table-hover table-striped" style="text-align:center;"><thead><tr><th style="text-align:center;">ID</th><th style="text-align:center;">设备类型</th><th style="text-align:center;">特征值1</th><th style="text-align:center;">特征值2</th><th style="text-align:center;">设备状态</th><th style="text-align:center;">备注</th></tr></thead>
		<tbody>
	<?php
	
	$stmt=$connection->prepare("SELECT * FROM equipment WHERE id=?;");
	
	$stmt->bind_param("i",$id);
	$stmt->execute();
	$result=$stmt->get_result();
	$row=$result->fetch_object();
	echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
	$result->close();
	?>
		</tbody>
	</table>
	</div>
	<div>
		<a href="/astro/equip/borrow/index.php?id=<?php echo $id;?>" class="btn btn-info <?php if(!($row->state=="可借"))echo "disabled";?>" role="button"><span class="glyphicon glyphicon-export">&nbsp;申请借用</span></a>
		<?php 
			if('1'==($_SESSION['equip']) && $row->state=="已借出"){
				$stmt=$connection->prepare("SELECT * FROM records WHERE no IN (SELECT MAX(no) FROM records WHERE id=?)");
				$stmt->bind_param("i",$id);
				$stmt->execute();
				$result=$stmt->get_result();
				$row=$result->fetch_object();
				echo "&nbsp;<a href=\"/astro/equip/manage/return/return.php?no=".$row->no."\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-saved\">&nbsp;设备已归还</span></a>";
				$result->close();
				$stmt->close();
			}
			if('1'==($_SESSION['equip'])){
				$stmt=$connection->prepare("SELECT * FROM equipment WHERE id=?");
				$stmt->bind_param("i",$id);
				$stmt->execute();
				$result=$stmt->get_result();
				$row=$result->fetch_object();
				echo "&nbsp;<a href=\"/astro/equip/manage/update/index.php?id=".$id."&type=".$row->type."&value1=".$row->value1."&value2=".$row->value2."&state=".$row->state."&remarks=".$row->remarks."\" class=\"btn btn-warning\" role=\"button\"><span class=\"glyphicon glyphicon-refresh\">&nbsp;更新设备数据</span></a>";
				echo "&nbsp;<a href=\"/astro/equip/manage/delete/confirm.php?id=".$id."\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-remove\">&nbsp;删除设备</span></a>";
				$result->close();
				$stmt->close();
			}
		?>
	</div>
	<p>
	<h3>设备描述</h3>
	<img src="./pic/<?php echo $id;?>.jpg" class="img-responsive" alt="设备图片"/>
	<?php include "./discribe/$id.html";?>
	<p>
	<h3>变更记录</h3>
	<?php
	$stmt=$connection->prepare("SELECT * FROM records WHERE id=? ORDER BY no DESC;");
	$stmt->bind_param("i",$id);
	$stmt->execute();
	$result=$stmt->get_result();
			echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">No.</th><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">借用人</th><th style=\"text-align:center;\">借出日期</th><th style=\"text-align:center;\">应还日期</th><th style=\"text-align:center;\">联系方式</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
			while($row=$result->fetch_object()){
					
				echo "<tr><td>",$row->no,"</td><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->name,"</td><td>",$row->borrow_time,"</td><td>",$row->return_time,"</td><td>",$row->contact,"</td><td>",$row->remarks,"</td></tr>\n";
					
			}
			echo "</tbody></table></div>\n";
			$result->close();
			$stmt->close();
			$connection->close();
	?>
	<p>
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../footer.html'; ?>
</div>
</body>
</html>
