<meta charset="utf-8" />
<?php
session_start();
include_once 'conn.php';
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('对不起，请您先登录！');location.href='index.php';</script>";
	exit;
 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>颖弟书城</title>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.STYLE9 {color: #000000}
-->
</style>
</head>
<script language="javascript">
	function jejs(tt)
	{
			document.getElementById("jine"+tt).value=document.getElementById("jiage"+tt).value*document.getElementById("shuliang"+tt).value;
			//document.getElementById("jine"+tt)
			location.href="gwc.php?xgid="+tt+"&sl="+document.getElementById("shuliang"+tt).value+"&jg="+document.getElementById("jiage"+tt).value;
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
                        <td width="86%"><span class="ggtile">购物车</span></td>
                        <td width="10%" valign="bottom">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="1025" height="353" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="14" background="qtimages/11_02_02_02_02_01.gif">&nbsp;</td>
                        <td width="993" height="653" valign="top"><form id="form1" name="form1" method="post" action="">
                          搜索: 图书编号：
      <input name="shangpinbianhao" type="text" id="shangpinbianhao" style='border:solid 1px #000000; color:#666666;width:80px' />
                          图书名称：
  <input name="shangpinmingcheng" type="text" id="shangpinmingcheng" style='border:solid 1px #000000; color:#666666;width:80px' />
                          图书类别：
  <input name="shangpinleibie" type="text" id="shangpinleibie" style='border:solid 1px #000000; color:#666666;width:80px' />
                          购买人：
  <input name="goumairen" type="text" id="goumairen" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
                        </form>
                          <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">
                            <tr>
                              <td width="25" bgcolor="#CCFFFF">序号</td>
                              <td bgcolor='#CCFFFF'>图书编号</td>
                              <td bgcolor='#CCFFFF'>图书名称</td>
                              <td bgcolor='#CCFFFF'>图书类别</td>
                              <td bgcolor='#CCFFFF'>价格</td>
                              <td bgcolor='#CCFFFF'>数量</td>
                              <td bgcolor='#CCFFFF'>金额</td>
                              <td bgcolor='#CCFFFF'>备注</td>
                              <td bgcolor='#CCFFFF'>购买人</td>
                              <td bgcolor='#CCFFFF' width='80' align='center'>确认订单</td>
                              <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
                              <td width="70" align="center" bgcolor="#CCFFFF">操作</td>
                            </tr>
                            <?php 
    $sql="select * from goumaijilu where issh='否' and goumairen='".$_SESSION['username']."'";
  
if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}
if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}
if ($_POST["shangpinleibie"]!=""){$nreqshangpinleibie=$_POST["shangpinleibie"];$sql=$sql." and shangpinleibie like '%$nreqshangpinleibie%'";}
if ($_POST["goumairen"]!=""){$nreqgoumairen=$_POST["goumairen"];$sql=$sql." and goumairen like '%$nreqgoumairen%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}
//youzuiping1
	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
$jinez=$jinez+floatval(mysql_result($query,$i,jine));

//txixgihxngjs
//youzuiping2
$id= mysql_result($query,$i,id);



  ?>
                            <form id="form2" name="form2" method="post" action="">
                              <tr>
                                <td width="25"><?php echo $i+1;?></td>
                                <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td>
                                <td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td>
                                <td><?php echo mysql_result($query,$i,shangpinleibie);?></td>
                                <td><input name='jiage<?php echo mysql_result($query,$i,id) ?>' style="border:none"  type='text' id='jiage<?php echo mysql_result($query,$i,id) ?>' value='<?php echo mysql_result($query,$i,jiage);?>' size="6" readonly="readonly" /></td>
                                <td><input name='shuliang<?php echo mysql_result($query,$i,id) ?>' type='text' id='shuliang<?php echo mysql_result($query,$i,id) ?>' value='<?php echo mysql_result($query,$i,shuliang);?>' onchange="jejs(<?php echo $jine?>);" size="4" />
                                    <input name="addnew" type="hidden" id="addnew" value="1" />
                                    <input type="button" name="Submit3" value="修改" style='border:solid 1px #000000; color:#666666' onclick="jejs(<?php echo mysql_result($query,$i,id) ?>)" /></td>
                                <td><input name='jine<?php echo mysql_result($query,$i,id) ?>' type='text' style="border:none" id='jine<?php echo mysql_result($query,$i,id) ?>' value='<?php echo mysql_result($query,$i,jine);?>' size="6" readonly="readonly" /></td>
                                <td><?php echo mysql_result($query,$i,beizhu);?></td>
                                <td><?php echo mysql_result($query,$i,goumairen);?></td>
                                <td width='80' align='center'><?php echo mysql_result($query,$i,"issh")?></td>
                                <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
                                <td width="70" align="center"><?php if(mysql_result($query,$i,issh)=="否"){?>
                                    <a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&amp;tablename=goumaijilu" class="STYLE9" onclick="return confirm('真的要删除？')">删除</a>
                                  <?php } ?>
                                    <!--qiatnalijne--></td>
                              </tr>
                            </form>
                            <?php
	}
}
$addnew=$_GET["xgid"];
if ($addnew!="" )
{
    $shuliang=$_GET["sl"];
    $jg=$_GET["jg"];
    
	//lixandonxgjixelxb
	$je=$shuliang*$jg;
	$sql="update goumaijilu set shuliang='$shuliang',jine='$je' where id= ".$addnew;
	
	mysql_query($sql);
	echo "<script>javascript:location.href='gwc.php';</script>";
}

?>
                          </table>
                          <p>以上数据共<?php echo $rowscount;?>条,共计总金额:<?php echo $jinez?>；
                            <!--youzuiping3-->
                              <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' />
                              <input type="button" name="Submit22" onclick="javascript:location.href='dingdanadd.php';" value="生成订单" style='border:solid 1px #000000; color:#666666' />
                          </p>
                          <p align="center"><a href="gwc.php?pagecurrent=1">首页</a>, <a href="gwc.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="gwc.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="gwc.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>                          <p align="center">&nbsp;</p></td>
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
</body>
</html>

