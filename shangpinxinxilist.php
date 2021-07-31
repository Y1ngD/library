<?php
session_start();
include_once 'conn.php';
//xuxyxaodenxglxxu
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>图书信息</title>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="utf-8"></script>
<!--hxsglxiangdxongjxs-->
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
						
						
						<form id="form1" name="form1" method="post" action="">
  搜索: 图书编号：<input name="shangpinbianhao" type="text" id="shangpinbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 图书名称：<input name="shangpinmingcheng" type="text" id="shangpinmingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> 图书类别：<select name='shangpinleibie' id='shangpinleibie' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><?php getoption("shangpinleibie","shangpinleibie")?></select></select>
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />&nbsp;<input type="button" name="Submit3" value="切换视图" style='border:solid 1px #000000; color:#666666' onClick="location.href='shangpinxinxilisttp.php';" />
</form>
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>图书编号</td><td bgcolor='#CCFFFF'>图书名称</td><td bgcolor='#CCFFFF'>图书类别</td><td bgcolor='#CCFFFF'>主图</td><td bgcolor='#CCFFFF'>价格</td><td bgcolor='#CCFFFF'>库存</td><td bgcolor='#CCFFFF'>销量</td><td bgcolor='#CCFFFF'>评分</td><td bgcolor='#CCFFFF'>发布人</td>
    
    <td width="30" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from shangpinxinxi where 1=1";
  
if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}
if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}
if ($_POST["shangpinleibie"]!=""){$nreqshangpinleibie=$_POST["shangpinleibie"];$sql=$sql." and shangpinleibie like '%$nreqshangpinleibie%'";}
  $sql=$sql." order by issh desc,id desc";
  
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

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td><td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td><td><?php echo mysql_result($query,$i,shangpinleibie);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,zhutu) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,zhutu) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,jiage);?></td><td><?php echo mysql_result($query,$i,kucun);?></td><td><?php echo mysql_result($query,$i,xiaoliang);?></td><td><?php echo mysql_result($query,$i,pingfen);?></td><td><?php echo mysql_result($query,$i,faburen);?></td>
    
    <td width="30" align="center"><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="shangpinxinxilist.php?pagecurrent=1">首页</a>, <a href="shangpinxinxilist.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="shangpinxinxilist.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="shangpinxinxilist.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

					
					
					
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
<!-- dfexnxxiaxng -->
</body>
</html>


