<?php
require_once("include/Sessions.php");
include "include/req.php";
$_SESSION["TrackingURL"]=$_SERVER["PHP_SELF"];

 global $ConnectingDB;
if(isset($_SESSION["UserId"])){
  Redirect_to("admin.php");
}
if (isset($_POST["Submit"])) {
  $Email =  mysqli_real_escape_string($ConnectingDB,$_POST["Email"]);
  $Password = mysqli_real_escape_string($ConnectingDB,$_POST["Password"]);
  if (empty($Email)||empty($Password)) {
    $_SESSION["ErrorMsg"]= "All fields must be filled out";
    Redirect_to("login.php");
    exit;
  }else {
    $Found_User=Login_Check($Email,$Password);
    if($Found_User){
        $_SESSION["UserId"]=mysqli_real_escape_string($ConnectingDB,$Found_User["id"]);
        $_SESSION["FirstName"]=mysqli_real_escape_string($ConnectingDB,$Found_User["fname"]);
        $_SESSION["LastName"]=mysqli_real_escape_string($ConnectingDB,$Found_User["lname"]);
        $_SESSION["Email"]=mysqli_real_escape_string($ConnectingDB,$Found_User["email"]);
        $_SESSION["SuccessMsg"] ="Welcome " .$_SESSION["LastName"];
        if(isset($_SESSION["TrackingURL"])){
          Redirect_to($_SESSION["TrackingURL"]);
        }
        Redirect_to("dashboard.php");
    }// var_dump($Found_User);
     else{
       $_SESSION["ErrorMsg"] ="Invalid password/username, try again";
       Redirect_to("login.php");
   }
  }
}
include "include/link.php";
?>

<link rel="stylesheet" href="css/stylereg.css">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

<section class="container py-2 mb-4">
      <div class="row">
        <div class="offset-sm-3 col-sm-6"style="min-height:67vh;">
        <br>
          <?php
           echo ErrorMsg();
           echo SuccessMsg();
           ?>
          <div class="card">
            <div class="card-header">
              <h4 class="lead text-center" style="color: royalblue;">
           Login</h4>
              </div>
              <div class="card-body">
              <form class="" action="login.php" method="post">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-white bg-info"> <i class="fas fa-user"></i> </span>
                    </div>
                    <input type="email" class="form-control" name="Email" id="email" value="" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-white bg-info"> <i class="fas fa-lock"></i> </span>
                    </div>
                    <input type="password" class="form-control" name="Password" id="password" value=""placeholder="Password">
                  </div>
                </div>
                <input type="submit" name="Submit" class="btn btn-success btn-block" value="Sign in">
              </form>
 
            </div>
 
          </div>
 
        </div>
 
      </div>
 
    </section>


