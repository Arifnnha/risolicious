<?php include './db.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap & bootstrap icons -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/bootstrap-icons/font/bootstrap-icons.min.css">
    <!-- bootstrap end -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Risol Mayo Hub - Pusat untuk berbagai varian risol mayo.</title>
</head>

<body>
    <!-- menambahkan navbar yang ada di folder components/navbar.php menggunakan include -->
    <?php include './components/navbar.php'; ?>

    <section class="l">
        <!-- Section: Hero -->
        <section class="hero bg-light text-center py-5">
            <div class="container">
                <h1 class="display-4">Selamat Datang di Risolicious</h1>
                <p class="lead">Nikmati kelezatan risol mayo dengan berbagai pilihan rasa yang menggugah selera!</p>

            </div>
        </section>

        <!-- Section: Tentang Kami -->
        <section class="about-us bg-white py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="./assets/images/risol.jpeg" alt="Risol Mayo" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6">
                        <h2>Tentang Kami</h2>
                        <p>Kami adalah penyedia risol mayo terbaik yang dibuat dengan bahan-bahan berkualitas dan resep spesial. Dengan pilihan rasa yang beragam, kami hadir untuk memanjakan lidah Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- include daftar-menu  -->
        <?php include './components/daftar-menu.php'; ?>

        <!-- include komentar -->
        <?php include './components/komentar.php' ?>

    </section>

    <!-- menambahkan footer yang ada di folder components/footer.php menggunakan include -->
    <?php include './components/footer.php'; ?>

    <!-- link boostrap js -->
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>