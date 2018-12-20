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
<div>
	<div style="text-align:center">
		<h3>科大天气预报(117.269E,31.836N)</h3>
		<p style="text-align:center;color:#66ccff;" class="small">更多天气信息：<a href="./weatherdetail.php">气象详情</a></p>
		<p>预报生成时间：<span id="init"></span></p>
		<div class="table-responsive">
			<table  class="table table-hover table-striped" style="text-align:center;">
				<thead>
					<tr><th style="text-align:center;">日期</th><th style="text-align:center;">时间</th><th style="text-align:center;">云量</th><th style="text-align:center;">大气视宁度</th><th style="text-align:center;">大气透明度</th><th style="text-align:center;">气温</th><th style="text-align:center;">降水</th></tr>
				</thead>
				<tbody>
					<tr><td><span id="date1"></span></td><td><span id="time1"></span></td><td><span id="cloud1"></span></td><td><span id="seeing1"></span></td><td><span id="transparency1"></span></td><td><span id="temp1"></span></td><td><span id="prec1"></span></td></tr>
					<tr><td><span id="date2"></span></td><td><span id="time2"></span></td><td><span id="cloud2"></span></td><td><span id="seeing2"></span></td><td><span id="transparency2"></span></td><td><span id="temp2"></span></td><td><span id="prec2"></span></td></tr>
					<tr><td><span id="date3"></span></td><td><span id="time3"></span></td><td><span id="cloud3"></span></td><td><span id="seeing3"></span></td><td><span id="transparency3"></span></td><td><span id="temp3"></span></td><td><span id="prec3"></span></td></tr>
					<tr><td><span id="date4"></span></td><td><span id="time4"></span></td><td><span id="cloud4"></span></td><td><span id="seeing4"></span></td><td><span id="transparency4"></span></td><td><span id="temp4"></span></td><td><span id="prec4"></span></td></tr>
					<tr><td><span id="date5"></span></td><td><span id="time5"></span></td><td><span id="cloud5"></span></td><td><span id="seeing5"></span></td><td><span id="transparency5"></span></td><td><span id="temp5"></span></td><td><span id="prec5"></span></td></tr>
					<tr><td><span id="date6"></span></td><td><span id="time6"></span></td><td><span id="cloud6"></span></td><td><span id="seeing6"></span></td><td><span id="transparency6"></span></td><td><span id="temp6"></span></td><td><span id="prec6"></span></td></tr>
					<tr><td><span id="date7"></span></td><td><span id="time7"></span></td><td><span id="cloud7"></span></td><td><span id="seeing7"></span></td><td><span id="transparency7"></span></td><td><span id="temp7"></span></td><td><span id="prec7"></span></td></tr>
					<tr><td><span id="date8"></span></td><td><span id="time8"></span></td><td><span id="cloud8"></span></td><td><span id="seeing8"></span></td><td><span id="transparency8"></span></td><td><span id="temp8"></span></td><td><span id="prec8"></span></td></tr>
					<tr><td><span id="date9"></span></td><td><span id="time9"></span></td><td><span id="cloud9"></span></td><td><span id="seeing9"></span></td><td><span id="transparency9"></span></td><td><span id="temp9"></span></td><td><span id="prec9"></span></td></tr>
					<tr><td><span id="date10"></span></td><td><span id="time10"></span></td><td><span id="cloud10"></span></td><td><span id="seeing10"></span></td><td><span id="transparency10"></span></td><td><span id="temp10"></span></td><td><span id="prec10"></span></td></tr>
					<tr><td><span id="date11"></span></td><td><span id="time11"></span></td><td><span id="cloud11"></span></td><td><span id="seeing11"></span></td><td><span id="transparency11"></span></td><td><span id="temp11"></span></td><td><span id="prec11"></span></td></tr>
					<tr><td><span id="date12"></span></td><td><span id="time12"></span></td><td><span id="cloud12"></span></td><td><span id="seeing12"></span></td><td><span id="transparency12"></span></td><td><span id="temp12"></span></td><td><span id="prec12"></span></td></tr>
					<tr><td><span id="date13"></span></td><td><span id="time13"></span></td><td><span id="cloud13"></span></td><td><span id="seeing13"></span></td><td><span id="transparency13"></span></td><td><span id="temp13"></span></td><td><span id="prec13"></span></td></tr>
					<tr><td><span id="date14"></span></td><td><span id="time14"></span></td><td><span id="cloud14"></span></td><td><span id="seeing14"></span></td><td><span id="transparency14"></span></td><td><span id="temp14"></span></td><td><span id="prec14"></span></td></tr>
					<tr><td><span id="date15"></span></td><td><span id="time15"></span></td><td><span id="cloud15"></span></td><td><span id="seeing15"></span></td><td><span id="transparency15"></span></td><td><span id="temp15"></span></td><td><span id="prec15"></span></td></tr>
					<tr><td><span id="date16"></span></td><td><span id="time16"></span></td><td><span id="cloud16"></span></td><td><span id="seeing16"></span></td><td><span id="transparency16"></span></td><td><span id="temp16"></span></td><td><span id="prec16"></span></td></tr>
					<tr><td><span id="date17"></span></td><td><span id="time17"></span></td><td><span id="cloud17"></span></td><td><span id="seeing17"></span></td><td><span id="transparency17"></span></td><td><span id="temp17"></span></td><td><span id="prec17"></span></td></tr>
					<tr><td><span id="date18"></span></td><td><span id="time18"></span></td><td><span id="cloud18"></span></td><td><span id="seeing18"></span></td><td><span id="transparency18"></span></td><td><span id="temp18"></span></td><td><span id="prec18"></span></td></tr>
					<tr><td><span id="date19"></span></td><td><span id="time19"></span></td><td><span id="cloud19"></span></td><td><span id="seeing19"></span></td><td><span id="transparency19"></span></td><td><span id="temp19"></span></td><td><span id="prec19"></span></td></tr>
					<tr><td><span id="date20"></span></td><td><span id="time20"></span></td><td><span id="cloud20"></span></td><td><span id="seeing20"></span></td><td><span id="transparency20"></span></td><td><span id="temp20"></span></td><td><span id="prec20"></span></td></tr>
					<tr><td><span id="date21"></span></td><td><span id="time21"></span></td><td><span id="cloud21"></span></td><td><span id="seeing21"></span></td><td><span id="transparency21"></span></td><td><span id="temp21"></span></td><td><span id="prec21"></span></td></tr>
					<tr><td><span id="date22"></span></td><td><span id="time22"></span></td><td><span id="cloud22"></span></td><td><span id="seeing22"></span></td><td><span id="transparency22"></span></td><td><span id="temp22"></span></td><td><span id="prec22"></span></td></tr>
					<tr><td><span id="date23"></span></td><td><span id="time23"></span></td><td><span id="cloud23"></span></td><td><span id="seeing23"></span></td><td><span id="transparency23"></span></td><td><span id="temp23"></span></td><td><span id="prec23"></span></td></tr>
					<tr><td><span id="date24"></span></td><td><span id="time24"></span></td><td><span id="cloud24"></span></td><td><span id="seeing24"></span></td><td><span id="transparency24"></span></td><td><span id="temp24"></span></td><td><span id="prec24"></span></td></tr>
				</tbody>
			</table>
		</div>
		<p style="color:#ccc" class="small">数据来源：<a href="http://www.7timer.cn/">晴天钟</a></p>
	</div>
	
	<script>
		
		window.onload=function(){
			$.ajax({url:"http://www.7timer.info/bin/astro.php",
					success:function(result){
						showweather(result);
					},
					type:"GET",
					dataType:"json",
					data:{lon: 117.269,lat: 31.836,ac: 0,lang:"en",unit:"metric",output:"json",tzshift: 0}
			});
		}
		
		function showweather(jsonweather){
			var raw_init=jsonweather.init;
			var year_init=parseInt(raw_init.substring(0,4),10);
			var month_init=parseInt(raw_init.substring(4,6),10);
			var day_init=parseInt(raw_init.substring(6,8),10);
			var time_init=parseInt(raw_init.substring(8,10),10);
			
			var date_init=new Date();
			date_init.setFullYear(year_init,month_init-1,day_init);
			time_init+=8;				//换算东八区区时
			if(time_init>=24){
				time_init%=24;
				date_init.setDate(date_init.getDate()+1);
			}
			
			var inittext=new String()
			document.getElementById("init").innerHTML=inittext.concat(date_init.getFullYear(),"-",date_init.getMonth()+1,"-",date_init.getDate()," ",time_init,"时, UTC+0800");
			
			
			for(var n=1;n<=24;n++){
				
				var tmpDate=new Date();
				tmpDate.setDate(date_init.getDate());
				tmpDate.setMonth(date_init.getMonth());
				tmpDate.setFullYear(date_init.getFullYear());
				//console.log(date_init);
				//console.log(jsonweather);
				//console.log(tmpDate);
				tmpDate.setDate(date_init.getDate()+parseInt((time_init+jsonweather.dataseries[n-1].timepoint)/24));
				
				var dex="date"+n;
				document.getElementById(dex).innerHTML=tmpDate.getDate();
			
				var dex="time"+n;
				var hour=(time_init+jsonweather.dataseries[n-1].timepoint)%24
				document.getElementById(dex).innerHTML=hour;
				if(hour>=6 && hour<=18){
					document.getElementById(dex).style="color:#ff9999"
				}else{
					document.getElementById(dex).style="color:#6666cc"
				}
				var dex="cloud"+n;
				switch(jsonweather.dataseries[n-1].cloudcover){
					case 1:
						document.getElementById(dex).innerHTML="0~6%";
						document.getElementById(dex).style="color:#0f0";
						break;
					case 2:
						document.getElementById(dex).innerHTML="6~19%";
						document.getElementById(dex).style="color:#2d0";
						break;
					case 3:
						document.getElementById(dex).innerHTML="19~31%";
						document.getElementById(dex).style="color:#4b0";
						break;
					case 4:
						document.getElementById(dex).innerHTML="31~44%";
						document.getElementById(dex).style="color:#690";
						break;
					case 5:
						document.getElementById(dex).innerHTML="44~56%";
						document.getElementById(dex).style="color:#870";
						break;
					case 6:
						document.getElementById(dex).innerHTML="56~69%";
						document.getElementById(dex).style="color:#a50";
						break;
					case 7:
						document.getElementById(dex).innerHTML="69~81%";
						document.getElementById(dex).style="color:#c30";
						break;
					case 8:
						document.getElementById(dex).innerHTML="81~94%";
						document.getElementById(dex).style="color:#e10";
						break;
					case 9:
						document.getElementById(dex).innerHTML="94~100%";
						document.getElementById(dex).style="color:#f00";
						break;
				}
				var dex="seeing"+n;
				switch(jsonweather.dataseries[n-1].seeing){
					case 1:
						document.getElementById(dex).innerHTML="<0.5\"";
						document.getElementById(dex).style="color:#0f0";
						break;
					case 2:
						document.getElementById(dex).innerHTML="0.5\"~0.75\"";
						document.getElementById(dex).style="color:#2d0";
						break;
					case 3:
						document.getElementById(dex).innerHTML="0.75\"~1\"";
						document.getElementById(dex).style="color:#4b0";
						break;
					case 4:
						document.getElementById(dex).innerHTML="1\"~1.25\"";
						document.getElementById(dex).style="color:#690";
						break;
					case 5:
						document.getElementById(dex).innerHTML="1.25\"~1.5\"";
						document.getElementById(dex).style="color:#870";
						break;
					case 6:
						document.getElementById(dex).innerHTML="1.5\"~2\"";
						document.getElementById(dex).style="color:#a50";
						break;
					case 7:
						document.getElementById(dex).innerHTML="2\"~2.5\"";
						document.getElementById(dex).style="color:#c30";
						break;
					case 8:
						document.getElementById(dex).innerHTML=">2.5\"";
						document.getElementById(dex).style="color:#f00";
						break;
				}
				dex="transparency"+n;
				switch(jsonweather.dataseries[n-1].transparency){
					case 1:
						document.getElementById(dex).innerHTML="<0.3";
						document.getElementById(dex).style="color:#0f0";
						break;
					case 2:
						document.getElementById(dex).innerHTML="0.3~0.4";
						document.getElementById(dex).style="color:#2d0";
						break;
					case 3:
						document.getElementById(dex).innerHTML="0.4~0.5";
						document.getElementById(dex).style="color:#4b0";
						break;
					case 4:
						document.getElementById(dex).innerHTML="0.5~0.6";
						document.getElementById(dex).style="color:#690";
						break;
					case 5:
						document.getElementById(dex).innerHTML="0.6~0.7";
						document.getElementById(dex).style="color:#870";
						break;
					case 6:
						document.getElementById(dex).innerHTML="0.7~0.85";
						document.getElementById(dex).style="color:#a50";
						break;
					case 7:
						document.getElementById(dex).innerHTML="0.85~1";
						document.getElementById(dex).style="color:#c30";
						break;
					case 8:
						document.getElementById(dex).innerHTML=">1";
						document.getElementById(dex).style="color:#f00";
						break;
				}
				dex="temp"+n;
				var temp=jsonweather.dataseries[n-1].temp2m;
				document.getElementById(dex).innerHTML=temp;
				if(temp>=30){
					document.getElementById(dex).style="color:#ff6666";
				}else if(temp>=25){
					document.getElementById(dex).style="color:#ffcc33";
				}else if(temp>=20){
					document.getElementById(dex).style="color:#99cc00";
				}else if(temp>=10){
					document.getElementById(dex).style="color:#66ccff";
				}else if(temp>=0){
					document.getElementById(dex).style="color:#6666cc";
				}else{
					document.getElementById(dex).style="color:#9966cc";
				}
				dex="prec"+n;
				if(jsonweather.dataseries[n-1].prec_type=="none"){
					document.getElementById(dex).innerHTML="无降水";
					document.getElementById(dex).style="color:#66ccff";
				}else if(jsonweather.dataseries[n-1].prec_type=="rain"){
					document.getElementById(dex).innerHTML="有降水";
					document.getElementById(dex).style="color:#0000ff";
				}else if(jsonweather.dataseries[n-1].prec_type=="snow"){
					document.getElementById(dex).innerHTML="有降雪";
					document.getElementById(dex).style="color:#cc99cc";
				}
			}
		
		}
	</script>
</div>


<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../footer.html'; ?>
</div>
</body>
</html>
