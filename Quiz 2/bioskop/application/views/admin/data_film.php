<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_film"><i class="fas fa-plus fa-sm"></i>Tambah Film</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>JUDUL FILM</th>
            <th>GENRE</th>
            <th>KETERANGAN</th>
            <th>HARGA</th>
            <th>JUMLAH KURSI</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach ($film as $film) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $film->judul_film ?></td>
                <td><?php echo $film->genre ?></td>
                <td><?php echo $film->keterangan ?></td>
                <td><?php echo $film->harga ?></td>
                <td><?php echo $film->jml_kursi ?></td>
                <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                </td>
                <td><?php echo anchor('admin/data_film/edit/' . $film->id_film, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
                <td><?php echo anchor('admin/data_film/hapus/' . $film->id_film, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_film" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">FORM INPUT FILM</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_film/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Judul Film</label>
                        <input type="text" name="judul_film" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Genre</label>
                        <input type="text" name="genre" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jumlah Kursi</label>
                        <input type="text" name="jml_kursi" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Poster Film</label>
                        <input type="file" name="gambar" class="form-control">

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>

        </div>
    </div>
</div>