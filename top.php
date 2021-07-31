<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="images/cont.css" rel="stylesheet" type="text/css" /></head>

<body><script>
function tick() {
var ye,mo,da
var hours, minutes, seconds, xfile;
var intHours, intMinutes, intSeconds;
var today;
today = new Date();
ye = today.getFullYear();
mo = today.getMonth()+1;
if (mo < 10) {
mo = "0"+mo;
}
da = today.getDate();
if (da < 10) {
da = "0"+da;
}
intHours = today.getHours();
intMinutes = today.getMinutes();
intSeconds = today.getSeconds();
if (intHours == 0) {
hours = "12:";
xfile = "PM";//午夜
} else if (intHours < 12) {
hours = intHours+":";
xfile = "AM";//上午
} else if (intHours == 12) {
hours = "12:";
xfile = "PM";//正午
} else {
intHours = intHours - 12
hours = intHours + ":";
xfile = "PM";//下午
}
if (intHours < 10) {
hours = "0"+intHours+":";
}
if (intMinutes < 10) {
minutes = "0"+intMinutes+":";
} else {
minutes = intMinutes+":";
}
if (intSeconds < 10) {
seconds = "0"+intSeconds+" ";
} else {
seconds = intSeconds+" ";
}
var color, size, face, out;
	var text = "black";
	var font_size = 1;
    var font_face = "Arial";
	color = (text)? text : "black";
	size = (font_size)? font_size : 1;
	face = (font_face)? font_face : "Arial";
timeString = "<font style='font-size:14px;'>";
timeString += ye+"-"+mo+"-"+da+"  ";
timeString += hours+minutes+seconds+" "+xfile+"&nbsp;&nbsp;&nbsp;";
Clock.innerHTML = timeString;
window.setTimeout("tick();", 100);
}
window.onload = tick;
</script>
<table width="100%" border="0" cellpadding="0" cellspacing="0"
	class="top_tab">
	<tr>
		<td align="left"><img src="images/2_03.gif" /></td>
		<td align="center" class="top_r">
		<table width="330" border="0" cellpadding="0" cellspacing="10">
			<tr>
			  <td height="16"><font color="#FFFFFF"><font id="Clock"  align=center>&nbsp; </font></font><a href="index.php" target="_top" ><font color="#FFFFFF"> 返回首页</font></a> <a href="logout.php" target="_top" ><font color="#FFFFFF"> 退出系统</font></a></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
		</td>
	</tr>
</table>

</body>
</html>
