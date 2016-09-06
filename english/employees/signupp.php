<?php
   include("config.php");
   session_start();
   ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sign-Up</title>
	  <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body >


<div class="mdl-layout mdl-js-layout">
       
       <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
       	<button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
           <i class="material-icons">more_vert</i>
       </button>

       <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
           for="demo-menu-lower-left">
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">logout</a></li>
       </ul>
        <h2 style="font-family:verdana; text-align:center;">Accenture Attendance App</h2>
      </div>
         
       

        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp"  align="center">
           <form method="POST" action="connect.php">
		   <thead>
			<td>First_name</td><td> <input type="text" name="name"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td>Last_name</td><td> <input type="text" name="lastname"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td>Email</td><td> <input type="text" name="email"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td>User_name</td><td> <input type="text" name="username"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td>Password</td><td> <input type="password" name="pass"></td>
			</tr>
			</thead>
			<thead>
			<tr>
			<td><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="button" type="submit" name="submit" value="Sign-Up"> Submit </button></td>
			</tr>
			</thead>
			</form>
		</table>
	    
      </div>

</body>
</html>


