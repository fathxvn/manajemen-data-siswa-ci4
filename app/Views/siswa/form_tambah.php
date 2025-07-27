<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<h2>Tambah data</h2>

<form action="<?= base_url('siswa/simpan') ?>" method="post">
    <div class="container mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control">
    </div>
    <div class="container mb-3">
    <label>Nis</label>
    <input type="text" name="nis" class="form-control">
    </div>
    <div class="container mb-3">
    <label>kelas</label>
    <input type="text" name="kelas" class="form-control">
    </div>
    <div class="container mb-3">
    <label>alamat</label>
    <input type="text" name="alamat" class="form-control">
    </div>
            <button type="submit" class="btn btn-success">tambah</button>
</form>
<?= $this->endSection()?>