<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Produk</h1>
    <div class="row">
        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->banner_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Baner</h5>
                <a href="<?= base_url('produk/banner');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->sticker_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Sticker</h5>
                <a href="<?= base_url('produk/sticker');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->tshirt_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak T-shirt</h5>
                <a href="<?= base_url('produk/tshirt');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->jersey_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Jersey</h5>
                <a href="<?= base_url('produk/jersey');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->mug_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Gelas</h5>
                <a href="<?= base_url('produk/mug');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->poster_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Poster/Brosur</h5>
                <a href="<?= base_url('produk/poster');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->kunci_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Gantungan Kunci</h5>
                <a href="<?= base_url('produk/kunci');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->sertifikat_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Sertifikat/Piagam</h5>
                <a href="<?= base_url('produk/sertifikat');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->kartu_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Kartu</h5>
                <a href="<?= base_url('produk/kartu');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->tumbler_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Botol Tumbler</h5>
                <a href="<?= base_url('produk/tumbler');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        <div class="card bg-info text-center text-gray-900" style="width: 16rem;">
            <div class="card-body">
            <img src="<?=base_url();?>/img/produk/<?=user()->akrilik_image;?>" class="img w-100 rounded">
                <h5 class="card-title">Cetak Plakat/Hiasan</h5>
                <a href="<?= base_url('produk/akrilik');?>" class="btn btn-primary center">Order Now</a>
            </div>
        </div>

        
    </div>
</div>
<?= $this->endSection(); ?>