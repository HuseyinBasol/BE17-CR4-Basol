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
    $id = $_POST['id'];
    $image = file_upload($_FILES['image']);
   $uploadError = '';

   if($image->error===0){
       ($_POST["image"]=="product.png")?: unlink("../pictures/$_POST[image]");          
       $sql = "UPDATE media SET ISBN = '$ISBN', title = '$title', short_description = '$description', type = '$type', author_first_name = '$authorfn', author_last_name = '$authorln', publisher_name = '$publishername', publisher_address = '$publisheraddress', publish_date = $publishdate, image = '$image->fileName' WHERE id = {$id}";
   }else{
       $sql = "UPDATE media SET ISBN = '$ISBN', title = '$title', short_description = '$description', type = '$type', author_first_name = '$authorfn', author_last_name = '$authorln', publisher_name = '$publishername', publisher_address = '$publisheraddress', publish_date = $publishdate WHERE id = {$id}";
   }    
   if (mysqli_query($connect, $sql) === TRUE) {
       $class = "success";
       $message = "The record was successfully updated";
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   } else {
       $class = "danger";
       $message = "Error while updating record : <br>" . mysqli_connect_error();
       $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
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
               <h1>Update request response</h1>
           </div>
           <div class="alert alert-<?php echo $class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? ''; ?></p>
               <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
               <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
           </div>
       </div>
   </body>
</html>