<?php

include "koneksi.php";
$no_surat= $_GET['no_surat'];
$myquery1 = "delete from tb_surat_domisili where no_surat ='$no_surat' limit 1";
$hapus = mysql_query($myquery1) or die ("gagal menghapus");
echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="surat_domisili.php";</script>';

?>