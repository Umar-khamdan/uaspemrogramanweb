<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Buku Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('buku') ?>">📚 Perpustakaan Digital</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <?php if(session()->get('isLoggedIn')): ?>
                    <li class="nav-item"><span class="nav-link">Halo, <?= session()->get('nama') ?></span></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout') ?>">Keluar</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <?php if(session()->getFlashdata('pesan')): ?>
        <div class="alert alert-info"><?= session()->getFlashdata('pesan') ?></div>
    <?php endif; ?>

    <!-- ✅ INI SANGAT PENTING — TANPA INI KONTEN TIDAK MUNCUL -->
    <?= $this->renderSection('content') ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>