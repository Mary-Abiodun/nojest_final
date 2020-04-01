
<?php
include("connection.php");
include("function.php");
include("session.php");
// setting the errors;
$userError="";
$passwordError="";
$password2Error="";
$fnameError="";
$lstnameError="";
$affiliateError="";
$emailError="";
$email2Error="";
$phoneError="";
$stateError="";
$urlError="";
$genderError="";
$imageError="";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="icon" href="image/unilag.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="image/unilag.png">

</head>

<body>
  <div class="text-center">
    <?php // echo errormessage(); echo successmessage();?>
  </div>
  <div>
    <div class="row loginpage mb-3">
      <div id="login" class="col-sm-6">
        <a href="#">
          <img src="image/unilag.png" height="50" alt="CoolBrand" class="ml-5 my-2">
          <img src="image/NJES_logo.png" height="50" class="ml-5 my-2">
        </a>
      </div>

      <div class="col-sm-6">
        <div class="row my-2">
          <div class="col-sm-5">
          Username <input class="username" type="text"  aria-label="Search"></div>
          <div class="col-sm-7">
          Password <input class="username" type="password"> <button type="submit" class="btn btn-success pb-4" name="login" id="login">Login</button>

    </div>
  </div>

</div>
   </div>

 <nav class="navbar navbar-expand-md bg-cus">


     <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-4">
            <a href="index.php" class="nav-item nav-link active pl-4">Home</a>
            <a href="about.php" class="nav-item nav-link pl-5">About</a>
            <a href="submission.php" class="nav-item nav-link pl-5">Submission</a>
            <a href="current.php" class="nav-item nav-link pl-5">Current</a>
            <a href="archive.php" class="nav-item nav-link px-5" tabindex="-1">Archive</a>
        </div>
         <div class="navbar-nav ml-auto">
            <!-- <a href="login.php" class="nav-item nav-link">Login</a>
            <a href="register.php" class="nav-item nav-link">Register</a> -->
            <input class="form-control mr-sm-2" type="text"  aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
</div>
        </div>

 </nav>
</div>
</div>

    <div class="fluid-container reg">
        <div class="row">
            <div class="col-md-12 top">

                <h5> REGISTER </h5>

            </div>

        </div>
    </div>

    <div class="container main">
  <form id="regis" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Username:</label>
      </div>
      <div class="col-75">
        <input type="text" id="usname" name="username">
        <p class="error"><?=$userError;?></p>

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="pword" name="password">
        <p class="error"><?=$passwordError;?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="pass2">Repeat Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="pword" name="confpassword">
        <p class="error"><?=$password2Error;?></p>

      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="validation">Validation</label>
      </div>
      <div class="col-75">
        <input type="text" id="valid" name="validation">

      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="Salutation">Salutation:</label>
      </div>
      <div class="col-75">
        <input type="text" id="salute" name="salutation">

      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">First Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname">
        <p class="error"><?=$fnameError;?></p>

      </div>
    </div>

    <div class="row">
      <div  class="col">
        <label for="lname">Middle Name</label>
      </div>
      <div class="col-75">
        <input type="name" id="mname" name="midname">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname">
        <p class="error"><?=$lstnameError;?></p>

      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="lname">Initials</label>
      </div>
      <div class="col-75">
        <input type="psw" id="pword" name="initial">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Gender</label>
      </div>
      <div class="col-75">
        <select id="gendertype" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Affiliation:</label>
      </div>
      <div class="col-75">
        <textarea name="affiliate" rows="3" cols="10">

        </textarea>
        <p class="error"><?=$affiliateError;?></p>

        <p> (Your institution, e.g. "University of Lagos") </p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="Signature">Signature:</label>
      </div>
      <div class="col-75">
        <input type="file" id="sign" name="signature" accept="image/png, image/jpeg">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="email">Email:</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email">
        <p class="error"><?=$emailError;?></p>

      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="email">Confirm Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="confemail">
        <p class="error"><?=$email2Error;?></p>

      </div>
    </div>



    <div class="row">
      <div class="col">
        <label for="url">URL</label>
      </div>
      <div class="col-75">
        <input type="name" id="url" name="url">


      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="phoneNo">Phone</label>
      </div>
      <div class="col-75">
        <input type="number" id="phoneNo" name="phone">

      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="fax">Fax</label>
      </div>
      <div class="col-75">
        <input type="number" id="fax" name="fax"  >
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="State">Location</label>
      </div>
      <div class="col-75">
        <input type="text" id="state" name="state">

      </div>
    </div>

    <div class="row">
      <div class="col-25">Image

      </div>
      <div class="col-75">
        <input type="file" id="image" name="image" placeholder="Upload Image">
        <p class="error"><?=$imageError;?></p>

      </div>
    </div>

    <div class="row">
      <div class="allowance">

      </div>
      <div class="col-75">
        <input type="checkbox" id="image" name="privacy1">
        <label>I agree, to have my data collected and stored according to the privacy statement </label> <br>

        <input type="checkbox" id="" name="check1" >
        <label>I would like to be notified of new publications and announcements </label> <br>


        <input type="checkbox" id="image" name="check2" >
        <label>Would you be willing to review submissions to this journal? Yes, request the Reviewer role </label> <br>

        <input type="submit" value="Submit" name="submit" class="btn btn-success">
      </div>
    </div>





  </form>
</div>
<!--modal-->
<!--
<div class="modal" id="formModal">
        <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
            <h2 class="modal-title">Welcome!</h2>
                <button class="close" data-dismiss="modal">
                <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p>Thank you for Registering  You have succesffuly Register</p>
            </div>


            </div>

        </div>

    </div>
-->
    <footer>
       <p>Publisher: Nigeria Online Journal of Educational Science And Technology, NOJEST</p>
        <p> For suggestions, recommendations and possible academic collaborations, feel free to contact our chief editor on contact@nojest.com.ng</p>
    </footer>



  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<script src="js/main.js"></script>

</body>

</html>
