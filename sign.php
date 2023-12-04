<?php
$user=0;
$succes=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . "../db/connect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirmation=$_POST['password_confirmation'];
    $role = $_POST['role'];
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
//    form validation
    if(empty($username)){
        die('name is required');
    }
    if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
        die('invalid email');
    }
    if(strlen($password)<4){
        die('Password must be at least 4 characters');
    }
    if(! preg_match("/[a-z]/i",$password)){
        die('Password must contain at least one letter');
    }
    if(! preg_match("/[0-9]/",$password)){
        die('Password must contain at least one number');
    }
    if($password!== $password_confirmation){
        die('Passwords dont match');
    }
    $password=password_hash($password,PASSWORD_DEFAULT);
   


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
    <link rel="stylesheet" href="/assets/style-sign.css">
    <link rel="stylesheet" href="/assets/index-style.css">
    <title>Sign</title>
</head>
<body style=" background: -webkit-linear-gradient(left, #3931af, #00c6ff);">

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
  <!-- navbar -->
  <nav class="navbar navbar-light bg-light p-3">
  <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
      <a class="navbar-brand" href="#">
      <img src="/assets/logo.png" alt="" height="55px">
      </a>
      <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
  </div>
  <div class="col-12 col-md-4 col-lg-2">
      <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
  </div>
  <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
     
      <div class="dropdown " >
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" >
            Hello
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Messages</a></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
  </div>
</nav>
<!-- navbar end -->





<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from making good deals!</p>
            <a href="/login.php" class="btnlogin w-100 fs-6" style="text-decoration: none; display: block; text-align: center;">Login</a>
<br/>
        </div>
       
        <div class="col-md-9 register-right">
            <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                </li>
            </ul> -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply now</h3>
            <form action="#" method="POST">  
                    <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="username" placeholder="username *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"   name="password" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"   name="password_confirmation" placeholder="Confirm Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control custom-select" name="role" >
                                        <option value="Client">Client </option>
                                        <option value="Developer">Developer </option>
                                        <option value="Admin">Admin </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name"  placeholder="Name *" value="" />
                                </div>
                                <!-- <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline padding-right-10"> 
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span> 
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email  *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="adress" class="form-control" placeholder="Your Adress *" value="" />
                                </div>
                                <!-- <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div> -->
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                </div> -->
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
          </form>         
                </div>
                <!-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Apply as a Hirer</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text"  name="name"  placeholder="Name" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text"   name="adress" placeholder="Adress *" value="" />
                                </div> 
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone"  class="form-control" placeholder="Phone *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<!-- <div class="container p-5">
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
</form> -->
</div>



<script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>