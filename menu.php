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



<!------------------------ MENU ------------------------->

    <div class="container-fluid no-padding">
        <!-- image -->
    <div class="row">
        <div class="col-12">
            <img src="img/photo-menu.jpg" class="img-fluid">
        </div>
    </div>
    </div>

<!-- search and quick links SM -->
    <div class="row d-lg-none">
        <div class="col-sm col-md-4 mt-3">
            <form class="d-flex align-items-sm-start">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
        <!--<div class="col-sm col-md mt-3 d-flex flex-wrap justify-content-sm-center justify-content-md-end">-->
        <div class="col-sm col-md mt-3 d-flex flex-wrap justify-content-center align-items-center">
            <button type="button" class="btn-font btn btn-outline-secondary m-1"><a href="#drinks" class="text-decoration-none text-reset">Drinks</a></button>
            <button type="button" class="btn-font btn btn-outline-secondary m-1"><a href="#app" class="text-decoration-none text-reset">Appetizers</a></button>
            <button type="button" class="btn-font btn btn-outline-secondary m-1"><a href="#mainc" class="text-decoration-none text-reset">Main Courses</a></button>
            <button type="button" class="btn-font btn btn-outline-secondary m-1"><a href="#des" class="text-decoration-none text-reset">Desserts</a></button>
        </div>
        <hr class="mt-3">
    </div>

<!------ drinks ------>
    <div class="row">
        <div id="drinks" class="d-md-none"></div>
        <div class="col-sm col-md-6 col-lg-3 mt-5">
            <h3 class="m-2 p-2">Drinks</h3>
            <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
               <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
               </div>
                <span class="badge bg-success rounded-pill">NEW</span>
                <span class="badge bg-dark rounded-pill">5 €</span>  
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                 <p class="lead">TITLE</p>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                 <span class="badge bg-success rounded-pill"></span>
                 <span class="badge bg-dark rounded-pill">6 €</span>  
             </li>
             <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                 <p class="lead">TITLE</p>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                 <span class="badge bg-success rounded-pill"></span>
                 <span class="badge bg-dark rounded-pill">4 €</span>  
             </li>
            </ul>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                 <p class="lead">TITLE</p>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                 <span class="badge bg-success rounded-pill">NEW</span>
                 <span class="badge bg-dark rounded-pill">5 €</span>  
             </li>
        </div>
    
        
<!------ appetizers ------>
        <div id="app" class="d-md-none"></div>
        <div class="col-sm col-md-6 col-lg-3 mt-5">
            <h3 class="m-2 p-2">Appetizers</h3>
            <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
                <span class="badge bg-success rounded-pill"></span>
                <span class="badge bg-dark rounded-pill">9 €</span>  
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <span class="badge bg-success rounded-pill">NEW</span>
                <span class="badge bg-dark rounded-pill">10 €</span>  
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <span class="badge bg-success rounded-pill"></span>
                <span class="badge bg-dark rounded-pill">6 €</span>  
            </li>
            </ul>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <span class="badge bg-success rounded-pill"></span>
                <span class="badge bg-dark rounded-pill">7 €</span>  
            </li>
        </div>


<!------ main courses ------>
        <div id="mainc" class="d-md-none"></div>
        <div class="col-sm col-md-6 col-lg-3 mt-5">
            <h3 class="m-2 p-2">Main Courses</h3>
            <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
                <span class="badge bg-success rounded-pill"></span>
                <span class="badge bg-dark rounded-pill">20 €</span>  
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <span class="badge bg-success rounded-pill"></span>
                <span class="badge bg-dark rounded-pill">18 €</span>  
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <span class="badge bg-success rounded-pill">NEW</span>
                <span class="badge bg-dark rounded-pill">16 €</span>  
            </li>
            </ul>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <span class="badge bg-success rounded-pill"></span>
                <span class="badge bg-dark rounded-pill">20 €</span>  
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                    <p class="lead">TITLE</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                    <span class="badge bg-success rounded-pill"></span>
                    <span class="badge bg-dark rounded-pill">20 €</span>  
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <div class="col-7">
                    <p class="lead">TITLE</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <span class="badge bg-success rounded-pill"></span>
                    <span class="badge bg-dark rounded-pill">18 €</span>  
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <div class="col-7">
                    <p class="lead">TITLE</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <span class="badge bg-success rounded-pill">NEW</span>
                    <span class="badge bg-dark rounded-pill">16 €</span>  
                </li>
                </ul>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <div class="col-7">
                    <p class="lead">TITLE</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <span class="badge bg-success rounded-pill"></span>
                    <span class="badge bg-dark rounded-pill">20 €</span>  
                </li>
        </div>

<!------ Desserts ------>
        <div id="des" class="d-md-none"></div>
        <div class="col-sm col-md-6 col-lg-3 mt-5">
            <h3 class="m-2 p-2">Desserts</h3>
            <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
                <span class="badge bg-success rounded-pill"></span>
                <span class="badge bg-dark rounded-pill">12 €</span>  
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <span class="badge bg-success rounded-pill">NEW</span>
                <span class="badge bg-dark rounded-pill">8 €</span>  
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <span class="badge bg-success rounded-pill"></span>
                <span class="badge bg-dark rounded-pill">10 €</span>  
            </li>
            </ul>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <div class="col-7">
                <p class="lead">TITLE</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <span class="badge bg-success rounded-pill"></span>
                <span class="badge bg-dark rounded-pill">7 €</span>  
            </li>
        </div>


    </div>






<!------------------------ FOOTER -------------------------->
    <?php include('footer.php'); ?>
    
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>