<?= $this->include('template/admin_header'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Daftar Artikel</h2>
    <a href="<?= base_url('admin/artikel/add'); ?>" class="btn btn-success">Tambah Artikel</a>
</div>

<table class="table table-bordered table-striped">
    <thead >
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($artikel): foreach ($artikel as $row): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td>
                    <strong><?= $row['judul']; ?></strong><br>
                    <small><?= substr($row['isi'], 0, 50); ?>...</small>
                </td>
                <td><?= date('d M Y H:i', strtotime($row['created_at'] ?? '-')) ?></td>
                <td><?= $row['status']; ?></td>
                <td>
                    <a href="<?= base_url('admin/artikel/edit/' . $row['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url('admin/artikel/delete/' . $row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr>
                <td colspan="5" class="text-center">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/admin_footer'); ?>
