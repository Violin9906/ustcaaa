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
<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="glyphicon glyphicon-info-sign">&nbsp;天文知识</span></h3>
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
				
				
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../footer.html'; ?>
</div>
</body>
</html>
