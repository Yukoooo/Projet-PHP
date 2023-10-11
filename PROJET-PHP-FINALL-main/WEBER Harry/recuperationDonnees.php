<link rel="stylesheet" href="recup.css">



<header>
    <table>
        <thead>
            <tr style=" text-align: center; width: 300px; font-family: Bebas; color: white; background-color: rgb(0, 50, 14); color: white;">
                <th>#</th>
                <th>NOM</th>
                <th>PRéNOM</th>
                <th>Adresse Mail</th>
                <th>Adresse</th>
                <th>Numéro de téléphone</th>
                <th>Message</th>
            </tr>
        </thead>
    </table>
</header>





<?php
echo "<body style='background-color: darkblue,'>";

try
{
    // On se connecte à MySQL
    $pdo = new PDO('mysql:host=localhost;dbname=contact', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table contact2
$sqlQuery = 'SELECT * FROM clients';
$recipesStatement = $pdo->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une de chaque base de données
foreach ($recipes as $recipe) {
?>

<body>
    <table>
        <tbody>
            <tr>
                <td id="titre"><?php echo $recipe["id_clients"]; ?></td>
                <td><?php echo $recipe["Nom"]; ?></td>
                <td><?php echo $recipe["Prénom"]; ?></td>
                <td><?php echo $recipe["AdresseM"]; ?></td>
                <td><?php echo $recipe["Adresse"]; ?></td>
                <td><?php echo $recipe["tel"]; ?></td>
                <td><?php echo $recipe["Msg"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
<?php
}
?>