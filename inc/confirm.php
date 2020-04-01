<?php
include("../connection.php");
include("../function.php");
include("../session.php");
$id = mysqli_real_escape_string($connection,$_GET['id']);
$sql = "UPDATE upload SET status = 1 WHERE id = '$id'";
$q = mysqli_query($connection,$sql);
if($q){
   $subject = "New file upload";
   $header = "MIME-Version: 1.0\r\n";
   $header .= "Content-Type: text/html\r\n";
   $header .= "From: nojest\r\n"; 
   $to = "abiodun@meltwater.com";
   $message =<<<MSG
   <div style="padding: 15px; border: solid 1px grey; border-radius: 5px; width: 60%; margin: auto">
      <br />
   <h2 style="text-align: center">A user just uploaded a file now.</h2>
   <p>a user just confirmed an upload</p>
   <p>Name of user: <b></b></p>
   <p>Email: <b>Admin</b></p>
   </div>
MSG;

   if(mail($to,$subject,$message,$header)){
      $_SESSION['SuccessMessage'] = "Upload successfully Confirmed and being processed";
      header('Location:../confirmation.php');
   }
   
}
else{
   $_SESSION['ErrorMessage'] = "Confirmation Failed, please try again";   
   header('Location:../confirmation.php');
}
?>