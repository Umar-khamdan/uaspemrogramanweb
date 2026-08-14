<?= view('admin/layout/head'); ?>
<?= view('admin/layout/side_nav'); ?>

<h2 class="mb-3">Tambah Artikel Baru</h2>
<?php $val = session()->getFlashdata('validation'); ?>

<div class="card shadow-sm border-0 p-4" style="max-width: 700px;">
    <form action="<?= base_url('index.php/admin/articles/create'); ?>" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label font-weight-bold">Judul Artikel</label>
            <input type="text" name="title" class="form-control <?= isset($val) && $val->hasError('title') ? 'is-invalid' : ''; ?>" value="<?= old('title'); ?>">
            <div class="invalid-feedback"><?= $val ? $val->getError('title') : ''; ?></div>
        </div>
        <div class="mb-3">
            <label class="form-label font-weight-bold">Konten / Isi Artikel</label>
            <textarea name="content" class="form-control" rows="6"><?= old('content'); ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label font-weight-bold">Status Draft</label>
            <select name="status" class="form-select <?= isset($val) && $val->hasError('status') ? 'is-invalid' : ''; ?>">
                <option value="draft" <?= old('status') == 'draft' ? 'selected' : ''; ?>>Draft</option>
                <option value="published" <?= old('status') == 'published' ? 'selected' : ''; ?>>Published</option>
            </select>
            <div class="invalid-feedback"><?= $val ? $val->getError('status') : ''; ?></div>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-success">Simpan Data</button>
            <a href="<?= base_url('index.php/admin/articles'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

<?= view('admin/layout/footer'); ?>
