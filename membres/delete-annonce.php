
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
<main role="main">

  <div class="py-5">
    <div class="container">

<form action="delete-annonce-post.php" method="post" class="form login">
        <center>
        <h1>Delete a announcement</h1>
         <div class="space-connexion"></div>
    <input type="text" class="form-control" id="input-connexion" name="titre" placeholder="Name of the announcement" required>
    <div class="space-connexion"></div>
    <h1>Category</h1>
    <label>Cars</label>
    <input type="radio" class="form-control" id="input-connexion" name="categorie" value="vehicules">
    <label>Items</label>
    <input type="radio" class="form-control" id="input-connexion" name="categorie" value="items">
    <label>Services</label>
    <input type="radio" class="form-control" id="input-connexion" name="categorie" value="services">
    <input type="hidden" class="form-control" id="input-connexion" name="owner" value="'; echo $_SESSION['username']; echo '">
    <div class="space-connexion"></div>
    <input type="submit" class="btn btn-success" id="input-connexion" value="Delete">
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