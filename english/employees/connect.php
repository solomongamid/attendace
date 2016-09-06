<!DOCTYPE html>
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
    <?php

include 'configer.php';
session_start();


function NewUser() {
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$userName = $_POST['username'];
	$password =  $_POST['pass'];
	$query = "INSERT INTO users (name,surname,email,username,passcode) VALUES ('$name','$lastname','$email','$userName','$password')";
	$data = mysql_query($query) or die (mysql_error());
	
	if($data) {
	echo '<span style="color:rgb(94, 186, 125); font-size:160%; font-family:verdana; text-align:center;">YOUR REGISTRATION IS COMPLETED...</span>';
	
	}
}

    function SignUp() {
		if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
		{
			$query = mysql_query('SELECT username FROM users ');
        if ($query != '$_POST[user]') {

		NewUser();

	   } else {
		echo '<span style="color:rgb(218, 103, 11); font-size:160%; font-family:verdana; text-align:center;">SORRY...YOU ARE ALREADY REGISTERED USER...</span>';
	   }
    }
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>
   </body>
   
</html>


