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
                <h1 class="display-4">Selamat Datang di Risol Mayo</h1>
                <p class="lead">Nikmati kelezatan risol mayo dengan berbagai pilihan rasa yang menggugah selera!</p>

            </div>
        </section>

        <!-- Section: Tentang Kami -->
        <section class="about-us bg-white py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="assets/images/risol-mayo.jpg" alt="Risol Mayo" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6">
                        <h2>Tentang Kami</h2>
                        <p>Kami adalah penyedia risol mayo terbaik yang dibuat dengan bahan-bahan berkualitas dan resep spesial. Dengan pilihan rasa yang beragam, kami hadir untuk memanjakan lidah Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Daftar Menu -->
        <section class="menu-list bg-light py-5">
            <div class="container text-center">
                <h2>Daftar Menu</h2>
                <p>Pilih rasa favorit Anda dari berbagai varian risol mayo kami!</p>
                <div class="row mt-4">
                    <!-- Contoh Item Menu -->
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="assets/images/risol-mayo-original.jpg" class="card-img-top" alt="Risol Mayo Original">
                            <div class="card-body">
                                <h5 class="card-title">Risol Mayo Original</h5>
                                <p class="card-text">Risol mayo dengan isian klasik dan rasa gurih.</p>
                                <p class="card-text"><strong>Rp10.000</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan item menu lainnya sesuai kebutuhan -->
                </div>
                <a href="menu.php" class="btn btn-primary mt-3"><i class="bi bi-card-list"></i> Lihat Daftar Menu</a>
            </div>
        </section>

        <!-- Section: Testimoni Pelanggan -->
        <section class="testimonials bg-white py-5">
            <div class="container text-center">
                <h2>Testimoni Pelanggan</h2>
                <p>Apa kata pelanggan kami tentang risol mayo yang lezat ini?</p>
                <div class="row mt-4">
                    <!-- Contoh Testimoni -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 p-3">
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p>“Risol mayo ini enak banget, rasanya beda dari yang lain! Pasti bakal pesan lagi.”</p>
                                    <footer class="blockquote-footer">Rani</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan testimoni lainnya -->
                </div>
            </div>
        </section>
    </section>

    <!-- menambahkan footer yang ada di folder components/footer.php menggunakan include -->
    <?php include './components/footer.php'; ?>

    <!-- link boostrap js -->
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>