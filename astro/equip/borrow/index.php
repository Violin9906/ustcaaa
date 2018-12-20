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
<div class="panel panel-info">
	<div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-compressed">&nbsp;设备使用申请表</span></h3></div>
	<div class="panel-body">
	<form action="./borrow.php" method="POST" class="form-horizontal" role="form">
		<div class="form-group"><label for="id" class="col-sm-2 control-label">申请设备ID</label><div class="col-sm-10"><input type="number" name="id" id="id" min="1" step="1" required="required" class="form-control" value="<?php if(is_numeric($_GET['id']))echo $_GET['id'];?>"/></div></div>
		<div class="form-group"><label for="name" class="col-sm-2 control-label">姓名</label><div class="col-sm-10"><input type="text" name="name" id="name" required="required" readonly="readonly" class="form-control" value="<?php echo $_SESSION['name']; ?>" /></div></div>
		<div class="form-group"><label for="stunb" class="col-sm-2 control-label">学号/工号</label><div class="col-sm-10"><input type="text" name="stunb" id="stunb" required="required" readonly="readonly" class="form-control" value="<?php echo $_SESSION['stunb']; ?>"/></div></div>
		<div class="form-group"><label for="return_time" class="col-sm-2 control-label">归还日期</label><div class="col-sm-10"><input type="date" name="return_time" id="return_time" required="required" class="form-control"/></div></div>
		<div class="form-group"><label for="contact" class="col-sm-2 control-label">联系方式</label><div class="col-sm-10"><input type="text" name="contact" id="contact" required="required" class="form-control"/></div></div>
		<div class="form-group"><label for="remarks" class="col-sm-2 control-label">申请理由及备注</label><div class="col-sm-10"><input type="text" name="remarks" id="remarks" class="form-control"/></div></div>
		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-ok-circle">&nbsp;提交申请</span></button></div>
	</form>
	</div>
</div>
<div class="row clearfix">
<div class="col-md-12">
<div class="table-responsive"><table  class="table table-hover table-striped" style="text-align:center;"><thead><tr><th style="text-align:center;">ID</th><th style="text-align:center;">设备类型</th><th style="text-align:center;">特征值1</th><th style="text-align:center;">特征值2</th><th style="text-align:center;">设备状态</th><th style="text-align:center;">备注</th></tr></thead>
		<tbody>
<?php	
	require "../mysqlconnection.php";
	if (mysqli_connect_errno()){
		echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
	}else{
	
	//显示所有设备
	$result=$connection->query("SELECT * FROM equipment ORDER BY id DESC;");
	while($row=$result->fetch_object()){
		echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
	}
	$result->close();
	}
	
?>
		</tbody>
	</table>
	</div>
</div>
</div>
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../footer.html'; ?>
</div>
</body>
</html>
