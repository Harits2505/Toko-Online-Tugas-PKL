<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Sosial Media</h1>
    <div class="row">
        <div class="row text-center text-gray-900">
            <div class="card" style="width: 9rem;">
                <div class="card-body justify-content-center">
                <img src="<?= base_url();?>/img/sosmedandcontact/<?= user()->instagram;?>" class="img w-75">
                    <h5 class="card-title">Instagram</h5>
                    <a href="http://instagram.com/azfaalharits?utm_source=qr" class="btn btn-primary">Follow</a>
                </div>
            </div>

            <div class="card" style="width: 9rem;">
                <div class="card-body justify-content-center">
                <img src="<?= base_url();?>/img/sosmedandcontact/<?= user()->facebook;?>" class="img w-75">
                    <h5 class="card-title">Facebook</h5>
                    <a href="https://www.facebook.com/namapengguna123567" class="btn btn-primary">Follow</a>
                </div>
            </div>

            <div class="card" style="width: 9rem;">
                <div class="card-body justify-content-center">
                <img src="<?= base_url();?>/img/sosmedandcontact/<?= user()->youtube;?>" class="img w-75">
                    <h5 class="card-title">Youtube</h5>
                    <a href="https://youtube.com/user/MutiaraDigitalPrint" class="btn btn-primary">Subscribe</a>
                </div>
            </div>

            <div class="card" style="width: 9rem;">
                <div class="card-body justify-content-center">
                <img src="<?= base_url();?>/img/sosmedandcontact/<?= user()->tiktok;?>" class="img w-75">
                    <h5 class="card-title">Tiktok</h5>
                    <a href="https://vt.tiktok.com/ZSdBxY3wM/" class="btn btn-primary">Follow</a>
                </div>
            </div>

            <div class="card" style="width: 9rem;">
                <div class="card-body justify-content-center">
                <img src="<?= base_url();?>/img/sosmedandcontact/<?= user()->github;?>" class="img w-75">
                    <h5 class="card-title">Github</h5>
                    <a href="https://github.com/Harits2505" class="btn btn-primary">Visit</a>
                </div>
            </div>

            
        </div>
    </div>

</div>
<?= $this->endSection(); ?>