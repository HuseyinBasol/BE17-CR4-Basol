<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {  
   $ISBN = $_POST['ISBN'];
   $title = $_POST['title'];
   $description = $_POST['short_description'];
   $type = $_POST['type'];
   $authorfn = $_POST['author_first_name'];
   $authorln = $_POST['author_last_name'];
   $publishername = $_POST['publisher_name'];
   $publisheraddress = $_POST['publisher_address'];
   $publishdate = $_POST['publish_date'];
   $uploadError = '';
   //this function exists in the service file upload.
   $image = file_upload($_FILES['image']); 
   
   $sql = "INSERT INTO media (ISBN, title, short_description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, image) VALUES ('$ISBN', '$title', '$description', '$type', '$authorfn', '$authorln', '$publishername', '$publisheraddress', $publishdate,'$image->fileName')";

   if (mysqli_query($connect, $sql) === true) {
       $class = "success";
       $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $ISBN  </td>
            <td> $title </td>
            <td> $description </td>
            <td> $type </td>
            <td> $authorfn </td>
            <td> $authorln </td>
            <td> $publishername </td>
            <td> $publisheraddress </td>
            <td> $publishdate </td>
            </tr></table><hr>";
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   } else {
       $class = "danger";
       $message = "Error while creating record. Try again: <br>" . $connect->error;
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   }
   mysqli_close($connect);
} else {
   header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Update</title>
       <?php require_once '../components/boot.php'?>
   </head>
   <body>
       <div class="container">
           <div class="mt-3 mb-3">
               <h1>Create request response</h1>
           </div>
           <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo($message) ?? ''; ?></p>
               <p><?php echo($uploadError) ?? ''; ?></p>
               <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
           </div>
       </div>
   </body>
</html>