<?php 

$hostname = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "be17_cr4_hüseyinbasol_biglibrary"; 

$connect = new mysqli($hostname, $username, $password, $dbname);


if($connect->connect_error) {
   die("Connection failed: " . $connect->connect_error);
}else {

    //echo "Successfully Connected";

}