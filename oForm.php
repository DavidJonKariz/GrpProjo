<?php
include 'connection.php';
session_start();
$conn = $con;
$uID = $_SESSION['userid'];

$udes = isset($_POST["Description"]) ? $_POST["Description"] : '';
$uimg = isset($_POST["image"]) ? $_POST["image"] : '';

$sqlOFentry = "INSERT INTO `cases`(`Description`, `Attachment`) VALUES ('$udes', '$uimg');";


//upload the picture evidence
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 10485760){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
   
    mysqli_query($GLOBALS['conn'], $sqlOFentry);
    header('Location: Homepage.php');
   
?>

