<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
<?php include '../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Fequip%2Fmanage");
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
		<?php include '../../header.html'; ?>
		<?php include '../nav.html'; ?>	
			<div class="jumbotron">
<!-- article -->
<?php
	echo "<center>欢迎，".$_SESSION['name']."<br /></center>\n";

?>
	<div class="row clearfix" style="text-align:center;color:#fff;font-size:16px">
		<div class="col-md-offset-3 col-md-6 column">
		<ul class="list-unstyled">
			<li><a class="btn btn-primary btn-block" href="./insert">添加新设备</a></li>
			<li><a class="btn btn-primary btn-block" href="./delete">删除设备</a></li>
			<li><a class="btn btn-primary btn-block" href="./update">更新设备数据</a></li>
			<li><a class="btn btn-primary btn-block" href="./audit">审核借用申请</a></li>
			<li><a class="btn btn-primary btn-block" href="./return">确认设备归还</a></li>
		</ul>
		</div>
	<div>
	
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../footer.html'; ?>
</div>
</body>
</html>
