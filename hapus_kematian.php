<?php

include "koneksi.php";
$no_surat_kematian = $_GET['no_surat_kematian'];





$myquery1 = "delete from tb_kematian where no_surat_kematian ='$no_surat_kematian' limit 1";
$hapus = mysql_query($myquery1) or die ("gagal menghapus");
$myquery2 = "delete from tb_detail_kematian where no_surat_kematian ='$no_surat_kematian' limit 1";
$hapus = mysql_query($myquery2) or die ("gagal menghapus");


echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="kematian.php";</script>';

?>