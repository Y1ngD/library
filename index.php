<?php
session_start();
include_once 'conn.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>颖弟书城</title>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1280"  border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="1280"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><?php include_once 'qtleft.php';?></td>
            <td valign="top"><table id="__01" width="1025"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><table id="__01" width="1025" height="264" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table id="__01" width="756" height="264" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="756" height="46" background="qtimages/11_02_02_01_01_01.gif"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="6%" height="20">&nbsp;</td>
                            <td width="84%"><span class="ggtile">图书展示</span></td>
                            <td width="10%" valign="bottom"><a href="shangpinxinxilist.php"><img src="qtimages/more.gif" border="0" /></a></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="756" height="204" border="0" cellpadding="0" cellspacing="0"  >
                          <tr>
                            <td width="14" background="qtimages/11_02_02_01_01_02_01.gif">&nbsp;</td>
                            <td width="728" height="204" valign="top" style="LINE-HEIGHT: 20px;"><div onmouseover="stop()" 
style="OVERFLOW: hidden; WIDTH: 728px; HEIGHT: 482px; TEXT-ALIGN: center" 
onmouseout="start()">
                              <table id="scrollimg" cellspacing="0" cellpadding="0" width="715" border="0">
                                <tbody>
                                  <tr>
                                    <td valign="middle" id="simg"><table border="0"  align="center" cellpadding="0" cellspacing="0" >
                                        <tr>
                                          <?php
	  $sql="select * from shangpinxinxi  where  zhutu<>'' order by issh desc,id desc";
	  $query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 if(i<12)
	 {
	 { 
  ?>
                                          <td align="center" valign="top"><table width="181" border="0" cellpadding="0" cellspacing="1" bgcolor="#DCEDED">
                                              <tr>
                                                <td align="center" valign="top" bgcolor="#FFFFFF"><table 
                  border="0" cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                      <tr>
                                                        <td 
                        width="38" align="center" bgcolor="#FFFFFF" style="PADDING-BOTTOM: 1px; PADDING-TOP: 4px"><a  
                        href="shangpinxinxidetail.php?id=<?php echo  mysql_result($query,$i,id)?>"><img src="<?php echo  mysql_result($query,$i,zhutu)?>" width="160" height="130" border="0" /></a></td>
                                                      </tr>
                                                      <tr>
                                                        <td height="10" align="center" background="img/index_probg2.jpg" style="PADDING-BOTTOM: 1px; PADDING-TOP: 4px"><a href="shangpinxinxidetail.php?id=<?php echo  mysql_result($query,$i,id)?>" target="_blank"><font color="#FB1079"><?php echo  mysql_result($query,$i,shangpinmingcheng)?></font></a></td>
                                                      </tr>
                                                    </tbody>
                                                </table></td>
                                              </tr>
                                          </table></td>
                                          <?php 
									if($i==3 or $i==7)
									{
										echo "</tr><tr>";
									}
									}
									}
									?>
                                        </tr>
                                    </table></td>
                                    </tr>
                                </tbody>
                              </table>
                            </div></td>
                            <td width="14" background="qtimages/11_02_02_01_01_02_03.gif">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/11_02_02_01_01_03.gif" width="756" height="14"></td>
                      </tr>
                    </table></td>
                    <td valign="top"><table id="__01" width="269" height="264" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="269" height="46" background="qtimages/11_02_02_01_02_01.gif"><table width="100%" height="25" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="14%">&nbsp;</td>
                            <td width="86%"><span class="STYLE4">点击排行</span></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td valign="top"><table id="__01" width="269" height="200" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="11" background="qtimages/11_02_02_01_02_02_01.gif">&nbsp;</td>
                            <td width="242" height="200" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
              <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi  order by dianjilv desc, id desc limit 0,18";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							
						?>
              <tr height="25">
                <td width="8%" align="center" class="newslist"><img height="7" src="qtimages/1.jpg" width="7" /></td>
                <?php
								if ($i<3)
								{
								?>
                <td style="height:14px; line-height:14px; font-size:11px; font-weight:bold;" align="center"><div style='width:14px;height:13px;background:url(qtimages/i_u_1.gif) no-repeat; color:#ffffff'><?php echo $i+1;?></div></td>
                <?php
								}
								else
								{
								?>
                <td style="height:14px; line-height:14px; font-size:11px; font-weight:bold;" align="center"><div style='width:14px;height:13px;background:url(qtimages/i_u_0.gif) no-repeat; color:#ffffff'><?php echo $i+1;?></div></td>
                <?php
								}
								?>
                <td width="92%" class="newslist">&nbsp;<a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">
                  <?php 
								if (strlen(mysql_result($query,$i,"biaoti"))>25)
								{
									echo substr(mysql_result($query,$i,"biaoti"),0,25);
								}
								else
								{
									echo mysql_result($query,$i,"biaoti");
								}
								
								?>
                </a></td>
              </tr>
              <?php
						}
					  }
					  ?>
            </table></td>
                            <td width="16" background="qtimages/11_02_02_01_02_02_03.gif">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/11_02_02_01_02_03.gif" width="269" height="18"></td>
                      </tr>
                    </table></td>
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

