<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会</title>
<?php include './publichead.html'; ?>
</head>
<body>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php include './header.html'; ?>
		<?php include './nav.html'; ?>	
			<div class="jumbotron">
<!-- article -->			
<h2><center>欢迎访问中国科大天文爱好者协会网站</center></h2>
<br />
<br />
<br />

<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><span class="glyphicon glyphicon-bullhorn">&nbsp;公告板</span></h3>
</div>
<div class="panel-body">
<table style="width:100%">
<tbody id="notice-panel">
</tbody>
</table>
</div>
</div>

<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="glyphicon glyphicon-bookmark">&nbsp;最新文章</span></h3>
</div>
<div class="panel-body">
<table style="width:100%">
<tbody id="article-panel">
</tbody>
</table>
</div>
</div>

<div class="panel panel-success">
<div class="panel-heading">
<h3 class="panel-title"><span class="glyphicon glyphicon-share-alt">&nbsp;快速导航</span></h3>
</div>
<div class="panel-body">
<ul class="list-group">
<li class="list-group-item"><a href='/astro/user'>			<span class="glyphicon glyphicon-log-in">&nbsp;登录</span></a></li>
<li class="list-group-item"><a href='/astro/signin'>			<span class="glyphicon glyphicon-user">&nbsp;注册</span></a></li>
<li class="list-group-item"><a href='/wordpress/'>				<span class="glyphicon glyphicon-list-alt">&nbsp;My天协博客平台</span></a></li>
<li class="list-group-item"><a href='/astro/about/apod.php'>	<span class="glyphicon glyphicon-picture">&nbsp;每日一天文图</span></a></li>
<li class="list-group-item"><a href='/astro/about/weather.php'>	<span class="glyphicon glyphicon-cloud">&nbsp;科大天气预报</span></a></li>
<li class="list-group-item"><a href='https://stellarium-web.org/'>	<span class="glyphicon glyphicon-globe">&nbsp;Stellarium<span class="small" style="vertical-align:super">web</span></span></a><span class="text-muted">&nbsp;注意流量消耗</span></li>
<li class="list-group-item"><a href='/astro/equip'>				<span class="glyphicon glyphicon-compressed">&nbsp;装备管理与租借</span></a></li>
</ul>
</div>
</div>



<!-- 解析RSS -->
<script type='text/javascript' src='/astro/xml2json.js'></script>
<script>
//公告
var oxmlnotice=new XMLHttpRequest();
var urlnotice="/wordpress/index.php/feed/?tag=notice";
oxmlnotice.open("GET",urlnotice,false);
oxmlnotice.send(null);
var rssnotice=oxmlnotice.responseText;
var x2js=new X2JS();
var jsonnotice=x2js.xml_str2json(rssnotice);

console.log(jsonnotice);

var noticenum=jsonnotice.rss.channel.item.length;
if(!(noticenum)){
	document.getElementById('notice-panel').innerHTML+='<tr><td><a href="#" id=notice1></a></td><td style="text-align:right"><span id=noticetime1 class="text-muted"></span></td></tr>';
	document.getElementById('notice1').href=jsonnotice.rss.channel.item.link;
	document.getElementById('notice1').innerHTML=jsonnotice.rss.channel.item.title;
	document.getElementById('noticetime1').innerHTML=jsonnotice.rss.channel.item.pubDate.substring(0,17);
}else{
	for(var n=1;n<=noticenum;n++){
		var noticedex="notice"+n;
		var noticetimedex="noticetime"+n;
		document.getElementById('notice-panel').innerHTML+='<tr><td><a href="#" id='+noticedex+'></a></td><td style="text-align:right"><span id='+noticetimedex+' class="text-muted"></span></td></tr>';
		document.getElementById(noticedex).href=jsonnotice.rss.channel.item[n-1].link;
		document.getElementById(noticedex).innerHTML=jsonnotice.rss.channel.item[n-1].title;
		document.getElementById(noticetimedex).innerHTML=jsonnotice.rss.channel.item[n-1].pubDate.substring(0,17);
	}
}

//文章
var oxmlarticle=new XMLHttpRequest();
var urlarticle="/wordpress/index.php/feed/";
oxmlarticle.open("GET",urlarticle,false);
oxmlarticle.send(null);
var rssarticle=oxmlarticle.responseText;
var x2js=new X2JS();
var jsonarticle=x2js.xml_str2json(rssarticle);

console.log(jsonarticle);

var articlenum=jsonarticle.rss.channel.item.length;
if(!(articlenum)){
	document.getElementById('article-panel').innerHTML+='<tr><td><a href="#" id=article1></a></td><td style="text-align:right"><span id=articletime1 class="text-muted"></span></td></tr>';
	document.getElementById('article1').href=jsonarticle.rss.channel.item.link;
	document.getElementById('article1').innerHTML=jsonarticle.rss.channel.item.title;
	document.getElementById('articletime1').innerHTML=jsonarticle.rss.channel.item.pubDate.substring(0,17);
}else{
	for(var n=1;n<=articlenum;n++){
		var articledex="article"+n;
		var articletimedex="articletime"+n;
		document.getElementById('article-panel').innerHTML+='<tr><td><a href="#" id='+articledex+'></a></td><td style="text-align:right"><span id='+articletimedex+' class="text-muted"></span></td></tr>';
		document.getElementById(articledex).href=jsonarticle.rss.channel.item[n-1].link;
		document.getElementById(articledex).innerHTML=jsonarticle.rss.channel.item[n-1].title;
		document.getElementById(articletimedex).innerHTML=jsonarticle.rss.channel.item[n-1].pubDate.substring(0,17);
	}
}

</script>
<!-- /article -->			
			</div>
		</div>
	</div>
	<?php include './footer.html'; ?>
</div>
</body>
</html>