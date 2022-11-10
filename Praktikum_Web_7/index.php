<?php
// $barang = array("Tepung", "Gula", "Pisang", "Terigu", "Garam", "Soda");
// $berat = array(1, 2, 3, 4, 5, 6);
// $stok = array(10, 20, 30, 40, 50, 60);

class Barang
{
    //Properties
    private $nama;
    private $beratKG;
    private $beratG;
    private $beratMG;
    private $stok;

    //Method
    function __construct($nama, $beratKG, $stok)
    {
        $this->nama = $nama;
        $this->beratKG = $beratKG;
        $this->stok = $stok;
    }

    function get_nama()
    {
        return $this->nama;
    }

    function get_beratKG()
    {
        return $this->beratKG;
    }

    function get_stok()
    {
        return $this->stok;
    }

    function convertBeratG($beratKG)
    {
        $this->beratG = $beratKG * 1000;
        return $this->beratG;
    }

    function convertBeratMG($beratKG)
    {
        $this->beratMG = $beratKG * 1000000;
        return $this->beratMG;
    }
}

$item[0] = new Barang("Gula", 1, 10);
$item[1] = new Barang("Garam", 2, 20);
$item[2] = new Barang("Tepung", 3, 30);
$item[3] = new Barang("Minyak", 4, 40);
$item[4] = new Barang("Kecap", 5, 50);
$indeks = 5
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Praktikum Web 7 - OOP PHP</title>
</head>

<body>

    <header>
        <div class="container">
            <h1>Daftar Barang</h1>
        </div>
    </header>

    <div class="section">
        <div class="container-2">
            <div class="box">
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th>Barang</th>
                            <th>Berat (KG)</th>
                            <th>Berat (G)</th>
                            <th>Berat (MG)</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $indeks; $i++) {
                        ?>
                            <tr>
                                <td><?php echo $item[$i]->get_nama() ?></td>
                                <td>
                                    <?php
                                    echo $item[$i]->get_beratKG();
                                    $kilo = $item[$i]->get_beratKG();
                                    ?>
                                </td>
                                <td><?php echo $item[$i]->convertBeratG($kilo) ?></td>
                                <td><?php echo $item[$i]->convertBeratMG($kilo) ?></td>
                                <td><?php echo $item[$i]->get_stok() ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="input-form">
                <div class="box">
                    <form action="" method="POST">
                        <h2>Input Data Barang</h2>
                        <i>* required field</i><br><br>
                        <h4>Nama Barang</h4>
                        <input type="text" name="namabarang" required class="input-form"><br><br>
                        <h4>Berat(KG)</h4>
                        <input type="number" name="berat" required class="input-form"><br><br>
                        <h4>Stok</h4>
                        <input type="number" name="stok" required class="input-form"><br><br>
                        <input type="submit" name="submit" class="btn" value="Submit">
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $nama_barang = $_POST['namabarang'];
                        $berat_kg = $_POST['berat'];
                        $jumlah = $_POST['stok'];

                        $item[$indeks] = new Barang($nama_barang, $berat_kg, $jumlah);
                        $indeks++;

                    ?>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>