<?php
require_once "config.php";

$email = $password = $confirm_password =$username= "";

$email_err = $password_err = $confirm_password_err =$username_err= "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);

    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Email cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set the value of param email
            $param_email = trim($_POST['email']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $email_err = "This email is already taken"; 
                }
                else{
                    $email = trim($_POST['email']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}



if(empty(trim($_POST['username']))){
    $username_err = "username cannot be blank";
}
else{
    $username = trim($_POST['username']);
    
}



// If there were no errors, go ahead and insert into the database
if(empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($username_err))
{
    $sql = "INSERT INTO users (email,username,password) VALUES (?,?,?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sss", $param_email,$param_username, $param_password);

        // Set these parameters
        
        $param_email = $email;
        
        $param_username=$username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        // Try to execute the query
        
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="assets/css/register.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/float.css">

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logo/icons8-s-32.png" type="image/x-icon">

    <!--
  - custom css link
-->
    <link rel="stylesheet" href="./assets/css/style-prefix.css?v=<?php echo time();?>">

    <!--
  - google font link
-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reg.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/css/mob-reg.css">
</head>

<body>
    <nav class="desktop-navigation-menu">

        <div class="container">

            <ul class="desktop-menu-category-list">

                <li class="menu-category">
                    <a href="#" class="menu-title">Home</a>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">About</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Stores</a>

                    <ul class="dropdown-list">

                        <li class="dropdown-item">
                            <a href="#">Earrings</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Couple Rings</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Necklace</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Bracelets</a>
                        </li>


                    </ul>
                </li>
                <li class="menu-category">
                    <a href="login.php" class="menu-title">Login</a>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">Help</a>
                </li>

            </ul>

        </div>

    </nav>

    



    <div>
        <div class="animation">
            <div class="subcont1" id="subcont1">
                <h1>Sign Up</h1>
                <form action="" class="form1" id="Formh" method="POST">
                    <input type="email" placeholder="Enter your Email" required name="email">
                    <br>

                    <input type="text" placeholder="Enter your Name" required name="username">
                    <br>

                    <input type="password" placeholder="Enter password" required name="password">
                    <br>

                    <input type="password" placeholder="Confirm password" required name="confirm_password">
                    <br>

                    <input type="submit" value="Register" id="btnr">
                    <br>
                    <span>Already have account ? <a href="login.php" id="Login">Login</a></span>
                </form>
            </div>
            <div class="subcount2">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ntdmh9RIUC.json"
                    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                </lottie-player>
            </div>
        </div>

    </div>
    <br>
    <br>




    <script src="javascript/Theme.js"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="register.js"></script>
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</body>

</html>