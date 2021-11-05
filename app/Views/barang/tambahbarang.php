<?= $this->extend('layout/layout'); ?>
<?= $this->section('content') ?>
<h2>Form Tambah Barang</h2>
<form method="post" action="tambah">
    <div class="form-group col-lg-6">
        <label for="nama_barang">NAMA BARANG</label>

        <input type="text" class="form-control" name="nama_barang" />
    </div>
    <div class="form-group col-lg-6">
        <label for="spesifikasi">Spesifikasi</label>

        <input type="text" class="form-control" name="spesifikasi" />
    </div>
    <div class="form-group col-lg-6">
        <label for="kondisi">Kondisi</label>

        <input type="text" class="form-control" name="kondisi" />
    </div>
    <div class="form-group col-lg-6">
        <label for="lokasi">Lokasi</label>

        <input type="text" class="form-control" name="lokasi" />
    </div>
    <div class="form-group col-lg-6">
        <label for="nama_barang">Jumlah</label>

        <input type="number" class="form-control" name="jumlah_barang" />
    </div>
    <div class="form-group col-lg-6">
        <label for="nama_barang">Sumber Dana</label>

        <input type="text" class="form-control" name="sumber_dana" />
    </div>
    <div class="form-group col-lg-6">
    <button class="btn btn-primary" type="submit">TAMBAH</button>
    </div>
   
</form>
<?= $this->endSection() ?>