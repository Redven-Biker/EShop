
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">
<center>
    <h1>News</h1>';
    
    include("inc/config.php");
    // Get contents of the lspd table
    $reponse = $bdd->query('SELECT * FROM news ORDER BY id DESC');
    
    // Display each entry one by one
    while ($data = $reponse->fetch()) {
    ?>
    <div class="space-news">
    <div class="news">
      <div class="text-color">
      <h3 class="titre-news"><?php echo $data['titre']; ?></h3>
      <p class="description-news"><?php echo $data['description']; ?></p>
      <p class="date-news"><?php echo $data['date']; ?></p>
      </div>
</div>
                                                <?php
    }
    $reponse->closeCursor();  echo '
    </div>
  </center>

</main>
'; include 'inc/footer.php';
  } else {
      header("Location: ../index.php");
  }
  ?> 