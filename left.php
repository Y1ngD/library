<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="js/menu.js"></script>
<link href="images/cont.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.STYLE1 {
	color: #FFFFFF;
	font-size: 12px;
}
-->
</style>
</head>

<body>
<table width="180" height="100%" border="0" cellpadding="0"
	cellspacing="0">
	<tr>
		<td height="34">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="48"><img src="images/left_09.gif" width="48" height="34"></td>
				<td align="center" background="images/left_10.gif"><span
					class="STYLE1">系统主页</span></td>
				<td width="48"><img src="images/l_09.gif" width="48" height="34"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td valign="top" background="images/left_bg_03.gif" class="left_mid">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td class="menu_first_img mouse" id="td1" onClick="show(1)" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">系统用户管理</font></td>
			</tr>
			<tr>
				<td id="show1">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="yhzhgl.php" target="right">系统用户管理</a></td>
							</tr>
						</table>						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="yonghuzhuce_list.php" target="right">注册用户管理</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="mod.php" target="right">修改密码</a></td>
							</tr>
						</table>						</td>
					</tr>
				</table>
				</td>
			</tr>
			<!--<tr>
				<td class="mouse menu_second_img" id="td2" onClick="show(2)" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">新书公告管理</font></td>
			</tr>
			<tr>
				<td id="show2" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr></tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" width="16"
									height="16"></td>
								<td>&nbsp;<a href="xinwentongzhi_add.php?lb=新书公告" target="right">新书公告添加</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="xinwentongzhi_list.php?lb=新书公告" target="right">新书公告查询</a></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</td>
			</tr>-->
			<tr>
				<td class="mouse menu_second_img" id="td3" onClick="show(3)" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">新闻文章管理</font></td>
			</tr>
			<tr>
				<td id="show3" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr></tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" width="16"
									height="16"></td>
								<td>&nbsp;<a href="xinwentongzhi_add.php?lb=新书公告" target="right">新书公告添加</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="xinwentongzhi_list.php?lb=新书公告" target="right">新书公告查询</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" width="16"
									height="16"></td>
								<td>&nbsp;<a href="xinwentongzhi_add.php?lb=购物需知" target="right">购物需知添加</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="xinwentongzhi_list.php?lb=购物需知" target="right">购物需知查询</a></td>
							</tr>
						</table>
						</td>
					</tr>
					
				</table>
				</td>
			</tr>
			<tr>
				<td class="mouse menu_second_img" id="td4" onClick="show(4)" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">图书信息管理</font></td>
			</tr>
			<tr>
				<td id="show4" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr></tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" width="16"
									height="16"></td>
								<td>&nbsp;<a href="shangpinxinxi_add.php" target="right">图书信息添加</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="shangpinxinxi_list.php" target="right">图书信息查询</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" width="16"
									height="16"></td>
								<td>&nbsp;<a href="shangpinleibie_add.php" target="right">图书类别添加</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="shangpinleibie_list.php" target="right">图书类别查询</a></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr >
				<td class="mouse menu_second_img" id="td5" onClick="show(5)" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">商城订单管理</font></td>
			</tr>
			<tr>
				<td id="show5" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr></tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" width="16"
									height="16"></td>
								<td>&nbsp;<a href="goumaijilu_list.php" target="right">购买记录查询</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="dingdan_list.php" target="right">商城订单查询</a></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr >
				<td class="mouse menu_second_img" id="td6" onClick="show(6)" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">图书库存管理</font></td>
			</tr>
			<tr>
				<td id="show6" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr></tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" width="16"
									height="16"></td>
								<td>&nbsp;<a href="shangpinxinxi_list_rk.php" target="right">库存管理</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="rukujilu_list.php" target="right">入库记录查询</a></td>
							</tr>
						</table>
						</td>
					</tr>
					
				</table>
				</td>
			</tr><!---->
			<tr style="display:none">
				<td class="mouse menu_second_img" id="td7" onClick="show(7)" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">在线留言管理</font></td>
			</tr>
			<tr>
				<td id="show7" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr></tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="liuyanban_list.php" target="right">在线留言管理</a></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr style="display: none;">
				<td class="mouse menu_second_img" id="td8" onClick="show(8)" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">促销活动管理</font></td>
			</tr>
			<tr>
				<td id="show8" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr></tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" width="16"
									height="16"></td>
								<td>&nbsp;<a href="xinwentongzhi_add.php?lb=促销活动" target="right">促销活动添加</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="xinwentongzhi_list.php?lb=促销活动" target="right">促销活动查询</a></td>
							</tr>
						</table>
						</td>
					</tr>
					
				</table>
				</td>
			</tr>
			
			<tr>
				<td class="mouse menu_second_img" id="td9" onClick="show(9)" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">系统管理</font></td>
			</tr>
			<tr>
				<td id="show9" style="display: none;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr></tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="shanchushuju.php" target="right">批量删除</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="dx.php?lb=系统简介" target="right">系统简介</a></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="left">
						<table width="100%" height="24" border="0" cellpadding="0"
							cellspacing="0">
							<tr>
								<td width="40" align="center"><img src="images/5.png" alt="1"
									width="16" height="16"></td>
								<td>&nbsp;<a href="dx.php?lb=系统公告" target="right">系统公告</a></td>
							</tr>
						</table>
						</td>
					</tr>
					
				</table>
				</td>
			</tr>
			
			
			
			
		</table>
		</td>
	</tr>
	<tr>
		<td height="13">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="48"><img src="images/left_31.gif" width="48" height="13"></td>
				<td background="images/left_32.gif" class="left_b_m">&nbsp;</td>
				<td width="48"><img src="images/left_31_l.gif" width="48"
					height="13"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</body>
</html>
