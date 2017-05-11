<?php

include "koneksi.php";
$no_reg_pend = $_GET['no_reg_pend'];
$myquery = "delete from tb_sementaramasuk where no_reg_pend ='$no_reg_pend' limit 1";
$hapus = mysql_query($myquery) or die ("gagal menghapus");
$myquery1 = "delete from tb_penduduk where no_reg_pend ='$no_reg_pend' limit 1";
$hapus = mysql_query($myquery1) or die ("gagal menghapus");
echo '<script type="text/javascript">javascript:history.back()</script>';  

?>