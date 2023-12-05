<?php
require __DIR__ . '/../../controller/auth/sign.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style-sign.css">
    <link rel="stylesheet" href="/assets/index-style.css">
    <title>Sign</title>
</head>

<body style=" background: -webkit-linear-gradient(left, #3931af, #00c6ff);">

    <?php
    // if($user){
    //     echo' <div class="alert alert-danger" role="alert">
    //     username already used
    //   </div> ';
    // }
    // if($succes){
    //     echo'<div class="alert alert-info" role="alert">
    //     user created
    //   </div>';
    // }
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

            <div class="dropdown ">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Hello
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
            
                <h3>Welcome</h3>
                <p>You are 30 seconds away from making good deals!</p>
                <a href="/view/auth/login.php" class="btnlogin w-100 fs-6" style="text-decoration: none; display: block; text-align: center;">Login</a>
                <br />
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
                        <form action="#" method="POST" id="form">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group  ">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="username *" value="" />
                                        <small>Error message</small>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Password *" value="" />
                                        <small>Error message</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="password2" name="password_confirmation" placeholder="Confirm Password *" value="" />
                                        <small>Error message</small>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control custom-select" name="role">
                                            <option value="Client">Client </option>
                                            <option value="Developer">Developer </option>
                                            <option value="Admin">Admin </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name *" value="" />
                                        <small>Error message</small>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Your Email  *" value="" />
                                        <small>Error message</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                        <small>Error message</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="adress" name="adress" class="form-control" placeholder="Your Adress *" value="" />
                                        <small>Error message</small>
                                    </div>

                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    </div>


    <script>
        const form = document.getElementById('form');
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const password2 = document.getElementById('password2');
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const adress = document.getElementById('adress');


        form.addEventListener("submit", function(event) {
            event.preventDefault();
            checkInputs();


        });
   
        function checkInputs() {
            let isValid = true;
            const usernameValue = username.value.trim();
            const passwordValue = password.value.trim();
            const password2Value = password2.value.trim();
            const nameValue = name.value.trim();
            const emailValue = email.value.trim();
            const phoneValue = phone.value.trim();
            const adressValue = adress.value.trim();
            if (usernameValue == "") {
                setErrorFor(username, 'Input required');
                isValid = false;
            } else {
                setSuccessFor(username);

            }
            if (passwordValue == "") {
                setErrorFor(password, 'Input required');
                isValid = false;
            } else {
                setSuccessFor(password);

            }
            if (password2Value == "") {
                setErrorFor(password2, 'Input required');
                isValid = false;
            } else if (password2Value !== passwordValue) {
                setErrorFor(password2, 'passwords dont match');
                isValid = false;
            } else {
                setSuccessFor(password2);

            }
            if (nameValue == "") {
                setErrorFor(name, 'Input required');
                isValid = false;
            } else {
                setSuccessFor(name);

            }
            if (emailValue == "") {
                setErrorFor(email, 'Input required');
                isValid = false;
            } else if (!isEmail(emailValue)) {
                setErrorFor(email, 'Email not valid');
                isValid = false;
            } else {
                setSuccessFor(email);

            }
            if (phoneValue == "") {
                setErrorFor(phone, 'Input required');
                isValid = false;
            } else {
                setSuccessFor(phone);

            }
            if (adressValue == "") {
                setErrorFor(adress, 'Input required');
                isValid = false;
            } else {
                setSuccessFor(adress);

            }
          
            if (isValid) {
                form.submit();
            }
        }

        function setErrorFor(input, message) {
            const formGroup = input.parentElement; // .form-group
            const small = formGroup.querySelector('small');
            // error message inside small
            small.innerText = message;
            formGroup.className = 'form-group error';
        }

        function setSuccessFor(input) {
            const formGroup = input.parentElement; // .form-group
            formGroup.className = 'form-group success';
        }

        function isEmail(email) {
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
        }
    </script>
    <script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>