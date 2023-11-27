<div class="container-fluid">
    <h3>
        <i class="fas fa-edit"></i>EDIT DATA FILM
    </h3>

    <?php foreach ($film as $film) : ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_film/update' ?>">

            <div class="form-group">
                <label>Judul Film</label>
                <input type="hidden" name="id_film" class="form-control" value="<?php echo $film->id_film ?>">
                <input type="text" name="judul_film" class="form-control" value="<?php echo $film->judul_film ?>">
            </div>

            <div class="form-group">
                <label>Genre</label>
                <input type="text" name="genre" class="form-control" value="<?php echo $film->genre ?>">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $film->keterangan ?>">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $film->harga ?>">
            </div>

            <div class="form-group">
                <label>Jumlah Kursi</label>
                <input type="text" name="jml_kursi" class="form-control" value="<?php echo $film->jml_kursi ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>


        </form>

    <?php endforeach; ?>
</div>