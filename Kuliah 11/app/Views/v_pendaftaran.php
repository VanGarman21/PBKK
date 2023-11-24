<?= $this->extend('/template/template-frontend') ?>
<?= $this->section('content') ?>

<div class="col-sm-4">
  <img class="img-fluid pad" src="<?= base_url('logo/regis.png') ?>" alt="">
</div>

<div class="col-sm-8">
  <?php echo form_open() ?>
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h5 class="card-title m-0">Pendaftaran</h5>
    </div>
    <div class="card-body">
      <div class="row">

        <div class="col-sm-12">
          <div class="form-group">
            <label>NISN</label>
            <input name="nisn" class="form-control" placeholder="NISN">
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Nama Panggilan</label>
            <input name="nama_panggilan" class="form-control" placeholder="Nama Panggilan">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label>Tanggal</label>
            <select name="tanggal" class="form-control">
              <option value="">-- Tanggal --</option>
              <?php
              for ($i = 1; $i <= 31; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label>Bulan</label>
            <select name="bulan" class="form-control">
              <option value="">-- Bulan --</option>
              <?php
              for ($i = 1; $i <= 12; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label>Tahun</label>
            <select name="tahun" class="form-control">
              <option value="">-- Tahun --</option>
              <?php $now = date('Y');
              for ($i = 1990; $i <= $now; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-12">
          <button type="submit" class="btn btn-info btn-flat btn-block"><i class="fas fa-save"></i> Mendaftar</a>
        </div>
      </div>
    </div>
  </div>

  <?php echo form_close() ?>
</div>


<?= $this->endSection() ?>