<?php
	//收集表单信息页面
	
	//接收提交信息
	$method = $_POST['f_method'];
	$method_v = $_POST['f_method_v'];
	$title = $_POST['f_title'];
	$content = $_POST['f_content'];
	
	//连接数据库
	$conn = new mysqli("localhost", "root", "", "messages");
	
	//检测连接
	if($conn->connect_error){
		die("连接失败: " . $conn->connect_error);//输出并退出当前脚本
	} 
	//设置字符集
	mysqli_set_charset($conn,'utf8');
	
	//将sql语句发送到数据库执行
	$sql = "insert into guestmessage values(null,'$method','$method_v','$title','$content',now())";//now()函数给数据库添加时间信息
	$qry = mysqli_query($conn,$sql);
	
	if($qry){
		$js = <<<eof
			<script>
				alert("留言成功");
				location.href="add_show1.php";//页面重定向
			</script>
eof;
		echo $js;//输出变量就会执行js代码
	}else{
		$js = <<<eof
			<script>
				alert("留言失败");
				location.href="add_show1.php";//页面重定向
			</script>
eof;
		echo $js;
	}
?>