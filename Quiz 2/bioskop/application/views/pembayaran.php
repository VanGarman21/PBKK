<div class="container-fluid">

    <!-- <div id="carouselExampleIndicators" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mb-4">Konfirmasi Pembayaran</h2>

                <?php
                // Simulasikan data pembelian tiket (Anda dapat mengganti ini dengan data sesuai kebutuhan Anda)
                $movieTitle = "The Conjuring";
                $date = "2023-11-27";
                $time = "18:30";
                $seat = "C8";
                $totalPayment = 50000; // Misalnya, total pembayaran sebesar $30
                ?>

                <p><strong>Judul Film</strong> <br> <?php echo $movieTitle; ?></p>
                <p><strong>Tanggal</strong> <br> <?php echo $date; ?></p>
                <p><strong>Waktu</strong> <br> <?php echo $time; ?></p>
                <p><strong>Kursi</strong> <br> <?php echo $seat; ?></p>
                <p><strong>Total Pembayaran</strong> <br> Rp. <?php echo number_format($totalPayment, 2); ?></p>

                <!-- Tambahkan tombol Checkout di sini -->
                <a href="/bioskop/detail_tiket" class="btn btn-primary">Checkout Ticket</a>
            </div>
        </div>
    </div>
</div>