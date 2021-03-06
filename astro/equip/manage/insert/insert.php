<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
<?php include '../../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Fequip%2Fmanage%2Finsert");
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
		<center><h3>插入数据成功！不要刷新此页面，否则将重复添加ID不同的一个设备</h3></center>
	</div>
	<div class="table-responsive"><table  class="table table-hover table-striped" style="text-align:center;"><thead><tr><th style="text-align:center;">ID</th><th style="text-align:center;">设备类型</th><th style="text-align:center;">特征值1</th><th style="text-align:center;">特征值2</th><th style="text-align:center;">设备状态</th><th style="text-align:center;">备注</th></tr></thead>
		<tbody>
<?php	
	require "../../mysqlconnection.php";
	if (mysqli_connect_errno()){
		echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
	}else{
	
	$type=$connection->real_escape_string($_POST['type']);
	$value1=$connection->real_escape_string($_POST['value1']);
	$value2=$connection->real_escape_string($_POST['value2']);
	$state=$connection->real_escape_string($_POST['state']);
	$remarks=$connection->real_escape_string($_POST['remarks']);
	
	$stmt=$connection->prepare("INSERT INTO equipment(type,value1,value2,state,remarks) VALUES(?,?,?,?,?);");
	$stmt->bind_param("sssss",$type,$value1,$value2,$state,$remarks);
	$stmt->execute();
	
	//显示所有设备
	$result=$connection->query("SELECT * FROM equipment ORDER BY id DESC;");
	while($row=$result->fetch_object()){
		echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
	}
	$result->close();
	$stmt->close();
	$connection->close();
	}
	
?>
		</tbody>
	</table></div>
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
