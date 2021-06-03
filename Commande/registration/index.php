<?php

  // Initialiser la session

  session_start();

  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion

  if(!isset($_SESSION["username"])){

    header("Location: https://ksfsoftware.000webhostapp.com/Commande/registration/login.php");

    exit(); 

  } 

?> 

<!DOCTYPE html>

<html>

  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="https://ksfsoftware.000webhostapp.com/Commande/registration/style.css" />

  </head>

  <body>

    <div class="sucess">

      <h1>Bienvenue <?php echo $_SESSION['username']; ?> !</h1><br><br>

      <h3>Sélectionnez une tâche :</h3>

        <form name="commander" action="https://ksfsoftware.000webhostapp.com/Commande/commander.php" method="post">

          <input type="submit" value="Nouvelle commande">

        </form><br>

          <form name="client" action="https://ksfsoftware.000webhostapp.com/Commande/gestionClient.php" method="post">

            <input type="submit" value="Gestion client">

          </form><br>

            <form name="commande" action="https://ksfsoftware.000webhostapp.com/Commande/gestionCommande.php" method="post">

              <input type="submit" value="Gérer les commandes">

            </form><br> 

              <form name="article" action="https://ksfsoftware.000webhostapp.com/Commande/gestionArticle.php" method="post">

                <input type="submit" value="Gérer les articles">

              </form><br> 

	      <button onclick="window.location.href = 'https://ksfsoftware.000webhostapp.com/Commande/gestionArticle.php';">Gérer les articles</button><br><br>
			        

      <a href="https://ksfsoftware.000webhostapp.com/Commande/registration/logout.php">Déconnexion</a>

    </div>

  </body>

</html>