<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
<?php include '../../../publichead.html'; ?>
<?php 
	session_start();
	if(!($_SESSION['stunb'])){
		header("Location: /astro/user/login.php?nextdo=%2Fastro%2Fequip%2Fmanage%2Freturn");
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
		<center><h3>
<?php	
	require "../../mysqlconnection.php";
	if (mysqli_connect_errno()){
		echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
	}else{
	
	//操作数据库
	$no=$connection->real_escape_string($_GET['no']);
	$operatestmt=$connection->prepare("SELECT * FROM records WHERE no=?;");
	$operatestmt->bind_param("i",$no);
	$operatestmt->execute();
	$operateresult=$operatestmt->get_result();
	$operaterow=$operateresult->fetch_object();
	$operateid=$operaterow->id;
	$equipment_result=$connection->query("SELECT * FROM equipment WHERE id='".$connection->real_escape_string($operateid)."';");
	$equipment_row=$equipment_result->fetch_object();
	if(($equipment_row->state)=='已借出'){
		$connection->query("UPDATE equipment SET state='可借' WHERE id='".$connection->real_escape_string($operateid)."';");
		$connection->query("INSERT INTO records(id,name,stunb,borrow_time,return_time,contact,remarks) VALUES('".$connection->real_escape_string($operaterow->id)."','".$connection->real_escape_string($operaterow->name)."','".$connection->real_escape_string($operaterow->stunb)."','".$connection->real_escape_string($operaterow->borrow_time)."','".$connection->real_escape_string($operaterow->return_time)."','".$connection->real_escape_string($operaterow->contact)."','原编号".$connection->real_escape_string($no)."的申请已于".$connection->real_escape_string(date("Y-m-d"))."归还设备，处理人是".$connection->real_escape_string($_SESSION['name'])."');");
		echo "操作成功！您可以继续处理其他设备";
	}else{
		echo "操作失败，该设备并未借出";
	}
	$equipment_result->close();
?>
		</h3></center>
	</div>
	<div class="table-responsive"><table  class="table table-hover table-striped" style="text-align:center;"><thead><tr><th style="text-align:center;">No.</th><th style="text-align:center;">ID</th><th style="text-align:center;">设备类型</th><th style="text-align:center;">特征值1</th><th style="text-align:center;">特征值2</th><th style="text-align:center;">借用人</th><th style="text-align:center;">借用人学工号</th><th style="text-align:center;">借出日期</th><th style="text-align:center;">应还日期</th><th style="text-align:center;">联系方式</th><th style="text-align:center;">备注</th></tr></thead><tbody>

<?php	
	//显示已借出申请
	$result1=$connection->query("SELECT * FROM records WHERE no IN (SELECT MAX(no) FROM records WHERE id IN (SELECT id FROM equipment WHERE state='已借出') GROUP BY id);");
	
	while($row1=$result1->fetch_object()){
		$result2=$connection->query("SELECT * FROM equipment WHERE id='".$connection->real_escape_string($row1->id)."';");
		$row2=$result2->fetch_object();
		echo "<tr><td>",$row1->no,"</td><td><a href=\"/astro/equip/detail/index.php?id=",$row1->id,"\" >",$row1->id,"</a></td><td>",$row2->type,"</td><td>",$row2->value1,"</td><td>",$row2->value2,"</td><td>",$row1->name,"</td><td>",$row1->stunb,"</td><td>",$row1->borrow_time,"</td><td>",$row1->return_time,"</td><td>",$row1->contact,"</td><td>",$row1->remarks,"</td><td><a href=\"./return.php?no=",$row1->no,"\" >确认设备已归还</a></td></tr>\n";			
		$result2->close();
	}
	$result1->close();
	$operateresult->close();
	$operatestmt->close();
	$connection->close();
	}
	
?>
		</tbody>
	</table>
	
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../../footer.html'; ?>
</div>
</body>
</html>
