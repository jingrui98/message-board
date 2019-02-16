<?php
	//连接数据库获得留言信息
	
	//连接数据库
	$conn = new mysqli("localhost", "root", "", "messages");
	
	//检测连接
	if($conn->connect_error){
		die("连接失败: " . $conn->connect_error);//输出并退出当前脚本
	} 
	//设置字符集
	mysqli_set_charset($conn,'utf8');
	
	//将sql语句发送到数据库执行
	$sql = "select * from guestmessage";
	$qry = mysqli_query($conn,$sql);
	
	//从资源结果集里边获得具体信息结果
	//while ($rzt = $qry->fetch_assoc()){
    //    print_r($rzt);
    //    echo "<br />";
    //}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>办公留言系统</title>

        <link type="text/css" href="./css/guest_add.css" rel="stylesheet" /> 


    </head>

    <body>
        <h1>办公留言系统</h1>
        <div class="container">

            <form id="contactform" name="contactform" class="rounded" method="post" action="add_show.php" name="message">
                <h3>给我留言</h3>

                <div class="field">
                    <label for="user_name">您的联系方式：</label>
                    <select name="f_method" class="lxfs">
                        <option value="MSN">MSN</option>
                        <option value="Email">Email</option>
                        <option value="QQ">QQ</option>
                        <option value="mobile">手机</option>
                    </select>
                    <input type="text" class="lxfs" name="f_method_v" id="user_name" value=""/>
                    <p class="hint">输入您的联系方式(MSN/Email/QQ/手机)</p>
                </div>

                <div class="field">
                    <label for="post_title">留言标题：</label>
                    <input type="text" class="input" name="f_title" id="post_title" />
                    <p class="hint">输入留言标题</p>
                </div>

                <div class="field">
                    <label for="post_info">留言内容：<br />(最多 70 字)</label>
                    <textarea class="input textarea" name="f_content" id="post_info"></textarea>
                    <p class="hint">输入留言内容</p>
                </div>

                <div class="field">
                    <label for="yzm"><a name="yzmtp">验证码：</a></label>
                    <img id="re_confirm" src="yanzhengma.png" class="yzm" />
                    <input type="text" class="yzm" name="yzm" id="yzm" />
                    <p class="hint">输入运算结果 <a title="看不清?" href="#yzmtp" >看不清?</a></p>
                </div>


                <input type="submit" name="Submit"  class="button" value="提交" onclick="return check_message()" />
                <br />请不要恶意骚扰，否则您的 IP 将会被添加到黑名单中<br />
            </form>

            <div class="fankui">
            <script type="text/javascript">
			function show_back(mid){
				//显示回复框div，通过dom获得div
				var mydiv = document.getElementById('huifu'+mid);
				mydiv.style.display = "block";
			}
			</script>
			<?php
				while($rzt = $qry->fetch_assoc()){
			?>
                <div class="content">
                    <p class="c_title"><span><?php echo $rzt['add_time']; ?></span><?php echo $rzt['title']; ?></p>
                    <p class="c_content" style="margin-bottom:20px;">
                        <?php echo $rzt['content']; ?>
                    </p>

                    <p class="back_btn_p">&nbsp;<!--利用js实现点击显示回复框-->
					<input type="button" value="回复" class="back_btn" style="float:right;" onclick="show_back(<?php echo $rzt['id']; ?>)"/>
                    </p>
                    <!--php语句区分不同的id,huifu1-->
                    <div class="huifu" id="huifu<?php echo $rzt['id']; ?>" style="display:none">
                        <p>回复：</p>
                        <div class="huifu_show">
							<form action="back_act.php" method="post">
								<!--制作一个表单域存放留言id信息，通过表单传递给回复使用,hidden同样有表单域作用，不占据页面空间、安全-->
								<input type="hidden" name="f_message_id" value="<?php echo $rzt['id']; ?>" />
								<input type="text" class="bk_content" name="f_back_content"/>
								<input type="submit" value="回复" class="back_btn" />
							</form>
                        </div>
                    </div>
					<!--回复内容开始-->
					<?php
					//针对当前留言查询具体回复内容
					$sqla = "select * from guestback where message_id=".$rzt['id'];
					$qrya = mysqli_query($conn,$sqla);
					//while循环依次输出$qrya资源结果集即回复内容
					$i = 1;
					while($rzta = $qrya->fetch_assoc()){
					?>
					<div class="back_content">
                        <strong><?php echo $i; ?> 楼</strong>
                        <div class="back_detail">
                            <div class="back_neirong"><?php echo $rzta['back_content']; ?></div>
                            <div class="back_time"><?php echo $rzta['back_time']; ?></div>
                        </div>
                    </div>
					<?php
						$i++;
					}
					?>
					<!--回复内容结束-->
                </div>
			<?php
				}
			?>
            </div>
        </div>
    </body>
</html>