
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">
<div class="row">
<div class="col-md-4">
<div class="card mb-4 shadow-sm">
<center><h1>Cars</h1></center>
<a href="vehicules.php"><img  width="100%" height="100%" src="assets/img/voiture.jpg"></a>
</div>
</div>
<div class="col-md-4">
<div class="card mb-4 shadow-sm">
<center><h1>Items</h1></center>
<a href="items.php"><img  width="100%" height="100%" src="assets/img/item.jpg"></a>
</div>
</div>
<div class="col-md-4">
<div class="card mb-4 shadow-sm">
<center><h1>Services</h1></center>
<a href="services.php"><img  width="100%" height="100%" src="assets/img/aide.jpg"></a>
</div>
</div>
</div>
</div>
</div>

</main>
'; include 'inc/footer.php';
  } else {
      header("Location: ../index.php");
  }
  ?>