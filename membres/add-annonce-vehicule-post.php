<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO vehicules (nom, categorie, prix, tel, date, img, owner) VALUES(?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['categorie'], $_POST['prix'], $_POST['tel'], $_POST['date'], $_POST['img'], $_POST['owner']));

// Redirect user back to the add criminal page
header('Location: success-add-annonce.php');

?>
