<?php

include "koneksi.php";
$jumlah = count($_POST["item"]);
for($i=0; $i < $jumlah; $i++)
{
$no_surat_kematian=$_POST["item"][$i];

$myquery1 = "delete from tb_kematian where no_surat_kematian ='$no_surat_kematian' limit 1";
$hapus = mysql_query($myquery1) or die ("gagal menghapus");
$myquery2 = "delete from tb_detail_kematian where no_surat_kematian ='$no_surat_kematian' limit 1";
$hapus = mysql_query($myquery2) or die ("gagal menghapus");
}
echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="kematian.php";</script>';

?>