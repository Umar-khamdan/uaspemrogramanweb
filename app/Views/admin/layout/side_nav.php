<?php 
$current_uri = uri_string(); 
?>
<div class="col-md-3 sidebar">
    <div class="list-group">
        <a href="<?= base_url('index.php/admin'); ?>" 
           class="list-group-item <?= ($current_uri === 'admin' || str_contains($current_uri, 'admin/index')) ? 'active' : ''; ?>">
            Dashboard
        </a>
        
        <a href="<?= base_url('index.php/admin/articles'); ?>" 
           class="list-group-item <?= (str_contains($current_uri, 'admin/articles')) ? 'active' : ''; ?>">
            Kelola Artikel
        </a>
        
        <a href="<?= base_url('index.php/admin/feedback'); ?>" 
           class="list-group-item <?= (str_contains($current_uri, 'admin/feedback')) ? 'active' : ''; ?>">
            Feedback
        </a>
    </div>
</div>
<div class="col-md-9 main-content">
