<?php
$user=0;
$succes=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE username='$username';";
    $query = mysqli_query($connection, $sql);

    if ($query) {
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            $user++;
        } else {
            $sql = "INSERT INTO users (username, password, role, name, adress, phone, email)
                VALUES ('$username', '$password', '$role','$name','$adress','$phone','$email')";

            $query = mysqli_query($connection, $sql);

          
            if ($query) {
                $succes++;
            }
            else{
                die(mysqli_error($connection));
            }
                
        }
    }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sign</title>
</head>
<body>
    <?php
    if($user){
        echo' <div class="alert alert-danger" role="alert">
        username already used
      </div> ';
    }
    if($succes){
        echo'<div class="alert alert-info" role="alert">
        user created
      </div>';
    }
    ?>
<div class="container p-5">
<form action="#" method="POST">

  <div class="form-group">
    <label >Username</label>
    <input type="text"  placeholder="Login" name="username">
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="text"  placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label >Role</label>
    <input type="text"  placeholder="Role" name="role">
  </div>
  <div class="form-group">
    <label >Name</label>
    <input type="text"  placeholder="Name" name="name">
  </div>
  <div class="form-group">
    <label >Adress</label>
    <input type="text"  placeholder="Adress" name="adress">
  </div>
  <div class="form-group">
    <label >Phone number</label>
    <input type="text"  placeholder="Phone number" name="phone">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text"  placeholder="Email" name="email">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>