<?php
include "koneksi.php";
$no_surat_kelahiran = $_GET['no_surat_kelahiran'];
$myquery1 = "delete from tb_kelahiran where no_surat_kelahiran ='$no_surat_kelahiran' limit 1";
$hapus = mysql_query($myquery1) or die ("gagal menghapus");
$myquery2 = "delete from tb_penduduk where no_surat_kelahiran ='$no_surat_kelahiran' limit 1";
$hapus = mysql_query($myquery2) or die ("gagal menghapus");
echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="kelahiran.php";</script>';

?>