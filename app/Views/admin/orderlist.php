<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Order List</h1>
    <form class="d-none d-sm-inline-block form-inline  navbar-search w-25" method="POST" enctype="multipart/form-data"> 
        <div class="input-group">
            <input type="text" class="form-control bg-light small" name="keyword" placeholder="Cari nama penerima pesanan" aria-label="Search" aria-describedby="basic-addon2" autocomplete="off" autofocus>
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit" name="cari">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
        </form>
    <a class="btn btn-primary" href="<?= base_url('Admin/edit');?>" role="button"><i class="fas fa-edit"></i> Edit</a>
    <a class="btn btn-primary" href="<?= base_url('Admin/print');?>" role="button"><i class="fas fa-print"></i> Print</a>
    <a class="btn btn-danger" href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=ci4login&table=pesanan&pos=0" role="button"><i class="fas fa-trash"></i> Hapus</a>
    <br>
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
                        $koneksi = mysqli_connect("localhost", "root", "", "ci4login",);
                        $query = mysqli_query($koneksi, "SELECT * FROM pesanan");
                        if (isset($_POST['cari'])) {
                           $query = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE namapenerima LIKE '%".$_POST ['keyword']."%'");            
                            }
                        while ($dt = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <!-- --  <td><= $no++;?></td> -->
                                <td><?= $dt['namapenerima']; ?></td>
                                <td><?= $dt['notelepon']; ?></td>
                                <td><?= $dt['alamatpenerima']; ?></td>
                                <td><?= $dt['desain']; ?></td>
                                <td><?= $dt['size']; ?></td>
                                <td><?= $dt['opsi']; ?></td>
                                <td><?= $dt['bahan']; ?></td>
                                <td><?= $dt['jumlah']; ?></td>
                                <td><?= $dt['keterangan']; ?></td>
                                <td><?= $dt['metodepayment']; ?></td>
                                <td><?= $dt['jasaekspedisi']; ?></td>
                                <td><?= $dt['total']; ?></td>
                                <td><?= $dt['info']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            </div>
<?= $this->endSection(); ?>