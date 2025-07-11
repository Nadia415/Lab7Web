<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<form action="" method="post" enctype="multipart/form-data">

    <!-- Judul -->
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" name="judul" id="judul" value="<?= esc($data['judul']); ?>" class="form-control" required>
    </div>

    <!-- Isi -->
    <div class="mb-3">
        <label for="isi" class="form-label">Isi</label>
        <textarea name="isi" id="isi" rows="8" class="form-control"><?= esc($data['isi']); ?></textarea>
    </div>

    <!-- Kategori -->
    <?php if (isset($kategori)): ?>
    <div class="mb-3">
        <label for="id_kategori" class="form-label">Kategori</label>
        <select name="id_kategori" id="id_kategori" class="form-select" required>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>" <?= ($data['id_kategori'] == $k['id_kategori']) ? 'selected' : '' ?>>
                    <?= esc($k['nama_kategori']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <?php endif; ?>

    <!-- Gambar -->
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar (jika ingin mengganti)</label>
        <input type="file" name="gambar" id="gambar" class="form-control">
        <?php if (!empty($data['gambar'])): ?>
            <img src="<?= base_url('gambar/' . $data['gambar']); ?>" width="150" class="mt-2 img-thumbnail">
        <?php endif; ?>
    </div>

    <!-- Submit -->
    <button type="submit" class="btn btn-primary">Kirim</button>

</form>

<?= $this->include('template/admin_footer'); ?>
