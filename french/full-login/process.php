<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>Bienvenue administrateur</title>
      <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
table, th, td {
     border: 1px solid black;
}
</style>
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
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "alldata.php">Rechercher par nom</a></li>
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "month_check.php">Recherche par date</a></li>
         <li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent"  href = "signup.php">enregistrement</a></li>
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">déconnexion</a></li>
       </ul>
        <h2 style="font-family:verdana; text-align:center;">Accenture Présence App</h2>
      </div>
<?php
include("config.php");
   session_start();

$sql = "SELECT fullname, arrival_time FROM checkins ";
$result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['fullname'];

if ($result->num_rows > 0) {
	 echo "<div><div><UserID</div>ArrivalTime</div>";
     // output data of each row
     while($row = $result->fetch_assoc()) {

          echo "<div>" . $row["fullname"]. "</div><div>" . $row["arrival_time"].  "</div>";
     }
     echo "</div>";
} else {
     echo "0 results";
}

$conn->close();
// set up PHPMailer
$mail = new PHPMailer();
$mail->SetFrom('you@yourserver.com');
$mail->AddReplyTo('you@somewhereelse.com');
$mail->Subject('votre nom et mot de passe');
$mail->IsHTML(TRUE);

// do your database query
$db = connect_to_database();
$stmt = run_database_query($db, "SELECT * fullname,password FROM users");

$data = fetch_from_database($stmt);


// set the email address
$mail->AddAddress($data['password'], $data['fullname']);


// html content for smart email clients
$html = <<<EOL
<h1>Welcome</h1>
?>
</body>
</html>
