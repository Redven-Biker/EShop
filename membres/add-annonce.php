
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
<main role="main">

  <div class="py-5">
    <div class="container">
        <center>
        <h1>Add a announcement</h1>
         <div class="space-connexion"></div>
         <a href="add-annonce-vehicule.php"><button type="button" class="btn btn-primary btn-lg">Cars</button></a>
         <a href="add-annonce-items.php"><button type="button" class="btn btn-primary btn-lg">Items</button></a>
         <a href="add-annonce-services.php"><button type="button" class="btn btn-primary btn-lg">Services</button></a>
          </center>
      </div>
    </div>
  </div>

</main>
'; include 'inc/footer.php';
  } else {
      header("Location: ../index.php");
  }
  ?>