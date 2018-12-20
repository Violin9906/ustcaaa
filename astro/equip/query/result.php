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
	<center><h3>查询结果</h3></center><br />
	<?php 
		require "../mysqlconnection.php";
		$table=$connection->real_escape_string($_GET['table']);
		$field=$connection->real_escape_string($_GET['field']);
		if($table=='equipment' and $field=='id'){
			$id=$_POST['id'];
			
			if (mysqli_connect_errno()){
				echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
			}else{
				$id=$connection->real_escape_string($id);
				$stmt=$connection->prepare("SELECT * FROM equipment WHERE id=?;");
				$stmt->bind_param("i",$id);
				$stmt->execute();
				$result=$stmt->get_result();
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">设备类型</th><th style=\"text-align:center;\">特征值1</th><th style=\"text-align:center;\">特征值2</th><th style=\"text-align:center;\">设备状态</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				while($row=$result->fetch_object()){
					
					echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
					
				}
				echo "</tbody></table></div>\n";
				$result->close();
				$stmt->close();
				$connection->close();
			}
		}
		if($table=='equipment' and $field=='type'){
			$type=$_POST['type'];
			
			if (mysqli_connect_errno()){
				echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
			}else{
				$type=$connection->real_escape_string($type);
				$stmt=$connection->prepare("SELECT * FROM equipment WHERE type=?;");
				$stmt->bind_param("s",$type);
				$stmt->execute();
				$result=$stmt->get_result();
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">设备类型</th><th style=\"text-align:center;\">特征值1</th><th style=\"text-align:center;\">特征值2</th><th style=\"text-align:center;\">设备状态</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				while($row=$result->fetch_object()){
					
					echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
					
				}
				echo "</tbody></table></div>\n";
				$result->close();
				$stmt->close();
				$connection->close();
			}
			
		}
		if($table=='equipment' and $field=='state'){
			$state=$_POST['state'];
			
			if (mysqli_connect_errno()){
				echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
			}else{
				$state=$connection->real_escape_string($state);
				$stmt=$connection->prepare("SELECT * FROM equipment WHERE state=?;");
				$stmt->bind_param("s",$state);
				$stmt->execute();
				$result=$stmt->get_result();
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">设备类型</th><th style=\"text-align:center;\">特征值1</th><th style=\"text-align:center;\">特征值2</th><th style=\"text-align:center;\">设备状态</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				while($row=$result->fetch_object()){
					
					echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
					
				}
				echo "</tbody></table></div>\n";
				$result->close();
				$stmt->close();
				$connection->close();
			}
		}
		if($table=='equipment' and $field=='value2'){
			$value2=$_POST['value2'];
			
			if (mysqli_connect_errno()){
				echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
			}else{
				
				$stmt=$connection->prepare("SELECT * FROM equipment WHERE type='图书' AND value2 LIKE ?;");
				$stmt->bind_param("s",$value2);
				$stmt->execute();
				$result=$stmt->get_result();
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">设备类型</th><th style=\"text-align:center;\">特征值1</th><th style=\"text-align:center;\">特征值2</th><th style=\"text-align:center;\">设备状态</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				while($row=$result->fetch_object()){
					
					echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
					
				}
				echo "</tbody></table></div>\n";
				$result->close();
				$stmt->close();
				$connection->close();
			}
		}
		if($table=='records' and $field=='id'){
			$id=$connection->real_escape_string($_POST['id']);
			
			if (mysqli_connect_errno()){
				echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
			}else{
				$stmt=$connection->prepare("SELECT * FROM records WHERE id=? ORDER BY no DESC;");
				$stmt->bind_param("i",$id);
				$stmt->execute();
				$result=$stmt->get_result();
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">No.</th><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">借用人</th><th style=\"text-align:center;\">借出日期</th><th style=\"text-align:center;\">应还日期</th><th style=\"text-align:center;\">联系方式</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				while($row=$result->fetch_object()){
					
					echo "<tr><td>",$row->no,"</td><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->name,"</td><td>",$row->borrow_time,"</td><td>",$row->return_time,"</td><td>",$row->contact,"</td><td>",$row->remarks,"</td></tr>\n";
					
				}
				echo "</tbody></table></div>\n";
				$result->close();
				$stmt->close();
				$connection->close();
			}
		}
		if($table=='records' and $field=='name'){
			$name=$connection->real_escape_string($_POST['name']);
			
			if (mysqli_connect_errno()){
				echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
			}else{
				$stmt=$connection->prepare("SELECT * FROM records WHERE name=? ORDER BY no DESC;");
				$stmt->bind_param("s",$name);
				$stmt->execute();
				$result=$stmt->get_result();
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">No.</th><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">借用人</th><th style=\"text-align:center;\">借出日期</th><th style=\"text-align:center;\">应还日期</th><th style=\"text-align:center;\">联系方式</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				while($row=$result->fetch_object()){
					
					echo "<tr><td>",$row->no,"</td><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->name,"</td><td>",$row->borrow_time,"</td><td>",$row->return_time,"</td><td>",$row->contact,"</td><td>",$row->remarks,"</td></tr>\n";
					
				}
				echo "</tbody></table></div>\n";
				$result->close();
				$stmt->close();
				$connection->close();
			}
		}
		if($table=='records' and $field=='state'){
			$state=$connection->real_escape_string($_POST['state']);
			
			if (mysqli_connect_errno()){
				echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
			}else{
				$stmt=$connection->prepare("SELECT * FROM records WHERE no IN (SELECT MAX(no) FROM records WHERE id IN (SELECT id FROM equipment WHERE state=?) GROUP BY id);");
				$stmt->bind_param("s",$state);
				$stmt->execute();
				$result=$stmt->get_result();
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">No.</th><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">借用人</th><th style=\"text-align:center;\">借出日期</th><th style=\"text-align:center;\">应还日期</th><th style=\"text-align:center;\">联系方式</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				while($row=$result->fetch_object()){
					
					echo "<tr><td>",$row->no,"</td><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->name,"</td><td>",$row->borrow_time,"</td><td>",$row->return_time,"</td><td>",$row->contact,"</td><td>",$row->remarks,"</td></tr>\n";
					
				}
				echo "</tbody></table></div>\n";
				$result->close();
				$stmt->close();
				$connection->close();
			}
		}
		if($table=='records' and $field=='return_time'){
			$return_time=$connection->real_escape_string($_POST['return_time']);
			
			if (mysqli_connect_errno()){
				echo "<p>连接数据库失败：",mysqli_connect_error(),"请联系管理员</p>\n";
			}else{
				$stmt=$connection->prepare("SELECT * FROM records WHERE return_time BETWEEN '1900-01-01' AND ? AND no IN (SELECT MAX(no) FROM records WHERE id IN (SELECT id FROM records) GROUP BY id);");
				$stmt->bind_param("s",$return_time);
				$stmt->execute();
				$result=$stmt->get_result();
				echo "<div class=\"table-responsive\"><table class=\"table table-hover table-striped\" style=\"text-align:center;\"><thead><tr><th style=\"text-align:center;\">No.</th><th style=\"text-align:center;\">ID</th><th style=\"text-align:center;\">借用人</th><th style=\"text-align:center;\">借出日期</th><th style=\"text-align:center;\">应还日期</th><th style=\"text-align:center;\">联系方式</th><th style=\"text-align:center;\">备注</th></tr></thead><tbody>\n";
				while($row=$result->fetch_object()){
					
					echo "<tr><td>",$row->no,"</td><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->name,"</td><td>",$row->borrow_time,"</td><td>",$row->return_time,"</td><td>",$row->contact,"</td><td>",$row->remarks,"</td></tr>\n";
					
				}
				echo "</tbody></table></div>\n";
				$result->close();
				$stmt->close();
				$connection->close();
			}
		}
	?>
<!-- /article -->
			</div>
		</div>
	</div>
	<?php include '../../footer.html'; ?>
</div>
</body>
</html>
