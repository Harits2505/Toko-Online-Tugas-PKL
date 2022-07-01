<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Costumer Service</h1>
    <div class="row text-center">
        <div class="card" style="width: 9rem;">
            <div class="card-body justify-content-center">
                <img src="<?= base_url();?>/img/sosmedandcontact/<?= user()->whatsapp;?>" class="img w-75">
                <h5 class="card-title text-gray-900">WhatsApp</h5>
                <a href="https://wa.me/message/3MUQNFD76MCDL1" class="btn btn-primary">Cs WhatsApp</a>
            </div>
        </div>
        <div class="card" style="width: 9rem;">
            <div class="card-body justify-content-center">
            <img src="<?= base_url();?>/img/sosmedandcontact/<?= user()->messenger;?>" class="img w-75">
                <h5 class="card-title text-gray-900">Messenger</h5>
                <a href="https://m.me/namapengguna123567" class="btn btn-primary">Cs Messenger</a>
            </div>
        </div>
        <div class="card" style="width: 9rem;">
            <div class="card-body justify-content-center">
            <img src="<?= base_url();?>/img/sosmedandcontact/<?= user()->instagram;?>" class="img w-75">
                <h5 class="card-title text-gray-900">Instagram</h5>
                <a href="http://instagram.com/azfaalharits?utm_source=qr" class="btn btn-primary">Cs Instagram</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>