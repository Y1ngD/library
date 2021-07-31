<meta charset="utf-8" />
<?php
session_start();
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('对不起，请您先登录！');location.href='index.php';</script>";
	exit;
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" 

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>颖弟书城</title>
</head>

<frameset rows="90,*,20" cols="*" framespacing="0" frameborder="no" border="0">
  <frame src="top.php" name="topFrame" scrolling="no" noresize="noresize" id="topFrame" 

frameborder="0" />
  <frame src="cont2.php" name="mainFrame" id="mainFrame" frameborder="0" />
  <frame src="down.php" name="footFrame" id="footFrame" frameborder="0" />
</frameset>
<noframes><body>
</body>
</noframes></html>
