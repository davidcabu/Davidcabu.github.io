<?php
    session_start();
    require_once('config.php');

    if (isset($_POST['username'])){
      $username = stripslashes($_REQUEST['username']);
      $username = mysqli_real_escape_string($conn, $username);
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($conn, $password);
        $query = "SELECT * FROM `userscommandes` WHERE username='$username' and password='".hash('sha256', $password)."'";
      $result = mysqli_query($conn,$query) or die(mysql_error());
      $rows = mysqli_num_rows($result);

      if($rows==1){
        
          $_SESSION['username'] = $username;
          header("Location: https://ksfsoftware.000webhostapp.com/Commande/registration/index.php");
          exit;

      }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
      }
    }
    
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <form class="box" action="" method="post" name="login">
      <h1 class="box-logo box-title"><a href="">ksfsoftware</a></h1>
      <h1 class="box-title">Connexion</h1>
      <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
      <input type="password" class="box-input" name="password" placeholder="Mot de passe">
      <input type="submit" value="Connexion " name="submit" class="box-button">
      <p class="box-register">Vous êtes nouveau ici? <a href="https://ksfsoftware.000webhostapp.com/Commande/registration/register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
            <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>

    </form>
  </body>
</html>