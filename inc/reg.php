<?php
include("../connection.php");
include("../function.php");
include("../session.php");
// if it set;

   $Username=mysqli_real_escape_string($connection,$_POST["username"]);
   $Password=mysqli_real_escape_string($connection,$_POST["password"]);
   $Confpassword=mysqli_real_escape_string($connection,$_POST["confpassword"]);
   $Salutation=mysqli_real_escape_string($connection,$_POST["salutation"]);
   $Fname=mysqli_real_escape_string($connection,$_POST["firstname"]);
   $Midname=mysqli_real_escape_string($connection,$_POST["midname"]);
   $Lstname=mysqli_real_escape_string($connection,$_POST["lastname"]);
   $Affiliation=mysqli_real_escape_string($connection,$_POST["affiliate"]);
   $Email=mysqli_real_escape_string($connection,$_POST["email"]);
   $Confemail=mysqli_real_escape_string($connection,$_POST["confemail"]);
   $Url=mysqli_real_escape_string($connection,$_POST["url"]);
   $Phone=mysqli_real_escape_string($connection,$_POST["phone"]);
   $Fax=mysqli_real_escape_string($connection,$_POST["fax"]);
   $State=mysqli_real_escape_string($connection,$_POST["state"]);
   $Gender=mysqli_real_escape_string($connection,$_POST["gender"]);
   $Hashed_password= Password_Encryption($Password);  
   $Image=$_FILES["image"]["name"];
   $Img_user="userimg/".basename($Image);
   $sig_img=$_FILES["signature"]["name"];
   $sign = "signature/".basename($sig_img);
   $Vkey = md5(time().rand(1,30));// this will generate a verification for the user;

   // validating the form datas.

   if(empty($Username) || empty($Password) || empty($Fname) || empty($Email) || empty($Image)  || empty($Confemail)  || empty($Affiliation) || empty($Gender)){
      $_SESSION["ErrorMessage"] = "Please Fill the Required Space (required spaces are marked with askterisks )";
   }
   elseif(strlen($_POST["username"]) < 5){
      $_SESSION["ErrorMessage"] = "minimum of 5 letters is required for username";
     
   }
   elseif(strlen($_POST["password"])<5){
      $_SESSION["ErrorMessage"] = "Weak password, minimum of 5 letters is required";
      
   }
   elseif($_POST["confpassword"] !== $_POST["password"]){
      $_SESSION["ErrorMessage"] ="Password Do Not Match";
      
   }
   elseif(!preg_match("/^[a-zA-Z .]*$/",$_POST['firstname'])){
      $_SESSION["ErrorMessage"] = "only letters and whitespace can be accepted for firstname";
      

   }
   elseif(!preg_match("/^[a-zA-Z .]*$/",$_POST['lastname'])){
      $_SESSION["ErrorMessage"] = "only letters and whitespace can be accepted for lastname";
      

   }
   elseif(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$_POST['email'])){
      $_SESSION["ErrorMessage"] = "Invalid Email format";
      
   }
   elseif($_POST['email'] !== $_POST['confemail']){
      $_SESSION["ErrorMessage"] ="Email Do Not Match";
      
   }
   // elseif(empty($_POST['url'])){
   //  $urlError = "Url is Required";
   //   }
   // elseif(!preg_match("/(https:|(ftp:))\/\/+[a-zA-Z0-9.\-_\&$=\#\/?\~`!]+\.[a-zA-Z0-9.\-_\&$=\#\/?\~`!]*/",$_POST['url'])){
   //           $urlError = "Invalid url";
   //       } 

   elseif(EmailExistence($Email)){
   $_SESSION["ErrorMessage"] = "Email Already Exist";
   
   }
   elseif(UsernameExistence($Username)){
   $_SESSION["ErrorMessage"] = "Username Already Exist";
   
   }
   else{
      $insert="INSERT INTO register(username,password,salutation,firstname,midname,lastname,gender,
            affiliate,email,url,signature,phone,vkey,state,image) VALUES('$Username','$Hashed_password','$Salutation','$Fname','$Midname',
      '$Lstname','$Gender','$Affiliation','$Email','$Url','$sig_img','$Phone','$Vkey','$State','$Image')";

      $Query=mysqli_query($connection,$insert);
      move_uploaded_file($_FILES["image"]["name"],$Img_user);
      move_uploaded_file($_FILES["signature"]["name"],$sign);

      if($Query){
      $_SESSION["ErrorMessage"] = 1;
      
      }else{   
         $_SESSION["ErrorMessage"] = 0;
     
      }
   }// else statement closed tag
   echo json_encode($_SESSION["ErrorMessage"]);

?>