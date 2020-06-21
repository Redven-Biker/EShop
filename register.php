<?php
include('inc/header.php');
include( "inc/config.php" );

if(isset($_POST['forminscription'])) {
   $username = htmlspecialchars($_POST['username']);
   $password = ($_POST['password']);
   if(!empty($_POST['username']) AND !empty($_POST['password'])) {
         if($username) {
            if(filter_var($username)) {
               $requsername = $bdd->prepare("SELECT * FROM users WHERE username = ?");
               $requsername->execute(array($username));
               $usernameexist = $requsername->rowCount();
               if($usernameexist == 0) {
                  if($password) {
                     $insertmbr = $bdd->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
                     $insertmbr->execute(array($username, $password));
                     $erreur = "Your account has been created! <a href=\"login.php\">Login Here</a>";
                  } else {
                     $erreur = "Passwords do not match!";
                  }
               } else {
                  $erreur = "Username is already in use!";
               }
         } else {
            $erreur = "Password do not match!";
         }
      } else {
         $erreur = "Username can be a maximum of 32 characters!";
      }
   } else {
      $erreur = "All of the fields must be filled!";
   }
}
?>
<main role="main">

  <div class="py-5">
    <div class="container">
        <center>
        <h1>Create Account</h1>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
         <form method="POST" action="">
    <input type="text" class="form-control" name="username" id="input-connexion" placeholder="Username">
    <div class="space-connexion"></div>
    <input type="password" class="form-control" name="password" id="input-connexion" placeholder="Password">
    <div class="space-connexion"></div>
    <input type="submit" class="btn btn-success" name="forminscription" id="input-connexion" value="Create Account">
         </form>
          </center>
      </div>
    </div>
  </div>

</main>
  <?php include('inc/footer.php'); ?>