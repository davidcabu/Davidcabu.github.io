
<?php
/*
// On inclut la connexion à la base
require_once('config.php');

// On écrit notre requête
$sql = "SELECT * FROM articles";
$result = $conn -> query($sql);

require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>

    <h1>Liste des produits</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix/pc</th>
        </thead>
        <tbody>
        <?php
            foreach($result as $produit){
        ?>
                <tr>
                    <td><?= $produit['id'] ?></td>
                    <td><?= $produit['nomarticle'] ?></td>
                    <td><?= $produit['prix'] ?></td>
                    <td><a href="edit.php?id=<?= $produit['id'] ?>">Modifier</a>  <a href="delete.php?id=<?= $produit['id'] ?>">Supprimer</a></td>
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <a href="add.php">Ajouter</a>
</body>
</html>
=======
<?php
/*
// On inclut la connexion à la base
require_once('config.php');

// On écrit notre requête
$sql = "SELECT * FROM articles";
$result = $conn -> query($sql);

require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>

    <h1>Liste des produits</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix/pc</th>
        </thead>
        <tbody>
        <?php
            foreach($result as $produit){
        ?>
                <tr>
                    <td><?= $produit['id'] ?></td>
                    <td><?= $produit['nomarticle'] ?></td>
                    <td><?= $produit['prix'] ?></td>
                    <td><a href="edit.php?id=<?= $produit['id'] ?>">Modifier</a>  <a href="delete.php?id=<?= $produit['id'] ?>">Supprimer</a></td>
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <a href="add.php">Ajouter</a>
</body>
</html>

