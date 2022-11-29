<?php
require_once './dbcon.php';
session_start();
if(isset($_POST['registration'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $c_password=$_POST['c_password'];
    $photo=explode('.',$_FILES['photo']['name']);
    $photo=end($photo);
    $photo_name=$username.".".$photo;
    
    $input_error=array();

    if(empty($name)){
        $input_error['name']='The name field is required';
    }
    if(empty($email)){
        $input_error['email']='The email field is required';
    }
    if(empty($username)){
        $input_error['username']='The username field is required';
    }
    if(empty($password)){
        $input_error['password']='The password field is required';
    }
    if(empty($c_password)){
        $input_error['c_password']='The c_password field is required';
    }

    if(count($input_error)==0){
        $email_check = mysqli_query($link,"SELECT * FROM `users` WHERE `email`= '$email';");
        if(!$email_check || mysqli_num_rows($email_check)==0){

                if(strlen($password)>7){
                    if($password==$c_password){

                        $quary="INSERT INTO `users`(`name`, `username`, `email`, `password`, `photo`, `status`) VALUES('$name','$username','$email','$password','$photo_name','inactive')";
                        $result = mysqli_query($link,$quary);
                        if($result){
                            $success = "Data Insert Successful";
                            move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
                        }
                        else{
                            $error = "Data Insert Error";
                        }


                    }else{
                        $password_error='Password doesnt match';
                    }

                }else{
                    $password_error = 'Password more than 8 character';
                }


        }else{
            $email_error = 'This Email Already Exist';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/registration-home.css">
    <style>
        body{
         font-family: sans-serif;
         background: url(../images/bk-2.jpg);
         background-size: cover;
}
.container{
    transform: translate(35%,-50%);
}
    </style>
</head>
<body>

<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>User Registration</h1>

        <?php

        if(isset($success)){
            echo '<div class="alert alert-success col-md-6">'.$success.'</div>';}
        if(isset($error)){
            echo '<div class="alert alert-success col-md-6">'.$error.'</div>';}

        ?>




        <div class="form-group">
            <input type="text" name="name" id="name" value="<?php if(isset($name)) echo $name;?>" class="form-input" placeholder="Name">
            <label for="name" class="form-label">Name</label>
        </div>
        <span class="error"><?php if(isset($input_error['name'])) {echo $input_error['name']; }?></span>





        <div class="form-group">
            <input type="email" name="email" id="email"class="form-input" value="<?php if(isset($email)) echo $email;?>" placeholder="email">
            <label for="email" class="form-label">Email</label>
        </div> 
             <div>
                <span class="error"><?php if(isset($input_error['email'])) {echo $input_error['email']; }?></span>
                <span class="error"><?php if(isset($email_error)) {echo $email_error; }?></span>
            </div>



        <div class="form-group">
            <input type="text" name="username" id="username"class="form-input" value="<?php if(isset($username)) echo $username;?>" placeholder="username">
            <label for="username" class="form-label">Username</label>
        </div>
        <span class="error"><?php if(isset($input_error['username'])) {echo $input_error['username']; }?></span>




        <div class="form-group">
            <input type="password" name="password"class="form-input" id="password" value="<?php if(isset($password)) echo $password;?>" placeholder="password">
            <label for="password" class="form-label">Password</label>
        </div>
        <span class="error"><?php if(isset($input_error['password'])) {echo $input_error['password']; }?></span>







        <div class="form-group">
            <input type="password" name="c_password" id="c_password"class="form-input" value="<?php if(isset($c_password)) echo $c_password;?>" placeholder="confirm password">
            <label for="c_password" class="form-label">Confirm Password</label>
        </div>
         <span class="error"><?php if(isset($input_error['c_password'])) {echo $input_error['c_password']; }?></span>
         <span class="error"><?php if(isset($password_error)) {echo $password_error ; }?></span>




         <div class="form-group">
            <input type="file" name="photo" id="photo">
            <label for="name" class="form-label">Photo</label>
        </div>


        <div class="form-btn">
            <input type="submit" value="Registration" name="registration" class="btn">
            <a class="btn" href="../home.php">Back To Home</a>
        </div>
    </form>

    
</div>
</body>
</html>
