<?php
$nama_barang = array("Tepung", "Gula", "Pisang", "Terigu", "Putaw", "Sabu", "Marijuana");
$stok_barang = array(10, 20, 30, 0, 40, 0, 50, 60);
$berat_barang = array(2, 3, 5, 7, 9, 1, 3, 4);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Web 6</title>
    <!--------------------- CSS ------------------------------------->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--------------------- Font Used ----------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <!--------------------- Font Awesome ----------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="items">
                <i class="fa fa-tasks fa-2x" aria-hidden="true"></i>
                <a href="index.php">
                    <h1>Praktikum 6 WEB</h1>
                </a>
            </div>
            <div class="items">
                <h1>Achmad Ramsey Adrian - 105219057</h1>
            </div>
        </div>
    </header>

    <div class="section">
        <div class="box">
            <form action="" method="POST">
                <input type="submit" name="tabel-awal" value="Tabel Awal">
            </form>
            <?php
            if (isset($_POST['tabel-awal'])) {
            ?>
                <center>
                    <table border="1" cellspacing="0" class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Barang</td>
                                <td>Berat(Kg)</td>
                                <td>Berat(Gram)</td>
                                <td>Berat(Miligram)</td>
                                <td>Stock</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            for ($x = 0; $x <= 6; $x++) {
                                if ($stok_barang[$x] == 0) {
                            ?>
                                    <tr>
                                        <td id="red"><?php echo $no++ ?></td>
                                        <td id="red"><?php echo $nama_barang[$x] ?></td>
                                        <td id="red"><?php echo $berat_barang[$x] ?></td>
                                        <?php
                                        $gram = $berat_barang[$x] * 1000;
                                        $mili = $berat_barang[$x] * 1000000;
                                        ?>
                                        <td id="red"><?php echo $gram ?></td>
                                        <td id="red"><?php echo $mili ?></td>
                                        <td id="red"><?php echo $stok_barang[$x] ?></td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $nama_barang[$x] ?></td>
                                        <td><?php echo $berat_barang[$x] ?></td>
                                        <?php
                                        $gram = $berat_barang[$x] * 1000;
                                        $mili = $berat_barang[$x] * 1000000;
                                        ?>
                                        <td><?php echo $gram ?></td>
                                        <td><?php echo $mili ?></td>
                                        <td><?php echo $stok_barang[$x] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </center>
            <?php
            }
            ?>
            <br>
            <h3>Sorting Table</h3><br>
            <form action="" method="POST" enctype="multipart/form-data">
                <select name="sorting">
                    <option value="Nama">Berdasarkan Nama</option>
                    <option value="Berat">Berat</option>
                    <option value="Stock">Stok Barang</option>
                </select>
                <input type="submit" name="submit" value="Sort">
            </form>
            <br>
            <?php
            if (isset($_POST['submit']) && $_POST['sorting'] == "Nama") {
                sort($nama_barang);
            ?>
                <center>
                    <table border="1" cellspacing="0" class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Barang</td>
                                <td>Berat(Kg)</td>
                                <td>Berat(Gram)</td>
                                <td>Berat(Miligram)</td>
                                <td>Stock</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            for ($x = 0; $x <= 6; $x++) {
                                if ($stok_barang[$x] == 0) {
                            ?>
                                    <tr>
                                        <td id="red"><?php echo $no++ ?></td>
                                        <td id="red"><?php echo $nama_barang[$x] ?></td>
                                        <td id="red"><?php echo $berat_barang[$x] ?></td>
                                        <?php
                                        $gram = $berat_barang[$x] * 1000;
                                        $mili = $berat_barang[$x] * 1000000;
                                        ?>
                                        <td id="red"><?php echo $gram ?></td>
                                        <td id="red"><?php echo $mili ?></td>
                                        <td id="red"><?php echo $stok_barang[$x] ?></td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $nama_barang[$x] ?></td>
                                        <td><?php echo $berat_barang[$x] ?></td>
                                        <?php
                                        $gram = $berat_barang[$x] * 1000;
                                        $mili = $berat_barang[$x] * 1000000;
                                        ?>
                                        <td><?php echo $gram ?></td>
                                        <td><?php echo $mili ?></td>
                                        <td><?php echo $stok_barang[$x] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </center>
            <?php
            } else if (isset($_POST['submit']) && $_POST['sorting'] == "Berat") {
                sort($berat_barang);
            ?>
                <center>
                    <table border="1" cellspacing="0" class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Barang</td>
                                <td>Berat(Kg)</td>
                                <td>Berat(Gram)</td>
                                <td>Berat(Miligram)</td>
                                <td>Stock</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            for ($x = 0; $x <= 6; $x++) {
                                if ($stok_barang[$x] == 0) {
                            ?>
                                    <tr>
                                        <td id="red"><?php echo $no++ ?></td>
                                        <td id="red"><?php echo $nama_barang[$x] ?></td>
                                        <td id="red"><?php echo $berat_barang[$x] ?></td>
                                        <?php
                                        $gram = $berat_barang[$x] * 1000;
                                        $mili = $berat_barang[$x] * 1000000;
                                        ?>
                                        <td id="red"><?php echo $gram ?></td>
                                        <td id="red"><?php echo $mili ?></td>
                                        <td id="red"><?php echo $stok_barang[$x] ?></td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $nama_barang[$x] ?></td>
                                        <td><?php echo $berat_barang[$x] ?></td>
                                        <?php
                                        $gram = $berat_barang[$x] * 1000;
                                        $mili = $berat_barang[$x] * 1000000;
                                        ?>
                                        <td><?php echo $gram ?></td>
                                        <td><?php echo $mili ?></td>
                                        <td><?php echo $stok_barang[$x] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </center>
            <?php
            } else if (isset($_POST['submit']) && $_POST['sorting'] == "Stock") {
                sort($stok_barang);
            ?>
                <center>
                    <table border="1" cellspacing="0" class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Barang</td>
                                <td>Berat(Kg)</td>
                                <td>Berat(Gram)</td>
                                <td>Berat(Miligram)</td>
                                <td>Stock</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            for ($x = 0; $x <= 6; $x++) {
                                if ($stok_barang[$x] == 0) {
                            ?>
                                    <tr>
                                        <td id="red"><?php echo $no++ ?></td>
                                        <td id="red"><?php echo $nama_barang[$x] ?></td>
                                        <td id="red"><?php echo $berat_barang[$x] ?></td>
                                        <?php
                                        $gram = $berat_barang[$x] * 1000;
                                        $mili = $berat_barang[$x] * 1000000;
                                        ?>
                                        <td id="red"><?php echo $gram ?></td>
                                        <td id="red"><?php echo $mili ?></td>
                                        <td id="red"><?php echo $stok_barang[$x] ?></td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $nama_barang[$x] ?></td>
                                        <td><?php echo $berat_barang[$x] ?></td>
                                        <?php
                                        $gram = $berat_barang[$x] * 1000;
                                        $mili = $berat_barang[$x] * 1000000;
                                        ?>
                                        <td><?php echo $gram ?></td>
                                        <td><?php echo $mili ?></td>
                                        <td><?php echo $stok_barang[$x] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </center>
            <?php
            }
            ?>

        </div>
    </div>
</body>

</html>