<?php
include ("configer.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Search</title>
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
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "alldata.php">Rechercher par nom</a></li>
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "month_check.php">Recherche par date</a></li>
         <li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent"  href = "signup.php">Enregistrement</a></li>
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">Déconnexion</a></li>
       </ul>
        <h2 style="font-family:verdana; text-align:center;">Accenture Présence App</h2>
        </div>
        <div>
        <h4 style="font-family:verdana; "> Recherche par date :</h4 >
        <form action="" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
    <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
      <i class="material-icons">search</i>
    </label>
    <div class="mdl-textfield__expandable-holder">
      <input class="mdl-textfield__input" type="text" id="sample6" name="term">
      <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
    </div>
  </div>
</form>
  </div>
  
<?php
if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     

$sql = "SELECT * FROM checkins WHERE date_a LIKE '%".$term."%'"; 
$r_query = mysql_query($sql); 
echo "<table align='center' class='mdl-data-table mdl-js-data-table'><thead><tr><th>FullName</th><th>ArrivalTime</th><th>Check</th></tr></thead> ";
while ($row = mysql_fetch_array($r_query)){   
echo " <tbody><tr><td>" . $row["full_name"]. "</td><td>" . $row["arrival_time"].  "</td><td>" . $row["checks"].  "</td></tr></tbody>" ;  
   
}  
} else {
	echo '<span style="color:rgb(218, 103, 11); font-size:160%; font-family:verdana; text-align:center;">Entez la date S il vous plaît  ... </span>';
}
?>
    </body>
</html>