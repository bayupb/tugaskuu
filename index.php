<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tugasku Mysqli</title>
</head>

<body>

    <h3>Selamat Mengerjakan yaaa!</h3>

    <div class="container mt-5">
        <div class="row">
            <h4>Table database kolum pelanggan</h4>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat Pelanggan</th>
                        <th>No Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT * FROM pelanggan';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['id_pelanggan'] ?></td>
                        <td><?php echo $row['nama_pelanggan'] ?></td>
                        <td><?php echo $row['alamat_pelanggan'] ?></td>
                        <td><?php echo $row['no_telp'] ?></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h4>Table database kolum perpustakaan</h4>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id Perpustakaan</th>
                        <th>Kode Buku</th>
                        <th>Nama Buku</th>
                        <th>Jumlah Buku</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT * FROM perpustakaan';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['id_perpustakaan'] ?></td>
                        <td><?php echo $row['kode_buku'] ?></td>
                        <td><?php echo $row['nama_buku'] ?></td>
                        <td><?php echo $row['jumlah_buku'] ?></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h4>Table database kolum transaksi ( INNER JOIN )</h4>
            <table class="table table-striped table-bordered table-responsive-lg">
                <thead>
                    <tr>
                        <th>Id Transaksi</th>
                        <th>Id Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat Pelanggan</th>
                        <th>No Telepon</th>
                        <th>Kode Buku</th>
                        <th>Waktu Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT pl.id_pelanggan, nama_pelanggan, alamat_pelanggan, no_telp, id_transaksi,kode_buku,waktu_transaksi
                    FROM pelanggan pl
                    JOIN transaksi tr USING(id_pelanggan)  ';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['id_transaksi'] ?></td>
                        <td><?php echo $row['id_pelanggan'] ?></td>
                        <td><?php echo $row['nama_pelanggan'] ?></td>
                        <td><?php echo $row['alamat_pelanggan'] ?></td>
                        <td><?php echo $row['no_telp'] ?></td>
                        <td><?php echo $row['kode_buku'] ?></td>
                        <td><?php echo $row['waktu_transaksi'] ?></td>

                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h4>Table database kolum transaksi ( LEFT JOIN )</h4>
            <table class="table table-striped table-bordered table-responsive-lg">
                <thead>
                    <tr>
                        <th>Id Transaksi</th>
                        <th>Id Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat Pelanggan</th>
                        <th>No Telepon</th>
                        <th>Kode Buku</th>
                        <th>Waktu Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = 'SELECT pl.id_pelanggan, nama_pelanggan, alamat_pelanggan, no_telp, id_transaksi,kode_buku,waktu_transaksi
                    FROM pelanggan pl
                    JOIN transaksi tr USING(id_pelanggan)  ';
                    $query = mysqli_query($tersambung,$sql);
                    while ($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['id_transaksi'] ?></td>
                        <td><?php echo $row['id_pelanggan'] ?></td>
                        <td><?php echo $row['nama_pelanggan'] ?></td>
                        <td><?php echo $row['alamat_pelanggan'] ?></td>
                        <td><?php echo $row['no_telp'] ?></td>
                        <td><?php echo $row['kode_buku'] ?></td>
                        <td><?php echo $row['waktu_transaksi'] ?></td>

                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>