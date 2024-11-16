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
    <title>Order Risol Mayo</title>
</head>

<body>
    <!-- menambahkan navbar yang ada di folder components/navbar.php menggunakan include -->
    <?php include './components/navbar.php'; ?>

    <section class="vh-100 container py-5">
        <form action="actions/order-process.php" method="POST">
            <div class="mb-3">
                <label for="menu" class="form-label">Pilih Menu</label>
                <select class="form-select" id="menu" name="menu" required onchange="updateTotalPrice()">
                    <option value="risol_original">Risol Mayo Original - Rp10.000</option>
                    <option value="risol_keju">Risol Mayo Keju - Rp12.000</option>
                    <option value="risol_ayam">Risol Mayo Ayam Pedas - Rp12.000</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1" required onchange="updateTotalPrice()">
                    <span class="input-group-text"><i class="bi bi-caret-up-fill"></i> <i class="bi bi-caret-down-fill"></i></span>
                </div>
            </div>

            <!-- Hidden input untuk total_price -->
            <input type="hidden" id="total_price" name="total_price">

            <!-- Menampilkan total harga -->
            <div class="mt-3">
                <p><strong>Total Harga: </strong><span id="display_total_price">Rp10.000</span></p>
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-cart-check"></i> Pesan Sekarang</button>
        </form>

    </section>

    <!-- menambahkan footer yang ada di folder components/footer.php menggunakan include -->
    <?php include './components/footer.php'; ?>

    <!-- link bootstrap js -->
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- script src -->
    <script src="./assets/js/script.js"></script>
</body>

</html>