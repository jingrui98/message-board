<?php
	//修改留言界面
	
	//接收get过来的留言id信息
	$mid = $_GET['message_id'];
	
	//通过数据库获得具体留言信息
	$conn = new mysqli("localhost", "root", "", "messages");
	if($conn->connect_error){
		die("连接失败: " . $conn->connect_error);
	} 
	mysqli_set_charset($conn,'utf8');
	$sql = "select * from guestmessage where id=".$mid;
	$qry = mysqli_query($conn,$sql);

	//修改留言时，当前结果集里边只有一条信息结果，不用使用while循环
	$rzt = $qry->fetch_assoc();
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="留言板后台管理" />
        <meta name="keywords" content="留言板,后台管理" />

        <title>留言板后台管理</title>

        <link type="text/css" href="../css/guest.css" rel="stylesheet" />


    </head>
    <body>
        <h1>办公留言系统</h1>
        <div id="whatever">
            <ul class="tabbarlevel1" id="tabpage1"> 
                <li class="selected"><a href="admin_index.php">留言管理</a></li>
                <li><a href="admin_setting.php">系统设置</a></li>
                <li><a href="admin_changepass.php">修改密码</a></li>
                <li><a href="./login.php">退出管理</a></li> 
            </ul>
        </div>
        <div class="hackbox">

            
            <form action="admin_update_act.php" method="post" name="myform">
				<!--增加一个留言id表单域，可以通过表单提交此id值-->
				<input type="hidden" name="f_id" value="<?php echo $rzt['id']; ?>" />
                <h2>修改留言</h2>
                <div class="default_top_centercontent">
                    <table cellpadding="3" style="width: 100%">
                        <tr>
                            <td  class="default_update" width="25%">
                                联系方式：
                            </td>

                            <td class="default_update" width="75%">
                                <select name="f_method" class="upfang" >
                                    <option value="MSN" <?php if($rzt['method']=="MSN"){echo "selected";}?>
									>MSN</option>
                                    <option value="Email" <?php if($rzt['method']=="Email"){echo "selected";}?>
									>Email</option>
                                    <option value="QQ" <?php if($rzt['method']=="QQ"){echo "selected";}?>
									>QQ</option>
                                    <option value="mobile" <?php if($rzt['method']=="mobile"){echo "selected";}?>
									>手机</option>
                                </select>&nbsp;&nbsp;&nbsp;
                                <input type="text" name="f_method_v" id="method_v" value="<?php echo $rzt['method_v']; ?>" class="upfang"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="default_update">
                                留言标题：
                            </td>
                            <td class="default_update">
                                <input type="text" value="<?php echo $rzt['title']; ?>" size="55px;" class="upfang"
								name="f_title"/>
                            </td>

                        </tr>
                        <tr>
                            <td class="default_update">
                                留言内容：
                            </td>
                            <td class="default_update">
                                <textarea class="upfang" name="f_content"><?php echo $rzt['content']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  class="default_update" colspan="2">
                                <input name="submit" type="submit" value="修改" />
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </body>
</html>