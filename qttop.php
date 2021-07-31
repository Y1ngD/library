<meta charset="utf-8" />
<script language="javascript">
function loadimage(){ 
document.getElementById("randImage").src = "VerifyCode.asp?"+Math.random(); 
} 

function checklog()
{
if(document.userlog.username.value=="")
{
	alert("请输入用户名");
	document.userlog.username.focus();
	return false;
}
if(document.userlog.pwd1.value=="")
{
	alert("请输入密码");
	document.userlog.pwd1.focus();
	return false;
}
if(document.userlog.yzm.value=="")
{
	alert("请输入验证码");
	document.userlog.yzm.focus();
	return false;
}
}
</script>
<link href="css/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery1.3.2.js"></script>
<script type="text/javascript" src="js/banner.js"></script>
<table id="__01" width="1280" height="473" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><table id="__01" width="1280" height="92" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="qtimages/11_01_01_01.gif" width="98" height="92"></td>
                <td width="913" height="92"><div style="text-shadow:#CCCCCC 3px 0 0,#33CC33 0 1px 0,#33CC33 1px 0 0,#33CC33 0 -1px 0; font-size:28px;" >
                                                                             颖弟书城
                </div></td>
                <td><img src="qtimages/11_01_01_03.gif" width="269" height="92"></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td width="1280" height="47" background="qtimages/11_01_02.gif"><table width="85%" height="25" border="0" align="center" cellpadding="0" cellspacing="0" >
              <tr>
                <td align="center"><strong><a href="index.php">首页</a></strong></td>
                <td align="center"><strong><a href="news.php?lb=新书公告">新书公告</a></strong></td>
                <td align="center"><strong><a href="dx_detail.php?lb=系统简介">系统简介</a></strong></td>
                <td align="center"><strong><a href="shangpinxinxilisttp.php"><font  class="STYLE1">图书展示</font></a></strong></td>
                <td align="center"><strong><a href="news.php?lb=购物需知"><font  class="STYLE1">购物需知</font></a></strong></td>
                 <td align="center"><strong><a href="gwc.php">我的购物车</a></strong></td>
<!--                <td align="center"><strong><a href="news.php?lb=促销活动">促销活动</a></strong></td>
                 <td align="center"><strong><a href="lyblist.php">在线留言</a></strong></td>
-->               <td align="center"><strong><a href="userreg.php">用户注册</a></strong></td>
                <td align="center"><strong><a href="login.html"><font  class="STYLE1">后台</font></a></strong></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center" ><table width="1255" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
				<div id="focus">
              <ul>
			  <?php
			$sql="select  shouyetupian,id from xinwentongzhi where leibie='新书公告' and shouyetupian<>''  order by id desc limit 0,5";
			
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
for($i=0;$i<$rowscount;$i++)
{
		?>
                <li><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,1)?>"><img src="<?php echo mysql_result($query,$i,0)?>"  width="1255" height="280"  /></a></li>
              <?php
}
?>
              
              </ul>
            </div>
				</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td width="1280" height="47" background="qtimages/11_01_04.gif"><table width="1255" height="27" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="500" border="0" cellspacing="0" cellpadding="0">
                  <form action="news.php" method="post" name="formsearch" id="formsearch" >
                    <tr>
                      <td width="8%">&nbsp;</td>
                      <td width="10%">类别：</td>
                      <td width="14%"><select name="lb" style="width:80px; height:20px; border:solid 1px #000000; color:#666666">
                          <?php
								  $sql="select distinct(leibie) from xinwentongzhi";
								  $query=mysql_query($sql);
								$rowscount=mysql_num_rows($query);
								if($rowscount>0)
								{
								for($i=0;$i<$rowscount;$i++)
	 							{
								  ?>
                          <option value="<?php echo mysql_result($query,$i,"leibie")?>"><?php echo mysql_result($query,$i,"leibie")?></option>
                          <?php
								  }
								  }
								  ?>
                      </select></td>
                      <td width="9%" align="center">标题</td>
                      <td width="41%"><input name="biaoti" type="text" id="biaoti" size="20" style="width:200px; height:20px; border:solid 1px #000000; color:#666666" /></td>
                      <td width="18%"><input type="submit" name="Submit" value="站内搜索" /></td>
                    </tr>
                  </form>
                </table></td>
                <td><?php 
					if ($_SESSION['cx']=="" )
					{
				?>
                  <table height="30" border="0" cellpadding="0" cellspacing="0">
                    <form action="userlog_post.php" method="post" name="userlog" id="userlog">
                      <tr>
                        <td  height="30" align="left" >用户名
                          <input name="username" type="text" id="username" size="10" style=" height:19px; border:solid 1px #000000; color:#666666" />
                          密码
                          <input name="pwd1" type="password" id="pwd1" size="10" style=" height:19px; border:solid 1px #000000; color:#666666" />
                          权限
                          <select name="cx" id="cx">
                            <option value="注册用户">注册用户</option>
                            <option value="会员">会员</option>
                                                    </select>
                          <!--权限 
                            <select name="cx" id="cx" style="width:100px; height:20px; border:solid 1px #000000; color:#666666" >
                              <option value="注册用户">注册用户</option>
                            </select> -->
                          验证码
                          <input name="yzm" type="text" id="yzm" style=" height:20px; border:solid 1px #000000; color:#666666; width:50px" /></td>
                        <td align="left" style=" padding-left:3px; padding-right:3px;"><img alt="刷新验证码" onclick="this.src='code.php?time='+new Date().getTime();" src="code.php?time='+new Date().getTime();" style="cursor:pointer;" /></td>
                        <td align="left"><input type="submit" name="Submit3" value="登录" style=" border:solid 1px #000000; color:#666666; width:60px; height:20px;" onclick="return checklog();" />
                            <input type="button" name="Submit3" value="找回密码" onclick="javascript:location.href='zmm.php';" style=" border:solid 1px #000000; color:#666666;width:60px; height:20px; display:none" /></td>
                      </tr>
                    </form>
                  </table>
                  <?php 
							}
				  else
				  {
				 ?>
                  <table height="30" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="30" align="left" valign="middle">用户名:<?php echo $_SESSION['username']?>；您的权限: <?php echo $_SESSION['cx']?>
                          <input type="button" name="Submit2" value="退出" onclick="location.href='logout.php';"  style=" border:solid 1px #000000; color:#666666; width:60px; height:20px;" />
                          <input type="button" name="Submit2" value="个人后台" onclick="location.href='main.php';"  style=" border:solid 1px #000000; color:#666666; width:60px; height:20px;" /></td>
                    </tr>
                  </table>
                  <?php
				 }
				 ?></td>
              </tr>
            </table></td>
          </tr>
        </table>