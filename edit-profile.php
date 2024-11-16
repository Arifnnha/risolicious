<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>
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

    <section class="vh-100 py-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h4 class="card-title text-center mb-4">Edit Profil</h4>
                <form action="actions/edit-profile-process.php" method="POST">
                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                    </div>
                    <!-- Password Baru -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password Baru (Opsional)</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Isi jika ingin mengubah password">
                    </div>
                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- menambahkan footer yang ada di folder components/footer.php menggunakan include -->
    <?php include './components/footer.php'; ?>

    <!-- link boostrap js -->
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>