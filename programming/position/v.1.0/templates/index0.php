<?php if(!defined("IN_ADMIN")) die; ?>

<HTML>
	<HEAD>
	
		<title> Lite �������</title>		
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
                <META HTTP-EQUIV="pragma" CONTENT="No-Cache">
		<LINK REL="stylesheet" HREF="css/main.css" ID="MAINCSS">
		<LINK REL="stylesheet" ID="COLORCSS">
                <script language="JavaScript">function clock(){window.status = '';clock_disp = setTimeout('clock()', 0);}clock();</script>
                                <SCRIPT LANGUAGE = "JavaScript1.1">

function notmenu(){

window.event.returnValue=false;}

</SCRIPT>


	        <script type="text/javascript">
 			function keydownhandler(e) {
			    if(!e) e = window.event;
				    var ctrl = e.ctrlKey;
				    var code = e.keyCode;
				    if (ctrl && String.fromCharCode(code).match(/c/gi) != null) 
					{
				        alert("��������� �� ����������� <bobans>");   
	        			}
                         }document.onkeydown = keydownhandler;
		</script>
	</HEAD>
	<BODY oncontextmenu="notmenu()" oncopy="return false" onselectstart="return false" >
	
	<TABLE align="center"  cellspacing="0" cellpadding="0" border="0" width="100%">
  <TR>
    <TD  align="right" valign="bottom"><img src="images/lt.gif"  border="0"/></TD>
    <TD  valign="bottom"><img src="images/hr.gif" width="100%" height="7" border="0" /></TD>
    <TD  align="left" valign="bottom"><img src="images/rt.gif"  border="0"/></TD>
  </TR>
  <TR>
    <TD align="center"><img src="images/vr.gif" width="7" height="120" ></TD>
    <TD width="100%" height="100" align="right" valign="middle" bgcolor="#E0F0F5"><div align="center">
      <table class="base_txt" width="100%" border="0" cellspacing="3" cellpadding="3">
        <tr>
          <td colspan="2" align="left" valign="top" bgcolor="#E0F0F5" class="Txt11"><table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td width="33%" bgcolor="#B4DAE7" class="Txt11" >������� �� ������ ���</td>
              <td width="67%" bgcolor="#B4DAE7" class="Txt11"><b><?PHP echo $results['S_15'][0];?></b></td>
            </tr>
            <tr>
              <td bgcolor="#B4DAE7" class="Txt11" >������� �������</td>
              <td bgcolor="#B4DAE7" class="Txt11"><b><?PHP echo $results['S_16'][0];?></b></td>
            </tr>
            <tr>
              <td bgcolor="#B4DAE7" class="Txt11" >�������� �������</td>
              <td bgcolor="#B4DAE7" class="Txt11" ><b><?PHP echo $results['S_17'][0];?></b></td>
            </tr>
            <tr>
              <td  class="Txt11" >&nbsp;</td>
              <td  class="Txt11" >&nbsp;</td>
            </tr>
          </table>
            </td>
          <td width="412" class="Txt11" align="left" valign="top"><table width="100%" border="0" cellpadding="2" cellspacing="2">
              <tr>
                <td width="33%" bgcolor="#B4DAE7" class="Txt11" >���� �������������: </td>
                <td width="67%" bgcolor="#B4DAE7" class="Txt11">��������� 4 ����������� ��� ����� ������ </td>
              </tr>
              <tr>
                <td bgcolor="#B4DAE7" class="Txt11" >������: </td>
                <td bgcolor="#B4DAE7" class="Txt11">RUR</td>
              </tr>
              <tr>
                <td bgcolor="#B4DAE7" class="Txt11" >���. ����: </td>
                <td bgcolor="#B4DAE7" class="Txt11" >30102810500000000194</td>
              </tr>
              <tr>
                <td bgcolor="#B4DAE7" class="Txt11" >�� ����: </td>
                <td bgcolor="#B4DAE7" class="Txt11" ><?php   if (!empty($_GET['prev'])) {echo "<b>".$results['S_54'][0]." ----> <a href=index.php> �� ������� ����</a><b>";  } else echo "<b>".date("d.m.Y H:i:s")." ----> <a href=index.php?prev=1> �� ���������� ����</a></b>"; ?>&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      </table>
      <div align="center">
        <table width="100%" border="0" cellpadding="02" cellspacing="2" class="base_txt">
          <tr>
            <td width="262" bgcolor="#B4DAE7" class="Txt11" ><strong>��� �� �������� ���: <?PHP echo $results['S_18'][0];?>&nbsp</strong></td>
            <td width="362" bgcolor="#B4DAE7" class="Txt11" ><strong>��� �� ����: <?PHP echo $results['S_19'][0];?>&nbsp</strong></td>
          </tr>
        </table>
      </div>
    </div></TD>
    <TD align="center"><img src="images/vr.gif" width="7" height="120"  border="0"/></TD>
  </TR>
  <TR>
    <TD align="right" valign="top"><img src="images/lb.gif" border="0"/></TD>
    <TD valign="top"><img src="images/hr.gif" width="100%" height="7" border="0"/></TD>
    <TD align="left" valign="top"><img src="images/rb.gif"  border="0" align="top"/></TD>
  </TR>
