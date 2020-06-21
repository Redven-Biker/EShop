
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
<main role="main">

  <div class="py-5">
    <div class="container">

<form action="add-annonce-vehicule-post.php" method="post" class="form login">
        <center>
        <h1>Add a announcement Cars</h1>
         <div class="space-connexion"></div>
         <input type="text" class="form-control" id="input-connexion" name="nom" placeholder="Name" required>
         <div class="space-connexion"></div>
         <input type="text" class="form-control" id="input-connexion" name="prix" placeholder="Price" required>
         <div class="space-connexion"></div>
         <input type="text" class="form-control" id="input-connexion" name="img" placeholder="Image URL" required>
         <div class="space-connexion"></div>
         <input type="text" class="form-control" id="input-connexion" name="tel" placeholder="Phone Number" required>
    <input type="hidden" class="form-control" id="input-connexion" name="categorie" value="véhicules">
    <input type="hidden" class="form-control" id="input-connexion" name="owner" value="'; echo $_SESSION['username']; echo '">
    <div class="space-connexion"></div>
    <input type="submit" class="btn btn-success" id="input-connexion" value="Add">
          </center>
      </div>
        </form>
    </div>
  </div>

</main>
'; include 'inc/footer.php';
  } else {
      header("Location: ../index.php");
  }
  ?>