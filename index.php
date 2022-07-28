<?php

$sumber = 'https://jsonplaceholder.typicode.com/photos';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
//var_dump($data);

?>


<!doctype html>
<html lang="ar" dir="auto">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

  <title>Data Api</title>
</head>

<body>
  <h1 class="text-center"> Album ID 1 </h1>

  <div class="container">
    <div class="row">
      <?php foreach ($data as $row) {

      ?>
        <div class="col-3 mt-3">
          <div class="card" style="width: 18rem;">
            <img src=" <?php echo $row['thumbnailUrl'] ?> " class="card-img-top" alt="...">
            <div class="card-body">
              <h5> <?php echo $row['id'] ?></h5>
              <hr>
              <p class="card-text"> <?php echo $row['title'] ?></p>
            </div>
          </div>
        </div>
      <?php  } ?>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    -->
</body>

</html>