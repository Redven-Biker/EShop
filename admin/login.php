<?php
session_start();

include( "../inc/config.php" );

if(isset($_POST['formconnexion'])) {
   $usernameconnect = htmlspecialchars($_POST['usernameconnect']);
   $passwordconnect = ($_POST['passwordconnect']);
   if(!empty($usernameconnect) AND !empty($passwordconnect)) {
      $requser = $bdd->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
      $requser->execute(array($usernameconnect, $passwordconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['username'] = $userinfo['username'];
         header("Location: index.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Username or password is invalid !";
      }
   } else {
      $erreur = "All fields should be completed !";
   }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Eshop</title>
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="assets/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Eshop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</header>
<main role="main">

  <div class="py-5">
    <div class="container">

<form method="POST" action="" class="form login">
        <center>
        <h1>Login</h1>
<?php if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         } ?>
         <div class="space-connexion"></div>
    <input type="text" class="form-control" id="input-connexion" name="usernameconnect" placeholder="Username">
    <div class="space-connexion"></div>
    <input type="password" class="form-control" id="input-connexion" name="passwordconnect" placeholder="Password">
    <div class="space-connexion"></div>
    <input type="submit" class="btn btn-success" id="input-connexion" value="Connect" name="formconnexion">
          </center>
      </div>
        </form>
    </div>
  </div>

</main>
  <?php include('inc/footer.php'); ?>