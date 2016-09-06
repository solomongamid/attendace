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

        <h1 style="color:rgb(60, 142, 200); font-family:verdana; text-align:center;"> Bienvenue <?php echo $login_session; ?></h1>

      </div>
   </body>

</html>
