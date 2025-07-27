<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<h2>Edit Data Siswa</h2>

<form action="<?= base_url('siswa/update/'. $siswa['id'])?>" method="post">
    <!-- Input tersembunyi untuk ID -->
    <input type="hidden" name="id" value="<?= $siswa['id'] ?>">

    <div class="container mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="<?= esc($siswa['nama']) ?>">
    </div>
    <div class="container mb-3">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control" value="<?= esc($siswa['nis']) ?>">
    </div>
    <div class="container mb-3">
        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control" value="<?= esc($siswa['kelas']) ?>">
    </div>
    <div class="container mb-3">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?= esc($siswa['alamat']) ?>">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection(); ?>
