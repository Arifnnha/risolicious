<?php
session_start();

include './config.php' ?>
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

    <section class="">
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

        <section id="comments" class="comments-section bg-light py-5">
            <div class="container">
                <h2 class="text-center">Komentar</h2>
                <p>Apa kata pelanggan kami tentang risol mayo yang lezat ini?</p>

                <!-- List Komentar -->
                <div class="comments-list mt-4">
                    <?php
                    include 'config.php';
                    $result = $conn->query("SELECT * FROM comments ORDER BY created_at DESC");

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='comment mb-4 p-3 border rounded'>";
                            echo "<h5>" . htmlspecialchars($row['username']) . " <small class='text-muted'>- " . htmlspecialchars($row['created_at']) . "</small></h5>";
                            echo "<p class='mb-0'>" . htmlspecialchars($row['comment']) . "</p>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p>Belum ada komentar. Jadilah yang pertama!</p>";
                    }
                    ?>
                </div>

                <!-- Form Tambah Komentar Baru -->
                <div class="comment-form mt-5">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <h4 class="text-center">Tambah Komentar</h4>
                        <form action="actions/comment-process.php" method="POST">
                            <div class="mb-3">
                                <label for="comment" class="form-label">Komentar</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Tuliskan komentar Anda" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Kirim Komentar</button>
                        </form>
                    <?php else: ?>
                        <p class="text-center text-danger">Anda harus <a href="login.php">login</a> untuk menambahkan komentar.</p>
                    <?php endif; ?>
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