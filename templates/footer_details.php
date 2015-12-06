<?php if(!defined("IN_ADMIN")) die;   ?>
		<br>
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
<?PHP include ('templates/copyright.php');?>


<script type="text/javascript">
$(document).ready(function(){
// ---- tablesorter -----
$("#result").tablesorter({
<?php if ($_GET['id']==9) echo "sortList:[[0,0]],";  else echo  "sortList:[[1,1]],"; ?>
	widgets: ['zebra'],
 headers: { 1: { sorter:'mynumbers' }} 
});
// ---- tablesorter -----
});
</script>

<script type="text/javascript">
$(function() { 
// ---- Встраиваем фильтр в детальный показ платежей -----
  var theTable = $('table.tablesorter')

  theTable.find("tbody > tr").find("td:eq(1)").mousedown(function(){
    $(this).prev().find(":checkbox").click()
  });

  $("#filter").keyup(function() {
    $.uiTableFilter( theTable, this.value );
  })

  $('#filter-form').submit(function(){
    theTable.find("tbody > tr:visible > td:eq(1)").mousedown();
    return false;
  }).focus(); //Give focus to input field
// ---- Встраиваем фильтр в детальный показ платежей -----
});  
</script>

	</BODY>
</HTML>
