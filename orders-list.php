<?php
session_start();
include 'config.php';  // Pastikan koneksi ke database sudah benar

// Pastikan pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');  // Arahkan ke login jika belum login
    exit;
}

$user_id = $_SESSION['user_id'];

// Ambil daftar pesanan pengguna dari database
$sql = "SELECT * FROM orders WHERE user_id = '$user_id' ORDER BY order_date DESC";
$result = $conn->query($sql);
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
    <title>Daftar Pesanan Risol Mayo.</title>
</head>

<body>
    <!-- menambahkan navbar yang ada di folder components/navbar.php menggunakan include -->
    <?php include './components/navbar.php'; ?>

    <section class="vh-100 container py-5">
        <h2 class="text-center">Daftar Pesanan Anda</h2>

        <?php if ($result->num_rows > 0): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Menu</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Tanggal Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counter = 1;
                    while ($order = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$counter}</td>
                            <td>{$order['menu']}</td>
                            <td>{$order['quantity']}</td>
                            <td>Rp" . number_format($order['total_price'], 0, ',', '.') . "</td>
                            <td>" . date('d-m-Y H:i', strtotime($order['order_date'])) . "</td>
                        </tr>";
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Anda belum memiliki pesanan.</p>
        <?php endif; ?>

        <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
    </section>

    <!-- menambahkan footer yang ada di folder components/footer.php menggunakan include -->
    <?php include './components/footer.php'; ?>

    <!-- link boostrap js -->
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>