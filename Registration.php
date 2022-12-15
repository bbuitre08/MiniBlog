<?php

require 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM blog_db WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      echo "<script> alert('user already exists') </script>";


   }else{

      if($pass != $cpass){
        echo "<script> alert('Password does not match') </script>";
        
      }else{
         $insert = "INSERT INTO blog_db( id ,name, email, password) VALUES('' ,'$name','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:Login.php');
      }

   }

};


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
<div class = "regs_full">
    <h2>Registration</h2>
    <div class = "RegCard">
        <form action = "" method = "post">
            <div class = "regs_inputting">
                
                <h3>See the Registration Rules</h3>
                <input type="text" name="name" required placeholder="Enter Username" maxlength="100">
                <input type="email" name="email" required placeholder="Enter Email" maxlength="100">
                <input type="password" name="password" required placeholder="Enter Password" maxlength="10">
                <input type="password" name="cpassword" required placeholder="Confirm Password" maxlength="10">

            </div>
            <div class = "regs_LogReg">
                
                    <input type="submit" name="submit" value="Register" class="form-btn">
                    <p>Return to the <a href="login_form.php">LOGIN PAGE</a></p>
            </div>
        </form>
    </div>
</div>

</body>

</html>