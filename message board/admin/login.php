<!DOCTYPE html>
<html>
<head>
    <title>后台登录</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type" 
	name=generator content="text/html"/>
    <style type="text/css">
        td{
            font-size: 10px;
        }
        .frm{
            border-bottom: #0066cc 1px solid; border-left: #0066cc 1px solid; border-top: #0066cc 1px solid; border-right: #0066cc 1px solid;
        }
    </style>
</head>
<body>
    <table border=0 cellspacing=0 cellpadding=0 width=600 align=center>
        <tr>
            <td valign=top width=24><img src="../images/loginleft.gif" width=24 height=433></td>
            <td valign=top width=547>
                <table border=0 cellspacing=0 cellpadding=0 width="100%">
                    <tr>
                        <td background=../images/logintop.gif><img src="../images/logintop.gif" width=4 height=130 /></td>
                    </tr>
                    <tr>
                        <td valign=top background="../images/loginmid.gif">
                            <table border=0 cellspacing=0 cellpadding=0 width="100%">
                                <tr>
                                    <td width="2%"><img src="../images/loginmid.gif" width=3 height=303></td>
                                    <td valign=top width="98%">
                                        <table border=0 cellspacing=0 cellpadding=0 width="100%">
                                        <img src="../images/loginfont.gif" width=225 height=83></table>
                                        <table border=0 cellspacing=0 cellpadding=0 width="100%">
                                            <tr>
                                                <td width="66%">&nbsp;</td>
                                                <td width="34%">&nbsp;</td>
											</tr>
                                            <tr>
                                                <td>
													<center><form action="./admin_index.php" method="post" name="adminlogin" id="adminlogin">
                                                        <br/><br />用户名：
                                                        <input name="admin_name" type="text" maxlength="20" />
                                                        <br /><br />　密码：
                                                        <input name="password" type="password" maxlength="20" />
                                                        <br /><br /><input name="submit" type="submit" value="提交"/>
                                                        <input name="b2" type="reset" value="重置" />
                                                    </form></center>
                                                </td>
                                                <td>
                                                    <table border=0 cellspacing=0 cellpadding=0 width="100%">
                                                        <tr><td>&nbsp;</td></tr>
													</table>
													<img src="../images/loginlock.gif" width=216 height=177 />
                                                </td>
                                            </tr>                                                          
                                        </table>
									</td>
                                </tr>                                          
                            </table>
                        </td>
                    </tr>                            
                </table>
            </td>
            <td valign=top width=29>
                <img src="../images/loginright.gif" width=22 height=433 />
            </td>
        </tr>            
    </table>
</body>
</html>