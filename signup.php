<?php

require "db.php";

  if( isset($_POST["register"]) ) {

    if (register($_POST) > 0) {
        echo
          "<script>
                alert('User successfully registered');
            </script>";
    } else {
        echo mysqli_error($conn);
    }

  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>SignUp</title>
</head>

<body>
    <form action="" method="post" style="border:1px solid #ccc">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="addres"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="telephone"><b>Telephone</b></label>
            <input type="text" placeholder="Enter Telephone" name="phone_number" required>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <div class="clearfix">
                <button type="submit" name="register" class="signupbtn">Sign Up</button>
            </div>

            <div class="container" style="background-color: #f1f1f1">
                <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Back</button>
            </div>
        </div>
    </form>
</body>

</html>
