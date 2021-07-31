<?php
session_start();

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<link href="images/cont.css" rel="stylesheet" type="text/css" />
<script>
function switchSysBar(){ 
var locate=location.href.replace('cont.php','');
var ssrc=document.all("img1").src.replace(locate,'');
if (ssrc=="images/cont_19.gif")
{ 
document.all("img1").src="images/cont_1_19.gif";
document.all("frmTitle").style.display="none" 
} 
else
{ 
document.all("img1").src="images/cont_19.gif";
document.all("frmTitle").style.display="" 
} 
} 
</script>
</head>

<body>
<table width="100%" height="100%" border="0" cellpadding="0"
	cellspacing="0" class="cont_tab" bgcolor="#FFFFFF">
	<tr>
		<td width="180" id="frmTitle" align="center" valign="top" bgcolor="#FFFFFF"><iframe
			name="left" height="100%" width="180" src="mygo.php" frameborder="0"
			scrolling="no"> 浏览器不支持嵌入式框架，或被配置为不显示嵌入式框架。</iframe></td>
		<td width="8" valign="middle" onClick="switchSysBar()"><img
			src="images/cont_19.gif" width="8" height="64" name="img1" id="img1"
			title="" style="cursor: hand;"></td>
		<td align="center" valign="top" bgcolor="#FFFFFF">
		<table width="100%" height="100%" border="0" cellpadding="0"
			cellspacing="0" style="table-layout: fixed;">
			<tr>
				<td height="13" style="line-height: 13px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0"
					style="table-layout: fixed;">
					<tr>
						<td class="cont_tab_l">&nbsp;</td>
						<td class="cont_tab_m">&nbsp;</td>
						<td class="cont_tab_r">&nbsp;</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td bgcolor="#FFFFFF">
				<table width="100%" height="100%" border="0" cellpadding="0"
					cellspacing="0">
					<tr>
						<td bgcolor="#FFFFFF" valign="top"><iframe name="right" height="100%" width="100%"
							src="goumaijilu_list2.php" border="0" frameborder="0" scrolling="auto">
						浏览器不支持嵌入式框架，或被配置为不显示嵌入式框架。</iframe></td>
					</tr>
				</table>
				</td>
			</tr>
			
		</table>
		</td>
	</tr>
</table>
</body>
</html>
