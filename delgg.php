<meta charset="utf-8" />
<?php
//验证登录信息

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$tablename=$_GET['tablename'];
	$lb=$_GET['lb'];
	//$userpass=md5($userpass);
	$sql="delete from $tablename where id=$id";
	//echo $sql;
	 	mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('删除成功！');location.href='xinwentongzhi_list.php?lb=".$lb."';</script>";
	
//}
?>