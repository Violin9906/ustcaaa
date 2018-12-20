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
				
	<center><h3>中国科学技术大学天文爱好者协会<br />成员注册</h3><br /></center>
	<center><p style="color:#ff0000">学号为2个字母加8位数字，字母请用大写！</p></center>
	<form name="emailform" action="./mail.php" onsubmit="return checkemail();" method="POST" class="form-horizontal" role="form">
		<div class="form-group">
			<label for="stunb" class="col-sm-3 control-label">您的科大邮箱地址</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="mail" name="mail" required="required"/><button formaction="./mail.php" class="btn btn-success"><span class="glyphicon glyphicon-envelope">&nbsp;发送验证邮件</span></button>
			</div>
		</div>
	</form>
	
	<script src="/astro/md5.js"></script>
	<script>
		function checkemail(){
			var x=document.forms["emailform"]["mail"].value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
				alert("不是一个有效的 e-mail 地址");
				return false;
			}else{
				return true;
			}
		}
	</script>
	
	<script>
		window.onload=function(){
			alert("各位同学我求求你们记清楚自己的密码呀，忘记密码我这里处理起来很麻烦的。为了安全考虑我这里存的是你们的密码和学号一起进行复杂的不可逆HASH运算以后的值，你们的密码只有你们自己知道呀～忘了密码不要来问我呀～我除了重置也没别的办法呀～");
		}
		function checkinput(){
			var input_pwd = document.getElementById('raw-password').value;
			var md5_pwd=md5(input_pwd);
			document.getElementById('md5-password').value = md5_pwd.toUpperCase();
			return true;
		}
	</script>
	<form action="./checksignin.php" method="POST" class="form-horizontal" role="form">
		<div class="form-group">
			<label for="stunb" class="col-sm-3 control-label">您的学号/工号</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="stunb" name="stunb" required="required"/>
			</div>
		</div>
		<div class="form-group">
			<label for="verifycode" class="col-sm-3 control-label">邮箱验证码</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="verifycode" name="verifycode" required="required"/>
			</div>
		</div>
		<div class="form-group">
			<label for="username" class="col-sm-3 control-label">您的姓名</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="username" name="username" required="required"/>
			</div>
		</div>
		<div class="form-group">
			<label for="raw-password" class="col-sm-3 control-label">设置密码</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="raw-password" required="required"/>
				<input type="hidden" id="md5-password" name="password" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-9">
				 <button onClick="return checkinput()" class="btn btn-info"><span class="glyphicon glyphicon-user">&nbsp;注册</span></button>
			</div>
		</div>
	</form>
	
			</div>
		</div>
	</div>
	<?php include '../footer.html'; ?>
</div>
</body>
</html>
