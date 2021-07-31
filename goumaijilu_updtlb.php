<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$shangpinbianhao=$_POST["shangpinbianhao"];
    $shangpinmingcheng=$_POST["shangpinmingcheng"];
    $shangpinleibie=$_POST["shangpinleibie"];
    $jiage=$_POST["jiage"];
    $shuliang=$_POST["shuliang"];
    $jine=$_POST["jine"];
    $beizhu=$_POST["beizhu"];
    $goumairen=$_POST["goumairen"];
    
	//lixandonxgjixelxb
	$sql="update goumaijilu set shangpinbianhao='$shangpinbianhao',shangpinmingcheng='$shangpinmingcheng',shangpinleibie='$shangpinleibie',jiage='$jiage',shuliang='$shuliang',jine='$jine',beizhu='$beizhu',goumairen='$goumairen' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='goumaijilu_list2.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>修改购买记录</title>
<!--bixanjxiqxi-->
<link rel="stylesheet" href="css.css" type="text/css">
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="utf-8"></script>
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
<script language="javascript">
	function jejs(tt)
	{
			document.form1.jine.value=document.form1.jiage.value*document.form1.shuliang.value;
	}
</script>

<!--hxsglxiangdxongjxs-->
<body>
<p>修改购买记录： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from goumaijilu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
//lixanxdoxngcxhaxifxen
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>图书编号：</td><td><input name='shangpinbianhao' type='text' readonly id='shangpinbianhao' value='<?php echo mysql_result($query,0,shangpinbianhao);?>' /></td></tr>
      <tr><td>图书名称：</td><td><input name='shangpinmingcheng' type='text' readonly id='shangpinmingcheng' value='<?php echo mysql_result($query,0,shangpinmingcheng);?>' /></td></tr>
      <tr><td>图书类别：</td><td><input name='shangpinleibie' type='text' readonly id='shangpinleibie' value='<?php echo mysql_result($query,0,shangpinleibie);?>' /></td></tr>
      <tr><td>价格：</td><td><input name='jiage' type='text' readonly id='jiage' value='<?php echo mysql_result($query,0,jiage);?>' /></td></tr>
      <tr><td>数量：</td><td><input name='shuliang' type='text' id='shuliang' value='<?php echo mysql_result($query,0,shuliang);?>' onChange="jejs(<?php echo $jine?>);" /></td></tr>
      <tr><td>金额：</td><td><input name='jine' type='text' readonly id='jine' value='<?php echo mysql_result($query,0,jine);?>' /></td></tr>
      <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,0,beizhu);?></textarea></td></tr>
      <tr><td>购买人：</td><td><input name='goumairen' type='text' readonly id='goumairen' value='<?php echo mysql_result($query,0,goumairen);?>' /></td></tr>
      
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

