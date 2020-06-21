
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
<main role="main">

  <div class="py-5">
    <div class="container">

<form action="add-news-post.php" method="post" class="form login">
        <center>
        <h1>Add a news</h1>
         <div class="space-connexion"></div>
    <input type="text" class="form-control" id="input-connexion" name="titre" placeholder="Title" required>
    <div class="space-connexion"></div><textarea class="form-control" id="textarea-news" name="description" rows="5" cols="33" placeholder="Enter description" required></textarea>
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