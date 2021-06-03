<?php
session_start();
require_once('registration/config.php');

?>

<!DOCTYPE html>

<html>

  <head>

    <link rel="stylesheet" href="https://ksfsoftware.000webhostapp.com/Commande/registration/style.css" />

  </head>

  <body>



<div class="sucess">

    <H1>Gérer les articles</H1>

  <?php  include("registration/autoleftbar.php"); ?>
 <!--
<div class="leftmenu">
<ul><li><a href="registration/index.php">Accueil</a></li>
       <li><a href="/tutorials.php">tutoriaux</a></li>
        <li><a href="/references.php">Références</a></li>
        <li><a href="/examples.php">Exemples</a> </li>
        <li><a href="/about.php">Qui suis-je ?</a> </li>
       <li> <a href="/contact.php">Contact </a></li> 
</ul>
</div>
-->
<TABLE BORDER="1" align="center">
  <CAPTION> Liste des articles </CAPTION>
  <tr>
  <th> ID </th>	
 <th> Nom </th>
 <th> Prix/pc. </th>
  </tr>
<?php
		$requete = "SELECT * FROM articles";
		$resultat = $conn -> query($requete);
		while ($donnees = $resultat -> fetch_assoc()) {
	echo "</tr>";
	echo "<td> $donnees[id] </td>";
    echo "<td> $donnees[nomarticle] </td>";
    echo "<td> $donnees[prix]  € </td>";
   
    echo "</tr>";
		}
		$conn->close();
?>
</table>

<form action="registration/add.php" method="post">

<p>
	<label for="nom">Article</label>
	<input id="nom" type="text" name="article">
</p>

<p>
	<label for="prix">Prix</label>
	<input id="prix" type="number" name="prix">
</p>
 
<p><input type="submit" value="Ajouter"></p>
</form>

</div>
  </body>

</html>