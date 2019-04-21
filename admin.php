<?php
require_once("include/Sessions.php");
include "include/req.php";
$_SESSION["TrackingURL"]=$_SERVER["PHP_SELF"];

Confirm_Login();
if(isset($_POST["Submit"])){
  global $ConnectingDB;
  $FirstName = mysqli_real_escape_string($ConnectingDB,$_POST["Firstname"]);
  $LastName = mysqli_real_escape_string($ConnectingDB,$_POST["Lastname"]);
  $Email = mysqli_real_escape_string($ConnectingDB,$_POST["Email"]);
  $Password = mysqli_real_escape_string($ConnectingDB,$_POST["Password"]);
  $ConfirmPassword = mysqli_real_escape_string($ConnectingDB,$_POST["ConfirmPassword"]);
  $Admin = mysqli_real_escape_string($ConnectingDB,$_SESSION["LastName"]);

  date_default_timezone_set("Europe/Oslo");
  $CurrentTime=time();
  $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
 
  if(empty($FirstName)||empty($LastName)||empty($Email)||empty($Password)||empty($ConfirmPassword)){
    $_SESSION["ErrorMsg"]= "All fields must be filled out";
    Redirect_to("admin.php");
  }elseif($Password!==$ConfirmPassword){
    $_SESSION["ErrorMsg"]= "Password must be the same";
    Redirect_to("admin.php");
  }elseif (strlen($Password)<5) {
    $_SESSION["ErrorMsg"]= "Password should be greater than 5 characters";
    Redirect_to("admin.php");
  }elseif (CheckUserNamenDB($Email)) {
    $_SESSION["ErrorMsg"]= "Email exists, try another one";
    Redirect_to("admin.php");
  }
  else{
    // Query to insert New Admin in DB When everything is fine
    global $ConnectingDB;
    $Hashed_Password = Password_Encryption($Password);
    $stmt =$ConnectingDB->prepare("INSERT INTO admins(date,fname,lname,password,email,aby) VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$DateTime,$FirstName,$LastName,$Hashed_Password,$Email,$Admin);
    $Execute=$stmt->execute();
   //  var_dump($Execute);
    if($Execute){
      $_SESSION["SuccessMsg"]="New Admin added Successfully";
      Redirect_to("admin.php");
    }else {
      $_SESSION["ErrorMsg"]= "Something went wrong. Try Again !";
      Redirect_to("admin.php");
    }
  }
} //Ending of Submit Button If-Condition
include "include/link.php";
 ?>

<link rel="stylesheet" href="css/styledash.css">


    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    <!--NAVBAR-->

<!--NAVBAR ending-->
<!--Header starting-->

<!--Main area-->
<section class="container py-2 mb-4">
<div class="row">
<div class="offset-lg-1 col-lg-10">
<?php 
echo ErrorMsg();
echo SuccessMsg();
?>

<form action="admin.php" method="post"> 

    <div class="card">
    <h2 class="text-center" style="color:white;"> <i class="fas fa-user-shield" style="color:white;"></i>&nbsp;Add New Admin</h2>
    <div class="card-body">
      <div class="row">
        <div class="col">
        <div class="form-group">
    <input class="form-control" type="text" name ="Firstname" placeholder="First Name" id="firstname" >
    </div>
        </div>
        <div class="col">
        <div class="form-group">
    <input class="form-control" type="text" name ="Lastname" placeholder="Last Name" id="lastname" >
    </div>
        </div>
      </div>
   
    <div class="form-group">
    <input class="form-control" type="email" name ="Email" placeholder="Email" id="email" >
    </div>
    <div class="form-group">
    <input class="form-control" type="password" name ="Password" placeholder="Passoword" id="Password" >
    </div>
    <div class="form-group">
    <input class="form-control" type="password" name ="ConfirmPassword" placeholder="Confirm Password" id="ConfirmPassword" >
    </div>
    
    <div class="row">
   
    <button type="submit" name="Submit" class="btn btn-success btn-md btn-block mb-1"> <i class="fas fa-user-plus"style="color:blue;"></i> Add Admin</button>
    </div>
    </div>
    </div>
    </form>


    <h2 class="text-white"><i class="fas fa-ellipsis-v" style="color:blue;"></i> Admins List</h2>

<table class="table table-striped table-hover">
    <head class="thead-dark">
        <tr style="color:white">
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </head>
    <?php 
        global $ConnectingDB;
        $sql= "SELECT * FROM admins ORDER BY id asc";
        $Execute =mysqli_query($ConnectingDB,$sql);
        while($DdatRows=mysqli_fetch_assoc($Execute)){
            $Id = $DdatRows['id'];
            $Date =$DdatRows['date'];
            $FirstName =$DdatRows['fname'];
            $LastName =$DdatRows['lname'];
            $Email =$DdatRows['email'];
       
    ?>
    <tbody>
        <tr style="color:snow">
          <td><?php echo $Id; ?></td>
          <td><?php echo $FirstName; ?></td>
          <td><?php echo $LastName; ?></td>
          <th><?php echo $Email; ?></th>
          <td><?php echo $Date; ?></td>


          <td > <a href="deleteAdmin.php?id=<?php echo $Id;?>" class="btn btn-danger"> <i class="far fa-trash-alt" style="color:white;"></i> Delete</a></td>

        </tr>
    </tbody>
        <?php } ?>
    </table>


</div>
</div>

</section>
