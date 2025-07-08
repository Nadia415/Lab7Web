<?= $this->include('template/admin_header'); ?>
<h2><?= $title; ?></h2>
<form action="" method="post">
    <p><input type="text" name="judul" value="<?= $data['judul'];?>" ></p>
    <p><textarea name="isi" cols="50" rows="10"><?= $data['isi'];?></textarea></p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
<div class="mb-3">
    <label for="kategori" class="form-label">Kategori</label>
    <input type="text" name="kategori" class="form-control" id="kategori" value="<?= $data['kategori']; ?>">
</div>

</form>
<?= $this->include('template/admin_footer'); ?>
