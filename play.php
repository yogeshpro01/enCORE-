<?php
  session_start();
  
  include("../db.php");
  include("h_function.php");
  
  if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
  }
  
  $id = $_SESSION['user_id'];
  
  $query = "select * from hunt where id = '$id' ";
  $result = mysqli_query($db,$query);
  
  $row = mysqli_fetch_assoc($result); 
  
  if($row['ban'] == 1){
    header("Location: ban.php");
  }
  
  $level = "Location: L".$row['level'];
  if($row['level'] < 10) {
    header($level);
  }else{
    header("Location: gg.php");
  }
?>
