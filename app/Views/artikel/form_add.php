<?php helper('form'); ?>

<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<form action="" method="post" enctype="multipart/form-data">

    <!-- Judul -->
    <div class="mb-3">
        <label for="judul" class="form-label">Judul Artikel</label>
        <input type="text" name="judul" id="judul" value="<?= old('judul') ?>" class="form-control">
        <?= validation_show_error('judul') ?>
    </div>

    

    <!-- Isi -->
    <div class="mb-3">
        <label for="isi" class="form-label">Isi Artikel</label>
        <textarea name="isi" id="isi" rows="8" class="form-control"><?= old('isi') ?></textarea>
        <?= validation_show_error('isi') ?>
    </div>

    <!-- Kategori -->
    <div class="mb-3">
        <label for="id_kategori" class="form-label">Kategori</label>
        <select name="id_kategori" id="id_kategori" class="form-select">
            <option value="">-- Pilih Kategori --</option>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>" <?= old('id_kategori') == $k['id_kategori'] ? 'selected' : '' ?>>
                    <?= esc($k['nama_kategori']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?= validation_show_error('id_kategori') ?>
    </div>

    <!-- Gambar -->
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar</label>
        <input type="file" name="gambar" id="gambar" class="form-control">
        <?= validation_show_error('gambar') ?>
    </div>

    <!-- Submit -->
    <button type="submit" class="btn btn-primary">Kirim</button>

</form>

<?= $this->include('template/admin_footer'); ?>
