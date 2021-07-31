<?php
session_start();
include_once 'conn.php';
//xuxyxaodenxglxxu
$id=$_GET["id"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>图书信息</title>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1280" height="1299" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="1280" height="685" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><?php include_once 'qtleft.php';?></td>
            <td><table id="__01" width="1025" height="685" border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table id="__01" width="1025" height="421" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="1025" height="51" background="qtimages/a1.gif"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="4%" height="20">&nbsp;</td>
                        <td width="86%"><span class="ggtile">图书信息</span></td>
                        <td width="10%" valign="bottom">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="1025" height="353" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="14" background="qtimages/11_02_02_02_02_01.gif">&nbsp;</td>
                        <td width="993" height="653" valign="top">
						
						
												 <?php
$sql="select * from shangpinxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline"> 
      <tr>
	  <td width='11%' height=44>图书编号：</td><td width='39%'><?php echo mysql_result($query,0,shangpinbianhao);?></td><td  rowspan=8 align=center><a href=<?php echo mysql_result($query,0,zhutu);?> target=_blank><img src=<?php echo mysql_result($query,0,zhutu);?> width=228 height=215 border=0></a></td></tr><tr>
    <td width='11%' height=44>图书名称：</td><td width='39%'><?php echo mysql_result($query,0,shangpinmingcheng);?></td></tr><tr>
    <td width='11%' height=44>图书类别：</td><td width='39%'><?php echo mysql_result($query,0,shangpinleibie);?></td></tr><tr>
    
    
    <td width='11%' height=44>价格：</td><td width='39%'><?php echo mysql_result($query,0,jiage);?></td></tr><tr>
    <td width='11%' height=44>库存：</td><td width='39%'><?php echo mysql_result($query,0,kucun);?></td></tr><tr>
    <td width='11%' height=44>销量：</td><td width='39%'><?php echo mysql_result($query,0,xiaoliang);?></td></tr><tr>
    <td width='11%' height=44>评分：</td><td width='39%'><?php echo mysql_result($query,0,pingfen);?></td></tr><tr>
    <td width='11%' height=44>发布人：</td><td width='39%'><?php echo mysql_result($query,0,faburen);?></td></tr><tr>
    <td width='11%' height=100  >详情描述：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,xiangqingmiaoshu);?></td></tr>
<tr><td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666; width:50px;'  />
    <input type=button name=Submit52 value=收藏 onClick="javascript:location.href='jrsc.php?id=<?php echo $id;?>&biao=shangpinxinxi&ziduan=shangpinmingcheng';" style='border:solid 1px #000000; color:#666666; width:50px;'  />
  <input type="button" name="Submit522" value="加入购物车" onclick="javascript:location.href='goumaijiluadd.php?id=<?php echo $id;?>';" style='border:solid 1px #000000; color:#666666; ' /></td></tr>
  </table>

<?php
	}
?>
					
					
					
					</td>
                        <td width="18" background="qtimages/11_02_02_02_02_03.gif">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/11_02_02_02_03.gif" width="1025" height="17"></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td width="1280" height="141" background="qtimages/11_03.gif"><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
<a class='bshareDiv' href='http://www.bshare.cn/share'>分享按钮</a><script type='text/javascript' charset='utf-8' src='http://static.bshare.cn/b/buttonLite.js#uuid=&amp;style=3&amp;fs=4&amp;textcolor=#fff&amp;bgcolor=#9C3&amp;text=分享到'></script>
</body>
</html>


