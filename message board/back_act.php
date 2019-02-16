<?php
	//接收回复表单页面
	
	//接收表单信息
	//print_r($_POST);
	$back_content = $_POST['f_back_content'];
	$message_id = $_POST['f_message_id'];
	
	//连接数据库
	$conn = new mysqli("localhost", "root", "", "messages");
	if($conn->connect_error){
		die("连接失败: " . $conn->connect_error);
	} 
	mysqli_set_charset($conn,'utf8');
	
	//回复信息写入数据库
	$sql = "insert into guestback values(null,'$back_content',now(),'$message_id')";
	$qry = mysqli_query($conn,$sql);
	
	if($qry){
		$js = <<<eof
			<script>
				alert("回复成功");
				location.href="add_show1.php";//页面重定向
			</script>
eof;
		echo $js;//输出变量就会执行js代码
	}else{
		$js = <<<eof
			<script>
				alert("回复失败");
				location.href="add_show1.php";//页面重定向
			</script>
eof;
		echo $js;
	}
?>