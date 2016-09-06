<?php
   
   include("config.php");
   session_start();
?>
<html>
   
   <head>
      <title>Welcome Admin</title>
      <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   </head>
   
   <body>
   	 <div class="mdl-layout mdl-js-layout">
   	 <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
   	    <a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">logout</a> 

        <h2 style="font-family:verdana; text-align:center;">Accenture Attendance App</h2>
      </div>
         
        <h1 style="color:rgb(60, 142, 200); font-family:verdana; text-align:center;"> Welcome <?php echo $login_session; ?></h1> 

    <h5 style="color:rgb(246, 159, 17); font-family:verdana; text-align:center;"> You are arrive at <?php $time = date("d/m/y G:i:s<br>", time()); echo "$time" ?> </h5><br>
   	<?php 


   	        $CURRENTTIME = new DateTime($data['current_time']);
    		$OFFICETIME  = new DateTime('10:00:00');
          	$ABSENTIME = new DateTime('12:20:00');
          	$checkAbs = 3;
          	$checkPre = 1;
          	$checkLate = 2;
   			 if ($CURRENTTIME  > $OFFICETIME && $CURRENTTIME < $ABSENTIME) {
      			 echo '<span style="color:rgb(255, 204, 51); font-size:160%; font-family:verdana; text-align:center;">You are late tody!</span>';
   			 }  elseif ($CURRENTTIME > $ABSENTIME) {
    			echo '<span style="color:rgb(218, 103, 11); font-size:160%; font-family:verdana; text-align:center;">You are absente today!</span>';
  		     } else {
     		    echo '<span style="color:rgb(76, 175, 80); font-size:160%; font-family:verdana; text-align:center;">Good morning, Thank you for being on time!</span>';
  			 }
   ?>
   </div>

   </body>
   
</html>