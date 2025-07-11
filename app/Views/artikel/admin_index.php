<?= $this->include('template/admin_header'); ?>

<!-- Header dan Tombol Tambah -->
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Daftar Artikel</h2>
    <a href="<?= base_url('admin/artikel/add'); ?>" class="btn btn-success">+ Tambah Artikel</a>
</div>

<!-- Form Pencarian -->
<form method="get" class="form-inline mb-3">
    <input type="text" name="q" value="<?= esc($q); ?>" placeholder="Cari data" class="form-control me-2">
    <button type="submit" class="btn btn-primary">Cari</button>
</form>

<!-- Tabel Artikel -->
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>ID Kategori</th> <!-- ✅ Tambahan -->
            <th>Kategori</th>     <!-- ✅ Tambahan -->
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($artikel): foreach ($artikel as $row): ?>
            <tr>
                <td><?= esc($row['id']); ?></td>
                <td>
                    <strong><?= esc($row['judul']); ?></strong><br>
                    <small><?= esc(substr(strip_tags($row['isi']), 0, 50)); ?>...</small>
                </td>
                <td><?= esc($row['id_kategori'] ?? '-'); ?></td> <!-- ✅ Menampilkan id_kategori -->
                <td><?= esc($row['nama_kategori'] ?? '-'); ?></td> <!-- ✅ Menampilkan nama_kategori -->
                <td><?= isset($row['created_at']) ? date('d M Y ', strtotime($row['created_at'])) : '–'; ?></td>
                <td><?= $row['status'] ?? '-'; ?></td>
                <td>
                    <a href="<?= base_url('admin/artikel/edit/' . $row['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= base_url('admin/artikel/delete/' . $row['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr>
                <td colspan="6" class="text-center">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<!-- Pagination -->
<?= $pager->only(['q'])->links(); ?>

<?= $this->include('template/admin_footer'); ?>
