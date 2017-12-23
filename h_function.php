<?php
  session_start();
    
  function level_up($id, $level, $db){
    
    date_default_timezone_set('Asia/Kolkata');
    $time = date(" Y/m/d H:i:s",time());
    $score = $level*100;
    
    $upd1 = "update hunt set level = $level where id = '$id' ";
    $upd2 = "update hunt set score = $score  where id = '$id' ";
    $upd3 = "update hunt set time = '$time' where id = '$id' " ;
    
    $q1 = mysqli_query($db,$upd1);
    $q2 = mysqli_query($db,$upd2);
    $q3 = mysqli_query($db,$upd3);

  }
  
  function check_ban($id,$db){
    $l = "select ban from bache where id = '$id' " ;
    $q = mysqli_query($db,$l);
    $r = mysqli_fetch_row($q);
    return $r[0];
  }

  function make_log($user, $answer, $level, $time){
    $name = "../logs.txt";
    $file = fopen($name,"a+");
    $str = "User -> ".$user." Answer -> ".$answer." Level -> ".$level." Time -> ".$time."\n";
    fwrite($file,$str);
  }
  
  function load_logs(){
    $name = "logs.txt";
    $file = fopen($name,"r");
    echo "<hr>";
    while(!feof($file)){
      echo fgets($file) . "<hr><br>";
    }
  }

?>