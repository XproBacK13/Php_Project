<?php
include 'connect.php';

$id=$_GET['updateid'];

$sql="SELECT * from name WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];

$sql="SELECT * from email WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$email=$row['email'];

$sql="SELECT * from mobile WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$mobile=$row['mobile'];

$sql="SELECT * from address WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$address=$row['address'];

$sql="SELECT * from password WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $password=$_POST['password'];


    $sql1="UPDATE name SET id=$id WHERE id=$id";
    $query1=mysqli_query($con,$sql1);

    $sql9="UPDATE name SET name='$name' WHERE id=$id";
    $query9=mysqli_query($con,$sql9);

    if($query1){
        $sql2="UPDATE email SET email='$email' WHERE id=$id";
        $query2=mysqli_query($con,$sql2);
       
    }

    if($query2){
        $sql3="UPDATE mobile SET mobile='$mobile' WHERE id=$id";
        $query3=mysqli_query($con,$sql3);
        
    }

    if($query3){
        $sql4="UPDATE address SET address='$address' WHERE id=$id";
        $query4=mysqli_query($con,$sql4);
       
    }

    if($query4){
        $sql5="UPDATE password SET password='$password' WHERE id=$id";
        $query5=mysqli_query($con,$sql5);
        
    }

    if($query4){
        //echo "Data UPDATED successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      .navbar{
        display:flex;
        align-items:center;
        background-color:#333;
        color:white;
      }
      .navtitle{
        font-size:1.5rem;
        text-align: center;
        margin: auto;
        width: 50%;
        padding: 10px;
      }

    </style>
  </head>
  <body>
  <nav class="navbar">
  <div class="navtitle">Update an existing user</div>
</nav>
    <div class="container my-5">

<form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required value=<?php echo $name;?>>
  </div>

  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required value=<?php echo $email;?>>
  </div>
  
  <div class="mb-3">
    <label>Phone number</label>
    <input type="text" class="form-control" placeholder="Enter your phone number" name="mobile" autocomplete="off" required value=<?php echo $mobile;?>>
  </div>

  <div class="mb-3">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off" required value=<?php echo $address;?>>
  </div>

  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" required value=<?php echo $password;?>>
  </div>



  <button type="submit" class="btn btn-primary mx-5" name="submit">Update</button>
</form>
</div>






   
  </body>
</html>