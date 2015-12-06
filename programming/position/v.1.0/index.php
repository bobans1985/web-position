<?php 
    define("IN_ADMIN", TRUE); 
//    include('auth.php');
    require "auth.php";
  if (!empty($_GET['prev'])) 
    if  (strlen($_GET['prev'])>1 or
         !preg_match ('/^([0-9])/',$_GET['prev'])) die;
  include ('templates/db.php');




   if (empty($_GET['prev'])) 
      $sql = "BEGIN EURO_PS_PKG.CALC; END;";
   else
      $sql = "BEGIN EURO_PS_PKG.CALC_PREV_DAY; END;";
  $stmt = oci_parse($conn, $sql);
  oci_execute($stmt);

 $sql = "select * from p_euro_temp_pp";
  $stmt = oci_parse($conn, $sql);
  oci_execute($stmt,OCI_DEFAULT);

 $nrows = oci_fetch_all($stmt, $results);
if ($nrows > 0) {
//   for ($i = 0; $i < $nrows; $i++) {
//      reset($results);
//      while ($column = each($results)) {   
//         $data = $column['value'];
//         echo "$data[$i]<br>";
//      }
//   }
} else {
   echo "No data found<br />\n";
}      
    include ('templates/index0.php');
 
oci_free_statement($stmt);
oci_close($conn);

?> 
