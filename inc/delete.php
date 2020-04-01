<?php
include("../connection.php");
include("../function.php");
include("../session.php");
$id = mysqli_real_escape_string($connection,$_GET['id']);
$sql = "UPDATE upload SET status = 2 WHERE id = '$id'";
$q = mysqli_query($connection,$sql);
if($q){
   $_SESSION['SuccessMessage'] = "Upload successfully Deleted";
   header('Location:../confirmation.php');
  
}else{
   $_SESSION['ErrorMessage'] = "Deletion Failed";   
   header('Location:../confirmation.php');
}

?>