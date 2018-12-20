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
<?php
	$connection=new mysqli("localhost","astro","CaO+CO2=CaCO3","user");
	if (mysqli_connect_errno()){
		echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
	}else{
		$stunb=$_GET['stunb'];
		$action=$_GET['action'];
		$stmt=$connection->prepare("SELECT * FROM user WHERE stunb=?;");
		$stmt->bind_param("s",$stunb);
		$stmt->execute();
		$result=$stmt->get_result();
		if(!($result->fetch_object())){
			echo "没有此人的注册数据！";
		}else if($action=='up'){
			echo "up";
			$stmt2=$connection->prepare("UPDATE user SET vip=vip+1 where stunb=?;");
			$stmt2->bind_param("s",$stunb);
			$stmt2->execute();
			header("Location: /astro/finance/manage/vip/index.php");
			exit();
		}else if($action=='down'){
			echo "down";
			$stmt2=$connection->prepare("UPDATE user SET vip=vip-1 where stunb=?;");
			$stmt2->bind_param("s",$stunb);
			$stmt2->execute();
			header("Location: /astro/finance/manage/vip/index.php");
			exit();
		}else{
			echo "无效操作！";
		}
	}
?>
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../../footer.html'; ?>
</div>
</body>
</html>
