<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - Admin Panel</title>
    
    <?= view('admin/layout/style_custom'); ?>
</head>
<body>

<nav class="navbar">
    <a class="navbar-brand" href="<?= base_url('index.php/admin'); ?>">Web Artikel</a>
</nav>

<div class="container-fluid">
    <div class="row">
