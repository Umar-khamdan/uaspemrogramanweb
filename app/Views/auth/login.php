<?= $this->extend('template/header') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <div class="card shadow">
            <div class="card-header text-center">
                <h4>Masuk ke Perpustakaan</h4>
            </div>
            <div class="card-body">
                <?php if(session()->getFlashdata('pesan')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('pesan') ?></div>
                <?php endif; ?>
				
                <form action="<?= base_url('auth/login') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Kata Sandi</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button class="btn btn-primary w-100">Masuk</button>
                </form>
                <p class="text-center mt-3 small">Contoh: admin@contoh.com / admin123</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>