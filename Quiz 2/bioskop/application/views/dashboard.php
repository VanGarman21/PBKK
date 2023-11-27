<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slider.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider.jpg') ?>" class="d-block w-100" alt="...">
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
    </div>

    <div class="row text-center mt-4">

        <?php foreach ($film as $film) : ?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url() . '/uploads/' . $film->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $film->judul_film ?></h5>
                    <small><?php echo $film->genre ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo $film->harga ?></span>
                    <br>
                    <a href="/bioskop/pilih_kursi" class="btn btn-sm btn-primary">Pesan Tiket</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>