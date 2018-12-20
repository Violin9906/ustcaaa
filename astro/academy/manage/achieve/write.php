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
	/*允许自己管理自己成就，这段改掉
	if('1'!=($_SESSION['academy'])){
		header("Location: /astro/user/noauth.php");
		exit();
	}
	*/
	if(('1'!=($_SESSION['academy'])) && $_GET['stunb']!=$_SESSION['stunb']){
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
	$stunb=$_GET['stunb'];
	$achieveName=$_GET['achieve'];
	$action=$_GET['action'];
	
	/*
	if($stunb==$_SESSION['stunb']){
		header("Location: ./self.php");		//不允许自己给自己管理成就//现在允许了
		exit();
	}
	*/
	if(!(file_exists("/var/www/html/astro/user/achieve/".$stunb.".json"))){
		header("Location: ./nothis.php");
		exit();
	}
	
	
	$json_achieve=file_get_contents("/var/www/html/astro/user/achieve/".$stunb.".json");
	$achieve=json_decode($json_achieve,true);
	if($action=='enable'){
		$achieve[$achieveName]="1";
		echo "done.1".$achieveName;
	}else if($action=='disable'){
		$achieve[$achieveName]="0";
		echo "done.0".$achieveName;
	}else{
		echo "非法操作！";
	}
	$json_achieve=json_encode($achieve);
	file_put_contents("/var/www/html/astro/user/achieve/".$stunb.".json",$json_achieve,LOCK_EX);
	header("Location: ./manage.php?stunb=".$stunb);
?>

<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../../footer.html'; ?>
</div>
</body>
</html>