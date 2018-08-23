<?php
  $db = mysqli_connect("", "", "", "");
  if($db->connect_error){
    header("location: chal.php");
  }  
?>
