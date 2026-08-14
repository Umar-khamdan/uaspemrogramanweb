<?= view('admin/layout/head'); ?>
<?= view('admin/layout/side_nav'); ?>

<div style="border-bottom: 2px solid #e2e8f0; padding-bottom: 15px; margin-bottom: 25px;">
    <h2 style="margin: 0; color: #2c3e50; font-size: 1.75rem;">Feedback Pengguna</h2>
</div>

<?php $val = session()->getFlashdata('validation'); ?>

<div style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
    
    <div style="flex: 1 1 300px; max-width: 100%; padding-right: 15px; padding-left: 15px; margin-bottom: 20px;">
        <div class="card" style="border-left: 5px solid #3498db; padding: 25px; height: 100%;">
            <h4 style="margin: 0 0 20px 0; color: #4a5568; font-size: 1.15rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Kirim Feedback</h4>
            
            <form action="<?= base_url('index.php/admin/feedback'); ?>" method="POST">
                <?= csrf_field(); ?>
                
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #4a5568; font-size: 0.9rem;">Nama Lengkap</label>
                    <input type="text" name="name" value="<?= old('name'); ?>" class="form-control <?= isset($val) && $val->hasError('name') ? 'is-invalid' : ''; ?>" style="padding: 10px; border-radius: 8px; width: 100%;">
                    <div class="invalid-feedback"><?= $val ? $val->getError('name') : ''; ?></div>
                </div>
                
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #4a5568; font-size: 0.9rem;">Alamat Email</label>
                    <input type="email" name="email" value="<?= old('email'); ?>" class="form-control <?= isset($val) && $val->hasError('email') ? 'is-invalid' : ''; ?>" style="padding: 10px; border-radius: 8px; width: 100%;">
                    <div class="invalid-feedback"><?= $val ? $val->getError('email') : ''; ?></div>
                </div>
                
                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #4a5568; font-size: 0.9rem;">Isi Pesan</label>
                    <noscript><textarea name="message" class="form-control <?= isset($val) && $val->hasError('message') ? 'is-invalid' : ''; ?>" rows="4" style="padding: 10px; border-radius: 8px; resize: none; width: 100%;"><?= old('message'); ?></textarea></noscript>
                    <textarea name="message" class="form-control <?= isset($val) && $val->hasError('message') ? 'is-invalid' : ''; ?>" rows="4" style="padding: 10px; border-radius: 8px; resize: none; width: 100%;"><?= old('message'); ?></textarea>
                    <div class="invalid-feedback"><?= $val ? $val->getError('message') : ''; ?></div>
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px; font-weight: 600; border-radius: 8px; box-shadow: 0 4px 6px rgba(13, 110, 253, 0.15);">
                    Kirim Sekarang
                </button>
            </form>
        </div>
    </div>
    
    <div style="flex: 2 1 450px; max-width: 100%; padding-right: 15px; padding-left: 15px; margin-bottom: 20px;">
        <div class="card" style="border-left: none; padding: 0; overflow-x: auto;">
            <table class="table" style="margin-bottom: 0; min-width: 400px;">
                <thead>
                    <tr>
                        <th style="padding: 15px; font-weight: 600; color: #4a5568; width: 25%;">Nama</th>
                        <th style="padding: 15px; font-weight: 600; color: #4a5568; width: 35%;">Email</th>
                        <th style="padding: 15px; font-weight: 600; color: #4a5568;">Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($feedbacks)) : ?>
                        <?php foreach ($feedbacks as $fb) : ?>
                            <tr style="transition: background-color 0.2s;">
                                <td style="padding: 15px; font-weight: 600; color: #2d3748;"><?= esc($fb['name']); ?></td>
                                <td style="padding: 15px; color: #718096; font-size: 0.9rem;"><?= esc($fb['email']); ?></td>
                                <td style="padding: 15px; color: #4a5568; line-height: 1.5;"><?= esc($fb['message']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="3" style="padding: 50px; text-align: center; color: #a0aec0; font-style: italic;">
                                Belum ada feedback atau pesan masuk dari pengguna.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= view('admin/layout/footer'); ?>
