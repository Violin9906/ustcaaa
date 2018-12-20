<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会</title>
<?php include '../publichead.html'; ?>
</head>
<body>
<!-- 20180828 update -->

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php include '../header.html'; ?>
		<?php include '../nav.html'; ?>	
			<div class="jumbotron">
				<?php
		session_start();
		$connection=new mysqli("localhost","****","****","user");
		$connection->set_charset("utf8");
		
		$stunb=$connection->real_escape_string($_POST['stunb']);
		$password=$connection->real_escape_string($_POST['password']);
		/*防止SQL注入攻击*/
		
		$password=strtoupper(md5($stunb.'#USTC!_!AAA#'.$password));
		/*use md5(username#USTC!_!AAA#md5(password)) as the code, for safety*/
		
		if (mysqli_connect_errno()){
			echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
		}else{
			$stmt=$connection->prepare("SELECT * FROM user WHERE password=? AND stunb=? ;");
			$stmt->bind_param("ss",$password,$stunb);
			$stmt->execute();
			$result=$stmt->get_result();
			if($row=$result->fetch_object()){
				$_SESSION['stunb']=$stunb;
				$_SESSION['name']=$row->name;
				$_SESSION['equip']=$row->equip;
				$_SESSION['academy']=$row->academy;
				$_SESSION['public']=$row->public;
				$_SESSION['finance']=$row->finance;
				$_SESSION['vip']=$row->vip;
				echo "登录成功！您好，".$row->name."，现在可以返回。如果被再次重定向到登录界面，请检查您是否有相应部门的管理员权限.<br />";
				echo "您拥有以下部门的管理员权限：";
				if ($_SESSION['equip']=='1'){ echo " 装备部 ";}
				if ($_SESSION['academy']=='1'){ echo " 学术部 ";}
				if ($_SESSION['public']=='1'){ echo " 宣传部 ";}
				if ($_SESSION['finance']=='1'){ echo " 财务部 ";}
			}else{
				echo "学工号或密码错误！请重试！";
				header("Location: /astro/user/login.php?state=failed");
				$result->close();
				$stmt->close();
				$connection->close();
				exit();
			}
			$result->close();
			$stmt->close();
		}
		$connection->close();
		
		$nexturl=$_GET['nextdo'];
		header("Location: ".$nexturl);
?>
			</div>
		</div>
	</div>
	<?php include '../footer.html'; ?>
</div>
</body>
</html>
