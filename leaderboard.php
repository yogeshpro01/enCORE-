<?php
  include("db.php");
  $q = "select *from hunt order by score desc, time";
  $res = mysqli_query($db,$q);
?>

<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <link rel="icon" href="logo-black.png">
    <title>enCO&YAcy;E | Leaderboard</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,600,700,800|Raleway:100,200,300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="lestyle.css" rel="stylesheet">
    <script type="text/javascript" src= "https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <meta name="description" content="CO&YAcy;E - Computer Obsessed Radical Enthusiasts | The official computer and technology club of DPS Dwarka" />
    <meta name="keywords" content="CO&YAcy;E, core, dps, dwarka, core 10, core x, x, corex, CO&YAcy;E 10, computer, technology, club, delhi public school, core 9, annual, fest, obsession, redifined, are, you,  obsessed, decade of obsession" />
    <meta name="author" content="metatags generator">
    <meta name="robots" content="index, follow">
  </head>
  <body>
    <div class="header">
      <div class="left-part nav-ele">
        <span class = "thin orange">en</span>CO&YAcy;E
      </div>
      <div class="right-part nav-ele">
        <a href="play.php"><span class = "orange">P</span>lay</a>
        <a href="rules.php"><span class = "orange">R</span>ules</a>
        <a href="logout.php"><span class = "orange">L</span>ogout</a>
      </div>
    </div>
    <div class="leaderboard" align="center">
      <div class="table" align="center">
        <table class="table-fill">
          <thead>
            <tr>
              <th class = "text-heading">#</th>
              <th class="text-heading">Username</th>
              <th class="text-heading">Score</th>
              <th class="text-heading">Time</th>
            </tr>
          </thead>
          <tbody class="table-hover">
            <?php
              $i=1;
              while($row = mysqli_fetch_assoc($res)){
                $us = $row['user'];
                $sc = $row['score'];
                $tm = $row['time'];
                $bn = $row['ban'];
                if($bn == 0){
                  echo "<tr>";
                  if($us == "rdp"){
                    echo "
                      <td class = 'text-left'>$i</td>
                      <td class = 'text-left'>$us</td>
                      <td class = 'text-left'>6900</td>
                      <td class = 'text-left'>2069-6-9 42:42:42</td>
                    ";
                  }else{
                    if($sc > 0){
                      echo "
                        <td class = 'text-left'>$i</td>
                        <td class = 'text-left'>$us</td>
                        <td class = 'text-left'>$sc</td>
                        <td class = 'text-left'>$tm</td>
                      ";
                    }else{
                      echo "
                        <td class = 'text-left'>$i</td>
                        <td class = 'text-left'>$us</td>
                        <td class = 'text-left'>$sc</td>
                        <td class = 'text-left'>--</td>
                      "; 
                    }
                  }
                  $i++;
                }
                echo "</tr>";

              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>