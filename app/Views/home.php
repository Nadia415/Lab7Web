<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<h2>Selamat Datang di Website Kami!</h2>
<p>Ini adalah halaman utama. Website ini menampilkan berbagai artikel terbaru, informasi kampus, dan lain-lain.</p>

<h3>Artikel Pilihan</h3>
<ul>
  <?php if (!empty($artikelPilihan)): ?>
    <?php foreach($artikelPilihan as $row): ?>
      <li>
        <a href="<?= base_url('artikel/' . $row['slug']); ?>">
          <?= esc($row['judul']); ?>
        </a>
      </li>
    <?php endforeach; ?>
  <?php else: ?>
    <li>Belum ada artikel.</li>
  <?php endif; ?>
</ul>

<?= $this->endSection(); ?>
