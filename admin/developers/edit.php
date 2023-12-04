<?php 
$succes="";

// Affichage des informations dans les input formulaire
    
    if(isset($_GET["id"])){
    require __DIR__ . "/../../db/connect.php";
    $id=$_GET['id'];
    $sql="SELECT id,username,name,email,phone,adress,role
    FROM users
    WHERE id='$id' ";
    $query=mysqli_query($connection,$sql);
    $row=mysqli_fetch_assoc($query);
    $username = $row["username"];
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $adress = $row["adress"];
    $role = $row["role"];
    
    }
    
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id= $_POST["id"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];
    $role = $_POST["role"];

    $requete ="UPDATE users 
    SET name='$name',username='$username',email='$email',phone='$phone',adress='$adress',role='$role'
    WHERE id='$id' ";
    $query=mysqli_query($connection,$requete);


    header("location:list.php");

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
if($succes){
    echo'<div class="alert alert-info" role="alert">
    updated successfully
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
     
      <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            Hello
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Messages</a></li>
            <li><a class="dropdown-item" href="/logout.php">Sign out</a></li>
          </ul>
        </div>
  </div>
</nav>
<!-- navbar end -->





<div class="container register">
    <div class="row">
        
       
        <div class="col-md-12 register-right">
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
                    <h3 class="register-heading">Edit developer </h3>
            <form action="#" method="POST">  
                    <div class="row register-form">
                            <div class="col-md-6">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="username" placeholder="username *" value="<?php echo $username; ?>" />
                                </div>
                              
                                <div class="form-group">
                                    <input input type="text" class="form-control"  name="role" placeholder="Role *" value="<?php echo $role; ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name"  placeholder="Name *" value="<?php echo $name; ?>" />
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
                                    <input type="text" name="email" class="form-control" placeholder="Your Email  *" value="<?php echo $email; ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="phone" class="form-control" placeholder="Your Phone *" value="<?php echo $phone; ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="adress" class="form-control" placeholder="Your Adress *" value="<?php echo $adress; ?>" />
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
                                <input type="submit" class="btnRegister"  value="Submit"/>
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