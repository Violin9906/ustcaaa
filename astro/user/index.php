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
<!-- article -->
<?php 
	session_start();
	
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php");
	}
?>
	
<h3>欢迎您<?php if($_SESSION['vip']==-2){echo "(并不)";}?>，<?php echo $_SESSION['name'];?></h3><a href="./logout.php" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-log-out">&nbsp;登出</span></a>
<?php 
	if($_SESSION['vip']==-2){
		echo "<p>您已经被加入天文协会<strong>黑名单</strong>。</p>\n";
	}
	if($_SESSION['vip']<1){
		echo "<p>您还不是正式会员，欢迎扫码支付20元会费成为正式会员，享受更多权益。支付后请联系财务部负责人修改您的会员等级(财务部主页有部长联系方式，也可以在天文协会QQ群私聊财务部长）。</p>\n";
		if($_SESSION['vip']==0){
			echo "<p>如果您已经交过会费，请联系财务部确认您的会员身份</p>\n";
		}
		echo "<img src=\"/astro/pic/wechatqrcode.png\" class=\"img-responsive\" alt=\"微信付款码\" /><img src=\"/astro/pic/alipayqrcode.jpg\" class=\"img-responsive\" alt=\"支付宝付款码\" />\n";
	}
	if($_SESSION['vip']==1){
		echo "<p>您现在是天文协会<span style=\"color:#a67d3d\">青铜会员</span></p>\n";
	}
	if($_SESSION['vip']==2){
		echo "<p>您现在是天文协会<span style=\"color:#7093db\">白银会员</span></p>\n";
	}
	if($_SESSION['vip']==3){
		echo "<p>您现在是天文协会<span style=\"color:#d9d919\">黄金会员</span></p>\n";
	}
	if($_SESSION['vip']==4){
		echo "<p>您现在是天文协会<span style=\"color:#8f8f8d\">铂金会员</span></p>\n";
	}
	if($_SESSION['vip']==5){
		echo "<p>您现在是天文协会<span style=\"color:#66ccff\">钻石会员</span></p>\n";
	}
	if($_SESSION['vip']==6){
		echo "<p>您现在是天文协会<span style=\"color:#6666cc\">史诗级会员</span></p>\n";
	}
	if($_SESSION['vip']==7){
		echo "<p>您现在是天文协会<span style=\"color:#ff9900\">传说级会员</span></p>\n";
	}
	if($_SESSION['vip']>=8){
		echo "<p>您现在是天文协会<span style=\"color:#7fff00\">吉祥物</span></p>\n";
	}
?>
<p>
<?php 
	if($_SESSION['equip']=='1' || $_SESSION['academy']=='1' || $_SESSION['public']=='1' || $_SESSION['finance']=='1'){echo "您具有以下部门的管理员权限：";}
	if ($_SESSION['equip']=='1'){ echo " 装备部 ";}
	if ($_SESSION['academy']=='1'){ echo " 学术部 ";}
	if ($_SESSION['public']=='1'){ echo " 宣传部 ";}
	if ($_SESSION['finance']=='1'){ echo " 财务部 ";}
?>
</p>

