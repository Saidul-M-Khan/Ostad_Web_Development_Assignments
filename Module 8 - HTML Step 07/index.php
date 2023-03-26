<?php
    $firstName = $lastName = $email = $password = $confirmPassword = "";
    $firstNameError = $lastNameError = $emailError = $passwordError = $confirmPasswordError = "";
    $passwordMatched = $passwordNotMatched = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty( $_POST["firstName"])) {
            $firstNameError = "First name is required";
        } else {
            $firstName = test_input($_POST["firstName"]);
        }

        if (empty( $_POST["lastName"])) {
            $lastNameError = "Last name is required";
        } else {
            $lastName = test_input($_POST["lastName"]);
        }
     
        if (empty($_POST["email"])) {
            $emailError = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
                $emailError = 'Invalid email address.';
            }
        }
     
        if (empty( $_POST["password"])) {
            $passwordError = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }
     
        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordError = "Confirm password is required";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
        }

        if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirmPassword"])) {
            $password = test_input($_POST["password"]);
            $confirmPassword = test_input($_POST["confirmPassword"]);
            if (strlen($_POST["password"]) <= '8') {
                $passwordError = "Your Password Must Contain At Least 8 Characters!";
            }
            elseif(!preg_match("#[0-9]+#",$password)) {
                $passwordError = "Your Password Must Contain At Least 1 Number!";
            }
            elseif(!preg_match("#[A-Z]+#",$password)) {
                $passwordError = "Your Password Must Contain At Least 1 Capital Letter!";
            }
            elseif(!preg_match("#[a-z]+#",$password)) {
                $passwordError = "Your Password Must Contain At Least 1 Lowercase Letter!";
            } 
            else {
                $passwordMatched= "Password Matched!!!";
            }
        }else{
            $passwordError = "Please enter password";
            $confirmPasswordError = "Please enter confirm password";
            $passwordNotMatched = "Password Not Matched!!!";
        }
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .gradient-custom {
            background: #8E2DE2;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */            
            }

            .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
            }
            .card-registration .select-arrow {
            top: 13px;
            }

            .error{
                color: red;
                font-weight: 700;
            }

            .success{
                color: green;
                font-weight: 700;
            }
    </style>
</head>
<body>
    <header>

    </header>

    <main>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="error">* <?php echo $firstNameError;?></span>
                                            <input type="text" id="firstName" name="firstName" class="form-control form-control-lg" placeholder="Enter your first name" value="<?php echo $firstName;?>"/>
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <span class="error">* <?php echo $lastNameError;?></span>
                                            <input type="text" id="lastName" name="lastName" class="form-control form-control-lg" placeholder="Enter your last name" value="<?php echo $lastName;?>"/>
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <span class="error">* <?php echo $passwordError;?></span>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password"  placeholder="Enter your password" value="<?php echo $password;?>"/>
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline datepicker w-100">
                                            <span class="error">* <?php echo $confirmPasswordError;?></span>
                                            <input type="confirmPassword" class="form-control form-control-lg" id="confirmPassword" name="confirmPassword" placeholder="Enter your password again" value="<?php echo $confirmPassword;?>"/>
                                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <span class="error">* <?php echo $emailError;?></span>
                                            <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Enter your email address" value="<?php echo $email;?>"/>
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1 pb-1">
                                        <div class="form-outline ">
                                            <h4 class="success"><?php 
                                            echo $passwordMatched;
                                            ?></h4>
                                            <h4 class="error"><?php 
                                            echo $passwordNotMatched;
                                            ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50 d-flex flex-column">
    <div class="container text-center">
      <small>Copyright &copy; Saidul Mursalin Khan</small>
    </div>
  </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  
</body>
</html>