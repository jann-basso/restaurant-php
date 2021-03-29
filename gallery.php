<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/custom.css">
    <title>Aniluv - Vegan Restaurant</title>
</head>
<body>

<!------------------------ HEADER ------------------------>
<div class="container-fluid">
    <div class="row border-bottom sticky-top new-bg">
  
    <!-- restaurant's name -->
    <div class="col text-center">
        <h1 class="p-2" id="h1-restname">Aniluv</h1>
    </div>

    <!-- nav bar -->
    <?php include('header.php'); ?>

</div>



<!------------------------ GALLERY main page ------------------------->

<div class="row m-4 d-flex justify-content-center">
    <h2 class="col-12 text-center mb-3">Your Favorites</h2>
    <p class="col-6 text-center">Use #Aniluv on Instagram with your favorite dish's photo and get the chance to be part of the page ❤ </p>
</div>


<div class="row m-4">

    <!-- images -->
    <div class="card-group">
        <?php
            // CONNECT TO DATABASE
            try {
                $database = new PDO('mysql:host=localhost;dbname=aniluv', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }

            // PAGINATION
                // results per page
                $results_per_page = 3;
                  
                // total number of pages
                $rowcount = "SELECT COUNT(*) FROM gallery";
                $call_rowcount = $database->query($rowcount);
                $number_of_rows = $call_rowcount->fetchColumn();
                $number_of_page = ceil ($number_of_rows / $results_per_page);  

                // check page user is in
                if (!isset ($_GET['page']) ) {  
                    $page = 1;  
                } else {  
                    $page = $_GET['page'];  
                } 
                $page_first_result = ($page-1) * $results_per_page;

                 

            // SHOW RESULTS
            $response_gallerypage = $database->query(" SELECT * FROM gallery LIMIT $page_first_result, $results_per_page ");
            while ($info = $response_gallerypage->fetch()) {
                $img = $info['image'];
                $comment = $info['comment'];
                $user = $info['user'];
                
                ?>
                    <div class="card">
                        <img src="img-uploads/<?php echo $img; ?>" class="card-img-top"> 
                        <div class="card-body">
                            <p class="card-text">"<?php echo $comment; ?>"</p>
                            <p class="card-text"><small class="text-muted"><?php echo $user; ?></small></p>
                        </div>
                    </div> 
                <?php
            }
        ?>
    </div>  
    

    <!-- pagination bottom -->
    <nav aria-label="page navigation" class="mt-3 mb-6 d-flex justify-content-center">
        <ul class="pagination pagination-sm">
        <?php
            //display the link of the pages in URL  
            for($i = 1; $i <= $number_of_page; $i++) {  
                 
                if($i == $page) {
                    ?>
                    <li class="page-item active"><a class="page-link" href="gallery.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php      
                } else {
                    ?>
                    <li class="page-item"><a class="page-link" href="gallery.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php
                }
            } 
        ?>
        </ul>
    </nav>


</div>


<!------------------------ FOOTER -------------------------->
    <?php include('footer.php'); ?>
    
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>