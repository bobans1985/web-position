<?php
    define("IN_ADMIN", TRUE); 
    require "auth.php";
    if (empty($_GET['id'])) die;
    $num=0; 


     if ($_GET['id']==3) 
 	   if (empty($_GET['num'])) die; 
	 else
           {
             if  (strlen($_GET['num'])>1 or
                 !preg_match ('/^([0-9])/',$_GET['num']) 
                 ) die;
	     $num=$_GET['num'];
	   }
     if  (strlen($_GET['id'])>1 or
         !preg_match ('/^([0-9])/',$_GET['id'])) die;



    include ('templates/header_details.php');
    include ('templates/db.php');
    include ('templates/details_sql.php');
//--------------------------------------------------------------------------
switch($_GET['id'])
{
	case 1: $sql=$sql1;$title=$title1;break;
	case 2: $sql=$sql2;$title=$title2;break;
        case 3: $sql=$sql3;$title=$title3;break;
	case 4: $sql=$sql4;$title=$title4;break;
	case 5: $sql=$sql5;$title=$title5;break;
	case 6: $sql=$sql6;$title=$title6;break;
	case 7: $sql=$sql7;$title=$title7;break;
	case 8: $sql=$sql8;$title=$title8;break;
        case 9: $sql=$sql9;$title=$title9;break;
	default: die;	break;
} 
?>
<br>
<TABLE align="center"  width="500" cellspacing="0" cellpadding="0" border="0">
  <TR>
    <TD  align="right" valign="bottom"><img src="images/lt.gif"  border="0"/></TD>
    <TD  valign="bottom"><img src="images/hr.gif" width="100%" height="7" border="0" /></TD>
    <TD  align="left" valign="bottom"><img src="images/rt.gif"  border="0"/></TD>
  </TR>
  <TR>
    <TD align="right"><img src="images/vr.gif" width="7" height="20" ></TD>
    <TD align="center" valign="middle" bgcolor="#FF9699"> <?php  echo '<b>'.$title.'</b>'; ?>
</TD>
    <TD align="left"><img src="images/vr.gif" width="7" height="20"  border="0"/></TD>
  </TR>
  <TR>
    <TD align="right" valign="top"><img src="images/lb.gif" border="0"/></TD>
    <TD valign="top"><img src="images/hr.gif" width="100%" height="7" border="0"/></TD>
    <TD align="left" valign="top"><img src="images/rb.gif"  border="0" align="top"/></TD>
  </TR>
</TABLE>
<br>

<?php

	 	 $stmt = oci_parse($conn, $sql);
	         oci_execute($stmt,OCI_DEFAULT);

		 $nrows = oci_fetch_all($stmt, $results);
		 if ($nrows > 0) 
			{
				echo "<table class=sortable cellspacing=2 class=base_txt cellpadding=3 border=0 >";
	                        echo "<thead>\n<tr>\n";
				   foreach ($results as $key => $val)
					 {
					  switch($key)
						{
						case "AMOUNT" :
						      $key="�����";
						      break;
						case "DOC_NUM" :
						      $key="���. ���.";
						      break;
					        case "CLIENT_NAME":
						      $key="������";
						      break;
					        case "CLIENT_ACC":
						      $key="���� �������";
						      break;
					        case "CORR_NAME":
						      $key="�������������";
						      break;
					        case "CORR_ACC":
						      $key="���� ��������������";
						      break;
					        case "CORR_BANK_NAME":
						      $key="���� �������������";
						      break;
					        case "PURPOSE":
						      $key="���������� �������";
						      break;
					        case "COUNT":
						      $key="����������";
						      break;
					        case "IPOTPORTION":
						      $key="� �����";
						      break;



						default: break;
						} 

			                   echo "<th bgcolor=#5FAEC9>$key</th>\n";
		        		 }
	 		        echo "</tr>\n</thead>\n<tbody>\n";
	                        for ($i = 0; $i < $nrows; $i++) 
				   {
			            reset($results);
		        	    echo "<tr>\n";
				    while ($column = each($results)) 
					{   
				         $data = $column['value'];
				         echo "<th bgcolor=#B4DAE7 class=Txt10>$data[$i]</th>\n";
			       		 }

                 		    echo "</tr>\n";
				   }

				echo "</tbody>\n<tfoot>\n<tr>\n</tr>\n</tfoot>\n</table>\n";
			} else
			{
		       		echo "<br><br>��������, �� �� ���� ����� ������<br />\n";
			}    


//--------------------------------------------------------------------------
    oci_free_statement($stmt);
    oci_close($conn);
    include ('templates/footer_details.php');
?>  
