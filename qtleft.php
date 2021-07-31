<meta charset="utf-8" />
<table id="__01" width="255"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table id="__01" width="255" height="266" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="255" height="45" background="qtimages/11_02_01_01_01.gif"><table width="100%" height="25" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="19%">&nbsp;</td>
            <td width="81%"><span class="STYLE4">图书类别</span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top"><table id="__01" width="255" height="204" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><img src="qtimages/11_02_01_01_02_01.gif" width="18" height="204" /></td>
            <td width="224" height="204" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
              <?php 
					  $sql="select * from shangpinleibie  order by id asc limit 0,8";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							
						?>
              <tr height="25">
                <td width="8%" align="center" valign="top" class="newslist"><img height="7" src="qtimages/1.jpg" width="7" /></td>
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
                <td width="92%" class="newslist">&nbsp;<a href="shangpinxinxilist1.php?lb=<?php echo mysql_result($query,$i,"shangpinleibie");?>">
                  <?php 
								if (strlen(mysql_result($query,$i,"shangpinleibie"))>25)
								{
									echo substr(mysql_result($query,$i,"shangpinleibie"),0,25);
								}
								else
								{
									echo mysql_result($query,$i,"shangpinleibie");
								}
								
								?>
                </a></td>
              </tr>
              <?php
						}
					  }
					  ?>
            </table></td>
            <td><img src="qtimages/11_02_01_01_02_03.gif" width="13" height="204" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="qtimages/11_02_01_01_03.gif" width="255" height="17" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table id="__01" width="255"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="255" height="48" background="qtimages/11_02_01_02_01.gif"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="18%" height="20">&nbsp;</td>
            <td width="82%" valign="bottom"><span class="STYLE4">系统公告</span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table id="__01" width="255" height="204" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><img src="qtimages/11_02_01_01_02_01.gif" width="18" height="204" /></td>
            <td width="224" height="204" valign="top"><marquee border="0" direction="up" height="100%" onmouseout="start()" onmouseover="stop()"
                scrollamount="1" scrolldelay="50">
                              <?php 
					  $sql="select * from dx where leibie='系统公告'";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	echo mysql_result($query,0,"content");
					  	}
						?>
                            </marquee></td>
            <td><img src="qtimages/11_02_01_01_02_03.gif" width="13" height="204" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="qtimages/11_02_01_02_03.gif" width="255" height="14" /></td>
      </tr>
    </table></td>
  </tr>
</table>

