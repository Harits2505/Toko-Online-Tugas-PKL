<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

    <div class="row">
        <div class="">
        <center><img class="img-profile rounded-circle small w-25" 
        src="<?= base_url();?>/img/profile/<?= user()->user_image ;?>"></center>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="card-body">
            <div class="text-gray-900">
                <h6 class="card-title">Username</h6>
                <h5 class="card-text"><?= user()->username; ?></h5>
                <hr class="sidebar-divider d-none d-md-block bg-gray-400">

                <h6 class="card-title">Nama Lengkap</h6>
                <h5 class="card-text"><?= user()->fullname; ?></h5>
                <hr class="sidebar-divider d-none d-md-block bg-gray-400">

                <h6 class="card-title">Email</h6>
                <h5 class="card-text"><?= user()->email; ?></h5>
                <hr class="sidebar-divider d-none d-md-block bg-gray-400">

                <h6 class="card-title">Nomor Telpon</h6>
                <h5 class="card-text"><?= user()->phonenumber; ?></h5>
                <hr class="sidebar-divider d-none d-md-block bg-gray-400">

                <h6 class="card-title">Alamat</h6>
                <h5 class="card-text"><?= user()->alamat; ?></h5>
                <hr class="sidebar-divider d-none d-md-block bg-gray-400">
<br>
                <a href="<?= base_url('User/editprofile') ?>" type="button" class="btn btn-primary"> <i class="fas fa-edit"></i>Edit Profile
                </a>

                <!-- <button type="button" class="btn btn-primary btn-lg">Large button</button> -->


            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>