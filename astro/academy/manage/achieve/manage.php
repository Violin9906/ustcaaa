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
?>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $stunb?>的观测成就</h3>
    </div>
    <div class="panel-body">
		<div class="table-responsive">
			<table class="table table-hover table-striped" style="text-align:center">
				<thead>
					<tr><th style="text-align:center">成就</th><th style="text-align:center">简介</th><th style="text-align:center">达成情况</th></tr>
				</thead>
				<tbody>
					<tr><td style="text-align:center">第一次ISS</td><td style="text-align:center">第一次有计划地观测ISS过境</td><td style="text-align:center"><a href="#" id="firstISS"></a></td></tr>
					<tr><td style="text-align:center">第一次铱闪</td><td style="text-align:center">第一次有计划地观测铱闪</td><td style="text-align:center"><a href="#" id="firstIridium"></a></td></tr>
					<tr><td style="text-align:center">降低了亮度我还是看得到你</td><td style="text-align:center">第一次有计划性地观测亮度暗于2等的人卫</td><td style="text-align:center"><a href="#" id="darkSatellite"></a></td></tr>
					<tr><td style="text-align:center">第二基地</td><td style="text-align:center">第一次在野外看到夏季银河</td><td style="text-align:center"><a href="#" id="summerGalaxy"></a></td></tr>
					<tr><td style="text-align:center">冰冷的河流</td><td style="text-align:center">第一次在野外看到冬季银河</td><td style="text-align:center"><a href="#" id="winterGalaxy"></a></td></tr>
					<tr><td style="text-align:center">这也叫深空？</td><td style="text-align:center">第一次目视M31或双星团或其他可目视观测的深空天体（目视特指naked eyes）</td><td style="text-align:center"><a href="#" id="firstDeepSky"></a></td></tr>
					<tr><td style="text-align:center">向着更深的天空</td><td style="text-align:center">一晚上观测到5个以上深空天体并能说出它们的大概样子和确切编号</td><td style="text-align:center"><a href="#" id="moreDeepSky"></a></td></tr>
					<tr><td style="text-align:center">会动的星星</td><td style="text-align:center">一晚上看到两颗以上大行星（地球不算）</td><td style="text-align:center"><a href="#" id="twoPlanet"></a></td></tr>
					<tr><td style="text-align:center">大火球</td><td style="text-align:center">第一次看到火流星</td><td style="text-align:center"><a href="#" id="firstFireball"></a></td></tr>
					<tr><td style="text-align:center">Take a shower</td><td style="text-align:center">第一次观测流星雨（辨认出两颗群内即可算入成就）</td><td style="text-align:center"><a href="#" id="firstShower"></a></td></tr>
					<tr><td style="text-align:center">星座是什么，能吃吗</td><td style="text-align:center">能正确认出10个以上星座（无星图辅助）</td><td style="text-align:center"><a href="#" id="tenConstellation"></a></td></tr>
					<tr><td style="text-align:center">一闪一闪亮晶晶</td><td style="text-align:center">能辨认并叫出冬季大三角，夏季大三角，春季大三角，春季大弧线，冬季大钻石中任意5颗星的名字</td><td style="text-align:center"><a href="#" id="blinkBlink"></a></td></tr>
					<tr><td style="text-align:center">开光定律</td><td style="text-align:center">遭遇到一次观测计划因天气原因失败</td><td style="text-align:center"><a href="#" id="fuckLaw"></a></td></tr>
					
					<tr><td style="text-align:center">追逐ISS</td><td style="text-align:center">一周内观测3次或以上ISS过境</td><td style="text-align:center"><a href="#" id="moreISS"></a></td></tr>
					<tr><td style="text-align:center">铱闪是很多的</td><td style="text-align:center">一周内观测到3次或以上铱闪</td><td style="text-align:center"><a href="#" id="moreIridium"></a></td></tr>
					<tr><td style="text-align:center">星空之桥</td><td style="text-align:center">一晚上观测20个或以上深空天体并能说出大概样子和确切编号（使用星桥法）</td><td style="text-align:center"><a href="#" id="birdgeDeepSky"></a></td></tr>
					<tr><td style="text-align:center">镜中薄云</td><td style="text-align:center">第一次自主调节一部单筒的望远镜，并将一个裸眼不可见的深空调到视场中央</td><td style="text-align:center"><a href="#" id="darkDeepSky"></a></td></tr>
					<tr><td style="text-align:center">伽利略的亡灵</td><td style="text-align:center">看全四颗伽利略卫星并能对应出它们的名字</td><td style="text-align:center"><a href="#" id="fourGalileo"></a></td></tr>
					<tr><td style="text-align:center">寻找墨丘利</td><td style="text-align:center">看到水星</td><td style="text-align:center"><a href="#" id="findMercury"></a></td></tr>
					<tr><td style="text-align:center">烧！</td><td style="text-align:center">看到2对双星</td><td style="text-align:center"><a href="#" id="doubleStar"></a></td></tr>
					<tr><td style="text-align:center">标观新手</td><td style="text-align:center">第一次作流星雨标观，并向IMO上传报表</td><td style="text-align:center"><a href="#" id="standardShower"></a></td></tr>
					<tr><td style="text-align:center">黄金圣衣</td><td style="text-align:center">看尽12个黄道星宫代表的星座，认全13个黄道星座</td><td style="text-align:center"><a href="#" id="allZodiac"></a></td></tr>
					<tr><td style="text-align:center">这点星座不算什么</td><td style="text-align:center">能正确辨认出北天全部星座</td><td style="text-align:center"><a href="#" id="allNorthSky"></a></td></tr>
					<tr><td style="text-align:center">我早就料到了</td><td style="text-align:center">制定一份整夜的观测计划并成功贯彻实行了它</td><td style="text-align:center"><a href="#" id="firstPlan"></a></td></tr>
					<tr><td style="text-align:center">我是中国人</td><td style="text-align:center">能正确辨认出10个或以上中国星官</td><td style="text-align:center"><a href="#" id="iAmChinese"></a></td></tr>
					<tr><td style="text-align:center">潜藏在光辉下的暗影</td><td style="text-align:center">通过望远镜观测太阳黑子</td><td style="text-align:center"><a href="#" id="sunSpot"></a></td></tr>
					<tr><td style="text-align:center">出现在暗影里的光芒</td><td style="text-align:center">利用投影法观测太阳</td><td style="text-align:center"><a href="#" id="sunProjection"></a></td></tr>
					<tr><td style="text-align:center">星光变</td><td style="text-align:center">观测一次（一晚）变星，并向AAVSO上传数据</td><td style="text-align:center"><a href="#" id="variableStar"></a></td></tr>
					<tr><td style="text-align:center">黑眼圈</td><td style="text-align:center">一晚上观测观测时间累计超过8小时</td><td style="text-align:center"><a href="#" id="stayUp"></a></td></tr>
					<tr><td style="text-align:center">真.黑眼圈</td><td style="text-align:center">因为观测原因第二天产生黑眼圈</td><td style="text-align:center"><a href="#" id="darkCircle"></a></td></tr>
					<tr><td style="text-align:center">教主威武</td><td style="text-align:center">五次因天气原因观测失败</td><td style="text-align:center"><a href="#" id="badLuck"></a></td></tr>
					<tr><td style="text-align:center">黯淡的天神</td><td style="text-align:center">观测到天王星</td><td style="text-align:center"><a href="#" id="findUranus"></a></td></tr>
					<tr><td style="text-align:center">遥远的兄弟</td><td style="text-align:center">观测到海王星</td><td style="text-align:center"><a href="#" id="findNeptune"></a></td></tr>
					<tr><td style="text-align:center">五星物语</td><td style="text-align:center">同一晚上观测到水金火木土五个行星</td><td style="text-align:center"><a href="#" id="fivePlanet"></a></td></tr>
					<tr><td style="text-align:center">小弟兄</td><td style="text-align:center">观测到小行星</td><td style="text-align:center"><a href="#" id="findAsteroid"></a></td></tr>
                    <tr><td style="text-align:center">冻住，不许走</td><td style="text-align:center">在气温低于0摄氏度时在户外观测一晚</td><td style="text-align:center"><a href="#" id="freezingCold"></a></td></tr>
					
					<tr><td style="text-align:center">ISS狂</td><td style="text-align:center">一周内观测到5次或以上ISS过境 </td><td style="text-align:center"><a href="#" id="fiveISS"></a></td></tr>
					<tr><td style="text-align:center">铱闪是很多很多的</td><td style="text-align:center">一周内观测到5次或以上铱闪</td><td style="text-align:center"><a href="#" id="fiveIridium"></a></td></tr>
					<tr><td style="text-align:center">风声</td><td style="text-align:center">观测一次NOSS编组飞行</td><td style="text-align:center"><a href="#" id="findNOSS"></a></td></tr>
					<tr><td style="text-align:center">深空，更多的深空</td><td style="text-align:center">一晚上观测到50个或以上的深空天体并能说出编号和大概样子</td><td style="text-align:center"><a href="#" id="deeperSky"></a></td></tr>
					<tr><td style="text-align:center">镜子的用处</td><td style="text-align:center">通过望远镜观测到9等或更暗的目标  </td><td style="text-align:center"><a href="#" id="brainSupplement"></a></td></tr>
					<tr><td style="text-align:center">火焰魔法师</td><td style="text-align:center">观测到10对双星 </td><td style="text-align:center"><a href="#" id="tenDoubleStar"></a></td></tr>
					<tr><td style="text-align:center">123木头人</td><td style="text-align:center">观测到地球同步卫星（必须有一定的观测时间以说明它与恒星的区别）</td><td style="text-align:center"><a href="#" id="synchronousSatellite"></a></td></tr>
					<tr><td style="text-align:center">月面旅行</td><td style="text-align:center">能正确辨认出月面的地形5种以上（至少包括两座环形山，观测时不能借助月面图）</td><td style="text-align:center"><a href="#" id="tourMoon"></a></td></tr>
					<tr><td style="text-align:center">数流星达人</td><td style="text-align:center">作3次流星雨标观，并向IMO上传报表</td><td style="text-align:center"><a href="#" id="threeShower"></a></td></tr>
					<tr><td style="text-align:center">星光变变变</td><td style="text-align:center">作3次（3晚）变星观测，并向AAVSO上传报表</td><td style="text-align:center"><a href="#" id="threeVariableStar"></a></td></tr>
					<tr><td style="text-align:center">星之归处</td><td style="text-align:center">认出在合肥（或你的常用观测地）可见的所有星座 </td><td style="text-align:center"><a href="#" id="iamHere"></a></td></tr>
					<tr><td style="text-align:center">天上的宫殿</td><td style="text-align:center">能正确认出三垣中任意一垣的所有星官</td><td style="text-align:center"><a href="#" id="skyPalace"></a></td></tr>
					<tr><td style="text-align:center">四圣兽</td><td style="text-align:center">能正确认出四象中任意一象的所有星官</td><td style="text-align:center"><a href="#" id="holyBeast"></a></td></tr>
					<tr><td style="text-align:center">远征</td><td style="text-align:center">为了观测专程跑到一个遥远的地方（单次行程500km左右或以上）</td><td style="text-align:center"><a href="#" id="longMarch"></a></td></tr>
					<tr><td style="text-align:center">黑子的圆盘</td><td style="text-align:center">投影观测黑子并且按标准流程作一次黑子的记录（当场画）</td><td style="text-align:center"><a href="#" id="standardSpot"></a></td></tr>
					<tr><td style="text-align:center">听，星星的声音</td><td style="text-align:center">作一次流星雨无线电监测 </td><td style="text-align:center"><a href="#" id="listenShower"></a></td></tr>
					<tr><td style="text-align:center">扫把星</td><td style="text-align:center">观测到一次彗星 </td><td style="text-align:center"><a href="#" id="findComet"></a></td></tr>
					<tr><td style="text-align:center">遮天蔽月</td><td style="text-align:center">观测到一次日食或月食或凌日</td><td style="text-align:center"><a href="#" id="findEclipse"></a></td></tr>
					<tr><td style="text-align:center">消失的光芒</td><td style="text-align:center">观测到一次掩星现象（日食，月食不算）</td><td style="text-align:center"><a href="#" id="findOccultation"></a></td></tr>
					<tr><td style="text-align:center">星空暗流</td><td style="text-align:center">观测到黄道光 </td><td style="text-align:center"><a href="#" id="findZodiacalLight"></a></td></tr>
					
					<tr><td style="text-align:center">ISS马拉松</td><td style="text-align:center">作一次ISS马拉松</td><td style="text-align:center"><a href="#" id="marathonISS"></a></td></tr>
					<tr><td style="text-align:center">想要看得更多</td><td style="text-align:center">作一次梅西耶马拉松，成功观测到90个以上梅西耶天体 </td><td style="text-align:center"><a href="#" id="marathonMessier""></a></td></tr>
					<tr><td style="text-align:center">真.猎手</td><td style="text-align:center">发现一颗新彗星（通过SOHO等途径）</td><td style="text-align:center"><a href="#" id="newComet"></a></td></tr>
					<tr><td style="text-align:center">流星雨不过如此</td><td style="text-align:center">进行5次标观并向IMO传数据，其中有一次是ZHR小于40的流星雨</td><td style="text-align:center"><a href="#" id="fiveShower"></a></td></tr>
					<tr><td style="text-align:center">我全都知道</td><td style="text-align:center">88个星座辨认达成（可以用星空模拟软件做模拟观测</td><td style="text-align:center"><a href="#" id="fullSky"></a></td></tr>
					<tr><td style="text-align:center">我已经很老很老了</td><td style="text-align:center">全部星官辨认达成 </td><td style="text-align:center"><a href="#" id="fullAstrism"></a></td></tr>
					<tr><td style="text-align:center">猎手</td><td style="text-align:center">观测到一颗10等或更暗的彗星</td><td style="text-align:center"><a href="#" id="darkComet"></a></td></tr>
					<tr><td style="text-align:center">壕</td><td style="text-align:center">为了观测到国外旅行</td><td style="text-align:center"><a href="#" id="iAmRich"></a></td></tr>
					<tr><td style="text-align:center">大地主</td><td style="text-align:center">能正确辨认出月面地形20种以上 </td><td style="text-align:center"><a href="#" id="bigLandlord"></a></td></tr>
					<tr><td style="text-align:center">闪光的一击</td><td style="text-align:center">观测到月闪</td><td style="text-align:center"><a href="#" id="moonTwinkle"></a></td></tr>
					<tr><td style="text-align:center">我一定会回来的</td><td style="text-align:center">观测到周期彗星的两次回归 </td><td style="text-align:center"><a href="#" id="iAmBack"></a></td></tr>
					
					<tr><td style="text-align:center">大千世界</td><td style="text-align:center">观测过一千个以上深空天体 </td><td style="text-align:center"><a href="#" id="thousandDeepSky"></a></td></tr>
					<tr><td style="text-align:center">我们做朋友吧</td><td style="text-align:center">连续观测地球上连续出现的5次日食 </td><td style="text-align:center"><a href="#" id="fiveEclipse"></a></td></tr>
					<tr><td style="text-align:center">阿克西斯</td><td style="text-align:center">发现一颗近地小行星 </td><td style="text-align:center"><a href="#" id="findAxis"></a></td></tr>
					
					<tr><td style="text-align:center">孤独的追星人</td><td style="text-align:center">使用自己的爱好者级别望远镜发现一颗新彗星</td><td style="text-align:center"><a href="#" id="loneStarchaser"></a></td></tr>
					<tr><td style="text-align:center">繁星若尘</td><td style="text-align:center">发现一个新的流星群</td><td style="text-align:center"><a href="#" id="newShower"></a></td></tr>
					<tr><td style="text-align:center">铭记</td><td style="text-align:center">得到大气层外天体的命名权</td><td style="text-align:center"><a href="#" id="nameMemorial"></a></td></tr>
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
		
		var jsonAchieve=<?php $jsonAchieve=file_get_contents("/var/www/html/astro/user/achieve/".$stunb.".json");echo $jsonAchieve;?>;
		console.log(jsonAchieve);
		
		for(var i=0;i<73;i++){
			var achieveState=eval("jsonAchieve."+achieveName[i]);
			console.log(achieveName[i]);
			console.log(achieveState);
			if(achieveState=="1"){
				document.getElementById(achieveName[i]).innerHTML="撤销成就";
				document.getElementById(achieveName[i]).style="color:#ff9966";
				document.getElementById(achieveName[i]).href="./write.php?stunb=<?php echo $stunb;?>&achieve="+achieveName[i]+"&action=disable";
			}else{
				document.getElementById(achieveName[i]).innerHTML="授予成就";
				document.getElementById(achieveName[i]).style="color:#66ccff";
				document.getElementById(achieveName[i]).href="./write.php?stunb=<?php echo $stunb;?>&achieve="+achieveName[i]+"&action=enable";
			}
		}
	</script>
</div>

<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../../footer.html'; ?>
</div>
</body>
</html>
