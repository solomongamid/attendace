<?php
   include('session.php');
?>
<html>

   <head>
     <meta charset="utf-8">
      <title>Bienvenue Administrateur</title>
      <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   </head>

   <body>
   	 <div class="mdl-layout mdl-js-layout">
   	 <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
   	    <a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">Déconnexion</a>

        <h2 style="font-family:verdana; text-align:center;">Accenture Présence App</h2>
      </div>

        <h1 style="color:rgb(60, 142, 200); font-family:verdana; text-align:center;"> Bienvenue <?php echo $login_session ; ?></h1>

    <h5 style="color:rgb(246, 159, 17); font-family:verdana; text-align:center;"> Vous êtes arrivé à <?php $time = date("m/d/y G.i:s<br>", time()); echo "$time" ?> </h5><br>
   	<?php $CURRENTTIME = new DateTime($data['current_time']);
    		$OFFICETIME  = new DateTime('10:00:00');
          	$ABSENTIME = new DateTime('12:20:00');
   			 if ($CURRENTTIME  > $OFFICETIME && $CURRENTTIME < $ABSENTIME) {
      			 echo '<span style="color:rgb(255, 204, 51); font-size:160%; font-family:verdana; text-align:center;">vous êtes en retard!</span>';
   			 }  elseif ($CURRENTTIME > $ABSENTIME) {
    			echo '<span style="color:rgb(218, 103, 11); font-size:160%; font-family:verdana; text-align:center;">vous êtes absent!</span>';
  		     } else {
     		    echo '<span style="color:rgb(76, 175, 80); font-size:160%; font-family:verdana; text-align:center;>Bonjour,merci d être à l heure !</span>';
  			 }
   ?>
   </div>

   </body>

</html>
