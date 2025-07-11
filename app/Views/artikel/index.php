<?= $this->include('template/header'); ?>

<?php if ($artikel): foreach ($artikel as $row): ?>
    <article class="entry mb-4">
        <h2>
            <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
                <?= esc($row['judul']); ?>
            </a>
        </h2>

        <p class="text-muted">Kategori: <?= esc($row['nama_kategori']) ?></p>

        <?php if (!empty($row['gambar'])): ?>
            <img src="<?= base_url('/gambar/' . $row['gambar']); ?>"
                 alt="<?= esc($row['judul']); ?>"
                 class="img-fluid img-thumbnail mb-2"
                 style="max-width:600px; height:auto;">
        <?php endif; ?>

        <p><?= esc(substr(strip_tags($row['isi']), 0, 200)); ?>...</p>

        <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="btn btn-sm btn-primary">
            Baca Selengkapnya
        </a>
    </article>
    <hr class="divider" />
<?php endforeach; else: ?>
    <article class="entry">
        <h2>Belum ada data.</h2>
    </article>
<?php endif; ?>

<?= $this->include('template/footer'); ?>
