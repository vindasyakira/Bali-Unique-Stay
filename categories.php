<?php

$con=mysqli_connect("localhost","root","","bus_coba");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$q = "select * from categories";
if ($result=mysqli_query($con,$q)) {
    $hasil = ' ';
    while ($r=mysqli_fetch_object($result)) {
      $hasil .=<<<EOL
        <div class="col-lg-4">
            <img class="img-thumbnail" src="photo.php?id=$r->cat_id&tbname=categories&pk=cat_id" alt="$r->cat_name" width="300" height="300">
            <h2><strong>$r->cat_name</strong></h2>
            <p>$r->detail</p>
            <p><a class="btn btn-secondary" href="prop_categories.php?cat_id=$r->cat_id" role="button">Find here &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
EOL;
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">


    <title>Categories - Bali Unique Stay</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <?php include_once 'menu.php'; 
      echo $menu;
      ?>
    </header>

    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Categories</h1>
          <p>Bali is full of unexpected place to stay during your visit to this island. Whether it's an eco-villa full-made of bamboo, or a vintage colonial-design hotel in a city center, you can choose your favorite theme on your place to stay, by these categories that we already made for you!</p>
        </div>
      </div>



      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          
        <?php
             echo $hasil;
        ?>

        </div><!-- /.row -->


        

      </div><!-- /.container -->


      <!-- FOOTER -->
      <hr>
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; <strong>Copyright: V.S </strong>&middot; <a href="about.php">About</a> &middot;</p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
