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


<!------------------------ HOME ------------------------->
    <!-- image -->
    <div class="container-fluid no-padding">
      <div class="row">
          <div class="col-12">
              <img src="img/food-home.jpg" class="img-fluid">
          </div>
      </div>
    </div>

    <!-- promo --> 
    <div class="row mt-3 ">
        <div class="col-sm col-md-4 bg-light p-5 rounded-lg m-sm-2 m-md-4">
            <h2 class="display-4">Special Offer !</h2>
            <p class="lead">Ask for two dishes for delivery and get a free dessert of your choice.</p>
            <hr class="my-4">
            <p>Offer valid until Feb 20, 2021.</p>
            <a class="btn btn-dark btn-lg" href="menu.html" role="button">check out options</a>
        </div>

    <!-- events -->
        <div class="col-sm col-md border border-1 p-5 rounded-lg m-sm-2 m-md-4">
            <h2 class="display-4 mb-4">Upcomming Events</h2>
            <div class="row">
                <div class="col-sm col-md-6 p-md-5">
                    <p class="lead text-uppercase m-0">Vegan Cooking Workshop</p>
                    <p>Feb 15 - 14:30</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae adipisci excepturi minus, corporis, unde officia quidem quas quis similique enim, quibusdam vero veniam sed. Ad, quasi fuga? Reiciendis, omnis maiores.</p>
                    <a class="btn btn-dark btn-sm" href="#" role="button">learn more</a>
                    <hr class="my-4 d-md-none">   
                </div>

                <div class="col-sm col-md-6 p-md-5">
                    <p class="lead text-uppercase m-0">Morning with Dr. Houter</p>
                    <p>Feb 22 - 9:00</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae adipisci excepturi minus, corporis, unde officia quidem quas quis similique enim, quibusdam vero veniam sed. Ad, quasi fuga? Reiciendis, omnis maiores.</p>
                    <a class="btn btn-dark btn-sm" href="#" role="button">learn more</a>
                    <hr class="my-4 d-md-none">
                </div>
                <div class="col-sm col-md-6 p-md-5">
                    <p class="lead text-uppercase m-0">Sustainable Products Faire</p>
                    <p>Mar 02 - 12:30</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae adipisci excepturi minus, corporis, unde officia quidem quas quis similique enim, quibusdam vero veniam sed. Ad, quasi fuga? Reiciendis, omnis maiores.</p>
                    <a class="btn btn-dark btn-sm" href="#" role="button">learn more</a>
                    <hr class="my-4 d-md-none">
                </div>
                <div class="col-sm col-md-6 p-md-5">
                    <p class="lead text-uppercase m-0">Animal Save</p>
                    <p>Mar 17 - 20:00</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae adipisci excepturi minus, corporis, unde officia quidem quas quis similique enim, quibusdam vero veniam sed. Ad, quasi fuga? Reiciendis, omnis maiores.</p>
                    <a class="btn btn-dark btn-sm" href="#" role="button">learn more</a>
                </div>
            </div>
        </div>    
    </div>



<!------------------------ FOOTER -------------------------->
    <?php include('footer.php'); ?>
    
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
