<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--学术部</title>
<?php include '../publichead.html'; ?>
</head>
<body>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php include '../header.html'; ?>
		<?php include './nav.html'; ?>	
			<div class="jumbotron">
<!-- article -->
				<p>
				<center><h2>欢迎访问中国科大天协学术部主页</h2></center>
				</p>
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><a href="/wordpress/index.php/tag/achievement/"><span class="glyphicon glyphicon-stats">&nbsp;成就系统</span></a></h3>
</div>
<div class="panel-body">
<table style="width:100%">
<tbody>
<tr><td><a href='#' id=achievement1></a></td><td style="text-align:right"><span id=achievementtime1 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=achievement2></a></td><td style="text-align:right"><span id=achievementtime2 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=achievement3></a></td><td style="text-align:right"><span id=achievementtime3 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=achievement4></a></td><td style="text-align:right"><span id=achievementtime4 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=achievement5></a></td><td style="text-align:right"><span id=achievementtime5 class="text-muted"></span></td></tr>
</tbody>
</table>
</div>
<script type='text/javascript' src='/astro/xml2json.js'></script>
<script>
var oxmlachievement=new XMLHttpRequest();
var urlachievement="/wordpress/index.php/feed/?tag=achievement";
oxmlachievement.open("GET",urlachievement,false);
oxmlachievement.send(null);
var rssachievement=oxmlachievement.responseText;
var x2js=new X2JS();
var jsonachievement=x2js.xml_str2json(rssachievement);

//console.log(jsonachievement);

var achievementnum=jsonachievement.rss.channel.item.length;
if(!(achievementnum)){
	document.getElementById('achievement1').href=jsonachievement.rss.channel.item.link;
	document.getElementById('achievement1').innerHTML=jsonachievement.rss.channel.item.title;
	document.getElementById('achievementtime1').innerHTML=jsonachievement.rss.channel.item.pubDate.substring(0,17);
}else{
	for(var n=1;n<=achievementnum;n++){
		var achievementdex="achievement"+n;
		var achievementtimedex="achievementtime"+n;
		document.getElementById(achievementdex).href=jsonachievement.rss.channel.item[n-1].link;
		document.getElementById(achievementdex).innerHTML=jsonachievement.rss.channel.item[n-1].title;
		document.getElementById(achievementtimedex).innerHTML=jsonachievement.rss.channel.item[n-1].pubDate.substring(0,17);
	}
}
</script>
</div>

<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title"><a href="/wordpress/index.php/category/whatis/"><span class="glyphicon glyphicon-info-sign">&nbsp;天文知识</span></a></h3>
</div>
<div class="panel-body">
<table style="width:100%">
<tbody>
<tr><td><a href='#' id=whatis1></a></td><td style="text-align:right"><span id=whatistime1 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=whatis2></a></td><td style="text-align:right"><span id=whatistime2 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=whatis3></a></td><td style="text-align:right"><span id=whatistime3 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=whatis4></a></td><td style="text-align:right"><span id=whatistime4 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=whatis5></a></td><td style="text-align:right"><span id=whatistime5 class="text-muted"></span></td></tr>
</tbody>
</table>
</div>
<script type='text/javascript' src='/astro/xml2json.js'></script>
<script>
var oxmlwhatis=new XMLHttpRequest();
var urlwhatis="/wordpress/index.php/feed/?cat=8";
oxmlwhatis.open("GET",urlwhatis,false);
oxmlwhatis.send(null);
var rsswhatis=oxmlwhatis.responseText;
var x2js=new X2JS();
var jsonwhatis=x2js.xml_str2json(rsswhatis);

//console.log(jsonwhatis);

var whatisnum=jsonwhatis.rss.channel.item.length;
if(!(whatisnum)){
	document.getElementById('whatis1').href=jsonwhatis.rss.channel.item.link;
	document.getElementById('whatis1').innerHTML=jsonwhatis.rss.channel.item.title;
	document.getElementById('whatistime1').innerHTML=jsonwhatis.rss.channel.item.pubDate.substring(0,17);
}else{
	for(var n=1;n<=whatisnum;n++){
		var whatisdex="whatis"+n;
		var whatistimedex="whatistime"+n;
		document.getElementById(whatisdex).href=jsonwhatis.rss.channel.item[n-1].link;
		document.getElementById(whatisdex).innerHTML=jsonwhatis.rss.channel.item[n-1].title;
		document.getElementById(whatistimedex).innerHTML=jsonwhatis.rss.channel.item[n-1].pubDate.substring(0,17);
	}
}
</script>
</div>

<div class="panel panel-success">
<div class="panel-heading">
<h3 class="panel-title"><a href="/wordpress/index.php/category/forecast/"><span class="glyphicon glyphicon-calendar">&nbsp;天象预报</span></a></h3>
</div>
<div class="panel-body">
<table style="width:100%">
<tbody>
<tr><td><a href='#' id=forecast1></a></td><td style="text-align:right"><span id=forecasttime1 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=forecast2></a></td><td style="text-align:right"><span id=forecasttime2 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=forecast3></a></td><td style="text-align:right"><span id=forecasttime3 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=forecast4></a></td><td style="text-align:right"><span id=forecasttime4 class="text-muted"></span></td></tr>
<tr><td><a href='#' id=forecast5></a></td><td style="text-align:right"><span id=forecasttime5 class="text-muted"></span></td></tr>
</tbody>
</table>
</div>
<script type='text/javascript' src='/astro/xml2json.js'></script>
<script>
var oxmlforecast=new XMLHttpRequest();
var urlforecast="/wordpress/index.php/feed/?cat=4";
oxmlforecast.open("GET",urlforecast,false);
oxmlforecast.send(null);
var rssforecast=oxmlforecast.responseText;
var x2js=new X2JS();
var jsonforecast=x2js.xml_str2json(rssforecast);

//console.log(jsonforecast);

var forecastnum=jsonforecast.rss.channel.item.length;
if(!(forecastnum)){
	document.getElementById('forecast1').href=jsonforecast.rss.channel.item.link;
	document.getElementById('forecast1').innerHTML=jsonforecast.rss.channel.item.title;
	document.getElementById('forecasttime1').innerHTML=jsonforecast.rss.channel.item.pubDate.substring(0,17);
}else{
	for(var n=1;n<=forecastnum;n++){
		var forecastdex="forecast"+n;
		var forecasttimedex="forecasttime"+n;
		document.getElementById(forecastdex).href=jsonforecast.rss.channel.item[n-1].link;
		document.getElementById(forecastdex).innerHTML=jsonforecast.rss.channel.item[n-1].title;
		document.getElementById(forecasttimedex).innerHTML=jsonforecast.rss.channel.item[n-1].pubDate.substring(0,17);
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
