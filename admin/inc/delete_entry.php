<?php
include( "../../inc/config.php" );

if(isset($_POST['deletenews']) and is_numeric($_POST['deletenews']))
{
  $id = $_POST['deletenews'];
  $count=$bdd->prepare("DELETE FROM news WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../index.php');
};

if(isset($_POST['deleteuser']) and is_numeric($_POST['deleteuser']))
{
  $id = $_POST['deleteuser'];
  $count=$bdd->prepare("DELETE FROM users WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../users.php');
};

if(isset($_POST['deletevehicules']) and is_numeric($_POST['deletevehicules']))
{
  $id = $_POST['deletevehicules'];
  $count=$bdd->prepare("DELETE FROM vehicules WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../vehicules.php');
};

if(isset($_POST['deleteitems']) and is_numeric($_POST['deleteitems']))
{
  $id = $_POST['deleteitems'];
  $count=$bdd->prepare("DELETE FROM items WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../items.php');
};

if(isset($_POST['deleteservices']) and is_numeric($_POST['deleteservices']))
{
  $id = $_POST['deleteservices'];
  $count=$bdd->prepare("DELETE FROM services WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../services.php');
};

if(isset($_POST['deletedemande']) and is_numeric($_POST['deletedemande']))
{
  $id = $_POST['deletedemande'];
  $count=$bdd->prepare("DELETE FROM delete_annonce WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../demande-delete.php');
};

?>
