<?php

include "koneksi.php";

$no_surat_masuk=$_GET['no_surat_masuk'];

$myquery1 = "delete from tb_pend_masuk where no_surat_masuk ='$no_surat_masuk' limit 1";
$hapus = mysql_query($myquery1) or die ("gagal menghapus");
$myquery2 = "delete from tb_detail_pend_masuk where no_surat_masuk ='$no_surat_masuk' ";
$hapus= mysql_query($myquery2) or die ("gagal menghapus");
$myquery3 = "delete from tb_penduduk where no_surat_masuk ='$no_surat_masuk' ";
$hapus = mysql_query($myquery3) or die ("gagal menghapus");

echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="pend_masuk.php";</script>';

?>