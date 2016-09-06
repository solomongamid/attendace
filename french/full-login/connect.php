<!DOCTYPE html>
<html>

   <head>
     <meta charset="utf-8">
      <title>Bienvenue administrateur</title>
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
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "alldata.php">Recherche par nom</a></li>
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "month_check.php">Recherche par date</a></li>
         <li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent"  href = "signup.php">Enregistrement</a></li>
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">Déconnexion</a></li>
       </ul>
        <h2 style="font-family:verdana; text-align:center;">Accenture Présence App</h2>
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
	echo '<span style="color:rgb(20, 119, 190); font-size:160%; font-family:verdana; text-align:center;">Votre enregistrement a été effectué avec succés...</span>';

	}
}

    function SignUp() {
		if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
		{
			$query = mysql_query('SELECT username FROM users ');
        if ($query != '$_POST[user]') {

		NewUser();

	   } else {
		echo '<span style="color:rgb(218, 103, 11); font-size:160%; font-family:verdana; text-align:center;">OOPS...VOUS AVEZ DÉJA ÉTÉ ENREGISTRÉ ...Utililisateur...</span>';
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
