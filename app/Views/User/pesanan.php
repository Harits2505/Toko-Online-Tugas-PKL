<?php
$koneksi = mysqli_connect("localhost", "root", "", "ci4login");
?>
<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pesanan</h1>
    <form class="d-none d-sm-inline-block form-inline  navbar-search w-25" method="POST">
        <div class="input-group">
            <input type="text" class="form-control bg-light small" placeholder="Cari nama penerima pesanan" aria-label="Search" aria-describedby="basic-addon2" name="keyword" autocomplete="off" autofocus>
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit" name="cari">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form><br>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Penerima</th>
                            <th scope="col">No Telpon</th>
                            <th scope="col">Alamat Penerima</th>
                            <th scope="col">Desain</th>
                            <th scope="col">Size</th>
                            <th scope="col">Opsi</th>
                            <th scope="col">Bahan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Pembayaran</th>
                            <th scope="col">Jasa Ekspedisi</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM pesanan");
                        $koneksi = mysqli_connect("localhost", "root", "", "ci4login",);

                        $query = mysqli_query($koneksi, "SELECT * FROM pesanan");
                        if (isset($_POST['cari'])) {
                           $query = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE namapenerima LIKE '%".$_POST ['keyword']."%'");
                            
                            }

                        while ($dt = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <!-- <td><= $no++;?></td> -->
                            <td><?= $dt['namapenerima'];?></td>
                            <td><?= $dt['notelepon'];?></td>
                            <td><?= $dt['alamatpenerima'];?></td>
                            <td><?= $dt['desain'];?></td>
                            <td><?= $dt['size'];?></td>
                            <td><?= $dt['opsi'];?></td>
                            <td><?= $dt['bahan'];?></td>
                            <td><?= $dt['jumlah'];?></td>
                            <td><?= $dt['keterangan'];?></td>
                            <td><?= $dt['metodepayment'];?></td>
                            <td><?= $dt['jasaekspedisi'];?></td>
                            <td><?= $dt['total'];?></td>
                            <td><?= $dt['info'];?>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>


</div>
<?= $this->endSection(); ?>