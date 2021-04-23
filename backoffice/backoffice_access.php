<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
    <title>Aniluv - Back Office</title>
    <style>
        #container-box {
            position: relative;
        }

        .container-box-element {
            position: absolute;
            top: 100px;
            left: 10%;
        }

        .container-box-element1 {
            position: absolute;
            top: 10px;
        }

        .tdwidth {
            width: 100%;
        }

    </style>
</head>

<body>
<?php    
// ------- check password (backoffice_login.php) -------  
if(isset($_SESSION['username']) && isset($_SESSION['password'])) {

        // connection to database
        try {
           $database = new PDO('mysql:host=localhost;dbname=aniluv', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        ?>   

    <!------------------------ HEADER ------------------------>
    <?php include('headerBO.php'); ?>


    <!------------------------ CONTENT ------------------------>
    <main> 
    
       <div class="row d-flex justify-content-center" id="container-box">
          
            <!-- image -->
            <div class="col-12 container-box-element1" id="homebackofficediv">
                <img src="../img/backoffice.jpg" class="img-fluid">

                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-4 text-center bg-light p-5 rounded-lg">
                        <h2>Hello, <?php echo $_SESSION['username']; ?> !</h2>
                        <p class="lead">We count on you to bring magic to our website :D</p> 
                        <form action="" method="post">
                            <input type="submit" value="Logout" name="logout" class='btn btn-dark'>
                        </form>    
                        <?php
                            if(isset($_POST['logout'])) {
                                session_destroy();
                                echo "<script>location.href='backoffice_login.php'</script>";
                            }
                        ?>
                    </div>
                    <div class="col-8 text-center p-5">
                            <div class="row">
                                <div class="col-sm col-md-6 col-lg-2">
                                    <p class="lead m-0 text-uppercase">Contacts Form</p>
                                    <p>manage and reply to our costumers</p>
                                </div>
                                <div class="col-sm col-md-6 col-lg">
                                    <p class="lead m-0 text-uppercase">Guest Book</p>
                                    <p>see clients who have visited us</p>
                                </div>
                                <div class="col-sm col-md-6 col-lg">
                                    <p class="lead m-0 text-uppercase">Gallery Upload</p>
                                    <p>organize and upload the best images to our gallery</p>
                                </div>
                            </div>
                        </div>
                      

                     </div>
                </div>
            </div>
       
            
    
            <!-------------------------- CONTACTS FORM (contacts.php) -------------------------->
            <div class="col-8 mt-5 container-box-element" id="contactformdiv">
                <h2>Contact Form</h2>

                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Topic</th>
                            <th>Restaurant</th>
                            <th>Message</th>
                            <th>Delete</th>
                            <th>Reply</th>
                        </tr>
                    
                <?php
                // [delete button] refresh list with deleted items before showing them on screen
                if(array_key_exists('delete1', $_POST)) {
                    $id_contacts = $_POST['delete1'];
                    $database->query(" DELETE FROM contacts_form WHERE id=$id_contacts ");
                }  

                // show list on screen
                $response_contact = $database->query(' SELECT * FROM contacts_form ');
            
                while ($data = $response_contact->fetch()) {        
                    ?>
                    <tr>
                        <td><?php echo $data['id'] ; ?></td>
                        <td><?php echo $data['name'] ; ?></td>
                        <td><?php echo $data['email'] ; ?></td>
                        <td><?php echo $data['topic'] ; ?></td>
                        <td><?php echo $data['restaurant'] ; ?></td>
                        <td><?php echo $data['message'] ; ?></td>
                        <td>
                            <form method='post'>
                                <button type='submit' value='<?php echo $data['id']; ?>' name='delete1' id='delete1' class='btn btn-dark'><i class="fa fa-trash btn-dark"></i></button> 
                            </form> 
                        </td>
                        <td>
                            <a href="
                            mailto:<?php echo $data['email'] ; ?>
                            ?subject=Aniluv%20<?php echo $data['restaurant'] ; ?>%20-%20<?php echo $data['topic'] ; ?>
                            &body=%0D%0A--------Original%20message%20from:%20<?php echo $data['name'] ; ?>--------%0D%0A<?php echo $data['message'] ; ?>"
                            name='replyContact' class='btn btn-dark'><i class="fa fa-reply btn-dark"></i></a>
                        </td>
                    </tr>     
                    <?php
                }   
            ?>
            </table>
            </div>
 

            <!-------------------------- GUEST BOOK (contacts.php) -------------------------->
            <div class="col-8 mt-5 container-box-element" id="guestbookdiv">
                <h2>Guest Book</h2>
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Customer name</th>
                            <th>Visited Restaurant</th>
                            <th>Visit Date</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>     
                    </table>
            </div>


            <!-------------------------- GALLERY UPLOAD(gallery.php) -------------------------->
            <div class="col-8 mt-5 container-box-element" id="galleryuploaddiv">
                <h2>Gallery Upload</h2>

                
                <?php
                // [edit button from gallery list]
                $update = false;
                $update_image = "";
                $update_comment = "";
                $update_user = "";

                if(array_key_exists('edit_gallery', $_POST)) {
                $id_gallery_edit = $_POST['edit_gallery'];
                $update_select = $database->query(" SELECT * FROM gallery WHERE id=$id_gallery_edit ");

                    while($row = $update_select->fetch()) {
                        $update = true;
                        $update_image = $row['image'];
                        $update_comment = $row['comment'];
                        $update_user = $row['user'];
                    }
                } 
                ?>


                <!-- input field -->
                <div class="row col-7">
                    <form action="" method="post" enctype="multipart/form-data">
                        <table class="table">            
                            <tr>
                                <td><label for="chooseimg">Image</label></td>
                                <td><input type="file" name="chooseimg" class="tdwidth"><?php //echo $update_image; ?></td>
                            </tr>
                            <tr>
                                <td><label for="comment">Comment</label></td>
                                <td><textarea type="text" name="comment" class="tdwidth"><?php echo $update_comment; ?></textarea></td>
                            </tr> 
                            <tr>
                                <td><label for="user">User</label></td>
                                <td><input type="text" value="<?php echo $update_user; ?>" name="user" class="tdwidth"></td>
                            </tr>               
                        </table> 
                        <?php
                            // activate "save changes" button if "edit" was clicked (above)
                            if($update == true) {
                                ?>
                                <input type="submit" name="savechangesgallery" value="Save Changes" class='btn btn-secondary'> 
                                <input type="hidden" name="hidden_id" value="<?php echo  $id_gallery_edit; ?>" > 
                                <?php
                            } else {
                                ?>
                                <input type="submit" name="submitgallery" value="Add to Gallery" class='btn btn-dark'>   
                                <?php
                            }
                        ?>  
                    </form>
                </div> 

                <?php 
                    // [button save changes - update information on database and list]
                    if(array_key_exists('savechangesgallery', $_POST)) {
                        $hidden_id = $_POST['hidden_id'];
                       
                        $new_image = $_POST['chooseimage'];
                        $new_comment = $_POST['comment'];
                        $new_user = $_POST['user'];
                        
                        $get_db_id = $database->query(" SELECT id FROM gallery ");
                        while($update_info = $get_db_id->fetch()) {
                            $update_id = $update_info['id'];
                        }
                        
                        $database->query(" UPDATE gallery SET comment='$new_comment', user='$new_user' WHERE id=$hidden_id ");
   
                    }  
                ?>

                <!-- list -->
                <table class="table table-hover mt-5">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Comment</th>
                        <th>User</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                <?php

               // ==================== GET IMAGE AND PUT IT ON IMG-UPLOADS FOLDER ==================== 
                if(isset($_POST['submitgallery'])) {
                    $file = $_FILES['chooseimg']; // this generates un array (INFO: error = 0 no error / error = 1 has error) check array with print_r($file);
                    
                    //get file info on each variable
                    $fileName = $_FILES['chooseimg']['name']; 
                    $fileType = $_FILES['chooseimg']['type']; 
                    $fileTmpName = $_FILES['chooseimg']['tmp_name']; 
                    $fileSize = $_FILES['chooseimg']['size']; 
                    $fileError = $_FILES['chooseimg']['error']; 

                    $fileExtension = explode('.', $fileName); // split when see point --> generates 2 parts, filename and extension (jpg)
                    $fileActualExtension = strtolower(end($fileExtension)); // strtolower() --> put to lower case | end() --> get last part of array created on $fileExtension
                    
                    //determine what type of extensions are allowed
                    $allowed = array('jpg', 'jpeg', 'png');

                    //check if $fileActualExtension has $allowed extension type
                    if(in_array($fileActualExtension, $allowed)) {
                        if($fileError === 0) {
                            if ($fileSize < 1000000) {
                                // create unique id to images that are uploaded so you don't overwrite existing ones with the same name and add ".extension"
                                $fileNameNew = uniqid('', true).".".$fileActualExtension;
                                $fileDestination = "../img-uploads/".$fileNameNew;
                                move_uploaded_file($fileTmpName, $fileDestination);
                                //header("Location: testG.php?uploadsuccess");        
                            } else {
                                echo "File is too big (max size 1kb)";
                            }
                        } else {
                            echo "There was an error uploading your file.";
                        }    
                    } else {
                        echo "You can't upload files of this type (please upload .jpeg, .jpg or .png)";
                    }
                }
                    

                // ==================== PUT INFO ON DATABASE ====================          
                $image = $fileNameNew;
                $comment = $_POST['comment'];
                $user = $_POST['user'];

                if (isset($image, $comment, $user)) {
                    $request_gallery = $database->prepare(' INSERT INTO gallery (image, comment, user) VALUES(?, ?, ?) ');
                    $request_gallery->execute(array($image, $comment, $user) );
                }

            
                // [delete button - refresh list with deleted items before showing them on screen]
                if(array_key_exists('delete_photo', $_POST)) {
                    //delete
                    $id_gallery = $_POST['delete_photo'];
                    $database->query(" DELETE FROM gallery WHERE id=$id_gallery ");

                    //hidden input to delete image from folder
                    $delete_photo_folder = $_POST['delete_photo_folder'];
                    $photoname = $delete_photo_folder;
                    $path = "../img-uploads/" . $photoname;
                    unlink($path); 
                }  

               

                // ==================== SHOW ON BROWSER - gallery upload ====================  
                $response_gallery = $database->query(' SELECT * FROM gallery ');

                while ($data_gallery = $response_gallery->fetch()) {
                    ?>
                        <tr>
                            <td><?php echo $data_gallery['id']; ?></td>
                            <td><?php echo $data_gallery['image']; ?></td>
                            <td><?php echo $data_gallery['comment']; ?></td>
                            <td><?php echo $data_gallery['user']; ?></td>
                            <form method='post'>
                            <td>
                                <button type='submit' value='<?php echo $data_gallery['id']; ?>' name='edit_gallery' id='edit_gallery' class='btn btn-dark'><i class="fa fa-edit"></i></button> 
                            </td>  
                            <td>
                                <button type='submit' value='<?php echo $data_gallery['id']; ?>' name='delete_photo' id='delete_photo' class='btn btn-dark'><i class="fa fa-trash btn-dark"></i></button> 
                                <input type="hidden" name="delete_photo_folder" id="delete_photo_folder" value="<?php echo $data_gallery['image']; ?>">
                            </td>
                            </form> 
                        </tr>
                    <?php
                }

               
                ?>
                </table>
  
            </div>

        </div>

    </main>



    <?php 
       
} else {
    echo "<script>location.href='backoffice_login.php'</script>";
} 


    ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
</body>
</html>