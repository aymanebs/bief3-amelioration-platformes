<?php
$login=0;
$invalid=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/db/connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM users WHERE username='$username'and password='$password';";
    $query = mysqli_query($connection, $sql);
    $row=mysqli_fetch_assoc($query);

    if ($query) {
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            $login++;
            session_start();
            $_SESSION['username']=$username;

            if($row["role"]=="Client"){
              header('LOCATION:client.php');
            }
            else if($row["role"]=="Developer"){
              header('LOCATION:developer.php');
            }
            else{
              header('LOCATION:/admin/customers/list.php');
            }

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
    <link rel="stylesheet" href="/assets/style-login.css">
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
 <!----------------------- Main Container -------------------------->

 <div class="container d-flex justify-content-center align-items-center min-vh-100">

<!----------------------- Login Container -------------------------->

   <div class="row border rounded-5 p-3 bg-white shadow box-area">

<!--------------------------- Left Box ----------------------------->

   <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
       <div class="featured-image mb-3">
        <img src="/assets/image1.png" class="img-fluid" style="width: 250px;">
       </div>
       <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
       <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Developers on this platform.</small>
   </div> 

<!-------------------- ------ Right Box ---------------------------->
    
   <div class="col-md-6 right-box">
      <div class="row align-items-center">
            <div class="header-text mb-4">
                 <h2>Hello,Again</h2>
                 <p>We are happy to have you back.</p>
            </div>
            <form action="#" method="POST">

            <div class="input-group mb-3">
                <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Login">
            </div>
            <div class="input-group mb-1">
                <input type="text" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
            </div>
            <div class="input-group mb-5 d-flex justify-content-between">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck">
                    <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                </div>
                <div class="forgot">
                    <small><a href="#">Forgot Password?</a></small>
                </div>
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
            </div>
            </form>
            
            <div class="row">
                <small>Don't have account? <a href="/sign.php">Sign Up</a></small>
            </div>
      </div>
   </div> 

  </div>
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>