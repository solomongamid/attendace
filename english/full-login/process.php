<!DOCTYPE html>
<html>
<head>
<title>Welcome Admin</title>
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
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "process.php">Employees data</a></li>
         <li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent"  href = "signup.php">Registration</a></li>
         <li class="mdl-menu__item" ><a class="mdl-button mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href = "logout.php">logout</a></li>
       </ul>
        <h2 style="font-family:verdana; text-align:center;">Accenture Attendance App</h2>
        </div>
        <div>
          <h3 style="font-family:verdana; text-align:center;">Employees attendance data</h3>
        </div>
                    <?php
          include("config.php");
             session_start();

          $sql = "SELECT full_name, arrival_time,checks FROM checkins ";
          $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $active = $row['full_name'];
          
          if ($result->num_rows > 0) {
             echo "<table align='center' class='mdl-data-table mdl-js-data-table'><thead><tr><th>FullName</th><th>ArrivalTime</th><th>Check</th></tr></thead>";
               // output data of each row
               while($row = $result->fetch_assoc()) {

                    echo "<tbody><tr><td>" . $row["full_name"]. "</td><td>" . $row["arrival_time"].  "</td><td>" . $row["checks"].  "</td></tr></tbody>";
               }
               echo "</table>";
          } else {
               echo "0 results";
          }

$conn->close()
?>

</body>
</html>

