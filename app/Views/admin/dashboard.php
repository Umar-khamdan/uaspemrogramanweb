<?= view('admin/layout/head'); ?>
<?= view('admin/layout/side_nav'); ?>

<h2 class="mb-4" style="color: #1e293b;">Dashboard Admin</h2>
<div class="row">
    <div class="col-6">
        <div class="card bg-card-artikel">
            <h5>Total Artikel</h5>
            <h2><?= $total_articles; ?></h2>
        </div>
    </div>
    <div class="col-6">
        <div class="card bg-card-feedback">
            <h5>Total Feedback</h5>
            <h2><?= $total_feedbacks; ?></h2>
        </div>
    </div>
</div>

<?= view('admin/layout/footer'); ?>
