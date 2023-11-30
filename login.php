<?php
$login=0;
$invalid=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM users WHERE username='$username'and password='$password';";
    $query = mysqli_query($connection, $sql);

    if ($query) {
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            $login++;
            session_start();
            $_SESSION['username']=$username;
            header('LOCATION:index.php');
        } 
        else{
            $invalid++;
        }
        // else {
        //     $sql = "INSERT INTO users (username, password)
        //         VALUES ('$username', '$password')";

        //     $query = mysqli_query($connection, $sql);

          
        //     if ($query) {
        //         $succes++;
        //     }
        //     else{
        //         die(mysqli_error($connection));
        //     }
                
        // }
    }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<?php
    if($login){
        echo' <div class="alert alert-info" role="alert">
        logged in
      </div> ';
    }
    if($invalid){
        echo'<div class="alert alert-danger" role="alert">
        invalid input
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
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>