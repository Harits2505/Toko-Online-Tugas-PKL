<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Alamat Penerima</h1>
    <div class="text-gray-900">
        <form action="" method="post">
            <div class="mb-2 w-50">
                <label for="formGroupExampleInput2" class="form-label">Nama Penerima</label>
                <input type="text" name="namapenerima" value="<?= user()->fullname; ?>" class="form-control" id="formGroupExampleInput2" required>
            </div>
            <div class="mb-2 w-50">
                <label for="formGroupExampleInput2" class="form-label">Nomor Telpon</label>
                <input type="text" name="notelepon" value="<?= user()->phonenumber; ?>" class="form-control" id="formGroupExampleInput2" required>
            </div>
            <div class="mb-2 w-50">
                <label for="formGroupExampleInput2" class="form-label">Alamat Penerima</label>
                <input type="text" name="alamatpenerima" value="<?= user()->alamat; ?>" class="form-control" id="formGroupExampleInput2" required>
            </div>
            <hr class="sidebar-divider d-none d-md-block bg-gray-900">
            <h1 class="h3 mb-4 text-gray-800">Desain</h1>
            <div class="mb-2 w-50">
                <label for="formFile" class="form-label">Masukan Desain</label><br>
                <span class="text-danger text-sm"><i>*Pastikan pilih gambar yang tidak buram/blur</i></span><br>
                <a class="btn btn-primary" href="https://drive.google.com/drive/folders/1fJdxlxk0JqZGf-3vwa3c3zjHPr_YLrxQ?usp=sharing" role="button"><i class="fab fa-google-drive"></i> Upload</a> Upload desain ke Google Drive terlebih dahulu<br>
                <br>
                <span class="text-sm">Upload kembali</span><br>
                <input class="form-control" value="" name="desain" type="file" id="formFile" required>
            </div>
            <div class="mb-2 w-25">
                <label for="formGroupExampleInput2" class="form-label">Size</label><br>
                <input type="text" name="size" value="" placeholder="P x L | Cth : 10CM x 10CM" class="form-control" id="formGroupExampleInput2" autocomplete="off" required>
            </div>
            <label for="formGroupExampleInput2" class="form-label">Pilih Opsi</label><br>
            <select class="form-select" name="opsi" aria-label="Default select example" required>
                <option value="Tidak Ada" selected>Tidak Ada</option>
                <option value="Laminating">Laminating</option>
            </select><br><br>
            <label for="formGroupExampleInput2" class="form-label">Tipe</label><br>
            <select class="form-select" name="tipe" aria-label="Default select example" required>
                <option value="Sertifikat" selected>Sertifikat</option>
            </select><br><br>
            <label for="formGroupExampleInput2" class="form-label">Pilih Bahan</label><br>
            <select class="form-select" name="bahan" aria-label="Default select example" required>
                <option selected>Pilih Bahan</option>
                <option value="Kertas Concorde">Kertas Concorde</option>
                <option value="Kertas Art Cartoon">Kertas Art Cartoon</option>
            </select>
            <br><br>
            <div class="mb-2 w-50">
                <label for="formGroupExampleInput2" class="form-label">Jumlah</label><br>
                <input type="text" name="jumlah" placeholder="Cth : 20 Pcs" value="" class="form-control" id="formGroupExampleInput2" autocomplete="off" required>
            </div>
            <div class="mb-2 w-50">
                <label for="formGroupExampleInput2" class="form-label">Keterangan</label><br>
                <input type="text" name="keterangan" placeholder="Cth : Sertifikat tournament" value="" class="form-control" id="formGroupExampleInput2" autocomplete="off">
            </div>
            <hr class="sidebar-divider d-none d-md-block bg-gray-900">
            <h1 class="h3 mb-4 text-gray-800">Pembayaran</h1>
            Bayar Di Tempat<br><br>
            <div class="form-check">
                <input class="form-check-input" name="metodepayment" type="checkbox" value="COD" id="flexCheckDefault" required>
                <img src="<?= base_url(); ?>/img/payment/<?= user()->cod; ?>" style="width : 15%;">
                <label class="form-check-label" for="flexCheckDefault">Bayar Di Tempat</label><br>
            </div><br>
            <div class="text-danger">
                <i>*Silahkan klik konfirmasi, total bisa dilihat di menu pesanan</i><br>
            </div>
            <br>
            <center class="text-success"><?php
 $koneksi = mysqli_connect("localhost", "root", "", "ci4login",);
if (isset($_POST['proses'])) {
mysqli_query($koneksi, "insert into pesanan set
        namapenerima = '$_POST[namapenerima]',
        notelepon = '$_POST[notelepon]',
        alamatpenerima = '$_POST[alamatpenerima]',
        tipe = '$_POST[tipe]',
        desain = '$_POST[desain]',
        size = '$_POST[size]',
        opsi = '$_POST[opsi]',
        bahan = '$_POST[bahan]',
        keterangan = '$_POST[keterangan]',
        jumlah = '$_POST[jumlah]',
        metodepayment = '$_POST[metodepayment]'");

      echo "Pembelian Sukses Silahkan Cek Di Menu Pesanan";
     }
     ?></center><br>
            <center><button type="submit" value="simpan" name="proses" 
            class="btn btn-primary w-50">Konfirmasi</button></center>
        </form>
    </div>
    <?= $this->endSection(); ?>