
<?php
//var_dump($_POST["article"]);
//var_dump($_POST["prix"]);

require_once('config.php');
$nom = $_POST["article"];
$prix = $_POST["prix"];
$sql = "INSERT INTO articles (nomarticle, prix) VALUES ('$nom', '$prix')";
if (mysqli_query($conn, $sql)) {
      header("Location: https://ksfsoftware.000webhostapp.com/Commande/gestionArticle.php");;

} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
//header("Location: https://ksfsoftware.000webhostapp.com/Commande/gestionArticle.php");

=======
<?php
//var_dump($_POST["article"]);
//var_dump($_POST["prix"]);

require_once('config.php');
$nom = $_POST["article"];
$prix = $_POST["prix"];
$sql = "INSERT INTO articles (nomarticle, prix) VALUES ('$nom', '$prix')";
if (mysqli_query($conn, $sql)) {
      header("Location: https://ksfsoftware.000webhostapp.com/Commande/gestionArticle.php");;

} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
//header("Location: https://ksfsoftware.000webhostapp.com/Commande/gestionArticle.php");


