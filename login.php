<?php include('inc/header.php'); ?>
<?php
session_start();

include( "inc/config.php" );

if(isset($_POST['formconnexion'])) {
   $usernameconnect = htmlspecialchars($_POST['usernameconnect']);
   $passwordconnect = ($_POST['passwordconnect']);
   if(!empty($usernameconnect) AND !empty($passwordconnect)) {
      $requser = $bdd->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
      $requser->execute(array($usernameconnect, $passwordconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['username'] = $userinfo['username'];
         header("Location: membres/index.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Username or password is invalid !";
      }
   } else {
      $erreur = "All fields should be completed !";
   }
}
?>
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