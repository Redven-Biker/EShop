
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">
<center>
    <h1>Members</h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>';
  include("../inc/config.php");
  // Get contents of the lspd table
  $reponse = $bdd->query('SELECT * FROM users ORDER BY id DESC');
  
  // Display each entry one by one
  while ($data = $reponse->fetch()) {
  ?>
    <tr>
      <th scope="row"><?php echo $data['id']; ?></th>
      <td><?php echo $data['username']; ?></td>
      <td><?php echo $data['date']; ?></td>
                                                 <form action='inc/delete_entry.php' method='post'>
                                                     <?php
        echo '<td>
                                                             <button type="submit" name="deleteuser" class="btn btn-danger" value="' . $data['id'] . '">Delete</button>
                                                     </td>'; ?>
    </tr>
                                                <?php
    }
    $reponse->closeCursor(); echo '
  </tbody>
</table>
    </div>
  </center>

</main>
'; include 'inc/footer.php';
  } else {
      header("Location: login.php");
  }
  ?> 