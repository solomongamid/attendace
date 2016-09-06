<?php session_start();
include("config.php"); ?>
<html>
  <head>
    <title>My list</title>
    <link rel="stylesheet" href="./material.min.css">
      <script src="./material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript">

//----------------------------------------------------------------
// SENDS SELECTED OPTION TO RETRIEVE DATA TO FILL TABLE.
function send_option () {
var sel = document.getElementById( "my_select" );
var txt = document.getElementById( "my_option" );
txt.value = sel.options[ sel.selectedIndex ].value;
var frm = document.getElementById( "my_form" );
frm.submit();
}
//----------------------------------------------------------------
    </script>
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
        <h4 style="font-family:verdana; text-align:center;"> Attendance Summary Report </h4 >

    <h6 style="font-family:verdana; ">For history report, Please select an employee  </h6>
    <br/>
    <select id="my_select" onchange="send_option();">
      <option style="font-family:verdana; ">Select an Employee</option>
<?php

//----------------------------------------------------------------
// LIST FILLED FROM DATABASE (ALLEGEDLY).

$query = "SELECT * FROM users";
$result = mysqli_query ($db, $query);
while ( $row = mysqli_fetch_array($result) )
  echo "<option value='" . $row['name'] ." ".$row['surname'] . "'>" . $row['name'] ." ". $row['surname'] . "</option>";
//----------------------------------------------------------------
?>
    </select>
    <br/> 
    <br/>
    <table align='center' class='mdl-data-table mdl-js-data-table'>
    <thead ><tr><th>FullName</th><th>ArrivalTime</th><th>Check</th></tr></thead>
<?php
//----------------------------------------------------------------
// TABLE FILLED FROM DATABASE ACCORDING TO SELECTED OPTION.

$query = "SELECT * FROM checkins where full_name like '" . $_POST["my_option"] . "'";
$result = mysqli_query ($db, $query);
while( $row = mysqli_fetch_array($result) )
  echo "<tr>" .
       "<td>" . $row['full_name'] . "</td>" .
       "<td>" . $row['arrival_time'] . "</td>" .
       "<td>" . $row['checks'] . "</td>" .
       "</tr>";
    
?>
</table>
<!-- FORM TO SEND THE SELECTED OPTION. -->
    <form method="post" action"welcome.php" style="display:none" id="my_form">
      <input type="text" id="my_option" name="my_option"/>
    </form>

  </body>
</html>