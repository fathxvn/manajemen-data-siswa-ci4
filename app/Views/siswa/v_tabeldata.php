<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<h2>Data Siswa</h2>  
<a href="<?= base_url('siswa/tambah') ?>" class="btn btn-success mb-3">Tambah Siswa</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($siswa as $row): ?>
        <tr>
            <td><?= esc($row['nama']) ?></td>
            <td><?= esc($row['nis']) ?></td>
            <td><?= esc($row['kelas']) ?></td>
            <td><?= esc($row['alamat']) ?></td>
            <td>
                <a href="<?= base_url('siswa/edit/' . $row['id']) ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url('siswa/hapus/' . $row['id']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>
