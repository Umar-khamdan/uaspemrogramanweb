<?= $this->extend('template/header') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header"><h4>Ubah Data Buku</h4></div>
            <div class="card-body">
                <form action="<?= base_url('buku/perbarui/'.$buku['id']) ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3"><label>Judul</label><input type="text" name="judul" value="<?= esc($buku['judul']) ?>" class="form-control" required></div>
                    <div class="mb-3"><label>Penulis</label><input type="text" name="penulis" value="<?= esc($buku['penulis']) ?>" class="form-control" required></div>
                    <div class="mb-3"><label>Penerbit</label><input type="text" name="penerbit" value="<?= esc($buku['penerbit']) ?>" class="form-control" required></div>
                    <div class="row mb-3">
                        <div class="col-md-6"><label>Tahun Terbit</label><input type="number" name="tahun_terbit" value="<?= esc($buku['tahun_terbit']) ?>" class="form-control" required></div>
                        <div class="col-md-6"><label>ISBN</label><input type="text" name="isbn" value="<?= esc($buku['isbn']) ?>" class="form-control" required></div>
                    </div>
                    <div class="mb-3"><label>Deskripsi</label><textarea name="deskripsi" rows="4" class="form-control"><?= esc($buku['deskripsi']) ?></textarea></div>
                    <a href="<?= base_url('buku') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->include('template/footer') ?>