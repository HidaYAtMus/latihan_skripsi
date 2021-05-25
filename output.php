<html>
<head>
<title>Output</title>
</head>

<body>


<?php
$nama  = $_POST ["namabarang"];
$ukuran  = $_POST ["ukuran"];
$warna = $_POST ["warna"];
$spesi   = $_POST ["spesifikasi"];
$stok   = $_POST ["stokbarang"];
?>


<table border="1" align="center">
<tr>
     <td width="117">Nama Barang</td>
     <td width="14">:</td>
     <td width="218"><? echo " $nama"   ?></td>
</tr>
<tr>
     <td>Ukuran Barang</td>
     <td>:</td>
     <td><? echo " $ukuran"  ?></td>
</tr>
<tr>
     <td>Warna Barang</td>
     <td>:</td>
     <td><? echo " $warna"   ?></td>
</tr>
<tr>
     <td>Spesifikasi</td>
     <td>:</td>
     <td><? echo " $spesi"   ?></td>
</tr>
<tr>
    <td>Stok Brang</td>
    <td>:</td>
    <td><? echo " $stok"   ?></td>
</tr>
<tr>
     <td align="center" colspan="3"><a href="input.php">BACK </a></td>
</tr>
</table>
</body>
</html>
