
<?php
include("../connection.php");
include("../function.php");
include("../session.php");

//$Salutation=mysqli_real_escape_string($connection,$_POST["salutation"]);
$Fname=mysqli_real_escape_string($connection,$_POST["firstname"]);
$Midname=mysqli_real_escape_string($connection,$_POST["midname"]);
$Lstname=mysqli_real_escape_string($connection,$_POST["lastname"]);
$Affiliation=mysqli_real_escape_string($connection,$_POST["affiliate"]);
$Email=mysqli_real_escape_string($connection,$_POST["email"]);
$Url=mysqli_real_escape_string($connection,$_POST["url"]);
$Title=mysqli_real_escape_string($connection,$_POST["title"]);
$Language=mysqli_real_escape_string($connection,$_POST["language"]);
$Abstract=mysqli_real_escape_string($connection,$_POST["abstract"]);
// $Agencies=mysqli_real_escape_string($connection,$_POST["agencies"]);
$References=mysqli_real_escape_string($connection,$_POST["reference"]);
//$Image=$_FILES["image"]["name"];
//$Img_user="metapictures/".basename($Image);
$id = $_SESSION['last_upload_id'];
if(empty($Fname) || empty($Email) || empty($Url)){
    $_SESSION["ErrorMessage"] = "Please Fill the Required Space";
}
elseif(!preg_match("/^[a-zA-Z .]*$/",$_POST['firstname'])){
   $_SESSION["ErrorMessage"] = "only letters and whitespace can be accepted";

}
elseif(!preg_match("/^[a-zA-Z .]*$/",$_POST['lastname'])){
   $_SESSION["ErrorMessage"] = "only letters and whitespace can be accepted";

}
elseif(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$_POST['email'])){
   $_SESSION["ErrorMessage"] = "Invalid Email format";
}
elseif(!preg_match("/(https:|(ftp:))\/\/+[a-zA-Z0-9.\-_\&$=\#\/?\~`!]+\.[a-zA-Z0-9.\-_\&$=\#\/?\~`!]*/",$_POST['url'])){
   $_SESSION["ErrorMessage"] = "Invalid url";
      }
elseif(empty($_POST['affiliate'])){
   $_SESSION["ErrorMessage"] ="Please Type your Institution";
}
else{   

   $insert = "INSERT INTO metadata(firstname,midname,lastname,`file`, affiliation,email,`url`,title,abstract,`language`,`references`) VALUES('$Fname','$Midname','$Lstname','$id','$Affiliation','$Email','$Url','$Title','$Abstract','$Language','$References')";
   // $_SESSION["ErrorMessage"] = $id; echo json_encode($_SESSION["ErrorMessage"]); exit; 
   if(mysqli_query($connection, $insert)){
      $_SESSION["ErrorMessage"] = 1;
   }
   // Your Information Has been Successfully Recorded
   else{
      $_SESSION["ErrorMessage"] = 0;
   }
}// else statement closed tag
echo json_encode($_SESSION["ErrorMessage"]);

?>