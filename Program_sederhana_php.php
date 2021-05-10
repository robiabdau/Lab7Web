<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program PHP Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="container">
            <h1>Program PHP Sederhana</h1>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lengkap" placeholder="Masukan Nama Lengkap"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal_lahir"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>
                            <select name="job">
                                <option value="pilih_pekerjaan">--Pilih Pekerjaan--</option>
                                <option value="Polisi">Polisi</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Guru">Guru</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="kirim" value="Kirim">
                            <input type="reset" name="batal" value="Batal">
                        </td>
                    </tr>
                </table>
            
            <br></br>
            <h3>Output: </h3>
            <?php
            $lahir = @$_GET['tanggal_lahir'];
            $kirim = @$_POST['kirim'];

            if ($kirim) {
                $nama = @$_POST['nama_lengkap'];
                $tgl_lhr = $_POST['tanggal_lahir'];
                $job = @$_POST['job'];
                echo "Nama Lengkap : ".$nama."<br>";
                echo "Tanggal Lahir : ".$tgl_lhr."<br>";
                $umur = new DateTime($_POST['tanggal_lahir']);
                $sekarang = new DateTime("today");
                if ($umur > $sekarang) { 
                    $thn = "0";
                    $bln = "0";
                    $tgl = "0";
                }
                $thn = $sekarang->diff($umur)->y;
                $bln = $sekarang->diff($umur)->m;
                $tgl = $sekarang->diff($umur)->d;
                echo "Umur : ".$thn." Tahun ".$bln." Bulan ".$tgl." Hari<br>";
                if ($job== 'pilih_pekerjaan') {
                    echo "Pekerjaan : $job<br>";
                    echo "Gaji : Rp. 0/bulan<br>";
                }
                elseif ($job== "Polisi") {
                    echo "Pekerjaan : $job<br>";
                    echo "Gaji : Rp.5.930.800 /bulan<br>";
                }
                elseif ($job== "Dokter") {
                    echo "Pekerjaan : $job<br>";
                    echo "Gaji : Rp.20.000.000 /bulan<br>";
                }
                elseif ($job== "Guru") {
                    echo "Pekerjaan : $job<br>";
                    echo "Gaji : Rp.9.000.000 /bulan<br>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>