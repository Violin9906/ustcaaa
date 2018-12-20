<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
<?php include '../../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Fequip%2Fmanage%2Faudit");
		exit();
	}
	if('1'!=($_SESSION['equip'])){
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
	<div>
		<center><h3>已为您列出待审核的借用申请</h3></center>
	</div>
	<div class="table-responsive">
	<table  class="table table-hover table-striped" style="text-align:center;">
	<thead><tr><th style="text-align:center;">No.</th><th style="text-align:center;">ID</th><th style="text-align:center;">借用人</th><th style="text-align:center;">借用人学工号</th><th style="text-align:center;">借出日期</th><th style="text-align:center;">应还日期</th><th style="text-align:center;">联系方式</th><th style="text-align:center;">备注</th><th style="text-align:center;">操作1</th><th style="text-align:center;">操作2</th></tr>
	</thead><tbody>
<?php	
	require "../../mysqlconnection.php";
	if (mysqli_connect_errno()){
		echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
	}else{
	
	//显示待审核申请
	$result=$connection->query("SELECT * FROM records WHERE no IN (SELECT MAX(no) FROM records WHERE id IN (SELECT id FROM equipment WHERE state='待审核') GROUP BY id);");
	while($row=$result->fetch_object()){
		echo "<tr><td>",$row->no,"</td><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->name,"</td><td>",$row->stunb,"</td><td>",$row->borrow_time,"</td><td>",$row->return_time,"</td><td>",$row->contact,"</td><td>",$row->remarks,"</td><td><a href=\"./agree.php?no=",$row->no,"\" >同意</a></td><td><a href=\"./refuse.php?no=",$row->no,"\" >拒绝</a></td></tr>\n";			
	}
	$result->close();
	}
	
?>
		</tbody>
	</table>
	</div>
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../../footer.html'; ?>
</div>
</body>
</html>
