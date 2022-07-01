<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutiara Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<center>
<table class="table w-75">
                    <thead>
                        <tr>
                            <th scope="col">Nama Penerima</th>
                            <th scope="col">No Telpon</th>
                            <th scope="col">Alamat Penerima</th>
                            <th scope="col">Size</th>
                            <th scope="col">Opsi</th>
                            <th scope="col">Bahan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Pembayaran</th>
                            <th scope="col">Jasa Ekspedisi</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $koneksi = mysqli_connect("localhost", "root", "", "ci4login",);
                        $query = mysqli_query($koneksi, "SELECT * FROM pesanan");
                        if (isset($_POST['cari'])) {
                           $query = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE namapenerima LIKE '%".$_POST ['keyword']."%'");         
                            }
                        while ($dt = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?= $dt['namapenerima']; ?></td>
                                <td><?= $dt['notelepon']; ?></td>
                                <td><?= $dt['alamatpenerima']; ?></td>
                                <td><?= $dt['size']; ?></td>
                                <td><?= $dt['opsi']; ?></td>
                                <td><?= $dt['bahan']; ?></td>
                                <td><?= $dt['jumlah']; ?></td>
                                <td><?= $dt['keterangan']; ?></td>
                                <td><?= $dt['metodepayment']; ?></td>
                                <td><?= $dt['jasaekspedisi']; ?></td>
                                <td><?= $dt['total']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                    </center>
<script>
    window.print();
</script>    
</body>
</html>