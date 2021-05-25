<html>
<head>
<title>Input</title>
</head>

<body>
<form action="output.php" method="post">
<table border="1" align="center">
<tr>
    <td>Nama Barang</td>
    <td>:</td>
    <td><input type="text" name="namabarang"/></td>
</tr>
<tr>
    <td>Ukuran Barang</td>
    <td>:</td>
    <td><input type="radio" name="ukuran" value="kecil" />KECIL
     <input type="radio" name="ukuran" value="sedang" />SEDANG
     <input type="radio" name="ukuran" value="besar" />BESAR</td>
</tr>
<tr>
    <td>Warna Barang</td>
    <td>:</td>
    <td><select name="warna">
       <option value="biru">BIRU</option>
         <option value="kuning">KUNING</option>
         <option value="abu">ABU-ABU</option>
         <option value="ungu">UNGU</option>
         <option value="merahmuda">MERAH MUDA</option>
         <option value="putih">PUTIH</option>
         <option value="hitam">HITAM</option>
     </select></td>
</tr>
<tr>
    <td>Spesifikasi</td>
    <td>:</td>
    <td><input type="text" name="spesifikasi"/></td>
</tr>
<tr>
    <td>Stok Barang</td>
    <td>:</td>
    <td><input type="number" name="stokbarang" /></td>
</tr>
<tr>
     <td colspan="3" align="center"><input type="submit" name="kirim"   value="Kirim" /><input type="reset" name="batal" value="batal" /></td>
</tr>
</table>
</form>
</body>
</html>