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
     if ($_GET['id']==10) 
 	   if (empty($_GET['num'])) die; 
	 else
           {
             if  (strlen($_GET['num'])>1 or
                 !preg_match ('/^([0-9])/',$_GET['num']) 
                 ) die;
	     $num=$_GET['num'];
	   }

     if  (strlen($_GET['id'])>2 or
          ($_GET['id']>10) or
          ($_GET['id']<1) or
        !preg_match ('/^([0-9])+$/',$_GET['id'])
         ) die;
     $dynamic_text="";
 if (!empty($_GET['prev'])) $dynamic_text="&prev=1";


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
        case 10: $sql=$sql10;$title=$title10;break;
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

<span class="viewsrc">Фильтр</span>
<div class="src">
<TABLE class=tablesorter   width="100%" cellspacing=2 cellpadding=3 border=0>
<THEAD>
  <TR>
    <TD  bgcolor="#e6EEEE">
<form id="filter-form"><b>Автофильтр:</b> <input name="filter" id="filter" type="text" class="input" ></form>
</TD>
  </TR>
</THEAD>
</TABLE>
</div>

<?php
	 	 $stmt = oci_parse($conn, $sql);
	         oci_execute($stmt,OCI_DEFAULT);

		 $nrows = oci_fetch_all($stmt, $results);
		 if ($nrows > 0) 
			{
				echo "<table id=result class=tablesorter cellspacing=2 cellpadding=3 border=0 >";
	                        echo "<thead>\n<tr>\n";
				   foreach ($results as $key => $val)
					 {
					  switch($key)
						{
						case "AMOUNT" :
						      $key="<th  width=70>Сумма</th>";
						      break;
						case "DOC_NUM" :
						      $key="<th width=10>№</th>";
						      break;
					        case "CLIENT_NAME":
						      $key="<th>Клиент</th>";
						      break;
					        case "CLIENT_ACC":
						      $key="<th>Счет Клиента</th>";
						      break;
					        case "CORR_NAME":
						      $key="<th>Корреспондент</th>";
						      break;
					        case "CORR_ACC":
						      $key="<th>Счет Корреспондента</th>";
						      break;
					        case "CORR_BANK_NAME":
						      $key="<th>Банк корреспондент</th>";
						      break;
					        case "PURPOSE":
						      $key="<th>Назначение платежа</th>";
						      break;
					        case "COUNT":
						      $key="<th>Документов</th>";
						      break;
					        case "IPOTPORTION":
						      $key="<th>№ Рейса</th>";
						      break;



						default:$key="<th>".$key."</th>"; break;
						} 

			                   echo "$key\n";
		        		 }
	 		        echo "</tr>\n</thead>\n<tbody>\n";
	                        for ($i = 0; $i < $nrows; $i++) 
				   {
  				    reset($results);
		        	    echo "<tr>\n";
				    while ($column = each($results)) 
					{   
				         $data = $column['value'];
  				         if ($_GET['id']==9) 
					        echo "<td  bgcolor=#B4DAE7><a href=details.php?id=10&num=".($i+1)."$dynamic_text>$data[$i]</a></td>\n";
                                            else 
                                                echo "<td  bgcolor=#B4DAE7>$data[$i]</td>\n";

						
			       		 }

                 		    echo "</tr>\n";
				   }

				echo "</tbody>\n<tfoot>\n<tr>\n</tr>\n</tfoot>\n</table>\n";
			} else
			{
		       		echo "<br><br>Извините, но не могу найти данных<br />\n";
			}    


//--------------------------------------------------------------------------
    oci_free_statement($stmt);
    oci_close($conn);
    include ('templates/footer_details.php');
?>  
