<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--财务部</title>
<?php include '../../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Ffinance%2Fmanage%2Fvip");
		exit();
	}
	if('1'!=($_SESSION['finance'])){
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
<center><h2>会员VIP等级管理系统</h2></center>
<center><p>管理员请注意，为区分已经审核没交过会费的人和注册后尚未审核的人，经审核没交过会费的VIP等级设置为-1。</p></center>
<div class="table-responsive">
	<table  class="table table-hover table-striped" style="text-align:center;">
		<thead><tr><th style="text-align:center;">学号</th><th style="text-align:center;">姓名</th><th style="text-align:center;">VIP等级</th><th style="text-align:center;">操作1</th><th style="text-align:center;">操作2</th></tr></thead>
		<tbody>
<?php
	$connection=new mysqli("localhost","astro","CaO+CO2=CaCO3","user");
	if (mysqli_connect_errno()){
		echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
	}else{
	
	//显示所有成员
	$result=$connection->query("SELECT * FROM user ORDER BY vip;");
	while($row=$result->fetch_object()){
		echo "<tr><td>".$row->stunb."</td><td>".$row->name."</td><td>".$row->vip."</td><td><a href=\"./write.php?stunb=".$row->stunb."&action=up\">提升VIP等级</a></td><td><a href=\"./write.php?stunb=".$row->stunb."&action=down\">降低VIP等级</a></td></tr>\n";
	}
	$result->close();
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
