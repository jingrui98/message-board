<?php
	//删除留言页面
	
	//接收get过来的留言id信息
	$mid = $_GET['message_id'];
	
	$conn = new mysqli("localhost", "root", "", "messages");
	if($conn->connect_error){
		die("连接失败: " . $conn->connect_error);
	} 
	mysqli_set_charset($conn,'utf8');
	$sqla = "delete from guestmessage where id=".$mid;//删除留言
	$sqlb = "delete from guestback where message_id=".$mid;//删除此留言回复
	$qrya = mysqli_query($conn,$sqla);
	$qryb = mysqli_query($conn,$sqlb);
	if($qrya&&$qryb){
		$js = <<<eof
			<script>
				alert("删除成功");
				location.href="admin_index.php";//页面重定向
			</script>
eof;
		echo $js;//输出变量就会执行js代码
	}else{
		$js = <<<eof
			<script>
				alert("删除失败");
				location.href="admin_index.php";//页面重定向
			</script>
eof;
		echo $js;
	}
?>