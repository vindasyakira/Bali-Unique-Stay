<?php
$path = pathinfo($_SERVER['SCRIPT_NAME']);
$base = $path['filename'];
$home_active = '';
$locations_active = '';
$categories_active = '';
$propstyle_active = '';
if ($base == 'home') $home_active = 'active';
if ($base == 'locations') $locations_active = 'active';
if ($base == 'categories') $categories_active = 'active';
if ($base == 'propstyle') $propstyle_active = 'active';
$menu =<<<EOL

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="home.php">Bali Unique Stay</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item $home_active">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item $locations_active">
              <a class="nav-link" href="locations.php">Locations</a>
            </li>
            <li class="nav-item $categories_active">
              <a class="nav-link" href="categories.php">Categories</a>
            </li>
             <li class="nav-item $propstyle_active">
              <a class="nav-link" href="propstyle.php">Property Style</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0" method="GET" action="search.php">
            <input name ="prop_name" class="form-control mr-sm-2" type="text" placeholder="Search Property Name" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Search</button>
          </form>
        </div>
</nav>
EOL;

?>