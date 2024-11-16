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
    <title>Login Akun</title>
</head>

<body>
    <!-- menambahkan navbar yang ada di folder components/navbar.php menggunakan include -->
    <?php include './components/navbar.php'; ?>

    <section class="login-section vh-100 py-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Login</h2>
                    <form action="actions/login-process.php" method="POST">
                        <div class="mb-3">
                            <label for="username_or_email" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username_or_email" name="username_or_email" placeholder="Masukkan username Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary w-100"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- menambahkan footer yang ada di folder components/footer.php menggunakan include -->
    <?php include './components/footer.php'; ?>

    <!-- link boostrap js -->
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>