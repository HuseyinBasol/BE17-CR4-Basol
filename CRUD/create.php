<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php require_once 'components/boot.php'?>
       <title>Big Library  |  Add Media</title>
       <style>
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }      
       </style>
   </head>
   <body>
       <fieldset>
           <legend class='h2'>Add Media</legend>
           <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
               <table class='table'>
                   <tr>
                       <th>ISBN</th>
                       <td><input class='form-control' type="number" name="ISBN"  placeholder="ISBN Code" step="any" /></td>
                   </tr>   
                   <tr>
                       <th>Title</th>
                       <td><input class='form-control' type="text" name= "title" placeholder="Harry Potter"  /></td>
                   </tr>
                   <tr>
                       <th>Image</th>
                       <td><input class='form-control' type="file" name="image" /></td>
                   </tr>
                   <tr>
                       <th>Description</th>
                       <td><input class='form-control' type="text" name="short_description"  placeholder="This is a fantasy book" /></td>
                   </tr>   
                   <tr>
                       <th>Type</th>
                       <td><input class='form-control' type="text" name= "type" placeholder="Book, CD, DVD etc....."  /></td>
                   </tr>
                   <tr>
                       <th>Author First Name</th>
                       <td><input class='form-control' type="text" name="author_first_name" placeholder="Joanne Kathleen" /></td>
                   </tr>
                   <tr>
                       <th>Author Last Name</th>
                       <td><input class='form-control' type="text" name="author_last_name"  placeholder="Rowling" /></td>
                   </tr>   
                   <tr>
                       <th>Publisher Name</th>
                       <td><input class='form-control' type="text" name= "publisher_name" placeholder="Name of the publisher"  /></td>
                   </tr>
                   <tr>
                       <th>Publisher Address</th>
                       <td><input class='form-control' type="text" name="publisher_address" placeholder="Country" /></td>
                   </tr>
                   <tr>
                       <th>Publish Date</th>
                       <td><input class='form-control' type="text" name="publish_date" placeholder="YYYY" /></td>
                   </tr>
                   <tr>
                       <td><button class='btn btn-success' type="submit">Insert Media</button></td>
                       <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>