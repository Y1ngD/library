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
    $zhutu=$_POST["zhutu"];
    $xiangqingmiaoshu=$_POST["xiangqingmiaoshu"];
    $jiage=$_POST["jiage"];
    $kucun=$_POST["kucun"];
    $xiaoliang=$_POST["xiaoliang"];
    $pingfen=$_POST["pingfen"];
    $faburen=$_POST["faburen"];
    
	//lixandonxgjixelxb
	//qiuji
	//qiuhe
	//ischongfu("select id from shangpinxinxi where trjrtjtrjrtj");
	$sql="insert into shangpinxinxi(shangpinbianhao,shangpinmingcheng,shangpinleibie,zhutu,xiangqingmiaoshu,jiage,kucun,xiaoliang,pingfen,faburen) values('$shangpinbianhao','$shangpinmingcheng','$shangpinleibie','$zhutu','$xiangqingmiaoshu','$jiage','$kucun','$xiaoliang','$pingfen','$faburen') ";
	mysql_query($sql);
	//danjuzhixi;mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书信息</title>
<link rel="stylesheet" href="kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="xiangqingmiaoshu"]', {
				cssPath : 'kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : 'kindeditor-4.1.10/php/upload_json.php',
				fileManagerJson : 'kindeditor-4.1.10/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="utf-8"></script>
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
<p>添加图书信息： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.shangpinmingcheng.value==""){alert("请输入图书名称");document.form1.shangpinmingcheng.focus();return false;}
    if(document.form1.zhutu.value==""){alert("请输入主图");document.form1.zhutu.focus();return false;}
    if(document.form1.jiage.value==""){alert("请输入价格");document.form1.jiage.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.jiage.value))){}else{alert("价格必需数字型");document.form1.jiage.focus();return false;}
    if(document.form1.kucun.value==""){alert("请输入库存");document.form1.kucun.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.kucun.value))){}else{alert("库存必需数字型");document.form1.kucun.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.xiaoliang.value))){}else{alert("销量必需数字型");document.form1.xiaoliang.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.pingfen.value))){}else{alert("评分必需数字型");document.form1.pingfen.focus();return false;}
    if(document.form1.faburen.value==""){alert("请输入发布人");document.form1.faburen.focus();return false;}
    
}
	function gow()
	{
		location.href='shangpinxinxi_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>
<!--hxsglxiangdxongjxs-->
 <?php
//islbd1q $sql="select * from melieibaoduqubiaoiguo where id=".$_GET["id"];
//islbd2q $sql="select * from melieibaoduqubiaoiguo where hsgzhujian='".$_SESSION["username"]."'";
//islbdq $query=mysql_query($sql);
//islbdq $rowscount=mysql_num_rows($query);
//islbdq if($rowscount>0)
//islbdq {
//islbdq 	lelelelelele
//islbdq }
?>
<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>图书编号：</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='<?php echo makefilename2()?>' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>图书名称：</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>图书类别：</td><td><select name='shangpinleibie' id='shangpinleibie'><?php getoption("shangpinleibie","shangpinleibie")?></select></td></tr>
    <tr><td>主图：</td><td><input name='zhutu' type='text' id='zhutu' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhutu',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr>
    <tr><td>详情描述：</td><td><textarea name="xiangqingmiaoshu" style="width:670px;height:200px;visibility:hidden;"></textarea></td></tr>
    <tr><td>价格：</td><td><input name='jiage' type='text' id='jiage' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需数字型</td></tr>
    <tr><td>库存：</td><td><input name='kucun' type='text' id='kucun' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需数字型</td></tr>
    <tr style="display:none"><td>销量：</td><td><input name='xiaoliang' type='text' id='xiaoliang' value='0' style='border:solid 1px #000000; color:#666666' />
&nbsp;必需数字型</td>
    </tr>
    <tr style="display:none"><td>评分：</td><td><input name='pingfen' type='text' id='pingfen' value='0' style='border:solid 1px #000000; color:#666666' />
&nbsp;必需数字型</td>
    </tr>
    <tr><td>发布人：</td><td><input name='faburen' type='text' id='faburen' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' readonly='readonly' />&nbsp;*</td></tr>
    

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

