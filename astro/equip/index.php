<!doctype html>
<html>
<head>
<title>中国科学技术大学天文爱好者协会--装备部</title>
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
				<center><h2>欢迎访问中国科大天协装备部主页</h2></center>
				</p>
				<br />
				<br />
				<hr />
				<br />
				
				<p>
					<center><h1>中科大天文爱好者协会<br />装备管理规范（试行）</h1></center>
<h2>一、装备登记制度</h2>
<p>采用线上数据库方式记录装备数据，为每个设备分配唯一的ID并贴上标签。数据库管理员定期备份数据库，并及时更新设备数据，包括但不限于：将损坏的设备状态更新为维护中，将已报废或丢失的设备删除，添加新增的设备等。</p>
<p>设备记录采用如下格式：</p>
<div class="table-responsive">
	<table  class="table table-hover table-striped" style="text-align:center;">
		<thead>
			<tr><th style="text-align:center;">ID</th><th style="text-align:center;">设备类型</th><th style="text-align:center;">特征值1</th><th style="text-align:center;">特征值2</th><th style="text-align:center;">设备状态</th><th style="text-align:center;">备注</th></tr>
		</thead>
		<tbody>
			<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
		</tbody>
	</table>
</div>

<p>其中，特征值1为设备的品牌、在所属类型下的种类、书号等。例如，信达小黑150单筒望远镜应记录为“信达 牛反”或类似格式。特征值2为设备的参数或图书名称。例如，信达小黑150单筒望远镜（主镜700mm焦距）应记录为“D=150 F=700”或类似格式。设备状态有可借，待审核，已借出，维护中四种，一般情况下添加的新设备登记为可借。</p>
<p>设备ID是在添加设备时由系统自动生成，无法更改，并且不重复发号。例如，原ID为2的设备删除后，数据库中新加入的设备不会再分配2这个ID。</p>
<p>请系统管理员在管理设备数据时严格按照页面提示操作，不要随意刷新页面以免重复提交表单造成数据库混乱。另外，尽量避免使用@、#、$、%、&amp;、*、--等特殊符号，因其中部分符号或其组合在数据库系统中有特殊含义，可能引起数据出错。</p>
<h2>二、装备借用制度</h2>
<p>采用线上申请——线上审核——线下借用——线下归还——线上确认的流程借用设备。首先，设备借用者需要在天文协会网站统一身份认证系统注册并规范填写学号及姓名。然后利用查询系统找到所需借用的设备ID（注意：部分设备比如望远镜可能有其他的附属设备，如目镜等，借用时需分别提交）。接着在申请页面填写表单，递交申请，等待管理员审核，此时设备状态自动更新为待审核，其他人将不能再提交申请。管理员审核通过后会通过所填联系方式回复，提醒借用者何时到何处领取设备，此时设备状态更新为已借出；或者管理员审核后拒绝借出设备，设备状态回到可借。设备使用完后，由借用者联系装备部负责人归还设备，确认设备已归还后管理员在线上确认设备已归还，此时设备状态将再次变为可借。</p>
<h2>三、（附）查询系统使用说明</h2>
<p>查询系统共8个功能，分别介绍如下：</p>
<h3>1.设备/图书查询：基于ID</h3>
<p>在知道设备ID的情况下输入ID可直接查找到相应设备。</p>
<h3>2.设备/图书查询：基于类型</h3>
<p>从下拉列表中选择设备类型，可查询所有此类设备。</p>
<h3>3.设备/图书查询：基于状态</h3>
<p>从下拉列表中选择设备状态，可查询所有此状态设备。</p>
<h3>4.设备/图书查询：基于书名</h3>
<p>只用于图书查询，输入书名即可，用%作通配符，可代替0个或以上字符。例如，查找含有物理二字的图书，可输入%物理%。（由于网站所用的数据库不支持中文的全文索引，我只能做到这里了，大家见谅）</p>
<h3>5.变更记录查询：基于ID</h3>
<p>输入设备ID，可查询该设备的所有变动记录，按照记录编号降序排列。</p>
<h3>6.变更记录查询：基于借用人</h3>
<p>输入借用人姓名，可查看其借用设备的情况。</p>
<h3>7.变更记录查询：基于设备状态</h3>
<p>从下拉列表选择设备状态，可查看当前处于该状态下设备的最新一条变更记录。例如，选择查看已借出的设备，即可知道当前借出设备都在谁手上。</p>
<h3>8.变更记录查询：基于应还日期</h3>
<p>选择日期（默认当天），可查看应还日期在所选日期之前的所有设备最新变更记录</p>
<h3>一些说明</h3>
<p>为保护大家的隐私，查询系统中不显示借用人的学工号，但是在管理界面是可以看到学工号的。</p>
				</p>
				<p>
				<center><h3>装备部设备及书籍列表</h3></center>
				<div class="table-responsive">
				<table  class="table table-hover table-striped" style="text-align:center;">
					<thead><tr><th style="text-align:center;">ID</th><th style="text-align:center;">设备类型</th><th style="text-align:center;">特征值1</th><th style="text-align:center;">特征值2</th><th style="text-align:center;">设备状态</th><th style="text-align:center;">备注</th></tr></thead>
					<tbody>
<?php
	require "./mysqlconnection.php";
	if (mysqli_connect_errno()){
		echo "<p>连接数据库失败：",mysqli_connect_error(),"</p>\n";
	}else{
	
	//显示所有设备
	$result=$connection->query("SELECT * FROM equipment ORDER BY id DESC;");
	while($row=$result->fetch_object()){
		echo "<tr><td><a href=\"/astro/equip/detail/index.php?id=",$row->id,"\" >",$row->id,"</a></td><td>",$row->type,"</td><td>",$row->value1,"</td><td>",$row->value2,"</td><td>",$row->state,"</td><td>",$row->remarks,"</td></tr>\n";
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
	<?php include '../footer.html'; ?>
</div>
</body>
</html>
