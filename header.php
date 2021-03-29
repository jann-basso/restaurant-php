<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<!-- nav bar FOR SM -->
<div class="col-2 text-center d-md-none">
    <nav>
        <a class="p-2 nav-link dropdown-toggle mt-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-labelledby="navbarDropdownMenuLink"><img src="img/menuicon.png"></a>
        <ul class="dropdown-menu">
            <li><a 
                <?php if($_SERVER['SCRIPT_NAME']=="/restaurant-php/index.php") { ?>  class="dropdown-item active"  <?php } else { ?>  class="dropdown-item "  <?php }  ?>
                aria-current="true" href="index.php">Home</a>
            </li>
            <li><a 
                <?php if($_SERVER['SCRIPT_NAME']=="/restaurant-php/menu.php") { ?>  class="dropdown-item active"  <?php } else { ?>  class="dropdown-item "  <?php }  ?>
                aria-current="true" href="menu.php">Menu</a>
            </li>
            <li><a 
                <?php if($_SERVER['SCRIPT_NAME']=="/restaurant-php/gallery.php" || $_SERVER['SCRIPT_NAME']=="/restaurant-php/gallery2.php" || $_SERVER['SCRIPT_NAME']=="/restaurant-php/gallery3.php" || $_SERVER['SCRIPT_NAME']=="/restaurant-php/gallery4.php") { ?>  class="dropdown-item active"  <?php } else { ?>  class="dropdown-item "  <?php }  ?>
                aria-current="true" href="gallery.php">Gallery</a>
            </li>
            <li><a 
                <?php if($_SERVER['SCRIPT_NAME']=="/restaurant-php/about-us.php") { ?>  class="dropdown-item active"  <?php } else { ?>  class="dropdown-item "  <?php }  ?>
                aria-current="true" href="about-us.php">About Us</a>
            </li>
            <li><a 
                <?php if($_SERVER['SCRIPT_NAME']=="/restaurant-php/contact.php") { ?>  class="dropdown-item active"  <?php } else { ?>  class="dropdown-item "  <?php }  ?>
                aria-current="true" href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>
</div>


<!-- nav bar FOR MD OR MORE -->
<div class="col text-center d-none d-md-block">
    <nav class="navbar navbar-expand-md navbar-light mt-2"> 
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item me-5"><a
                <?php
                if($_SERVER['SCRIPT_NAME']=="/restaurant-php/index.php") {
                    ?>  class="nav-link active" <?php
                } else {
                    ?>  class="nav-link " <?php
                } ?>
                href="index.php">Home</a>
            </li>
            <li class="nav-item me-5"><a
                <?php
                if($_SERVER['SCRIPT_NAME']=="/restaurant-php/menu.php") {
                    ?>  class="nav-link active" <?php
                } else {
                    ?>  class="nav-link" <?php
                } ?>
                href="menu.php">Menu</a>
            </li>
            <li class="nav-item me-5"><a
                <?php
                if($_SERVER['SCRIPT_NAME']=="/restaurant-php/gallery.php" || $_SERVER['SCRIPT_NAME']=="/restaurant-php/gallery2.php" || $_SERVER['SCRIPT_NAME']=="/restaurant-php/gallery3.php" || $_SERVER['SCRIPT_NAME']=="/restaurant-php/gallery4.php" ) {
                    ?>  class="nav-link active" <?php
                } else {
                    ?>  class="nav-link " <?php
                } ?>
                href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item me-5"><a
                <?php
                if($_SERVER['SCRIPT_NAME']=="/restaurant-php/about-us.php") {
                    ?>  class="nav-link active" <?php
                } else {
                    ?>  class="nav-link " <?php
                } ?>
                href="about-us.php">About Us</a>
            </li>
            <li class="nav-item me-5"><a
                <?php
                if($_SERVER['SCRIPT_NAME']=="/restaurant-php/contact.php") {
                    ?>  class="nav-link active" <?php
                } else {
                    ?>  class="nav-link" <?php
                } ?>
                href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>   
</div>


</body>
</html>