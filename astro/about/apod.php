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
	<center>
	<h3>每日一图:<span id="apodtitle"></span></h3>
	<img src="?" id="apodimg" class="img-responsive" alt="APOD，从NASA调用数据可能较慢，请耐心等待" /><br />
	</center>
	<span id="apodinfo"></span>
	<script>
		window.onload=function(){
			var oxmlapod=new XMLHttpRequest();
			var urlapod="https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY";
			oxmlapod.open("GET",urlapod,false);
			oxmlapod.send(null);
			var infoapod=oxmlapod.responseText;
			var jsonapod=eval("("+infoapod+")");
			showapod(jsonapod);
		}

		function showapod(jsonapod){
			document.images.apodimg.src=jsonapod.url;
			document.getElementById("apodinfo").innerHTML=jsonapod.explanation;
			document.getElementById("apodtitle").innerHTML=jsonapod.title;
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