<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>
    <div class="text-gray-900">

        <form action="" method="post" class="user" enctype="multipart/form-data">

            <div class="mb-2 w-50">
                <label for="formGroupExampleInput" class="form-label">Username</label>
                <input name="username" value="<?= user()->username; ?>" class="form-control" id="formGroupExampleInput" readonly>
            </div>

            <div class="mb-2 w-50">
                <label for="formGroupExampleInput2" class="form-label">Nama Lengkap</label>
                <input name="fullname" type="text" value="<?= user()->fullname; ?>" class="form-control" id="formGroupExampleInput2" placeholder="Nama Lengkap">
            </div>

            <div class="mb-2 w-50">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input name="email" value="<?= user()->email; ?>" class="form-control" id="formGroupExampleInput2" readonly>
            </div>

            <div class="mb-2 w-50">
                <label for="formGroupExampleInput2" class="form-label">Nomor Telpon</label>
                <input name="phonenumber" type="text" value="<?= user()->phonenumber; ?>" class="form-control" id="formGroupExampleInput2" placeholder="0811111">
            </div>

            <br>
            <h4>Alamat</h4>

            <div class="mb-3 w-50">
                <label for="exampleFormControl" class="form-label"></label>
                <input name="alamat" type="input" value="<?= user()->alamat; ?>" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Cth : Nama Jalan, Dusun, Rt/Rw, Kelurahan, Kecamatan, Kabupaten/Kota, Provinsi, Kode Pos"></input>
            </div>

            <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
        </form>

        <?php
        $koneksi = mysqli_connect("localhost", "root", "", "ci4login",);

        if (isset($_POST['submit'])) {
            mysqli_query($koneksi, "UPDATE users set
        fullname = '$_POST[fullname]',
        phonenumber = '$_POST[phonenumber]',
        alamat = '$_POST[alamat]' WHERE username = '$_POST[username]'");
        }
        ?>
    </div>
</div>
<?= $this->endSection(); ?>