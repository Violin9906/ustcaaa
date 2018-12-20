<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会</title>
<?php include '../publichead.html'; ?>
</head>
<body>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php include '../header.html'; ?>
		<?php include '../nav.html'; ?>	
			<div class="jumbotron">
				<p>
				
	<script src="/astro/md5.js"></script>
	<script>
		function checkinput(){
			var input_pwd = document.getElementById('raw-password').value;
			var md5_pwd=md5(input_pwd);
			document.getElementById('md5-password').value = md5_pwd.toUpperCase();
			return true;
		}
	</script>
	
	<form action="./checklogin.php?nextdo=<?php if($_GET['nextdo']){echo $_GET['nextdo'];}else{echo "%2Fastro%2Fuser";}?>" method="POST" class="form-horizontal" role="form">
	<center><h3>中国科学技术大学天文爱好者协会<br />身份认证系统</h3><br /></center>
		<div class="form-group">
			<label for="stunb" class="col-sm-2 control-label">您的学号/工号</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="stunb" name="stunb"/>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-2 control-label">密码</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="raw-password"/>
				<input type="hidden" id="md5-password" name="password" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				 <button type="submit" onClick="return checkinput()" class="btn btn-info"><span class="glyphicon glyphicon-log-in">&nbsp;登录</span></button>&nbsp;<button formaction="../signin" class="btn btn-default"><span class="glyphicon glyphicon-user">&nbsp;注册</span></button>
			</div>
		</div>
	</form>
			</div>
		</div>
	</div>
	<?php include '../footer.html'; ?>
</div>
<?php
	if($_GET['state']=='failed'){
		echo '<script>window.onload=function(){alert("学号或密码错误，请重试. 如果遇到问题请联系管理员");}</script>';
	}
?>
</body>
</html>
