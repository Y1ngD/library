<?php
session_start();
include_once 'conn.php';
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
	$jinej=$jiage*$shuliang;
	//qiuhe
	//ischongfu("select id from goumaijilu where trjrtjtrjrtj");
	$sql="insert into goumaijilu(shangpinbianhao,shangpinmingcheng,shangpinleibie,jiage,shuliang,jine,beizhu,goumairen) values('$shangpinbianhao','$shangpinmingcheng','$shangpinleibie','$jiage','$shuliang','$jinej','$beizhu','$goumairen') ";
	mysql_query($sql);
	//danjuzhixi;mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购买记录</title>
<!--bixanjxiqxi-->
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
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
<body>
<p>添加购买记录： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.shangpinbianhao.value==""){alert("请输入图书编号");document.form1.shangpinbianhao.focus();return false;}
    if(document.form1.shuliang.value==""){alert("请输入数量");document.form1.shuliang.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.shuliang.value))){}else{alert("数量必需数字型");document.form1.shuliang.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.jine.value))){}else{alert("金额必需数字型");document.form1.jine.focus();return false;}
    
}
	function gow()
	{
		location.href='goumaijilu_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>
<!--hxsglxiangdxongjxs-->
 <?php
 $sql="select * from shangpinxinxi where id=".$_GET["id"];
//islbd2q $sql="select * from shangpinxinxi where goumairen='".$_SESSION["username"]."'";
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$shangpinbianhao=mysql_result($query,0,shangpinbianhao);
 	$shangpinmingcheng=mysql_result($query,0,shangpinmingcheng);
 	$shangpinleibie=mysql_result($query,0,shangpinleibie);
 	$jiage=mysql_result($query,0,jiage);
 	
 }
?>
<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>图书编号：</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.shangpinbianhao.value='<?php echo $shangpinbianhao?>';</script>
    <tr><td>图书名称：</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.shangpinmingcheng.value='<?php echo $shangpinmingcheng?>';</script>
    <tr><td>图书类别：</td><td><input name='shangpinleibie' type='text' id='shangpinleibie' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.shangpinleibie.value='<?php echo $shangpinleibie?>';</script>
    <tr><td>价格：</td><td><input name='jiage' type='text' id='jiage' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.jiage.value='<?php echo $jiage?>';</script>
    <tr><td>数量：</td><td><input name='shuliang' type='text' id='shuliang' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需数字型</td></tr>
    <tr><td>金额：</td><td><input name='jine' type='text' id='jine' value='' style='border:solid 1px #000000; color:#666666; background-color:#CCCCCC' />&nbsp;此项不必填写，系统自动计算&nbsp;必需数字型</td></tr>
    <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>
    <tr><td>购买人：</td><td><input name='goumairen' type='text' id='goumairen' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' readonly='readonly' /></td></tr>
    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，您输入的tsisshistxiaojxi已经存在，请重试!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

