<section class="comments-section bg-light py-5">
    <div class="container">
        <h2 class="text-center">Komentar</h2>
        <p>Apa kata pelanggan kami tentang risol mayo yang lezat ini?</p>

        <!-- List Komentar -->
        <div class="comments-list mt-4">
            <!-- Komentar 1 -->
            <div class="comment mb-4 p-3 border rounded">
                <h5>John Doe <small class="text-muted">- 2 jam yang lalu</small></h5>
                <p class="mb-0">Risolnya enak banget, recommended!</p>
            </div>

            <!-- Komentar 2 -->
            <div class="comment mb-4 p-3 border rounded">
                <h5>Jane Smith <small class="text-muted">- 1 hari yang lalu</small></h5>
                <p class="mb-0">Varian mayonya lezat, dan pengirimannya cepat!</p>
            </div>
        </div>

        <!-- Form Tambah Komentar Baru -->
        <div class="comment-form mt-5">
            <h4 class="text-center">Tambah Komentar</h4>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Komentar</label>
                    <textarea class="form-control" id="comment" rows="3" placeholder="Tuliskan komentar Anda" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Kirim Komentar</button>
            </form>
        </div>
    </div>
</section>