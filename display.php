<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="navtitle">Users table</div>
</nav>
    <div class="container">
        
           <table class="table table-bordered my-5">
  <thead>
    <tr>
    <th scope="col">No.</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Phone no.</th>
    <th scope="col">Address</th>
    <th scope="col">Password</th>
    <th scope="col">Actions</th>
  </tr>
  </thead>
  
  <tbody>

<?php
   
   $sql1="SELECT name.id,name.name,email.email,mobile.mobile,address.address,password.password FROM name,email,mobile,address,password WHERE name.id=email.id && email.id=mobile.id && mobile.id=address.id && address.id=password.id ORDER BY name.id";
    $query1=mysqli_query($con,$sql1);
  

    while($row=mysqli_fetch_assoc($query1)){
            $id=$row["id"];
            $name=$row["name"];
            $email=$row["email"];
            $mobile=$row["mobile"];
            $address=$row["address"];
            $password=$row["password"];
            


            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$address.'</td>
            <td>'.$password.'</td>
           
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" style=" text-decoration: none;">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" style=" text-decoration: none;" >Delete</a></button>
          </td>

          </tr>';
        }

       
       
?>

        





  </tbody>
</table>
<button class="btn btn-success m-5"><a href="user.php" class="text-light" style=" text-decoration: none;">Add entry</a>
           </button>
    </div>
</body>
</html>