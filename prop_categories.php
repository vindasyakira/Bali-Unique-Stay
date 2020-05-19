<?php

$con=mysqli_connect("localhost","root","","bus_coba");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (empty($_GET['cat_id'])) die("No categories id detected");
$cat_id = $_GET['cat_id'];
$q = "select * from property p 
left join prop_categories c on p.prop_id = c.property_id 
where c.cat_id=$cat_id";
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
  die("Error query<br>$q");
}


$q = "select cat_name from categories where cat_id='$cat_id'";
$result=mysqli_query($con,$q);
$r=mysqli_fetch_object($result);

$cat_name = $r->cat_name;

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">


    <title>Property Style - Bali Unique Stay</title>

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
          <h1 class="display-4"><?php echo $cat_name; ?></h1>
          <p>Here are the list that we have made for you to choose during your stay at <?php echo $cat_name; ?> kind of style!</p>
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