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
				<?php
		session_start();
		$connection=new mysqli("localhost","****","****","user");
		$connection->set_charset("utf8");
		
		$stunb=$connection->real_escape_string($_POST['stunb']);
		$name=$connection->real_escape_string($_POST['username']);
		$password=$connection->real_escape_string($_POST['password']);
		/*防止SQL注入攻击*/
		
		
		
		$password=strtoupper(md5($stunb.'#USTC!_!AAA#'.$password));
		/*use md5(username#USTC!_!AAA#md5(password)) as the code, for safety*/
		
		$sendcode=$_SESSION['verifycode'];
		$inputcode=$_POST['verifycode'];
		
		if (mysqli_connect_errno()){
			echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
		}else{
			$stmt=$connection->prepare("SELECT name FROM user WHERE stunb=?;");
			$stmt->bind_param("s",$stunb);
			$stmt->execute();
			$result=$stmt->get_result();
			if ($stunb=='' or $name=='' or !($inputcode)){
				echo "请填写所有项目";
			}else if($result->fetch_object()){
				echo "您已注册！";
			}else if($sendcode != $inputcode){
				echo "验证码错误！请重试！";
			}else{
				$stmt=$connection->prepare("INSERT INTO user(stunb,name,password,equip,academy,public,finance) VALUES(?,?,?,'0','0','0','0');");
				$stmt->bind_param("sss",$stunb,$name,$password);
				$stmt->execute();
				$achieve=array(
					//入门成就
					"firstISS"=>"0",
					"firstIridium"=>"0",
					"darkSatellite"=>"0",
					"summerGalaxy"=>"0",
					"winterGalaxy"=>"0",
					"firstDeepSky"=>"0",
					"moreDeepSky"=>"0",
					"twoPlanet"=>"0",
					"firstFireball"=>"0",
					"firstShower"=>"0",
					"tenConstellation"=>"0",
					"blinkBlink"=>"0",
					"fuckLaw"=>"0",
					
					//初阶成就
					"moreISS"=>"0",
					"moreIridium"=>"0",
					"birdgeDeepSky"=>"0",
					"darkDeepSky"=>"0",
					"fourGalileo"=>"0",
					"findMercury"=>"0",
					"doubleStar"=>"0",
					"standardShower"=>"0",
					"allZodiac"=>"0",
					"allNorthSky"=>"0",
					"firstPlan"=>"0",
					"iAmChinese"=>"0",
					"sunSpot"=>"0",
					"sunProjection"=>"0",
					"variableStar"=>"0",
					"stayUp"=>"0",
					"darkCircle"=>"0",
					"badLuck"=>"0",
					"findUranus"=>"0",
					"findNeptune"=>"0",
					"fivePlanet"=>"0",
					"findAsteroid"=>"0",
					"freezingCold"=>"0",
					
					//进阶成就
					"fiveISS"=>"0",
					"fiveIridium"=>"0",
					"findNOSS"=>"0",
					"deeperSky"=>"0",
					"brainSupplement"=>"0",
					"tenDoubleStar"=>"0",
					"synchronousSatellite"=>"0",
					"tourMoon"=>"0",
					"threeShower"=>"0",
					"threeVariableStar"=>"0",
					"iamHere"=>"0",
					"skyPalace"=>"0",
					"holyBeast"=>"0",
					"longMarch"=>"0",
					"standardSpot"=>"0",
					"listenShower"=>"0",
					"findComet"=>"0",
					"findEclipse"=>"0",
					"findOccultation"=>"0",
					"findZodiacalLight"=>"0",
					
					//高阶成就
					"marathonISS"=>"0",
					"marathonMessier"=>"0",
					"newComet"=>"0",
					"fiveShower"=>"0",
					"fullSky"=>"0",
					"fullAstrism"=>"0",
					"darkComet"=>"0",
					"iAmRich"=>"0",
					"bigLandlord"=>"0",
					"moonTwinkle"=>"0",
					"iAmBack"=>"0",
					
					//神级成就
					"thousandDeepSky"=>"0",
					"fiveEclipse"=>"0",
					"findAxis"=>"0",
					
					//诸神的黄昏
					"loneStarchaser"=>"0",
					"newShower"=>"0",
					"nameMemorial"=>"0"
				);
				$json_achieve=json_encode($achieve);
				file_put_contents("/var/www/html/astro/user/achieve/".$stunb.".json",$json_achieve,LOCK_EX);
				
				echo "注册成功！如忘记密码或需要申请管理员权限，请联系系统管理员.";
			}
			$result->close();
			$stmt->close();
		}
		$connection->close();
?>
			</div>
		</div>
	</div>
	<?php include '../footer.html'; ?>
</div>
</body>
</html>
