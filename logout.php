<meta charset="utf-8" />
<?php
//注销登录
session_start();
$_SESSION['username']="";
$_SESSION['cx']="";

echo "<script language='javascript'>alert('注销登录成功！');location='index.php';</script>";
?>