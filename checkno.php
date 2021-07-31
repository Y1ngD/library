<?php
//验证登录信息

include_once 'conn.php';
//if($_POST['submit']){
	$table=$_GET["table"];
	$col=$_GET["col"];
	$value=$_GET["value"];
	
	$sql="select * from $table where $col='$value'";
	
	 $query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
			echo "Y";
			}
			else
			{
			echo "N";
			}
	

	
//}
?>