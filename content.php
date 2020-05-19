
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <style>
      * {
          box-sizing: border-box;
      }

      /* Style the body */
      body {
          font-family: Arial;
          margin: 0;
      }

      /* Header/logo Title */
      .header {
          padding: 80px;
          text-align: center;
          background: #1abc9c;
          color: white;
      }

      /* Increase the font size of the heading */
      .header h1 {
          font-size: 40px;
      }

      /* Style the top navigation bar */
      .navbar {
          overflow: hidden;
          background-color: #333;
      }

      /* Style the navigation bar links */
      .navbar a {
          float: left;
          display: block;
          color: white;
          text-align: center;
          padding: 14px 20px;
          text-decoration: none;
      }

      /* Right-aligned link */
      .navbar a.right {
          float: right;
      }

      /* Change color on hover */
      .navbar a:hover {
          background-color: #ddd;
          color: black;
      }

      /* Column container */
      .row {  
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
      }

      /* Create two unequal columns that sits next to each other */
      /* Sidebar/left column */
      .side {
          -ms-flex: 20%; /* IE10 */
          flex: 20%;
          background-color: #f1f1f1;
          padding: 20px;
      }

      /* Main column */
      .main {   
          -ms-flex: 70%; /* IE10 */
          flex: 70%;
          background-color: white;
          padding: 20px;
      }

      /* Fake image, just for this example */
      .fakeimg {
          background-color: #aaa;
          width: 100%;
          padding: 20px;
      }

      /* Footer */
      .footer {
          padding: 20px;
          text-align: center;
          background: #ddd;
      }

      /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 700px) {
          .row {   
              flex-direction: column;
          }
      }

      /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
      @media screen and (max-width: 400px) {
          .navbar a {
              float: none;
              width: 100%;
          }
      }
    </style>


    <title>Locations - Bali Unique Stay</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
       <?php include_once 'menu.php'; ?>
      </nav>
    </header>

    <!-- Main jumbotron for a primary marketing message or call to action -->

      <div class="jumbotron">
        <div class="container">
          <h1 class="display-5">Locations</h1>
          <p>From the edge cliff of South Bali to the countryside in North Bali, you can search your favorite property by the location of your stay. Here are the popular locations you can choose to stay in Bali</p>
        </div>
      </div>


      <div class="row">
        <div class="main">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <br>
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
        <div class="side">
            <h2>About Me</h2>
            <h5>Photo of me:</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            <h3>More Text</h3>
            <p>Lorem ipsum dolor sit ame.</p>
            <div class="fakeimg" style="height:60px;">Image</div><br>
            <div class="fakeimg" style="height:60px;">Image</div><br>
            <div class="fakeimg" style="height:60px;">Image</div>
        </div>
      </div>



      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
