<?php


include "koneksi.php";
$no_reg_pend = $_GET['no_reg_pend'];
$myquery = "delete from tb_sementarapindah where no_reg_pend ='$no_reg_pend' limit 1";
$hapus = mysql_query($myquery) or die ("gagal menghapus");
header ("location:input_pindah.php");   
?>