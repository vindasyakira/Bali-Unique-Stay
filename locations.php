<?php

$con=mysqli_connect("localhost","root","","bus_coba");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$q = "select * from location";
if ($result=mysqli_query($con,$q)) {
    $hasil = ' ';
    while ($r=mysqli_fetch_object($result)) {
      $hasil .=<<<EOL
        <div class="col-lg-4">
            <img class="img-thumbnail" src="photo.php?id=$r->loc_id&tbname=location&pk=loc_id" alt="$r->loc_name" width="300" height="300">
            <h2><strong>$r->loc_name</strong></h2>
            <p>$r->detail</p>
            <p><a class="btn btn-secondary" href="prop_location.php?loc_id=$r->loc_id" role="button">Find here &raquo;</a></p>
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


    <title>Locations - Bali Unique Stay</title>

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
          <h1 class="display-4">Locations</h1>
          <p>From the edge cliff of South Bali to the countryside in the North Bali, you can search your favorite property by the location of your stay. Here are the popular locations you can choose to stay in Bali!</p>
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
