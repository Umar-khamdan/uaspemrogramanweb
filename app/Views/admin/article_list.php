<?= view('admin/layout/head'); ?>
<?= view('admin/layout/side_nav'); ?>

<!-- Header Halaman dengan Susunan yang Rapi -->
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; border-bottom: 2px solid #e2e8f0; padding-bottom: 15px;">
    <h2 style="margin: 0; color: #2c3e50; font-size: 1.75rem;">Daftar Artikel</h2>
    <a href="<?= base_url('index.php/admin/articles/create'); ?>" class="btn btn-primary" style="font-weight: 600; padding: 10px 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(13, 110, 253, 0.15);">
        Tambah Artikel
    </a>
</div>

<!-- Kotak Pembungkus Tabel Modern -->
<div class="card" style="border-left: none; padding: 0; overflow: hidden;">
    <table class="table" style="margin-bottom: 0;">
        <thead>
            <tr>
                <th style="padding: 15px; font-weight: 600; color: #4a5568;">Judul</th>
                <th style="padding: 15px; font-weight: 600; color: #4a5568;">Status</th>
                <th style="padding: 15px; font-weight: 600; color: #4a5568; text-align: center; width: 200px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($articles)) : ?>
                <?php foreach ($articles as $art) : ?>
                    <tr style="transition: background-color 0.2s;">
                        <td style="padding: 15px; font-weight: 500; color: #2d3748;"><?= esc($art['title']); ?></td>
                        <td style="padding: 15px;">
                            <?php if ($art['status'] === 'published') : ?>
                                <span style="background-color: #def7ec; color: #03543f; padding: 6px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Published</span>
                            <?php else : ?>
                                <span style="background-color: #f3f4f6; color: #4b5563; padding: 6px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Draft</span>
                            <?php endif; ?>
                        </td>
                        <td style="padding: 15px; text-align: center;">
                            <a href="<?= base_url('index.php/admin/articles/edit/' . $art['id']); ?>" class="btn btn-warning" style="padding: 6px 14px; font-size: 0.9rem; font-weight: 600; border-radius: 6px; margin-right: 5px;">Edit</a>
                            <button onclick="confirmDelete('<?= base_url('index.php/admin/articles/delete/' . $art['id']); ?>')" class="btn btn-danger" style="padding: 6px 14px; font-size: 0.9rem; font-weight: 600; border-radius: 6px;">Hapus</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="3" style="text-center: center; padding: 40px; text-align: center; color: #a0aec0; font-style: italic;">
                        Belum ada data artikel yang tersimpan.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= view('admin/layout/footer'); ?>
