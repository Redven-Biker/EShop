
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">
<center>
<div class="alert alert-success" role="alert">
Your delete request have been send
</div>
<a href="index.php"><button type="button" class="btn btn-primary">Return to home</button></a>
</div>
    </div>
  </center>

</main>
'; include 'inc/footer.php';
  } else {
      header("Location: ../index.php");
  }
  ?>