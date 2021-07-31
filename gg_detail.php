<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>颖弟书城</title>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
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
                        <td width="86%"><span class="ggtile">内容详细</span></td>
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
					$sql="select * from xinwentongzhi where id=".$id;
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
                          <table width="97%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" class="newsline" style="border-collapse:collapse">
                            <tr>
                              <td height="33" align="center"><span class="STYLE3"><?php echo mysql_result($query,0,"biaoti"); ?> (被点击<?php echo mysql_result($query,0,"dianjilv"); ?>次)</span></td>
                            </tr>
                            <tr>
                              <td height="104"><?php echo mysql_result($query,0,"neirong");?></td>
                            </tr>
                            <tr>
                              <td align="right"><a class="STYLE3" style="cursor:pointer;" onclick="javascript:history.back();">返回</a></td>
                            </tr>
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
</body>
</html>

