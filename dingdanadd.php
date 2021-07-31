<?php
session_start();
include_once 'conn.php';
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('对不起，请您先登录！');location.href='index.php';</script>";
	exit;
 }
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$dingdanhao=$_POST["dingdanhao"];$jine=$_POST["jine"];$dingdanneirong=$_POST["dingdanneirong"];$yonghuming=$_POST["yonghuming"];$xingming=$_POST["xingming"];$youjidizhi=$_POST["youjidizhi"];$youbian=$_POST["youbian"];$dianhua=$_POST["dianhua"];$kuaidileixing=$_POST["kuaidileixing"];$kuaidifeiyong=$_POST["kuaidifeiyong"];
	//ischongfu("select id from dingdan where dingdanhao='".$dingdanhao."'");
	$sql="insert into dingdan(dingdanhao,jine,dingdanneirong,yonghuming,xingming,youjidizhi,youbian,dianhua,kuaidileixing,kuaidifeiyong) values('$dingdanhao','$jine','$dingdanneirong','$yonghuming','$xingming','$youjidizhi','$youbian','$dianhua','$kuaidileixing','$kuaidifeiyong') ";
	mysql_query($sql);
	$sql="update goumaijilu set issh='是' where goumairen='".$_SESSION["username"]."'";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');location.href='gwc.php';</script>";
}
?>
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>颖弟书城</title>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.STYLE9 {color: #000000}
-->
</style>
</head>
<script language="javascript">
	function check()
{
	if(document.form1.dingdanhao.value==""){alert("请输入订单号");document.form1.dingdanhao.focus();return false;}if(document.form1.jine.value==""){alert("请输入金额");document.form1.jine.focus();return false;}if(document.form1.dingdanneirong.value==""){alert("请输入订单内容");document.form1.dingdanneirong.focus();return false;}if(document.form1.yonghuming.value==""){alert("请输入用户名");document.form1.yonghuming.focus();return false;}if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}if(document.form1.youjidizhi.value==""){alert("请输入邮寄地址");document.form1.youjidizhi.focus();return false;}if(document.form1.youbian.value==""){alert("请输入邮编");document.form1.youbian.focus();return false;}if(document.form1.dianhua.value==""){alert("请输入电话");document.form1.dianhua.focus();return false;}if(document.form1.kuaidifeiyong.value==""){alert("请输入快递费用");document.form1.kuaidifeiyong.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1280" height="1299" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="1280" height="685" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><?php include_once 'qtleft.php';?></td>
            <td><table id="__01" width="1025" height="685" border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table id="__01" width="1025" height="421" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="1025" height="51" background="qtimages/a1.gif"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="4%" height="20">&nbsp;</td>
                        <td width="86%"><span class="ggtile">购物车</span></td>
                        <td width="10%" valign="bottom">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="1025" height="353" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="14" background="qtimages/11_02_02_02_02_01.gif">&nbsp;</td>
                        <td width="993" height="653" valign="top">
                          <?php
	$sql="select * from goumaijilu where goumairen='".$_SESSION["username"]."' and issh='否'";
	$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		 if($rowscount==0)
		 {
		 	$ze=0;
			$ddnr="";
		 }
		 else
		 {
		 	 for($i=0;$i<$rowscount;$i++)
			 {
			 	$ze=$ze+mysql_result($query,$i,jiage)*mysql_result($query,$i,shuliang);
				$ddnr=$ddnr."图书编号：".mysql_result($query,$i,shangpinbianhao)."，件数：".mysql_result($query,$i,shuliang).";\n";
			 }
		 }
?>
</p>
                        <form id="form1" name="form1" method="post" action="">
                          <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">
                            <tr>
                              <td>订单号：</td>
                              <td><input name='dingdanhao' type='text' id='dingdanhao' value='<?php echo makefilename2();?>' style='border:solid 1px #000000; color:#666666' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>金额：</td>
                              <td><input name='jine' type='text' id='jine' value='<?php echo $ze?>' style='border:solid 1px #000000; color:#666666' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>订单内容：</td>
                              <td><textarea name='dingdanneirong' cols='50' rows='8' id='dingdanneirong' style='border:solid 1px #000000; color:#666666'><?php echo $ddnr?></textarea>
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>用户名：</td>
                              <td><input name='yonghuming' type='text' id='yonghuming' value='<?php echo  $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>姓名：</td>
                              <td><input name='xingming' type='text' id='xingming' value='<?php echo  $_SESSION['xm'];?>' style='border:solid 1px #000000; color:#666666' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>邮寄地址：</td>
                              <td><input name='youjidizhi' type='text' id='youjidizhi' value='<?php echo  $_SESSION['dz'];?>' size='50' style='border:solid 1px #000000; color:#666666'>
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>邮编：</td>
                              <td><input name='youbian' type='text' id='youbian' value='' style='border:solid 1px #000000; color:#666666' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>电话：</td>
                              <td><input name='dianhua' type='text' id='dianhua' value='<?php echo  $_SESSION['dh'];?>' style='border:solid 1px #000000; color:#666666' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>快递类型：</td>
                              <td><p>
                                  <input name="kuaidileixing" type="radio" value="快递送货10" checked="checked" onclick="javascript:document.form1.kuaidifeiyong.value='10'" />
                                快递送货<U>[支持: 申通、圆通、汇通、中通等, 一般1-3天到货, 收费10元]</U></p>
                                  <p>
                                    <input type="radio" name="kuaidileixing" value="邮政EMS15" onclick="javascript:document.form1.kuaidifeiyong.value='15'" />
                                    邮政EMS<U>[EMS 国内网点齐全, 一般1-3天到货, 收费15元]</U></p></td>
                            </tr>
                            <tr>
                              <td>快递费用：</td>
                              <td><input name='kuaidifeiyong' type='text' id='kuaidifeiyong' value='10' style='border:solid 1px #000000; color:#666666' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input type="hidden" name="addnew" value="1" />
                                  <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
                                  <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
                            </tr>
                          </table>
                        </form>
                        <p>&nbsp;</p>
                        <?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，该订单号已经存在，请换其他订单号!');history.back();</script>";
		}
		
	}
?>
                        </td>
                        <td width="18" background="qtimages/11_02_02_02_02_03.gif">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/11_02_02_02_03.gif" width="1025" height="17"></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td width="1280" height="141" background="qtimages/11_03.gif"><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>