<hr />
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">您的观测成就<a href="/astro/academy/manage/achieve/manage.php?stunb=<?php echo $_SESSION['stunb'];?>"><span class="glyphicon glyphicon-cog" style="float:right;">&nbsp;管理</span></a></h3>
    </div>
    <div class="panel-body">
		<div class="table-responsive">
			<table class="table table-hover table-striped" style="text-align:center">
				<thead>
					<tr><th style="text-align:center">成就</th><th style="text-align:center">简介</th><th style="text-align:center">达成情况</th></tr>
				</thead>
				<tbody>
					<tr><td style="text-align:center">第一次ISS</td><td style="text-align:center">第一次有计划地观测ISS过境</td><td style="text-align:center"><span id="firstISS"></span></td></tr>
					<tr><td style="text-align:center">第一次铱闪</td><td style="text-align:center">第一次有计划地观测铱闪</td><td style="text-align:center"><span id="firstIridium"></span></td></tr>
					<tr><td style="text-align:center">降低了亮度我还是看得到你</td><td style="text-align:center">第一次有计划性地观测亮度暗于2等的人卫</td><td style="text-align:center"><span id="darkSatellite"></span></td></tr>
					<tr><td style="text-align:center">第二基地</td><td style="text-align:center">第一次在野外看到夏季银河</td><td style="text-align:center"><span id="summerGalaxy"></span></td></tr>
					<tr><td style="text-align:center">冰冷的河流</td><td style="text-align:center">第一次在野外看到冬季银河</td><td style="text-align:center"><span id="winterGalaxy"></span></td></tr>
					<tr><td style="text-align:center">这也叫深空？</td><td style="text-align:center">第一次目视M31或双星团或其他可目视观测的深空天体（目视特指naked eyes）</td><td style="text-align:center"><span id="firstDeepSky"></span></td></tr>
					<tr><td style="text-align:center">向着更深的天空</td><td style="text-align:center">一晚上观测到5个以上深空天体并能说出它们的大概样子和确切编号</td><td style="text-align:center"><span id="moreDeepSky"></span></td></tr>
					<tr><td style="text-align:center">会动的星星</td><td style="text-align:center">一晚上看到两颗以上大行星（地球不算）</td><td style="text-align:center"><span id="twoPlanet"></span></td></tr>
					<tr><td style="text-align:center">大火球</td><td style="text-align:center">第一次看到火流星</td><td style="text-align:center"><span id="firstFireball"></span></td></tr>
					<tr><td style="text-align:center">Take a shower</td><td style="text-align:center">第一次观测流星雨（辨认出两颗群内即可算入成就）</td><td style="text-align:center"><span id="firstShower"></span></td></tr>
					<tr><td style="text-align:center">星座是什么，能吃吗</td><td style="text-align:center">能正确认出10个以上星座（无星图辅助）</td><td style="text-align:center"><span id="tenConstellation"></span></td></tr>
					<tr><td style="text-align:center">一闪一闪亮晶晶</td><td style="text-align:center">能辨认并叫出冬季大三角，夏季大三角，春季大三角，春季大弧线，冬季大钻石中任意5颗星的名字</td><td style="text-align:center"><span id="blinkBlink"></span></td></tr>
					<tr><td style="text-align:center">开光定律</td><td style="text-align:center">遭遇到一次观测计划因天气原因失败</td><td style="text-align:center"><span id="fuckLaw"></span></td></tr>
					
					<tr><td style="text-align:center">追逐ISS</td><td style="text-align:center">一周内观测3次或以上ISS过境</td><td style="text-align:center"><span id="moreISS"></span></td></tr>
					<tr><td style="text-align:center">铱闪是很多的</td><td style="text-align:center">一周内观测到3次或以上铱闪</td><td style="text-align:center"><span id="moreIridium"></span></td></tr>
					<tr><td style="text-align:center">星空之桥</td><td style="text-align:center">一晚上观测20个或以上深空天体并能说出大概样子和确切编号（使用星桥法）</td><td style="text-align:center"><span id="birdgeDeepSky"></span></td></tr>
					<tr><td style="text-align:center">镜中薄云</td><td style="text-align:center">第一次自主调节一部单筒的望远镜，并将一个裸眼不可见的深空调到视场中央</td><td style="text-align:center"><span id="darkDeepSky"></span></td></tr>
					<tr><td style="text-align:center">伽利略的亡灵</td><td style="text-align:center">看全四颗伽利略卫星并能对应出它们的名字</td><td style="text-align:center"><span id="fourGalileo"></span></td></tr>
					<tr><td style="text-align:center">寻找墨丘利</td><td style="text-align:center">看到水星</td><td style="text-align:center"><span id="findMercury"></span></td></tr>
					<tr><td style="text-align:center">烧！</td><td style="text-align:center">看到2对双星</td><td style="text-align:center"><span id="doubleStar"></span></td></tr>
					<tr><td style="text-align:center">标观新手</td><td style="text-align:center">第一次作流星雨标观，并向IMO上传报表</td><td style="text-align:center"><span id="standardShower"></span></td></tr>
					<tr><td style="text-align:center">黄金圣衣</td><td style="text-align:center">看尽12个黄道星宫代表的星座，认全13个黄道星座</td><td style="text-align:center"><span id="allZodiac"></span></td></tr>
					<tr><td style="text-align:center">这点星座不算什么</td><td style="text-align:center">能正确辨认出北天全部星座</td><td style="text-align:center"><span id="allNorthSky"></span></td></tr>
					<tr><td style="text-align:center">我早就料到了</td><td style="text-align:center">制定一份整夜的观测计划并成功贯彻实行了它</td><td style="text-align:center"><span id="firstPlan"></span></td></tr>
					<tr><td style="text-align:center">我是中国人</td><td style="text-align:center">能正确辨认出10个或以上中国星官</td><td style="text-align:center"><span id="iAmChinese"></span></td></tr>
					<tr><td style="text-align:center">潜藏在光辉下的暗影</td><td style="text-align:center">通过望远镜观测太阳黑子</td><td style="text-align:center"><span id="sunSpot"></span></td></tr>
					<tr><td style="text-align:center">出现在暗影里的光芒</td><td style="text-align:center">利用投影法观测太阳</td><td style="text-align:center"><span id="sunProjection"></span></td></tr>
					<tr><td style="text-align:center">星光变</td><td style="text-align:center">观测一次（一晚）变星，并向AAVSO上传数据</td><td style="text-align:center"><span id="variableStar"></span></td></tr>
					<tr><td style="text-align:center">黑眼圈</td><td style="text-align:center">一晚上观测观测时间累计超过8小时</td><td style="text-align:center"><span id="stayUp"></span></td></tr>
					<tr><td style="text-align:center">真.黑眼圈</td><td style="text-align:center">因为观测原因第二天产生黑眼圈</td><td style="text-align:center"><span id="darkCircle"></span></td></tr>
					<tr><td style="text-align:center">教主威武</td><td style="text-align:center">五次因天气原因观测失败</td><td style="text-align:center"><span id="badLuck"></span></td></tr>
					<tr><td style="text-align:center">黯淡的天神</td><td style="text-align:center">观测到天王星</td><td style="text-align:center"><span id="findUranus"></span></td></tr>
					<tr><td style="text-align:center">遥远的兄弟</td><td style="text-align:center">观测到海王星</td><td style="text-align:center"><span id="findNeptune"></span></td></tr>
					<tr><td style="text-align:center">五星物语</td><td style="text-align:center">同一晚上观测到水金火木土五个行星</td><td style="text-align:center"><span id="fivePlanet"></span></td></tr>
					<tr><td style="text-align:center">小弟兄</td><td style="text-align:center">观测到小行星</td><td style="text-align:center"><span id="findAsteroid"></span></td></tr>
					<tr><td style="text-align:center">冻住，不许走</td><td style="text-align:center">在气温低于0摄氏度时在户外观测一晚</td><td style="text-align:center"><span id="freezingCold"></span></td></tr>
					
					<tr><td style="text-align:center">ISS狂</td><td style="text-align:center">一周内观测到5次或以上ISS过境 </td><td style="text-align:center"><span id="fiveISS"></span></td></tr>
					<tr><td style="text-align:center">铱闪是很多很多的</td><td style="text-align:center">一周内观测到5次或以上铱闪</td><td style="text-align:center"><span id="fiveIridium"></span></td></tr>
					<tr><td style="text-align:center">风声</td><td style="text-align:center">观测一次NOSS编组飞行</td><td style="text-align:center"><span id="findNOSS"></span></td></tr>
					<tr><td style="text-align:center">深空，更多的深空</td><td style="text-align:center">一晚上观测到50个或以上的深空天体并能说出编号和大概样子</td><td style="text-align:center"><span id="deeperSky"></span></td></tr>
					<tr><td style="text-align:center">镜子的用处</td><td style="text-align:center">通过望远镜观测到9等或更暗的目标  </td><td style="text-align:center"><span id="brainSupplement"></span></td></tr>
					<tr><td style="text-align:center">火焰魔法师</td><td style="text-align:center">观测到10对双星 </td><td style="text-align:center"><span id="tenDoubleStar"></span></td></tr>
					<tr><td style="text-align:center">123木头人</td><td style="text-align:center">观测到地球同步卫星（必须有一定的观测时间以说明它与恒星的区别）</td><td style="text-align:center"><span id="synchronousSatellite"></span></td></tr>
					<tr><td style="text-align:center">月面旅行</td><td style="text-align:center">能正确辨认出月面的地形5种以上（至少包括两座环形山，观测时不能借助月面图）</td><td style="text-align:center"><span id="tourMoon"></span></td></tr>
					<tr><td style="text-align:center">数流星达人</td><td style="text-align:center">作3次流星雨标观，并向IMO上传报表</td><td style="text-align:center"><span id="threeShower"></span></td></tr>
					<tr><td style="text-align:center">星光变变变</td><td style="text-align:center">作3次（3晚）变星观测，并向AAVSO上传报表</td><td style="text-align:center"><span id="threeVariableStar"></span></td></tr>
					<tr><td style="text-align:center">星之归处</td><td style="text-align:center">认出在合肥（或你的常用观测地）可见的所有星座 </td><td style="text-align:center"><span id="iamHere"></span></td></tr>
					<tr><td style="text-align:center">天上的宫殿</td><td style="text-align:center">能正确认出三垣中任意一垣的所有星官</td><td style="text-align:center"><span id="skyPalace"></span></td></tr>
					<tr><td style="text-align:center">四圣兽</td><td style="text-align:center">能正确认出四象中任意一象的所有星官</td><td style="text-align:center"><span id="holyBeast"></span></td></tr>
					<tr><td style="text-align:center">远征</td><td style="text-align:center">为了观测专程跑到一个遥远的地方（单次行程500km左右或以上）</td><td style="text-align:center"><span id="longMarch"></span></td></tr>
					<tr><td style="text-align:center">黑子的圆盘</td><td style="text-align:center">投影观测黑子并且按标准流程作一次黑子的记录（当场画）</td><td style="text-align:center"><span id="standardSpot"></span></td></tr>
					<tr><td style="text-align:center">听，星星的声音</td><td style="text-align:center">作一次流星雨无线电监测 </td><td style="text-align:center"><span id="listenShower"></span></td></tr>
					<tr><td style="text-align:center">扫把星</td><td style="text-align:center">观测到一次彗星 </td><td style="text-align:center"><span id="findComet"></span></td></tr>
					<tr><td style="text-align:center">遮天蔽月</td><td style="text-align:center">观测到一次日食或月食或凌日</td><td style="text-align:center"><span id="findEclipse"></span></td></tr>
					<tr><td style="text-align:center">消失的光芒</td><td style="text-align:center">观测到一次掩星现象（日食，月食不算）</td><td style="text-align:center"><span id="findOccultation"></span></td></tr>
					<tr><td style="text-align:center">星空暗流</td><td style="text-align:center">观测到黄道光 </td><td style="text-align:center"><span id="findZodiacalLight"></span></td></tr>
					
					<tr><td style="text-align:center">ISS马拉松</td><td style="text-align:center">作一次ISS马拉松</td><td style="text-align:center"><span id="marathonISS"></span></td></tr>
					<tr><td style="text-align:center">想要看得更多</td><td style="text-align:center">作一次梅西耶马拉松，成功观测到90个以上梅西耶天体 </td><td style="text-align:center"><span id="marathonMessier""></span></td></tr>
					<tr><td style="text-align:center">真.猎手</td><td style="text-align:center">发现一颗新彗星（通过SOHO等途径）</td><td style="text-align:center"><span id="newComet"></span></td></tr>
					<tr><td style="text-align:center">流星雨不过如此</td><td style="text-align:center">进行5次标观并向IMO传数据，其中有一次是ZHR小于40的流星雨</td><td style="text-align:center"><span id="fiveShower"></span></td></tr>
					<tr><td style="text-align:center">我全都知道</td><td style="text-align:center">88个星座辨认达成（可以用星空模拟软件做模拟观测</td><td style="text-align:center"><span id="fullSky"></span></td></tr>
					<tr><td style="text-align:center">我已经很老很老了</td><td style="text-align:center">全部星官辨认达成 </td><td style="text-align:center"><span id="fullAstrism"></span></td></tr>
					<tr><td style="text-align:center">猎手</td><td style="text-align:center">观测到一颗10等或更暗的彗星</td><td style="text-align:center"><span id="darkComet"></span></td></tr>
					<tr><td style="text-align:center">壕</td><td style="text-align:center">为了观测到国外旅行</td><td style="text-align:center"><span id="iAmRich"></span></td></tr>
					<tr><td style="text-align:center">大地主</td><td style="text-align:center">能正确辨认出月面地形20种以上 </td><td style="text-align:center"><span id="bigLandlord"></span></td></tr>
					<tr><td style="text-align:center">闪光的一击</td><td style="text-align:center">观测到月闪</td><td style="text-align:center"><span id="moonTwinkle"></span></td></tr>
					<tr><td style="text-align:center">我一定会回来的</td><td style="text-align:center">观测到周期彗星的两次回归 </td><td style="text-align:center"><span id="iAmBack"></span></td></tr>
					
					<tr><td style="text-align:center">大千世界</td><td style="text-align:center">观测过一千个以上深空天体 </td><td style="text-align:center"><span id="thousandDeepSky"></span></td></tr>
					<tr><td style="text-align:center">我们做朋友吧</td><td style="text-align:center">连续观测地球上连续出现的5次日食 </td><td style="text-align:center"><span id="fiveEclipse"></span></td></tr>
					<tr><td style="text-align:center">阿克西斯</td><td style="text-align:center">发现一颗近地小行星 </td><td style="text-align:center"><span id="findAxis"></span></td></tr>
					
					<tr><td style="text-align:center">孤独的追星人</td><td style="text-align:center">使用自己的爱好者级别望远镜发现一颗新彗星</td><td style="text-align:center"><span id="loneStarchaser"></span></td></tr>
					<tr><td style="text-align:center">繁星若尘</td><td style="text-align:center">发现一个新的流星群</td><td style="text-align:center"><span id="newShower"></span></td></tr>
					<tr><td style="text-align:center">铭记</td><td style="text-align:center">得到大气层外天体的命名权</td><td style="text-align:center"><span id="nameMemorial"></span></td></tr>
				</tbody>
			</table>
		</div>
					
	</div>
	<script>
		var achieveName=new Array(
			//入门成就
			"firstISS",
			"firstIridium",
			"darkSatellite",
			"summerGalaxy",
			"winterGalaxy",
			"firstDeepSky",
			"moreDeepSky",
			"twoPlanet",
			"firstFireball",
			"firstShower",
			"tenConstellation",
			"blinkBlink",
			"fuckLaw",
			
			//初阶成就
			"moreISS",
			"moreIridium",
			"birdgeDeepSky",
			"darkDeepSky",
			"fourGalileo",
			"findMercury",
			"doubleStar",
			"standardShower",
			"allZodiac",
			"allNorthSky",
			"firstPlan",
			"iAmChinese",
			"sunSpot",
			"sunProjection",
			"variableStar",
			"stayUp",
			"darkCircle",
			"badLuck",
			"findUranus",
			"findNeptune",
			"fivePlanet",
			"findAsteroid",
			"freezingCold",
			
			//进阶成就
			"fiveISS",
			"fiveIridium",
			"findNOSS",
			"deeperSky",
			"brainSupplement",
			"tenDoubleStar",
			"synchronousSatellite",
			"tourMoon",
			"threeShower",
			"threeVariableStar",
			"iamHere",
			"skyPalace",
			"holyBeast",
			"longMarch",
			"standardSpot",
			"listenShower",
			"findComet",
			"findEclipse",
			"findOccultation",
			"findZodiacalLight",
			
			//高阶成就
			"marathonISS",
			"marathonMessier",
			"newComet",
			"fiveShower",
			"fullSky",
			"fullAstrism",
			"darkComet",
			"iAmRich",
			"bigLandlord",
			"moonTwinkle",
			"iAmBack",
			
			//神级成就
			"thousandDeepSky",
			"fiveEclipse",
			"findAxis",
			
			//诸神的黄昏
			"loneStarchaser",
			"newShower",
			"nameMemorial"
		);
		
		var jsonAchieve=<?php $jsonAchieve=file_get_contents("/var/www/html/astro/user/achieve/".$_SESSION['stunb'].".json");echo $jsonAchieve;?>;
		console.log(jsonAchieve);
		
		for(var i=0;i<73;i++){
			var achieveState=eval("jsonAchieve."+achieveName[i]);
			console.log(achieveName[i]);
			console.log(achieveState);
			if(achieveState=="1"){
				document.getElementById(achieveName[i]).innerHTML="达成";
				document.getElementById(achieveName[i]).style="color:#66ccff";
			}else{
				document.getElementById(achieveName[i]).innerHTML="未达成";
				document.getElementById(achieveName[i]).style="color:#ff9966";
			}
		}
	</script>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">您的设备借用记录</h3>
    </div>
    <div class="panel-body">
        <?php 
			$connection=new mysqli("localhost","astro","CaO+CO2=CaCO3","equip");
			if (mysqli_connect_errno()){
				echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
			}else{
				$stmt=$connection->prepare("SELECT * FROM records WHERE name=? ORDER BY no DESC;");
				$stmt->bind_param("s",$_SESSION['name']);
				$stmt->execute();
				$result=$stmt->get_result();
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">No.</th><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">借用人</th><th style=\"text-align:center;\">借出日期</th><th style=\"text-align:center;\">应还日期</th><th style=\"text-align:center;\">联系方式</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				while($row=$result->fetch_object()){
					
					echo "<tr><td>",$row->no,"</td><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->name,"</td><td>",$row->borrow_time,"</td><td>",$row->return_time,"</td><td>",$row->contact,"</td><td>",$row->remarks,"</td></tr>\n";
					
				}
				echo "</tbody></table></div>\n";
				$result->close();
				$stmt->close();
				$connection->close();
			}
		?>
    </div>
</div>



<!-- /article -->	
			</div>
		</div>
	</div>
	<?php include '../footer.html'; ?>
</div>
</body>
</html>