</TABLE>
	
	
	<TABLE align="center"  cellspacing="0" cellpadding="0" border="0" width="100%">
  <TR>
    <TD  align="right" valign="bottom"><img src="images/lt.gif"  border="0"/></TD>
    <TD  valign="bottom"><img src="images/hr.gif" width="100%" height="7" border="0" /></TD>
    <TD  align="left" valign="bottom"><img src="images/rt.gif"  border="0"/></TD>

  </TR>
  <TR>
    <TD align="center"><img src="images/vr.gif" width="7" height="220" ></TD>
    <TD width="100%" height="100" align="right" valign="top"><div align="left">
      <table class="base_txt" width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="50%" bgcolor="#5FAEC9" class="Txt11" ><strong>&nbsp;&nbsp; ������: <?PHP echo $results['S_14'][0];?>&nbsp</strong></td>
          <td bgcolor="#5FAEC9"><img src="loader/vr.gif" width="7" height="20"></td>
          <td width="50%" bgcolor="#5FAEC9" class="Txt11" ><strong>&nbsp;&nbsp; ������: <?PHP echo $results['S_13'][0];?>&nbsp</strong></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#E0F5F1"><img src="images/hr.gif" width="100%" height="7" ></td>
          <td bgcolor="#E0F5F1"><img src="images/vr.gif" width="7" height="20"></td>
          <td width="50%" align="left" valign="top" bgcolor="#E0F5F1"><img src="images/hr.gif" width="100%" height="7"></td>
        </tr>
        <tr>
          <td align="left" valign="top" bgcolor="#E0F5F1"><table class="base_txt" width="100%" border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >����������� �������: </td>            
                <td width="150" bgcolor="#BBEAE0" class="Txt11" ><a href="details.php?id=1<?php if (!empty($_GET['prev'])) echo "&prev=1";?>"><?PHP echo $results['S_1'][0];?>&nbsp</a></td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >� ��� ����� �� ������: </td>
                <td bgcolor="#BBEAE0" class="Txt11" ><a href="details.php?id=9<?php if (!empty($_GET['prev'])) echo "&prev=1";?>"><?PHP echo $results['S_2'][0];?>&nbsp</a></td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >��������������� �����������: </td>
                <td bgcolor="#BBEAE0" class="Txt11" ><a href="details.php?id=3&num=<?PHP if (!empty($results['S_4'][0])) echo substr($results['S_4'][0],5,1); else echo "1" ?><?php if (!empty($_GET['prev'])) echo "&prev=1";?>" ><?PHP echo $results['S_3'][0];?>&nbsp</a></td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" ><?PHP echo $results['S_4'][0];?>&nbsp</td>
                <td bgcolor="#BBEAE0" class="Txt11" >&nbsp</td>
              </tr>
          </table></td>
          <td align="left" valign="top" bgcolor="#E0F5F1"><img src="images/vr.gif" width="7" height="180"></td>
          <td align="left" valign="top" bgcolor="#E0F5F1"><table class="base_txt" width="100%" border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >��������� �������: </td>
                <td width="150" bgcolor="#BBEAE0" class="Txt11" ><a href="details.php?id=2<?php if (!empty($_GET['prev'])) echo "&prev=1";?>"><?PHP echo $results['S_5'][0];?>&nbsp</a></td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >����������� �������: </td>
                <td bgcolor="#BBEAE0" class="Txt11" ><?PHP echo $results['S_6'][0];?>&nbsp</td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >D-�����: </td>
                <td bgcolor="#BBEAE0" class="Txt11" ><?PHP echo $results['S_7'][0];?>&nbsp</td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >������� � ��������: </td>
                <td bgcolor="#BBEAE0" class="Txt11" ><a href="details.php?id=4<?php if (!empty($_GET['prev'])) echo "&prev=1";?>"><?PHP echo $results['S_8'][0];?>&nbsp</a></td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >����������� �������: </td>
                <td bgcolor="#BBEAE0" class="Txt11" ><a href="details.php?id=6<?php if (!empty($_GET['prev'])) echo "&prev=1";?>"><?PHP echo $results['S_9'][0];?>&nbsp</a></td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >� ������� ��� ���: </td>
                <td bgcolor="#BBEAE0" class="Txt11" ><a href="details.php?id=7<?php if (!empty($_GET['prev'])) echo "&prev=1";?>"><?PHP echo $results['S_10'][0];?>&nbsp</a></td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >�������� ��� �������</td>
                <td bgcolor="#BBEAE0" class="Txt11" ><a href="details.php?id=8<?php if (!empty($_GET['prev'])) echo "&prev=1";?>"><?PHP echo $results['S_11'][0];?>&nbsp</a></td>
              </tr>
              <tr>
                <td bgcolor="#BBEAE0" class="Txt11" >���������� �������</td>
                <td bgcolor="#BBEAE0" class="Txt11" ><a href="details.php?id=5<?php if (!empty($_GET['prev'])) echo "&prev=1";?>"><?PHP echo $results['S_12'][0];?>&nbsp</a></td>
              </tr>
          </table></td>
        </tr>
      </table>
    </div></TD>
    <TD align="center"><img src="images/vr.gif" width="7" height="220"  border="0"/></TD>
  </TR>
  <TR>
    <TD align="right" valign="top"><img src="images/lb.gif" border="0"/></TD>
    <TD valign="top"><img src="images/hr.gif" width="100%" height="7" border="0"/></TD>
    <TD align="left" valign="top"><img src="images/rb.gif"  border="0" align="top"/></TD>
  </TR>
