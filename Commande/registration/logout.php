
<?php

  // Initialiser la session

  session_start();

  

  // Détruire la session.

  if(session_destroy())

  {

    // Redirection vers la page de connexion

    header("Location: https://ksfsoftware.000webhostapp.com/Commande/registration/login.php");

  }

=======
<?php

  // Initialiser la session

  session_start();

  

  // Détruire la session.

  if(session_destroy())

  {

    // Redirection vers la page de connexion

    header("Location: https://ksfsoftware.000webhostapp.com/Commande/registration/login.php");

  }

?>