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

<?php
$table=$_GET['table'];
$field=$_GET['field'];
if($table=='equipment' and $field=='id'){
	echo "<form action=\"./result.php?table=$table&field=$field\" method=\"POST\" class=\"form-horizontal\" role=\"form\">\n";
	echo "<div class=\"form-group\"><label for=\"id\" class=\"col-sm-2 control-label\">设备ID</label><div class=\"col-sm-10\"><input type=\"number\" min=\"1\" step=\"1\" name=\"id\" class=\"form-control\" id=\"id\"/></div></div>\n";
	echo "<div class=\"form-group\"><div class=\"col-sm-offset-2 col-sm-10\"><button type=\"submit\" class=\"btn btn-default\">提交</button></div></div>\n";
}
if($table=='equipment' and $field=='type'){
	echo "<form action=\"./result.php?table=$table&field=$field\" method=\"POST\" class=\"form-horizontal\" role=\"form\">\n";
	echo "<div class=\"form-group\"><label for=\"type\" class=\"col-sm-2 control-label\">设备类型</label><div class=\"col-sm-10\"><input type=\"text\" list=\"type_list\" name=\"type\" class=\"form-control\" id=\"type\"/></div></div>\n";
	echo "<div class=\"form-group\"><div class=\"col-sm-offset-2 col-sm-10\"><button type=\"submit\" class=\"btn btn-default\">提交</button></div></div>\n";
}
if($table=='equipment' and $field=='state'){
	echo "<form action=\"./result.php?table=$table&field=$field\" method=\"POST\" class=\"form-horizontal\" role=\"form\">\n";
	echo "<div class=\"form-group\"><label for=\"state\" class=\"col-sm-2 control-label\">设备状态</label><div class=\"col-sm-10\"><input type=\"text\" list=\"state_list\" name=\"state\" class=\"form-control\" id=\"state\"/></div></div>\n";
	echo "<div class=\"form-group\"><div class=\"col-sm-offset-2 col-sm-10\"><button type=\"submit\" class=\"btn btn-default\">提交</button></div></div>\n";
}
if($table=='equipment' and $field=='value2'){
	echo "<form action=\"./result.php?table=$table&field=$field\" method=\"POST\" class=\"form-horizontal\" role=\"form\">\n";
	echo "<div class=\"form-group\"><label for=\"value2\" class=\"col-sm-2 control-label\">全部或部分书名(%作通配符)</label><div class=\"col-sm-10\"><input type=\"text\" name=\"value2\" class=\"form-control\" id=\"value2\"/></div></div>\n";
	echo "<div class=\"form-group\"><div class=\"col-sm-offset-2 col-sm-10\"><button type=\"submit\" class=\"btn btn-default\">提交</button></div></div>\n";
}
if($table=='records' and $field=='id'){
	echo "<form action=\"./result.php?table=$table&field=$field\" method=\"POST\" class=\"form-horizontal\" role=\"form\">\n";
	echo "<div class=\"form-group\"><label for=\"id\" class=\"col-sm-2 control-label\">设备ID</label><div class=\"col-sm-10\"><input type=\"number\" min=\"1\" step=\"1\" name=\"id\" class=\"form-control\" id=\"id\"/></div></div>\n";
	echo "<div class=\"form-group\"><div class=\"col-sm-offset-2 col-sm-10\"><button type=\"submit\" class=\"btn btn-default\">提交</button></div></div>\n";
}
if($table=='records' and $field=='name'){
	echo "<form action=\"./result.php?table=$table&field=$field\" method=\"POST\" class=\"form-horizontal\" role=\"form\">\n";
	echo "<div class=\"form-group\"><label for=\"name\" class=\"col-sm-2 control-label\">借用人姓名</label><div class=\"col-sm-10\"><input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\"/></div></div>\n";
	echo "<div class=\"form-group\"><div class=\"col-sm-offset-2 col-sm-10\"><button type=\"submit\" class=\"btn btn-default\">提交</button></div></div>\n";
}
if($table=='records' and $field=='state'){
	echo "<form action=\"./result.php?table=$table&field=$field\" method=\"POST\" class=\"form-horizontal\" role=\"form\">\n";
	echo "<div class=\"form-group\"><label for=\"state\" class=\"col-sm-2 control-label\">设备状态</label><div class=\"col-sm-10\"><input type=\"text\" list=\"state_list\" name=\"state\" class=\"form-control\" id=\"state\"/></div></div>\n";
	echo "<div class=\"form-group\"><div class=\"col-sm-offset-2 col-sm-10\"><button type=\"submit\" class=\"btn btn-default\">提交</button></div></div>\n";
}
if($table=='records' and $field=='return_time'){
	echo "<form action=\"./result.php?table=$table&field=$field\" method=\"POST\" class=\"form-horizontal\" role=\"form\">\n";
	echo "<div class=\"form-group\"><label for=\"return_time\" class=\"col-sm-2 control-label\">应还日期在此日期之前</label><div class=\"col-sm-10\"><input type=\"date\" name=\"return_time\" class=\"form-control\" id=\"return_time\" value=\"".date("Y-m-d")."\" /></div></div>\n";
	echo "<div class=\"form-group\"><div class=\"col-sm-offset-2 col-sm-10\"><button type=\"submit\" class=\"btn btn-default\">提交</button></div></div>\n";
}
?>

<?php include '../type_list.html'; ?>
<?php include '../state_list.html'; ?>

<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../footer.html'; ?>
</div>
</body>
</html>
