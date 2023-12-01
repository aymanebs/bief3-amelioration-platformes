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
    <link rel="stylesheet" href="/assets/style-sign.css">
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

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" value="Login"/><br/>
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
                                    <input input type="text" class="form-control"  name="role" placeholder="Role *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name"  placeholder="Name *" value="" />
                                </div>
                                <div class="form-group">
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
                                </div>
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





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>