<?php

include "koneksi.php";
$no_reg_pend = $_GET['no_reg_pend'];
$myquery = "delete from tb_penduduk where no_reg_pend ='$no_reg_pend' limit 1";
$hapus = mysql_query($myquery) or die ("gagal menghapus");
echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="penduduk.php";</script>';

?>