<?php

$con=mysqli_connect("localhost","root","","bus_coba");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (empty($_GET['prop_id'])) die("No propstyle id detected");
$prop_id = $_GET['prop_id'];
$q = "select *  from property p
left join prop_detail d on p.prop_id = d.prop_id
where p.prop_id=$prop_id";

if ($result=mysqli_query($con,$q)) {
    $r = mysqli_fetch_object($result);
} else {
  die("Error query $q");
}

//buat query gambar
$sq = "select pg_id from prop_gal where prop_id=$prop_id";
$rs = mysqli_query($con, $sq);
$gambar = "";
$gambar_kecil = "";
while ($rr = mysqli_fetch_object($rs)) {
  $gambar .= "<div><img src='photo.php?id=$rr->pg_id&tbname=prop_gal&pk=pg_id' width='825' height='825'></div>";
  $gambar_kecil .= "<div><img src='photo.php?id=$rr->pg_id&tbname=prop_gal&pk=pg_id' width='100' height='100'></div>";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">


    <title>Detail - Bali Unique Stay</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.gambar').slick({
          slidesToShow: 1,
          slideToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.gambar_kecil'
        });
        $('.gambar_kecil').slick({
          slidesToShow: 7,
          slideToScroll: 1,
          asNavFor: '.gambar',
          dots: false,
          centerMode: true,
          focusOnSelect: true
        })
      });
    </script>


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
          <h1 class="display-4"><?php echo $r->prop_name; ?></h1>
          <p></p>
        </div>
      </div>

  </style>
</head>
<body>

<div class="container">
  <div class="row content">
    <div class="col-sm-9 sidenav">
      <div class="gambar">
        <?php echo $gambar; ?>
      </div>
      <div class="gambar_kecil">
        <?php echo $gambar_kecil; ?>
      </div><br><br><br>
      <h3>Description</h3>
      <hr>
      <p><?php echo $r->desc; ?></p>

    </div>

    <div class="col-sm-3">
      <h3>Basic Information</h3>
      <hr>
      <p><strong>Location :</strong><br><?php echo $r->loc; ?></p>
      <p><strong>Phone :</strong> <?php echo $r->phone; ?></p>
      <p><strong>E-mail :</strong> <?php echo $r->mail; ?></p>
      <p><strong>Official Website :</strong> <a href="<?php echo $r->web; ?>"> <?php echo $r->web; ?></a></p>
      <p><strong>Cost From :</strong> <?php echo $r->cost_from; ?></p>
      <br><br>
      
      <h3>Facilities</h3>
      <hr>
      <p> <?php echo $r->fac; ?></p>
      <br><br>

      <h3>Booking Website</h3>
      <hr>
      <p><strong>by Agoda</strong></p>
      <a href="<?php echo $r->agoda_link; ?>"><img src="logo_agoda.png" alt="agoda" width="200" height="75"></a><br><br>
      <p><strong>by Booking</strong></p>
      <a href="<?php echo $r->booking_link; ?>"><img src="logo_booking.png" alt="booking" width="200" height="90"></a><br><br>
      <p><strong>by AirBnB</strong></p>
      <a href="<?php echo $r->airbnb_link; ?>"><img src="logo_airbnb.png" alt="airbnb" width="200" height="150"></a><br><br>  
    </div>
   </div>
  </div>
</div>

 <hr>
 <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; <strong>Copyright: V.S </strong>&middot; <a href="about.php">About</a> &middot;</p>
 </footer>

</body>
</html>