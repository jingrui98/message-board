<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>留言板后台管理</title>
        <meta charset="utf-8" />
        <meta name="description" content="留言板后台管理" />
        <meta name="keywords" content="留言板,后台管理" />
        <link type="text/css" href="../css/guest.css" rel="stylesheet" />
    </head>
    <body>
        <h1>办公留言系统</h1>
        <div id="whatever">
            <ul class="tabbarlevel1" id="tabpage1"> 
                <li><a href="admin_index.php">留言管理</a></li>
                <li class="selected"><a href="admin_setting.php">系统设置</a></li>
                <li><a href="admin_changepass.php">修改密码</a></li>

                <li><a href="./login.php">退出管理</a></li> 
            </ul>
        </div>
        <div class="hackbox">

            <div class="newtid">
                <center>
                    <form action="#" method="post">
                        <table><tr><th align="right">系统信箱：</th><td><input type="text" name="sendmail" value="
                                                                          "></td></tr>
                            <tr><th align="right">管理员信箱：</th><td><input type="text" name="adminmail" value="
                                                                        "></td></tr>
                            <tr><th align="right">邮件发送方式：</th><td><select name="mailsetting">
                                        <option value="mail" selected="selected">mail() 函数发送</option>
                                        <option value="smtp" selected="selected">连接 smtp 服务器发送</option>
                                        <option value="false" selected="selected">不发送</option>
                                    </select></td></tr>

                            <tr><th align="right">smtp 服务器地址：</th><td><input type="text" name="smtpserver" value="
                                                                             "></td></tr>
                            <tr><th align="right">登陆 smtp 服务器的密码：</th><td><input type="text" name="smtppass" value="
                                                                                 "></td></tr>

                            <tr>
                                <th align="right">短信发送(仅限开通了飞信的中国移动用户)：</th>
                                <td>
                                    <select name="smssetting">
                                        <option value="true" selected="selected">发送</option>
                                        <option value="false" selected="selected">不发送</option>
                                    </select>
                                </td>
                            </tr>

                            <tr><th align="right">您的手机号码：</th><td><input type="text" name="sms" value="" /></td></tr>
                            <tr><th align="right">您的飞信密码：</th><td><input type="text" name="smspass" value="" /></td></tr>
                        </table> 
                        <input type="submit" value="保存" />
                    </form>
                </center>
            </div>
        </div>
    </body>
</html>