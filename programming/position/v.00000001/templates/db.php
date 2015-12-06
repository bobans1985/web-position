<?php 
//if(!defined("IN_ADMIN")) die;
  $conn = oci_connect("POSITION", "W6QoOruxtorXTV5", 'odb');
  if (!$conn) {
   $e = oci_error();
   print htmlentities($e['message']);
   exit;
  }
?> 
