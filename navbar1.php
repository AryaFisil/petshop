<header class="header">

    <a href="#" class="logo"> <i class="fas fa-paw"></i> shop </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#shop">shop</a>
        <a href="#contact">contact</a>
    </nav>
   
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="cek_login.php" class="login-form" method="post">
        <h3>sign in</h3>
        <label for="user"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required class="box">
        <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn" name="login">
        <div class="links">
            <a href="forgotpw.php">forget password</a>
            <a href="signup.php">sign up</a>
        </div>
    </form>

</header>