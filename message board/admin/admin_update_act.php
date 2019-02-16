<?php
	//修改留言的表单接收页面
	
	//接收表单信息
	$method = $_POST['f_method'];
	$method_v = $_POST['f_method_v'];
	$title = $_POST['f_title'];
	$content = $_POST['f_content'];
	$mid = $_POST['f_id'];
	
	$conn = new mysqli("localhost", "root", "", "messages");
	if($conn->connect_error){
		die("连接失败: " . $conn->connect_error);
	} 
	mysqli_set_charset($conn,'utf8');
	$sql = "update guestmessage set method='$method',method_v='$method_v',title='$title',
	content='$content' where id='$mid'";
	$qry = mysqli_query($conn,$sql);
	if($qry){
		$js = <<<eof
			<script>
				alert("修改成功");
				location.href="admin_index.php";//页面重定向
			</script>
eof;
		echo $js;//输出变量就会执行js代码
	}else{
		$js = <<<eof
			<script>
				alert("修改失败");
				location.href="admin_index.php";//页面重定向
			</script>
eof;
		echo $js;
	}
?>