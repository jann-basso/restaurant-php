<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #bolink {
            text-decoration: none;
            color: initial;
        }
    </style>
</head>
<body>
<header>
        <div class="container-fluid">
            <div class="row border-bottom sticky-top new-bg">
        
            <!-- restaurant's name -->
            <div class="col text-center">
                <a id="bolink" href="backoffice_access.php">
                    <h1 class="p-2" id="h1-restname">Aniluv</h1>
                    <p>Backoffice</p>
                </a>
            </div>
           

            <!-- nav bar -->
            <!-- nav bar FOR SM -->
            <div class="col-2 text-center d-md-none">
                <nav>
                    <a class="p-2 nav-link dropdown-toggle mt-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-labelledby="navbarDropdownMenuLink"><img src="../img/menuicon.png"></a>
                    <ul class="dropdown-menu">
                        <li><a 
                            <?php if($_SERVER['SCRIPT_NAME']=="#") { ?>  class="contactform dropdown-item active"  <?php } else { ?>  class="contactform dropdown-item "  <?php }  ?>
                            aria-current="true" href="#">Contact Form</a>
                        </li>
                        <li><a 
                            <?php if($_SERVER['SCRIPT_NAME']=="#") { ?>  class="guestbook dropdown-item active"  <?php } else { ?>  class="guestbook dropdown-item "  <?php }  ?>
                            aria-current="true" href="#">Guest Book</a>
                        </li>
                        <li><a 
                            <?php if($_SERVER['SCRIPT_NAME']=="#") { ?>  class="galleryupload dropdown-item active"  <?php } else { ?>  class="galleryupload dropdown-item "  <?php }  ?>
                            aria-current="true" href="#">Gallery Upload</a>
                        </li>
                    </ul>
                </nav>
            </div>


            <!-- nav bar FOR MD OR MORE -->
            <div class="col text-center d-none d-md-block">
                <nav class="navbar navbar-expand-md navbar-light mt-2"> 
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-3">
                        <li class="nav-item me-5"><a class="nav-link"
                            href="../index.php" target="_blank">Visit Website</a>
                        </li>
                        <li class="nav-item me-5"><a
                            <?php
                            if($_SERVER['SCRIPT_NAME']=="#contactform") {
                                ?>  class="contactform nav-link active" <?php
                            } else {
                                ?>  class="contactform nav-link" <?php
                            } ?>
                            href="#contactform">Contact Form</a>
                        </li>
                        <li class="nav-item me-5"><a
                            <?php
                            if($_SERVER['SCRIPT_NAME']=="#guestbook") {
                                ?>  class="guestbook nav-link active" <?php
                            } else {
                                ?>  class="guestbook nav-link" <?php
                            } ?>
                            href="#guestbook">Guest Book</a>
                        </li>
                        <li class="nav-item me-5"><a
                            <?php
                            if($_SERVER['SCRIPT_NAME']=="#galleryupload") {
                                ?>  class="galleryupload nav-link active" <?php
                            } else {
                                ?>  class="galleryupload nav-link " <?php
                            } ?>
                            href="#galleryupload">Gallery Upload</a>
                        </li>
                       
                    </ul>
                </nav>   
            </div>
           
        </div>    
    </header>


</body>
</html>