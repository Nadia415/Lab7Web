<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Admin Portal' ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div id="container">
    <header>
        <h1>Admin Portal Berita</h1>
    </header>

    <nav>
        <a href="<?= base_url('/admin/artikel'); ?>" class="<?= uri_string() == 'admin/artikel' ? 'active' : ''; ?>">Dashboard</a>
        <a href="<?= base_url('/artikel'); ?>" class="<?= uri_string() == 'admin/artikel' ? 'active' : ''; ?>">Artikel</a>
        
    </nav>

    <section id="main">