</TABLE>




<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>






<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#466CAC" bgcolor="#E8F2F9" class="base_txt">
 <tr>
 <td>
<table width="100%" class="base_txt" border="0" cellspacing="2" cellpadding="2">
 <tr>
   <td width="250" class="Txt11" ><strong>����.</strong></td>
   <td width="130" class="Txt11" ><strong>����.</strong></td>

   <td width="250" class="Txt11" ><strong>����</strong></td>
   <td width="130" class="Txt11" ><strong>����.</strong></td>
 </tr>
 <tr>
  
   <td align="left" valign="top"><table width="100%" class="base_txt" border="0" cellspacing="2" cellpadding="2">
     <tr>
       <td bgcolor="#B4DAE7"  class="Txt11" >���</td>
       <td bgcolor="#B4DAE7"  class="Txt11" ><?PHP echo $results['S_22'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >������� ���</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_23'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >��������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_24'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_25'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >������ ������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_26'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >��������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_27'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >�����</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_28'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >�������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_29'][0];?>&nbsp</td>
     </tr>
   </table></td>
   <td align="left" valign="top"><table width="100%" border="0" cellspacing="2"  class="base_txt" cellpadding="2">
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11"  ><?PHP echo $results['S_30'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_31'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_32'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_33'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_34'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_35'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_36'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_37'][0];?>&nbsp</td>
     </tr>
   </table></td>
    
   
   <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" class="base_txt" cellpadding="2">
     <tr>
       <td width="90" bgcolor="#B4DAE7"  class="Txt11">���</td>
       <td  width="138" bgcolor="#B4DAE7" class="Txt11"><?PHP echo $results['S_38'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >������� ���</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_39'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >��������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_40'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_41'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7">������ ������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_42'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >��������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_43'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >�����</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_44'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" >�������</td>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_45'][0];?>&nbsp</td>
     </tr>
   </table></td>
   
   
   <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" class="base_txt" cellpadding="2">
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_46'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_47'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_48'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_49'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_50'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_51'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_52'][0];?>&nbsp</td>
     </tr>
     <tr>
       <td bgcolor="#B4DAE7" class="Txt11" ><?PHP echo $results['S_53'][0];?>&nbsp</td>
     </tr>
   </table></td>
   
   
 </tr>
</table>
</td>
   
   
 </tr>
</table>
<div align="right"><SMALL>Copyright &copy;  2009 Grishukov V.M. v.1.0 </SMALL></div>


	</BODY>
</HTML>

