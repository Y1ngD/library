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
    $riqi=$_POST["riqi"];
    $jiage=$_POST["jiage"];
    $shuliang=$_POST["shuliang"];
    $jine=$_POST["jine"];
    $beizhu=$_POST["beizhu"];
    $jingshouren=$_POST["jingshouren"];
    
	//lixandonxgjixelxb
	$sql="update rukujilu set shangpinbianhao='$shangpinbianhao',shangpinmingcheng='$shangpinmingcheng',shangpinleibie='$shangpinleibie',riqi='$riqi',jiage='$jiage',shuliang='$shuliang',jine='$jine',beizhu='$beizhu',jingshouren='$jingshouren' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改入库记录</title>
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
<!--hxsglxiangdxongjxs-->
<body>
<p>修改入库记录： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from rukujilu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
//lixanxdoxngcxhaxifxen
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>图书编号：</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='<?php echo mysql_result($query,0,shangpinbianhao);?>' /></td></tr>
      <tr><td>图书名称：</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' value='<?php echo mysql_result($query,0,shangpinmingcheng);?>' /></td></tr>
      <tr><td>图书类别：</td><td><input name='shangpinleibie' type='text' id='shangpinleibie' value='<?php echo mysql_result($query,0,shangpinleibie);?>' /></td></tr>
      <tr><td>日期：</td><td><input name='riqi' type='text' id='riqi' value='<?php echo mysql_result($query,0,riqi);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
      <tr><td>价格：</td><td><input name='jiage' type='text' id='jiage' value='<?php echo mysql_result($query,0,jiage);?>' /></td></tr>
      <tr><td>数量：</td><td><input name='shuliang' type='text' id='shuliang' value='<?php echo mysql_result($query,0,shuliang);?>' /></td></tr>
      <tr><td>金额：</td><td><input name='jine' type='text' id='jine' value='<?php echo mysql_result($query,0,jine);?>' /></td></tr>
      <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,0,beizhu);?></textarea></td></tr>
      <tr><td>经手人：</td><td><input name='jingshouren' type='text' id='jingshouren' value='<?php echo mysql_result($query,0,jingshouren);?>' /></td></tr>
      
   
   
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

