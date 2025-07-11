<?= $this->include('template/header'); ?>

<article class="entry">
    <h2><?= esc($artikel['judul']); ?></h2>

    <?php if (!empty($artikel['gambar'])): ?>
        <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>"
             alt="<?= esc($artikel['judul']); ?>"
             class="img-fluid img-thumbnail mb-3"
             style="max-width:600px; height:auto;">
    <?php endif; ?>

    <p><?= nl2br(esc($artikel['isi'])); ?></p>
</article>

<?= $this->include('template/footer'); ?>
