<div class="container mt-5">
    <div class="card">
        <h2 class="card-header text-center">Detail Tiket</h2>
        <div class="card-body text-center">
            <?php
            // Simulasikan data detail tiket (Anda dapat mengganti ini dengan data sesuai kebutuhan Anda)
            $tanggal = "2023-11-27";
            $judulFilm = "The Conjuring";
            $seat = "C8";
            $waktu = "18:30";
            ?>

            <strong>Tanggal</strong>
            <p><?php echo $tanggal; ?></p>
            <p><strong>Judul Film</strong> <br> <?php echo $judulFilm; ?></p>
            <p><strong>Tiket</strong> <br> <?php echo $seat; ?></p>
            <p><strong>Pukul</strong> <br> <?php echo $waktu; ?></p>

            <!-- Tombol "Download Tiket" dengan warna success (hijau) -->
            <a href="#" class="btn btn-success">Simpan Tiket</a>
        </div>
    </div>

    <!-- Tombol "Kembali ke Homepage" dengan warna secondary (abu-abu) -->
    <a href="/bioskop" class="btn btn-secondary mt-3">Kembali ke Homepage</a>
</div>