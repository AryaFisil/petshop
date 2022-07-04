<header class="header">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Pet Food Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        .header {
            min-height: 15vh;
            width: 100%;
            background-image: linear-gradient(270deg, rgba(0, 0, 0, 0.33) 0%, rgba(0, 0, 0, 0.15) 48.96%, rgba(0, 0, 0, 0.32) 100%), url(foto/kucing.jpg);
            backdrop-filter: blur(4px);
            background-position: center;
            background-size: cover;
            position: relative;
            margin-top: 87px;
        }

        .text-box {
            width: 90%;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .text-box h1 {
            font-size: 62px;
        }

        .text-box p {
            margin: 10px 0 40px;
            font-size: 14px;
            color: #fff;
        }

        .hero-btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            padding: 12px 34px;
            font-size: 13px;
            background: transparent;
            position: relative;
            cursor: pointer;
        }

        .hero-btn:hover {
            border: 1px solid #f44336;
            background: #f44336;
            transition: 1s;
        }

        .konten h1 {
            text-align: center;
        }

        .konten img {
            width: 100%;
            height: auto;
        }
    </style>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="logo"> <i class="fas fa-paw"></i> shop </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#konten">Produk</a></li>
                <li><a href="keranjang.php">Keranjang</a></li>
                <?php
                // jika sudah login (ada session pelanggan)
                if (isset($_SESSION["pelanggan"])) : ?>
                    <li><a href="riwayat.php">Riwayat Belanja</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <!-- <button type="button" class="btn btn-primary navbar-btn">
                    <a href="logout.php">Logout</a>
                </button> -->
                    <!-- selain itu blm login /blm ada session pelanggan -->
                <?php else : ?>
                    <li><a href="login.php">Login</a></li>

                    <!-- <button type="button" class="btn btn-default navbar-btn">
                    <a href="login.php">Login</a>
                </button> -->
                    <!-- <li><a href="login.php">Login</a></li> -->
                <?php endif ?>
            </ul>
            <form action="pencarian.php" method="GET" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword">
                </div>
                <button class="btn">Cari</button>   
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</header>