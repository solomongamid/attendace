<?php
include ("configer.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>recherche</title>
        <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <style type="text/css">
        input[type=submit] {
          margin: 10px;
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 8px;
    border-radius: 50px; 
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
         <li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent"  href = "signup.php">Enregistrement</a></li>
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">Déconnexion</a></li>
       </ul>
        <h2 style="font-family:verdana; text-align:center;">Accenture Présence App</h2>
        </div>
        <div>
        <h4 style="font-family:verdana; text-align:center;"> Présence résumé report </h4 >

<form method="get" action="">
<select name="year">
  <option value="">Année</option>
  <?php for ($year = date('Y'); $year > date('Y')-100; $year--) { ?>
    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
    <?php } ?>
</select>
<select name="month">
    <option value="">Mois</option>
    <?php for ($month = 1; $month <= 12; $month++) { ?>
    <option value="<?php echo strlen($month)==1 ? '0'.$month : $month; ?>"><?php echo strlen($month)==1 ? '0'.$month : $month; ?></option>
    <?php } ?>
</select>
<select name="day">
  <option value="">Jour</option>
    <?php for ($day = 1; $day <= 31; $day++) { ?>
    <option value="<?php echo strlen($day)==1 ? '0'.$day : $day; ?>"><?php echo strlen($day)==1 ? '0'.$day : $day; ?></option>
    <?php } ?>
</select>
<input  type="submit" name="search" value="  
Recherche">
</form>
<?php
if (isset($_GET['search'])) {
    $year = intval($_GET['year']);
    $month = intval($_GET['month']);
    $day = intval($_GET['day']);
    
    $sql = "SELECT *
            FROM checkins
            WHERE date_a BETWEEN '$year-$month-$day' AND '$year-$month-$day' ";
            $r_query = mysql_query($sql);
           
            echo "<table align='center' class='mdl-data-table mdl-js-data-table'><thead><tr><th>FullName</th><th>ArrivalTime</th><th>Check</th></tr></thead> ";
           while ($row = mysql_fetch_array($r_query)){ 
			$active = $row['full_name'];
echo " <tbody><tr><td>" . $active. "</td><td>" . $row["arrival_time"].  "</td><td>" . $row["checks"].  "</td></tr></tbody>" ;  
   
} 
	


}  


?>



    </body>
</html>