<?php
  session_start();
  
  include("../db.php");
  include("../functions.php");
  
  if(isset($_SESSION['user_id'])){
    header("Location: play.php");
  }
  

?>

<?php
  if(isset($_POST['but'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if(connect_user($user,$pass,"hunt",$result)){
      header("Location: play.php");
    }
  }
?>

<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <title>enCO&YAcy;E</title>
    <link rel="icon" href="logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,600,700,800|Raleway:200,300,400,600|Architects+Daughter|Muli:300,400,700|Ubuntu:400|Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src= "https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
  </head>
  <body align="center">
    <div class="boxer">
      <div class="box">
        <p><span class="orange">en</span>CO&YAcy;E </p>
        <form name = "main" method = "post" action = "index.php">
          <input type="text" name="user" placeholder="Name" class="text-box"><br>
          <input type="password" name="pass" placeholder="Password" class="text-box"><br>
          <button class="btns" type="submit" name = "but">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>