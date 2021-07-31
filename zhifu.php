<meta charset="utf-8" />
<?php
//验证登录信息

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$sql="update ".$_GET["biao"]." set iszf='是' where id=$id";
	
	 	mysql_query($sql);
	

		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('支付成功！');location.href='sy.php';</script>";
	
//}
?>