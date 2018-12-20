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
				<p>
				<center><h3>观测成就管理系统</h3></center>
				</p>
				<form action="./manage.php" method="GET" class="form-horizontal" role="form">
					<div class="form-group">
						<label for="stunb" class="col-sm-2 control-label">学号/工号</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="stunb" name="stunb"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-cog">&nbsp;管理</span></button>
						</div>
					</div>
				</form>
				
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../../footer.html'; ?>
</div>
</body>
</html>
