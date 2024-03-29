<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM media";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {    
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
       $tbody .= "<tr>

            <td><img class='img-thumbnail' src='pictures/" .$row['image']."'</td>
            <td>" .$row['ISBN']."</td>
            <td>" .$row['title']."</td>
           <td>" .$row['short_description']."</td>
           <td>" .$row['type']."</td>
           <td>" .$row['author_first_name']."</td>
           <td>" .$row['author_last_name']."</td>
           <td>" .$row['publisher_name']."</td>
           <td>" .$row['publisher_address']."</td>
           <td>" .$row['publish_date']."</td>
           <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>

            </tr>";
   };
} else {
   $tbody =  "<tr><td colspan='10'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);

?>


<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Big Library</title>
       <?php require_once 'components/boot.php'?>
       <style type="text/css">
           .manageProduct {          
               margin: auto;
           }
           .img-thumbnail {
               width: 70px !important;
               height: 70px !important;
           }
           td {          
               text-align: left;
               vertical-align: middle;

            }
           tr {
               text-align: center;
           }

          
                
   
       </style>
   </head>
   <body>
       <div class="manageProduct w-75 mt-3">   
           <div class='mb-3'>

                <a href= "create.php"><button class='btn btn-primary'type="button" >Add Media</button></a>
           </div>
           <p class='h2'>Media</p>

            <table class='table table-striped'>
               <thead class='table-success'>
                  <tr >

                        
                       <th>Image</th>
                       <th>ISBN</th>
                       <th>Title</th>
                       <th>Description</th>
                       <th>Type</th>
                       <th>Author First Name</th>
                       <th>Author Last Name</th>
                       <th>Publisher Name</th>
                       <th>Publisher Address</th>
                       <th>Publish Date</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
               <?= $tbody;?>
                </tbody>
           </table>
       </div>
   </body>
</html>