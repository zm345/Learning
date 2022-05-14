<?php
	//连接数据库
	require "conn.php";

	// 连接mysql
    $link = @mysqli_connect("localhost","root","root") or die("提示：数据库连接失败！");
    // 选择数据库
    mysqli_select_db($link,"db_database01");
    // 编码设置
    mysqli_set_charset($link,'utf8');

    $id = $_GET['id'];
	//编写查询sql语句
	$sql = "SELECT * FROM `phpuser` WHERE `id`=$id";
	//执行查询操作、处理结果集
	$result = mysqli_query($link, $sql);
	
	if (!$result) {
	    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
	}
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	if (!$data) {
		//输出提示，跳转到首页
		echo "没有这条信息！<br><br>";
		header('Refresh: 3; url=index.php');  //3s后跳转
		exit();
	}
	
	//将二维数数组转化为一维数组
	foreach ($data as $key => $value) {
	  foreach ($value as $k => $v) {
	    $arr[$k]=$v;
	  }
	}
	
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>学生个人信息系统</title>
	</head>
	<body>
		<!--输出定制表单-->
		<div class="box">
			<h2>搜索学生信息</h2>
			<div class="add">
				<form action="ex01b.php" method="post" enctype="multipart/form-data">
					<table border="1" style="border-collapse: collapse;border: 1px solid  #7b7b7b"> 
						<tr>
							<th>姓名：</th>
							<td><input type="text" name="name" size="5" value="<?php echo $arr["name"] ?>" readonly="readonly"></td>
						</tr>
						<tr>
							<th>性别：</th>
							<td><input type="text" name="sex" size="25" value="<?php echo $arr["sex"] ?>" readonly="readonly"></td>
						</tr>
						<tr>
							<th>爱好：</th>
							<td><input type="text" name="hobby" size="25" value="<?php echo $arr["hobby"] ?>" readonly="readonly"></td>
						</tr>
						<tr>
							<th>地址：</th>
							<td><input type="text" name="address" size="25" value="<?php echo $arr["address"] ?>" readonly="readonly"></td>
						</tr>
						<tr>
							<th>备注：</th>
							<td><input type="text" name="beizhu" size="25" value="<?php echo $arr["beizhu"] ?>" readonly="readonly"></td>
						</tr>
						
							<td>
								<input type="button" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="确定">
							</td>
						</tr>
					</table>
					
				
				</form>
			</div>
		</div>
	</body>
</html>