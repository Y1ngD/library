<?php 
include_once 'conn.php';
session_start();

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="select id from yonghuzhuce where zhanghao='".$zhanghao."'";
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	if($rowscount>0)
	{
		echo "<script>javascript:alert('对不起，该账号已经存在，请换其他账号再试！！');history.back();</script>";
	}
	else
	{
		$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
		mysql_query($sql);
		
		echo "<script>javascript:alert('注册成功!请待管理员审核后方可正常登录！');location.href='index.php';</script>";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>颖弟书城</title>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
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
                        <td width="86%"><span class="ggtile">用户注册</span></td>
                        <td width="10%" valign="bottom">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="1025" height="353" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="14" background="qtimages/11_02_02_02_02_01.gif">&nbsp;</td>
                        <td width="993" height="653" valign="top">
						
					<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#ADCEEF" style="border-collapse:collapse">
                              <form name="form1" method="post" action="" onSubmit="return checkform();">
                                <tr>
                                  <td width="10%">账号：</td>
                                  <td colspan="2"><input name='zhanghao' type='text' id='zhanghao' value='' onblur='checkform()' /> 
                                    &nbsp;* <label id='clabelzhanghao' /></td>
                                </tr>
                                <tr>
                                  <td>密码：</td>
                                  <td width="41%"><input name='mima' type='password' id='mima' value='' onblur='checkform()' />
                                    <label id='clabelmima' /> &nbsp;*
                                   </td>
                                  <td width="49%">确认密码：
                                    <input name='mima2' type='password' id='mima2' value='' onblur='checkform()' />  <label id='clabelmima2' /></td>
                                </tr>
                                <tr>
                                  <td>姓名：</td>
                                  <td colspan="2"><input name='xingming' type='text' id='xingming' value=''  onblur='checkform()' /> <label id='clabelxingming' />
                                    &nbsp;*</td>
                                </tr>
                                <tr>
                                  <td>性别：</td>
                                  <td colspan="2"><select name='xingbie' id='xingbie'>
                                      <option value="男">男</option>
                                      <option value="女">女</option>
                                  </select></td>
                                </tr>
                                <tr>
                                  <td>地址：</td>
                                  <td colspan="2"><input name='diqu' type='text' id='diqu' value='' size='50'  onblur='checkform()' /></td>
                                </tr>
                                <tr>
                                  <td>电话：</td>
                                  <td colspan="2"><input name='Email' type='text' id='Email' value='' onblur='checkform()' />
                                    &nbsp;* <label id='clabelEmail' /></td>
                                </tr>
                                <tr>
                                  <td>照片：</td>
                                  <td colspan="2"><input name='zhaopian' type='text' id='zhaopian' value='' size='50'  onblur='checkform()' />
                                    &nbsp;* <a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a> <label id='clabelzhaopian' /></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2"><input type="hidden" name="addnew" value="1" />
                                      <input type="submit" name="Submit" value="注册" />
                                      <input type="reset" name="Submit2" value="重置" /></td>
                                </tr>
                              </form>
                            </table>
					
					
					
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

<script language=javascript src='js/ajax.js'></script>
<script language=javascript >  
 
 function checkform(){  
var zhanghaogobj = document.getElementById("zhanghao");  
if(zhanghaogobj.value==""){  
document.getElementById("clabelzhanghao").innerHTML="&nbsp;&nbsp;<font color=red>请输入账号</font>";  
return false;  
}else{
document.getElementById("clabelzhanghao").innerHTML="  ";  
}  
  
var zhanghaogobj = document.getElementById("zhanghao");  
if(zhanghaogobj.value!=""){  
var ajax = new AJAX();
ajax.post("checkno.php?table=yonghuzhuce&col=zhanghao&value="+zhanghaogobj.value+"") 
var msg = ajax.getValue();
if(msg.indexOf('Y')>-1){
document.getElementById("clabelzhanghao").innerHTML="&nbsp;&nbsp;<font color=red>账号已存在</font>";  
return false;
}else{document.getElementById("clabelzhanghao").innerHTML="  ";  
}  
}  
var mimaobj = document.getElementById("mima");  
if(mimaobj.value==""){  
document.getElementById("clabelmima").innerHTML="&nbsp;&nbsp;<font color=red>请输入密码</font>";  
return false;  
}else{
document.getElementById("clabelmima").innerHTML="  ";  
}  

var mima2obj = document.getElementById("mima2");  
if(mima2obj.value==""){  
document.getElementById("clabelmima2").innerHTML="&nbsp;&nbsp;<font color=red>请再次输入密码</font>";  
return false;  
}else{
document.getElementById("clabelmima2").innerHTML="  ";  
}

if(mima2obj.value!=mimaobj.value){  
document.getElementById("clabelmima2").innerHTML="&nbsp;&nbsp;<font color=red>两次密码输入不一致</font>";  
return false;  
}else{
document.getElementById("clabelmima2").innerHTML="  ";  
}
 
  
var xingmingobj = document.getElementById("xingming");  
if(xingmingobj.value==""){  
document.getElementById("clabelxingming").innerHTML="&nbsp;&nbsp;<font color=red>请输入姓名</font>";  
return false;  
}else{
document.getElementById("clabelxingming").innerHTML="  ";  
}  


var zhaopianobj = document.getElementById("zhaopian");  
if(zhaopianobj.value==""){  
document.getElementById("clabelzhaopian").innerHTML="&nbsp;&nbsp;<font color=red>请输入照片</font>";  
return false;  
}else{
document.getElementById("clabelzhaopian").innerHTML="  ";  
}  

return true;   
}   
//popheight=450;
</script>  


