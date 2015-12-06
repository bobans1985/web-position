<?php 
if(!defined("IN_ADMIN")) die;  
// $conn = oci_connect("POSITION", "W6QoOruxtorXTV5", 'odb');
  $conn = oci_connect("XXI", "ghj,t;rf628", 'odb');
  if (!$conn) {
   $e = oci_error();
   print htmlentities($e['message']);
   exit;
  }
?> 
