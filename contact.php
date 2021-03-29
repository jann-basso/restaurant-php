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



<!------------------------ CONTACT ------------------------->
    <!-- image -->
    <div class="container-fluid no-padding">
      <div class="row">
          <div class="col-12">
              <img src="img/photo-contact.jpg" class="img-fluid">
          </div>
      </div>
    </div>


    <!-- form -->
    <div class="row mb-5">
        <div class="col-sm-12 col-md d-flex align-items-center justify-content-center">
            <h4 class="text-center m-5">Something you'd like us to know? <br> We'd love to hear from you!</h4>
        </div>
        <div class="col mt-5 col-md">
            <form class="mx-5" method="post" action="">
                <div class="mb-4">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="John Doe">
                </div>

                <div class="mb-4">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                </div>

                <div class="mb-4">
                    <label class="form-label">What is this about?</label>
                    <select class="form-select" name="topic" aria-label="Floating label select example">
                        <option selected>I have a question</option>
                        <option value="Compliment">Compliment</option>
                        <option value="Something wrong">Something wrong</option>
                        <option value="Food">Food</option>
                        <option value="Staff">Staff</option>
                        <option value="(Other)">(Other)</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Which restaurant?</label>
                    <select class="form-select" name="restaurant" aria-label="Floating label select example">
                        <option selected>No specific one</option>
                        <option value="Bruxelles">Bruxelles</option>
                        <option value="Ghent">Ghent</option>
                        <option value="Charleroi">Charleroi</option>
                        <option value="Namur">Namur</option>
                        <option value="Liège">Liège</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" name="message" placeholder=":)" rows="3"></textarea>
                </div>

                <div class="mb-4 d-flex justify-content-end align-items-center">
                    <!-- <a class="btn btn-dark btn-sm fs-6 pe-3" href="#" role="button"><img class="img-color m-2" src="img/email.png">Send</a> -->
                    <input type="submit" class="btn btn-dark btn-sm fs-6 pe-3" value="send"><img class="img-color m-2" src="img/email.png"></input>
                </div>
            </form>

            <?php

            $name = $_POST['name'];
            $email = $_POST['email'];
            $topic = $_POST['topic'];
            $restaurant = $_POST['restaurant'];
            $message = $_POST['message'];
        

            if (isset($name, $email, $topic, $restaurant, $message)) {
                    $database = new PDO('mysql:host=localhost;dbname=aniluv', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    $request = $database->prepare(' INSERT INTO contacts_form(name, email, topic, restaurant, message) VALUES(?, ?, ?, ?, ?) ');
                    $request->execute(array($name, $email, $topic, $restaurant, $message) );
            }

            ?>


        </div>

    </div>


<!------------------------ FOOTER -------------------------->
    <?php include('footer.php'); ?>
    
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>