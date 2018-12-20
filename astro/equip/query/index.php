<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
<?php include '../../publichead.html'; ?>
<?php include '../../ipaccess.php'; ?>
</head>
<body>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<?php include '../../header.html'; ?>
		<?php include '../nav.html'; ?>	
			<div class="jumbotron">
<!-- article -->
	<p><center><h3>在查询前，建议您阅读查询系统的使用说明</h1></center>
	<p>
	<div class="row clearfix" style="text-align:center;color:#fff;font-size:16px">
		<div class="col-md-6 column">
		<ul class="list-unstyled">
			<li><a class="btn btn-primary btn-block" href="./query.php?table=equipment&field=id"> 设备/图书数据查询:基于ID精确检索 </a></li>
			<li><a class="btn btn-primary btn-block" href="./query.php?table=equipment&field=type">设备/图书数据查询:基于设备类型检索</a></li>
			<li><a class="btn btn-primary btn-block" href="./query.php?table=equipment&field=state">设备/图书数据查询:基于设备状态检索</a></li>
			<li><a class="btn btn-primary btn-block" href="./query.php?table=equipment&field=value2">设备/图书数据查询:基于图书书名检索</a></li>
		</ul>
		</div>

		<div class="col-md-6 column">
		<ul class="list-unstyled">
			<li><a class="btn btn-primary btn-block" href="./query.php?table=records&field=id"> 变更记录查询:基于ID检索 </a></li>
			<li><a class="btn btn-primary btn-block" href="./query.php?table=records&field=name">变更记录查询:基于借用人检索</a></li>
			<li><a class="btn btn-primary btn-block" href="./query.php?table=records&field=state">变更记录查询:基于设备状态检索</a></li>
			<li><a class="btn btn-primary btn-block" href="./query.php?table=records&field=return_time">变更记录查询:基于应还日期检索</a></li>
		</ul>
		</div>
	<div>
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../footer.html'; ?>
</div>
</body>
</html>
