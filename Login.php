<?php

require 'config.php';

if (isset($_POST["submit"])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM blog_db WHERE email = '$email' OR name = '$name'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($pass == $row["password"]){
            $_SESSION["Login"] = true;
            $_SESSION["id"] = $row["id"];
            header('location:Create.php');

        }
        else {

            echo
            "<script> alert('Wrong Password'); </script>";
        }
        
    }
    else{
        echo
        "<script> alert('User not Registered'); </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="style.css">

</head>

<body>
<div class = "container">
    <nav>
        <h3 class = "logo">MiniBlog</h3>
        <h1 href = "#" class = "btn">Login</h1>
    </nav>
</div>
<div class = "full">
    <form action = "" method = "post">
        <div class = "inputting">
            <h3>Login</h3>       
            <input type="email" name="email" id = "email" required placeholder="Enter Email" maxlength="20">
            <input type="password" name="password" id = "password" required placeholder="Enter Password" maxlength="10">
            </form>
        </div>
        <div class = "LogReg">
                <input type="submit" name="submit" value="Login" class="form-btn">
                <a href="register_form.php">Register</a>
        </div>
    </form>
    <p>Currently Logged Out</p>
</div>



</body>

</html>