<?php 
    define("IN_ADMIN", TRUE); 
//    include('auth.php');
    require "auth.php";
    include ('templates/db.php');

$sql = "BEGIN EURO_PS_PKG.CALC; END;";
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
