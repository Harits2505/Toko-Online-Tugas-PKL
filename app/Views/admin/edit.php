<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
<h1 class="h3 mb-3 text-gray-800">Edit Orderlist</h1>
<div class="text-gray-900">
<form action="" method="POST">
Nama Penerima<br>
<input class="form-control w-25" value="" name="namapenerima" type="text" id="formtext" autocomplete="off">
Jasa Ekspedisi<br>
<input class="form-control w-25" value="" name="jasaekspedisi" type="text" id="formtext" autocomplete="off">
Total Biaya<br>
<input class="form-control w-25" value="" name="total" type="text" id="formtext" autocomplete="off">
Status<br>
<input class="form-control w-25" value="" name="info" type="text" id="formtext" autocomplete="off">
<br>
<div class="text-success text-center">
<?php
$koneksi = mysqli_connect("localhost", "root", "", "ci4login",);
if (isset($_POST['save'])) {
mysqli_query($koneksi, "UPDATE pesanan set
        info = '$_POST[info]',
        jasaekspedisi = '$_POST[jasaekspedisi]',
        total = '$_POST[total]' WHERE namapenerima = '$_POST[namapenerima]'");
}
?>
</div>
<button type="submit" name="save" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
<?= $this->endSection(); ?>


