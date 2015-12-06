<?php if(!defined("IN_ADMIN")) die;   ?>
<HTML>
	<HEAD>
		<title>Просмотр данных <----- Lite Позиция</title>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<LINK REL="stylesheet" HREF="css/main.css" ID="MAINCSS">
<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
<script type="text/javascript" src="js/ui.tablesorter.js"></script>
<script type="text/javascript" src="js/ui.tablesorter.filter.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<style type="text/css">
/* tables */
table.tablesorter {
	font-family:arial;
	background-color: #CDCDCD;
	margin:1px 0pt 1px;
	font-size: 8pt;
	width: 100%;
	text-align: left;
}
table.tablesorter thead tr th, table.tablesorter tfoot tr th {
	background-color: #e6EEEE;
//	border: 1px solid #FFF;
	font-size: 8pt;
	padding: 4px;
}
table.tablesorter thead tr .header {
	background-image: url(images/tablesorter-bg.gif);
	background-repeat: no-repeat;
	background-position: center right;
	cursor: pointer;
}
table.tablesorter tbody td {
	color: #3D3D3D;
	padding: 4px;
	font-size: 8pt;
	background-color: #FFF;
	vertical-align: top;
}
table.tablesorter tbody tr.odd td {
	background-color:#F0F0F6;
}
table.tablesorter thead tr .headerSortUp {
	background-image: url(images/tablesorter-asc.gif);
}
table.tablesorter thead tr .headerSortDown {
	background-image: url(images/tablesorter-desc.gif);
}
table.tablesorter thead tr .headerSortDown, table.tablesorter thead tr .headerSortUp {
background-color: #8dbdd8;
}

</style>
	</HEAD>
	<BODY >
<TABLE align="left"  cellspacing="0" cellpadding="0" border="0">
  <TR>
    <TD  align="right" valign="bottom"><img src="images/lt.gif"  border="0"/></TD>
    <TD  valign="bottom"><img src="images/hr.gif" width="100%" height="7" border="0" /></TD>
    <TD  align="left" valign="bottom"><img src="images/rt.gif"  border="0"/></TD>
  </TR>
  <TR>
    <TD align="center"><img src="images/vr.gif" width="7" height="20" ></TD>
    <TD align="right" valign="middle" bgcolor="#E0F0F5"><a href="index.php<?php if (!empty($_GET['prev'])) echo "?prev=1";?>">На главную</a>
</TD>
    <TD align="center"><img src="images/vr.gif" width="7" height="20"  border="0"/></TD>
  </TR>
  <TR>
    <TD align="right" valign="top"><img src="images/lb.gif" border="0"/></TD>
    <TD valign="top"><img src="images/hr.gif" width="100%" height="7" border="0"/></TD>
    <TD align="left" valign="top"><img src="images/rb.gif"  border="0" align="top"/></TD>
  </TR>
</TABLE>

<br>
<br>

