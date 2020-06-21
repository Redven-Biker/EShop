<?php
// Calls for the config file
include( "../inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO news (titre, description) VALUES(?, ?)');
$req->execute(array($_POST['titre'], $_POST['description']));

// Redirect user back to the add criminal page
header('Location: index.php');

?>
