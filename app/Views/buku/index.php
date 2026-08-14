<?= $this->extend('template/header') ?>
<?= $this->section('content') ?>

<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
    <h3>Daftar Buku</h3>
    <a href="<?= base_url('buku/tambah') ?>" class="btn btn-success">+ Tambah Buku</a>
</div>

<form action="<?= base_url('buku') ?>" method="get" class="row g-2 mb-4">
    <div class="col-md-10 col-8">
        <input type="text" name="cari" class="form-control" placeholder="Cari judul, penulis..." value="<?= esc($kataKunci) ?>">
    </div>
    <div class="col-md-2 col-4">
        <button class="btn btn-primary w-100">Cari</button>
    </div>
</form>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = ($pager->getCurrentPage() - 1) * $pager->getPerPage() + 1; ?>
            <?php foreach ($buku as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($row['judul']) ?></td>
                <td><?= esc($row['penulis']) ?></td>
                <td><?= esc($row['penerbit']) ?></td>
                <td><?= esc($row['tahun_terbit']) ?></td>
                <td>
                    <a href="<?= base_url('buku/edit/'.$row['id']) ?>" class="btn btn-sm btn-warning">Ubah</a>
                    <a href="<?= base_url('buku/hapus/'.$row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php if ($pager): ?>
    <div class="d-flex justify-content-center">
     
		<?= $pager->links() ?>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
<?= $this->include('template/footer') ?>