<?php
  
  include("../db.php");
  
  include("../h_function.php");
  
  $rekt = 0;
  
  if(!isset($_SESSION['user_id'])){
      header("../index.php");
  }
  
  
  $id = $_SESSION['user_id'];
  
  $q = "select level,user from hunt where id = '$id' ";
  $qe = mysqli_query($db,$q);
  $level = mysqli_fetch_row($qe);
  
  if($level[0] != 3){
    header("Location: ../play.php");
  }
  
  if(check_ban($id,$db)){
    header("Location: ../ban.php");
  }
  
  if(isset($_POST['but'])){ 
    $answer = $_POST['answer'];
    
    date_default_timezone_set('Asia/Kolkata');
    $time = date(" Y/m/d H:i:s",time());
    make_log($level[1],$answer,3,$time);
    
    if($answer == "roadredemption"){
      level_up($id,4,$db);
      header("Location: ../play.php");
    }else{
      $rekt = 1;
    }
    
  }
  
?>

<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <link rel="icon" href="logo-black.png">
    <title>enCO&YAcy;E | Level - 3</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,600,700,800|Raleway:100,200,300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../lstyle.css" rel="stylesheet">
    <script type="text/javascript" src= "https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <meta name="description" content="CO&YAcy;E - Computer Obsessed Radical Enthusiasts | The official computer and technology club of DPS Dwarka" />
    <meta name="keywords" content="encore, en, core hunt, CO&YAcy;E, core, dps, dwarka, core 10, core x, x, corex, CO&YAcy;E 10, computer, technology, club, delhi public school, core 9, annual, fest, obsession, redifined, are, you,  obsessed, decade of obsession" />
    <meta name="author" content="metatags generator">
    <meta name="robots" content="index, follow">
  </head>
  <body>
    <div class="header">
      <div class="left-part nav-ele">
        <span class = "thin orange">en</span>CO&YAcy;E
      </div>  
      <div class="right-part nav-ele">
        <a href="../rules.php"><span class = "orange">R</span>ules</a>
        <a href="../leaderboard.php"><span class = "orange">L</span>eaderboard</a>
        <a href="../logout.php"><span class = "orange">L</span>ogout</a>
      </div>
    </div>
    <div class="landing" align="center">
      <div class="landing-box">
        <h1><span class = "orange">L</span>evel - 3</h1>
        <p>
          <img src = "bhaibhaibhai.PNG">
        </p>
        <form name = "main" action = "index.php" method = "post">
          <input type="text" name="answer"  placeholder="">
          <div class="buttons"><button type = "submit" name = "but"><div>Submit</div></button></div>
        </form>
        <span id = "error"> </span>
        <?php
          if($rekt == 1){
            echo "
            <script>document.getElementById('error').innerHTML = 'wrong';</script>
            ";
          }
        ?>
      </div>
    </div>
  </body>
</html>

