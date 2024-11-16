const menuPrices = {
  risol_original: 10000,
  risol_keju: 12000,
  risol_ayam: 12000,
};

// Fungsi untuk memperbarui total harga
function updateTotalPrice() {
  const menu = document.getElementById("menu").value; // Mendapatkan menu yang dipilih
  const quantity = document.getElementById("quantity").value; // Mendapatkan jumlah yang dipilih
  const totalPrice = menuPrices[menu] * quantity; // Menghitung total harga

  // Menampilkan total harga dalam format Rp
  document.getElementById("display_total_price").textContent =
    "Rp" + totalPrice.toLocaleString();

  // Menyimpan total harga di input hidden untuk dikirimkan ke server
  document.getElementById("total_price").value = totalPrice;
}

// Memperbarui total harga saat pertama kali halaman dimuat
updateTotalPrice();
