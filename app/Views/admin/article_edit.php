<?= view('admin/layout/head'); ?>
<?= view('admin/layout/side_nav'); ?>

<h2 class="mb-3">Edit Artikel</h2>
<?php $val = session()->getFlashdata('validation'); ?>

<div class="card shadow-sm border-0 p-4" style="max-width: 700px;">
    <form action="<?= base_url('index.php/admin/articles/edit/' . $article['id']); ?>" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label font-weight-bold">Judul Artikel</label>
            <input type="text" name="title" value="<?= old('title', $article['title']); ?>" class="form-control <?= isset($val) && $val->hasError('title') ? 'is-invalid' : ''; ?>">
            <div class="invalid-feedback"><?= $val ? $val->getError('title') : ''; ?></div>
        </div>
        <div class="mb-3">
            <label class="form-label font-weight-bold">Konten / Isi Artikel</label>
            <textarea name="content" class="form-control" rows="6"><?= old('content', $article['content']); ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label font-weight-bold">Status Draft</label>
            <select name="status" class="form-select">
                <option value="draft" <?= old('status', $article['status']) == 'draft' ? 'selected' : ''; ?>>Draft</option>
                <option value="published" <?= old('status', $article['status']) == 'published' ? 'selected' : ''; ?>>Published</option>
            </select>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-success">Perbarui Data</button>
            <a href="<?= base_url('index.php/admin/articles'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

<?= view('admin/layout/footer'); ?>
