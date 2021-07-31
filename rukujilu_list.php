<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>入库记录</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="utf-8"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<!--hxsglxiangdxongjxs-->
<body>

<p>已有入库记录列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 图书编号：<input name="shangpinbianhao" type="text" id="shangpinbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 图书名称：<input name="shangpinmingcheng" type="text" id="shangpinmingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> 图书类别：<input name="shangpinleibie" type="text" id="shangpinleibie" style='border:solid 1px #000000; color:#666666;width:80px' /> 日期：<input name="riqi1" type="text" id="riqi1"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />-<input name="riqi2" type="text" id="riqi2"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>图书编号</td>
    <td bgcolor='#CCFFFF'>图书名称</td>
    <td bgcolor='#CCFFFF'>图书类别</td>
    <td bgcolor='#CCFFFF'>日期</td>
    <td bgcolor='#CCFFFF'>价格</td>
    <td bgcolor='#CCFFFF'>数量</td>
    <td bgcolor='#CCFFFF'>金额</td>
    <td bgcolor='#CCFFFF'>经手人</td>
    
	<!--dpinglun1-->
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="120" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from rukujilu where 1=1";
  
if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}
if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}
if ($_POST["shangpinleibie"]!=""){$nreqshangpinleibie=$_POST["shangpinleibie"];$sql=$sql." and shangpinleibie like '%$nreqshangpinleibie%'";}
if ($_POST["riqi1"]!=""){$nreqriqi1=$_POST["riqi1"];$sql=$sql." and riqi >= '$nreqriqi1'";}
if ($_POST["riqi2"]!=""){$nreqriqi2=$_POST["riqi2"];$sql=$sql." and riqi <= '$nreqriqi2'";}
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

  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td>
    <td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td>
    <td><?php echo mysql_result($query,$i,shangpinleibie);?></td>
    <td><?php echo mysql_result($query,$i,riqi);?></td>
    <td><?php echo mysql_result($query,$i,jiage);?></td>
    <td><?php echo mysql_result($query,$i,shuliang);?></td>
    <td><?php echo mysql_result($query,$i,jine);?></td>
    
    <td><?php echo mysql_result($query,$i,jingshouren);?></td>
    
	<!--dpinglun2-->
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=rukujilu" onclick="return confirm('真的要删除？')">删除</a> <a href="rukujilu_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> <a href="rukujilu_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条,共计金额:<?php echo $jinez?>； <!--youzuiping3-->
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='rukujilu_listxls.php';" value="导出EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="rukujilu_list.php?pagecurrent=1">首页</a>, <a href="rukujilu_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="rukujilu_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="rukujilu_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>
<?php
//yoxutixinxg if($kucddduntx>0)
//yoxutixinxg{
//yoxutixinxg tsgehxdhdm
//yoxutixinxg}
?>
</body>
</html>

