<?php
session_start();

?>
<html>
<head>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF">

<table width="100%" height="210" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#D9E9FF" style="border-collapse:collapse">  
  <TBODY>
    <TR 
  align=middle bgColor=#ffffff>
      <td colspan="4" bgColor=#87BBEF><strong>系统基本信息</strong></td>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD width="14%" align="left" valign="bottom" >当前用户：</TD>
      <TD width="37%"  align="left" valign="bottom" ><font class="t4"><?php echo $_SESSION['username'];?></font></TD>
      <TD width="9%"  align="left" valign="bottom" >您的权限：</TD>
      <TD width="40%"  align="left" valign="bottom" ><?php echo $_SESSION['cx'];?></TD>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD height="38" align="left" valign="bottom"  >当前日期：</TD>
      <TD  align="left" valign="bottom" ><?php echo date("Y-m-d")?></TD>
      <TD align="left" valign="bottom" >您的IP：</TD>
      <TD  align="left" valign="bottom" ><?php echo $_SERVER["REMOTE_ADDR"];?></TD>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD align="left" valign="bottom"  >浏览器版本：</TD>
      <TD  align="left" valign="bottom" ><font class="t41"><?php echo $_SERVER['HTTP_USER_AGENT'];?></font></TD>
      <TD align="left" valign="bottom" >服务器域名：</TD>
      <TD  align="left" valign="bottom" ><font class="t41"><?php echo  $_SERVER['SERVER_NAME'] ?></font></TD>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD height="43" align="left" valign="bottom"  >服务器类型及版本号：</TD>
      <TD  align="left" valign="bottom" ><font class="t41"><?php echo php_uname() ;?></font></TD>
      <TD align="left" valign="bottom" >开发日期：</TD>
      <TD  align="left" valign="bottom" ><?php echo date("Y-m-d")?></TD>
    </TR>
  </TBODY>
</TABLE>

<p></p>
</BODY>
</HTML>
