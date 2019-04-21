<?php
require_once("include/Sessions.php");
include "include/req.php";
$_SESSION["TrackingURL"]=$_SERVER["PHP_SELF"];


//Confirm_Login();
if(isset($_POST["Submit"])){
  global $ConnectingDB;
  $PostTitle = mysqli_real_escape_string($ConnectingDB, $_POST["PostTitle"]);
  $Image = mysqli_real_escape_string($ConnectingDB,$_FILES["Image"]["name"]);
  $Target = mysqli_real_escape_string($ConnectingDB,"upload/".basename($_FILES["Image"]["name"]));
  $PostText = mysqli_real_escape_string($ConnectingDB,$_POST["PostDesc"]);
  $Admin =mysqli_real_escape_string($ConnectingDB,$_SESSION["LastName"]);
  date_default_timezone_set("Europe/Oslo");
  $CurrentTime=time();
  $Date=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
  $ok =1;
  $file_type= $_FILES["Image"]["type"];

  if(empty($PostTitle)){
    $_SESSION["ErrorMsg"]= "Title can't be empty";
    Redirect_to("newpost.php");
  }elseif (strlen($PostTitle)<2) {
    $_SESSION["ErrorMsg"]= "Title should be greater than 2 characters";
    Redirect_to("newpost.php");
  }elseif (strlen($PostText)>99) {
    $_SESSION["ErrorMsg"]= "Post Descriptions should be less than than 20000 characters";
    Redirect_to("newpost.php");

  }elseif($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg" ){
    global $ConnectingDB;
    $sql = "INSERT INTO posts(date,title, author,image, post) 
    VALUES('$Date', '$PostTitle', '$Admin', '$Image', '$PostText')";
    
    $Execute=mysqli_query($ConnectingDB, $sql);

    move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
 
    if($Execute){
      $_SESSION["SuccessMsg"]="New post added Successfully";
      Redirect_to("newpost.php");
    }else {
      $_SESSION["ErrorMsg"]= "Something went wrong. Try Again !";
      Redirect_to("newpost.php");
    }
  }

  else {
    $_SESSION["ErrorMsg"]= "Something went wrong. Try Again !";
    Redirect_to("newpost.php");
  }
} //Ending of Submit Button If-Condition
 ?>
<?php include "include/link.php"; ?>
<link rel="stylesheet" href="css/styledash.css">


    <meta charset="utf-8">
    <title>New Post</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">

  <a class="navbar-brand" href="#"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newpost.php">New Post</a>
      </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
       <a class ="nav-link" href="logout.php"><i class="fas fa-sign-out-alt text-danger"></i>&nbsp;Logout</a>
       </li>
  </ul>

</div>
</nav>
<!--Main area-->
<section class="container py-2 mb-4">
<div class="row">
<div class="offset-lg-1 col-lg-10">
<?php 
echo ErrorMsg();
echo SuccessMsg();
?>

<form action="newpost.php" method="post" enctype="multipart/form-data">  
    <div class="card mb-3" style="margin:10%;">
    <h3 class="fix">Add your resume here in pdf</h3>

    <div class="card-body">
    <div class="form-group ">
    <input class="form-control" type="text" name ="PostTitle" placeholder="File Name" id="title" >
    </div>
   
  
    <div class="form-group">
        <div class="custom-file">
        <input class="custom-file-input" type="File" id ="imageSelect" name="Image">
        <label for="imageSelect" class="custom-file-label">Select file</label>
        </div>
    </div>
    <div class="form-group">
    <textarea class="form-control" id="Post" name="PostDesc"  cols="80" rows="6" placeholder=" Short description here ..."></textarea>
    
    </div>
    <div class="row ">
   
    <button type="submit" name="Submit" class="btn btn-success btn-md btn-block mb-1 flipOutY delay-10s"><i class="far fa-smile-beam" style="color:blue;"></i> Submit New Post</button>
    </div>

    </div>
    </div>
    </div>
    </form>

</div>
</div>

</section>

