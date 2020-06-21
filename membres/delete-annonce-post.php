<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO delete_annonce (titre, categorie, owner) VALUES(?, ?, ?)');
$req->execute(array($_POST['titre'], $_POST['categorie'], $_POST['owner']));

// Redirect user back to the add criminal page
header('Location: success-delete-annonce.php');

?>
