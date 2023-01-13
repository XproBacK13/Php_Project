<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $password=$_POST['password'];

    $sql1="insert into name (name) values('$name')";
    $query1=mysqli_query($con,$sql1);

    if($query1){
        $sql2="insert into email (email) values('$email')";
        $query2=mysqli_query($con,$sql2);
       
    }

    if($query2){
        $sql3="insert into mobile (mobile) values('$mobile')";
        $query3=mysqli_query($con,$sql3);
        
    }

    if($query3){
        $sql4="insert into address (address) values('$address')";
        $query4=mysqli_query($con,$sql4);
       
    }

    if($query4){
        $sql5="insert into password (password) values('$password')";
        $query5=mysqli_query($con,$sql5);
        
    }

    if($query4){
        //echo "Data stored successfully";
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
  <div class="navtitle">Add a new user</div>
</nav>
    <div class="container my-5">

<form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
  </div>

  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required>
  </div>
  
  <div class="mb-3">
    <label>Phone number</label>
    <input type="text" class="form-control" placeholder="Enter your phone number" name="mobile" autocomplete="off" required>
  </div>

  <div class="mb-3">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off" required>
  </div>

  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" required>
  </div>



  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>






















   
  </body>
</html>