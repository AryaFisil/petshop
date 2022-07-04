<?php
session_start();
include 'admin/dbconnect.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
</head>

<body>
    <style>
        /* ---- kategori ----*/
        .kategori {
            width: 80%;
            margin: auto;
            text-align: center;
        }

        .kategori-col {
            flex-basis: 32%;
            border-radius: 10px;
            margin-bottom: 50px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .kategori-col img {
            width: 100%;
            height: 400px;
            display: block;
        }

        .layer {
            background: transparent;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: 0.5s;
        }

        .layer:hover {
            background: rgba(226, 0, 0, 0.7);
        }

        .layer h3 {
            width: 100%;
            font-weight: 500;
            color: #fff;
            font-size: 26px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            position: absolute;
            transition: 0.5s;
        }

        .layer:hover h3 {
            bottom: 49%;
            opacity: 1;
        }

        /* Isi */
        .konten h1 {
            text-align: center;
        }

        .konten img {
            width: 100%;
            height: auto;
        }

        /* card */
        .thumbnail img {
            width: 100%;
            height: 300px;
        }

        .thumbnail p {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Kategori Makanan -->
    <section class="kategori">
        <h1>Kategori</h1>
        <p>Pilih Makanan Sesuai Dengan Kategorinya</p>
        <div class="row">
            <?php $ambil1 = $koneksi->query("SELECT * FROM kategori"); ?>
            <?php while ($perkategori = $ambil1->fetch_assoc()) { ?>
                <a href="detail2.php?id=<?php echo $perkategori['id_kategori']; ?>">
                    <div class="col-md-4">
                        <div class="kategori-col">
                            <img src="foto_kategori/<?php echo $perkategori['foto_kategori'] ?>">
                            <div class="layer">
                                <h3><?php echo $perkategori['nama_kategori'] ?></h3>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>

    </section>
    <!-- Isi -->
    <section class="konten" id="menu">
        <div class="container">
            <h1>Menu Makanan</h1>

            <div class="row">

                <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
                <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="foto_produk/<?php echo $perproduk['foto_produk'] ?>">
                            <div class="caption">
                                <h3><?php echo $perproduk['nama_produk'] ?> </h3>
                                <p><?php echo $perproduk['des_produk'] ?> </p>
                                <h5><?php echo "Rp. " . number_format($perproduk['harga_produk'], '0', ',', '.') ?></h5>
                                <a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>

</html>