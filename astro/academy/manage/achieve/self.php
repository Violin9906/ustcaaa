<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--学术部</title>
<?php include '../../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Facademy%2Fmanage%2Fachieve");
		exit();
	}
	if('1'!=($_SESSION['academy'])){
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
<h3>公平起见，不允许自己管理自己的成就系统！</h3>
<p><a href="./index.php"><span class="glyphicon glyphicon-cog">&nbsp;返回管理页面</span></a></p>
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../../footer.html'; ?>
</div>
</body>
</html>