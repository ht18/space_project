<?php
try
{
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=space_project','root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table users
$sqlQuery = 'SELECT * FROM users';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($users as $user) {
?>
    <p><?php echo $user['email']; ?></p>
<?php
}
?>
