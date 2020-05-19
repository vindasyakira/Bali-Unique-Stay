<?php

$con=mysqli_connect("localhost","root","","bus_coba");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (empty($_GET['prop_name'])) die("No query detected");
$prop_name = $_GET['prop_name'];
$q = "select * from property where prop_name like '%$prop_name%'";
if ($result=mysqli_query($con,$q)) {
    $hasil = ' ';
    while ($r=mysqli_fetch_object($result)) {
      $hasil .=<<<EOL
        <div class="col-lg-4">
            <img class="img-thumbnail" src="photo.php?id=$r->prop_id&tbname=property&pk=prop_id" alt="$r->prop_name" width="300" height="300">
            <h2><strong>$r->prop_name</strong></h2>
            <p>$r->loc_detail</p>
            <p><a class="btn btn-secondary" href="detail.php?prop_id=$r->prop_id" role="button">Detail &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
EOL;
    }
} else {
    echo"No result found";
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">


    <title>Search - Bali Unique Stay</title>

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
          <p>Search result from '<?php echo $prop_name; ?>'</p>
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
