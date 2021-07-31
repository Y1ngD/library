<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书信息</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="utf-8"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<!--hxsglxiangdxongjxs-->
<body>

<p>已有图书信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 图书编号：<input name="shangpinbianhao" type="text" id="shangpinbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 图书名称：<input name="shangpinmingcheng" type="text" id="shangpinmingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> 图书类别：<select name='shangpinleibie' id='shangpinleibie' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><?php getoption("shangpinleibie","shangpinleibie")?></select></select>
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>图书编号</td>
    <td bgcolor='#CCFFFF'>图书名称</td>
    <td bgcolor='#CCFFFF'>图书类别</td>
    <td bgcolor='#CCFFFF'>主图</td>
    <td bgcolor='#CCFFFF'>价格</td>
    <td bgcolor='#CCFFFF'>库存</td>
    <td width="120" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from shangpinxinxi where 1=1";
  
if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}
if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}
if ($_POST["shangpinleibie"]!=""){$nreqshangpinleibie=$_POST["shangpinleibie"];$sql=$sql." and shangpinleibie like '%$nreqshangpinleibie%'";}
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
$kucunz=$kucunz+floatval(mysql_result($query,$i,kucun));
$xiaoliangz=$xiaoliangz+floatval(mysql_result($query,$i,xiaoliang));

//txixgihxngjs
//youzuiping2

  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td>
    <td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td>
    <td><?php echo mysql_result($query,$i,shangpinleibie);?></td>
    <td width='80'><a href="<?php echo mysql_result($query,$i,zhutu) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,zhutu) ?>' width='80' height='88' border='0'></a></td>
    
    <td><?php echo mysql_result($query,$i,jiage);?></td>
    <td><?php echo mysql_result($query,$i,kucun);?></td>
    <td width="120" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=shangpinxinxi" onclick="return confirm('真的要删除？')"></a> <a href="rukujilu_add.php?id=<?php echo mysql_result($query,$i,"id");?>">入库</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条,共计库存:<?php echo $kucunz?>； 
  <!--youzuiping3-->
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='shangpinxinxi_listxls.php';" value="导出EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="shangpinxinxi_list_rk.php?pagecurrent=1">首页</a>, <a href="shangpinxinxi_list_rk.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="shangpinxinxi_list_rk.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="shangpinxinxi_list_rk.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>
<?php
//yoxutixinxg if($kucddduntx>0)
//yoxutixinxg{
//yoxutixinxg tsgehxdhdm
//yoxutixinxg}
?>
</body>
</html>

