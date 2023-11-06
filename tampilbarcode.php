<?php
//library phpqrcode
include "phpqrcode/qrlib.php";
include 'koneksi.php';

//direktory tempat menyimpan hasil generate qrcode jika folder belum dibuat maka secara otomatis akan membuat terlebih dahulu
$tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);

?>
<html>
<head>
</head>
<body>
    <div align="center" style="margin-top: 50px;">

  

    <table border="1">
        <thead>
            <th>No</th>
            <th>Teks</th>
            <th>QRCode</th>
        </thead>
        <tbody>
        <?php
            $no = 1;
            $query = "SELECT * FROM tbl_qr";
            $arsip1 = $db1->prepare($query);
            $arsip1->execute();
            $res1 = $arsip1->get_result();
            while ($row = $res1->fetch_assoc()) {
                $teks = $row['teks'];

                //Isi dari QRCode Saat discan
                $isi_teks1 = $teks;
                //Nama file yang akan disimpan pada folder temp 
                $namafile1 = $teks.".png";
                //Kualitas dari QRCode 
                $quality1 = 'H'; 
                //Ukuran besar QRCode
                $ukuran1 = 4; 
                $padding1 = 0; 
                QRCode::png($isi_teks1,$tempdir.$namafile1,$quality1,$ukuran1,$padding1);
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $teks; ?></td>
                <td style="padding: 10px;"><img src="temp/<?php echo $namafile1; ?>" width="35px"></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</body>
</html>
<?php mysqli_close($db1); ?>