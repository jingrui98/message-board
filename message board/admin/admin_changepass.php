<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="description" content="留言板后台管理" />
    <title>留言板后台管理</title>
	<link type="text/css" href="../css/guest.css" rel="stylesheet" />
</head>
<body>
    <h1>办公留言系统</h1>
    <div id="whatever">
        <ul class="tabbarlevel1" id="tabpage1"> 
            <li><a href="admin_index.php">留言管理</a></li>
            <li><a href="admin_setting.php">系统设置</a></li>
            <li class="selected"><a href="admin_changepass.php">修改密码</a></li>
			<li><a href="./login.php">退出管理</a></li> 
        </ul>
    </div>
    <div class="hackbox">
        <center>
            <form name="changepass" method="post" action="#">
                <table class="tb2">
                    <tr><th class="tbopt" align="left">&nbsp;　新密码:</th>
                        <td><input type="password" name="adminpass" value="" size="35" class="txt" /></td>
                    </tr>
                    <tr><th class="tbopt" align="left">&nbsp;重复密码:</th>
                        <td><input type="password" name="adminpass2" value="" size="35" class="txt" /></td>
                    </tr>
                </table>
            </form>
            <input type="submit" value="确定" onclick="return check_message()" />
        </center>
    </div>
</body>
</html>