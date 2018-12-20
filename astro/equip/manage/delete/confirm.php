<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
<?php include '../../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Fequip%2Fmanage%2Fdelete");
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
		<center><h3><span style="color:#ff0000">即将删除下列设备！此操作不可逆！请确认！</span></h3></center>
	</div>
	<div class="table-responsive">
				<table  class="table table-hover table-striped" style="text-align:center;">
					<thead><tr><th style="text-align:center;">ID</th><th style="text-align:center;">设备类型</th><th style="text-align:center;">特征值1</th><th style="text-align:center;">特征值2</th><th style="text-align:center;">设备状态</th><th style="text-align:center;">备注</th></tr></thead>
		<tbody>
<?php	
	require "../../mysqlconnection.php";
	if (mysqli_connect_errno()){
		echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
	}else{
	
	//显示待删除设备
	$id=$connection->real_escape_string($_GET['id']);
	$stmt=$connection->prepare("SELECT * FROM equipment WHERE id=?;");
	$stmt->bind_param("i",$id);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row=$result->fetch_object()){
		echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
	}
	$result->close();
	$stmt->close();
	$connection->close();
	}
	$deleteid=$id;
	
?>
	</tbody>
	</table>
	</div>
	<p>
	
	<form action="./delete.php" method="POST" class="form-horizontal" role="form">
		<div class="form-group"><label for="deleteid" class="col-sm-2 control-label">设备ID</label><div class="col-sm-10"><input type="number" name="deleteid" id="deleteid" readOnly="true" value="<?php echo $deleteid;?>" /></div></div>
		<div class="form-group"><div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-danger">确认删除此设备</button></div></div>
	</form>	
	
<?php include '../../type_list.html'; ?>
<?php include '../../state_list.html'; ?>
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../../footer.html'; ?>
</div>
</body>
</html>
