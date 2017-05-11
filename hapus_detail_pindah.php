<?php

include "koneksi.php";
$no_reg_pend = $_GET['no_reg_pend'];
$sqlquery="insert into tb_penduduk(no_reg_pend, nik,nama, jenis_kelamin,tempat,tanggal_lahir, agama,status_nikah,status_hub,pendidikan,pekerjaan,no_kk, no_rt,no_rw ) select no_reg_pend, nik,nama, jenis_kelamin,tempat,tanggal_lahir, agama,status_nikah,status_hub,pendidikan,pekerjaan,no_kk, no_rt,no_rw from tb_detail_pend_pindah where no_reg_pend='$no_reg_pend' limit 1";
$lakukan=mysql_query($sqlquery) or die ("gagal simpan to tb_penduduk");
$myquery = "delete from tb_detail_pend_pindah where no_reg_pend ='$no_reg_pend' limit 1";
$hapus = mysql_query($myquery) or die ("gagal menghapus");
echo '<script type="text/javascript">javascript:history.back()</script>';
?>