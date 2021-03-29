<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/custom.css">
    <title>Aniluv - Back Office</title>
</head>

<body>

<!------------------------ HEADER ------------------------>
<div class="container-fluid">
    <div class="row border-bottom sticky-top new-bg">
  
    <!-- restaurant's name -->
    <div class="col text-center">
        <h1 class="p-2" id="h1-restname">Aniluv</h1>
        <p>Backoffice Access</p>
    </div>
</div>

<!------------------------ FORM ------------------------>
<div class="col mt-5 col-md text-center ">
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" class="mt-2"><br>
        <input type="submit" name="submit" value="submit" class="btn btn-dark btn-sm fs-6 mt-3">
    </form>
</div>


<?php
 try {
    $database = new PDO('mysql:host=localhost;dbname=aniluv', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 }
 catch(Exception $e) {
     die('Erreur : '.$e->getMessage());
 }


 $response = $database->query(' SELECT * FROM credentials ');

 while($data = $response->fetch()) {
    $username = $data['username'];
    $password = $data['password'];

    if(isset($_POST['username']) && isset($_POST['password'])) {
        if($_POST['username'] == $username && $_POST['password'] == $password) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('location: backoffice_access.php');
        
        } else {
            ?>
            <div class="col mt-5 col-md text-center ">
                <p>Wrong username or password.</p>
            <div>
            <?php
        }
    }

 }

?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
