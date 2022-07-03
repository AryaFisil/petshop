<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Petshoqu</title>
</head>

<body>
    <form action="/action_page.php">
        <div class="container">
            <h1>Forgot Password Form</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            <button type="submit" class="registerbtn" onclick="window.location.href='#'">Register</button>
        </div>
        <div class="container" style="background-color: #f1f1f1">
            <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Cancel</button>
        </div>
    </form>
</body>

</html>