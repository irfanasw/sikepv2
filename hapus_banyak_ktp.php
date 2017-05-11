<?php

include "koneksi.php";
$jumlah = count($_POST["item"]);
for($i=0; $i < $jumlah; $i++)
{
$nik=$_POST["item"][$i];

$myquery = "delete from tb_ktp where nik ='$nik' limit 1";
$hapus = mysql_query($myquery) or die ("gagal menghapus");
$myquery2 = "delete from tb_detail_ktp where nik ='$nik' limit 1";
$hapus = mysql_query($myquery2) or die ("gagal menghapus");
}
echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="ktp.php";</script>';

?>