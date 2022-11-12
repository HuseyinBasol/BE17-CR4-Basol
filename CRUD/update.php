<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM media WHERE id = {$id}";
   $result = mysqli_query($connect, $sql);
   if (mysqli_num_rows($result) == 1) {
       $data = mysqli_fetch_assoc($result);
       $ISBN = $data['ISBN'];
       $title = $data['title'];
       $image = $data['image'];
       $description = $data['short_description'];
       $type = $data['type'];
       $authorfn = $data['author_first_name'];
       $authorln = $data['author_last_name'];
       $publishername = $data['publisher_name'];
       $publisheraddress = $data['publisher_address'];
       $publishdate = $data['publish_date'];
   } else {
       header("location: error.php");
   }
   mysqli_close($connect);
} else {
   header("location: error.php");
}
?>


<!DOCTYPE html>
<html>
   <head>
       <title>Edit Media</title>
       <?php require_once 'components/boot.php'?>
       <style type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }  
           .img-thumbnail{
               width: 70px !important;
               height: 70px !important;
           }    
       </style>
   </head>
   <body>
       <fieldset>
           <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $ISBN ?>"></legend>
           <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
               <table class="table">
               <tr>
                       <th>ISBN</th>
                       <td><input class='form-control' type="number" name="ISBN"  placeholder="ISBN Code" step="any" value ="<?php echo $ISBN ?>" /></td>
                   </tr>   
                   <tr>
                       <th>Title</th>
                       <td><input class='form-control' type="text" name= "title" placeholder="Harry Potter" value ="<?php echo $title ?>"  /></td>
                   </tr>
                   <tr>
                       <th>Image</th>
                       <td><input class='form-control' type="file" name="image"  /></td>
                   </tr>
                   <tr>
                       <th>Description</th>
                       <td><input class='form-control' type="text" name="short_description"  placeholder="This is a fantasy book" value ="<?php echo $description ?>" /></td>
                   </tr>   
                   <tr>
                       <th>Type</th>
                       <td><input class='form-control' type="text" name= "type" placeholder="Book, CD, DVD etc....."  value ="<?php echo $type ?>" /></td>
                   </tr>
                   <tr>
                       <th>Author First Name</th>
                       <td><input class='form-control' type="text" name="author_first_name" placeholder="Joanne Kathleen" value ="<?php echo $authorfn ?>" /></td>
                   </tr>
                   <tr>
                       <th>Author Last Name</th>
                       <td><input class='form-control' type="text" name="author_last_name"  placeholder="Rowling"  value ="<?php echo $authorln ?>" /></td>
                   </tr>   
                   <tr>
                       <th>Publisher Name</th>
                       <td><input class='form-control' type="text" name= "publisher_name" placeholder="Name of the publisher" value ="<?php echo $publishername ?>"  /></td>
                   </tr>
                   <tr>
                       <th>Publisher Address</th>
                       <td><input class='form-control' type="text" name="publisher_address" placeholder="Country" value ="<?php echo $publisheraddress ?>" /></td>
                   </tr>
                   <tr>
                       <th>Publish Date</th>
                       <td><input class='form-control' type="text" name="publish_date" placeholder="YYYY" value ="<?php echo $publishdate ?>" /></td>
                   <tr>
                       <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />

                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                       <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                       <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>