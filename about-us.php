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



<!------------------------ ABOUT US ------------------------->
    <!-- image -->
    <div class="container-fluid no-padding">
        <div class="row">
            <div class="col-12">
                <img src="img/photo-aboutus.jpg" class="img-fluid">
            </div>
        </div>
      </div>

<!-- text about us -->
    <div class="row mt-3 d-flex justify-content-center align-items-center">
        <div class="col-8 col-md-6 border-bottom p-4">
            <p>If you care about animals and the environment, this is the right place for you.</p>
            <p>We have the best fresh products picked out to prepare all plant-based and delicous food that will make you have a deeper connection with your beliefs.</p>
            <p>If you don't know much about veganism, but your main concern is to eat good food, you are too at the right place. If interested, check out our events to find out more :)</p>
        </div>
    </div>


<!-- map and restaurant information -->

    <div class="row mt-5 d-flex justify-content-center align-items-center">
        <div class="col col-md position-relative">
            <iframe class="border border-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d760026.4702164851!2d2.997739956229029!3d50.917376269354094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17d64edf39797%3A0x47ebf2b439e60ff2!2zQsOpbGdpY2E!5e0!3m2!1spt-BR!2sbe!4v1612002321587!5m2!1spt-BR!2sbe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="pin position-absolute top-5 start-20" ><img src="img/map-pin.png"></div>
            <div class="pin position-absolute top-20 start-45" ><img src="img/map-pin.png"></div>
            <div class="pin position-absolute top-45 start-45"><img src="img/map-pin.png"></div>
            <div class="pin position-absolute top-40 start-60"><img src="img/map-pin.png"></div>
            <div class="pin position-absolute top-30 start-85"><img src="img/map-pin.png"></div>
        </div>

        <div class="col-12 col-md text-center">
            <div class="row mt-3">
                <div class="col-sm col-md-12 mb-5">
                    <h2 class="mb-3">Opening Hours</h2>
                    <p>Lunch - 11:00 to 15:00<br>
                    Dinner - 18:00 to 23:00<br>
                    <i>Restaurant closed only on Mondays</i></p>
                </div>

                <div class="col-sm">
                    <div class="row">
                    <h2 class="mb-3">Restaurants</h2>
                        <div class="col-sm col-md-6 col-lg-2">
                            <p class="lead m-0 text-uppercase">Bruxelles</p>
                            <p>Rue de Bruxelles, 1560<br>470 88 13 25</p>
                        </div>
                        <div class="col-sm col-md-6 col-lg">
                            <p class="lead m-0 text-uppercase">Ghent</p>
                            <p>Rue de Ghent, 105<br>482 55 32 12</p>
                        </div>
                        <div class="col-sm col-md-6 col-lg">
                            <p class="lead m-0 text-uppercase">Charleroi</p>
                            <p>Rue de Charleroi, 87<br>567 32 98 43</p>
                        </div>
                        <div class="col-sm col-md-6 col-lg">
                            <p class="lead m-0 text-uppercase">Namur</p>
                            <p>Rue de Namur, 10<br>672 54 65 19</p>
                        </div>
                        <div class="col-sm col-md-6 col-lg">
                            <p class="lead m-0 text-uppercase">Liège</p>
                            <p>Rue de Liège, 45<br>897 34 24 56</p>
                        </div>
                    </div>
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