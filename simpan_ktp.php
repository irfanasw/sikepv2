<?php


include "koneksi.php";

$tanggal_input = $_POST['tanggal_input'];
$tanggal_berlaku=$_POST['tanggal_berlaku'];
$nik=$_POST['nik'];


$q1="insert into tb_detail_ktp select nik,nama, jenis_kelamin, tempat, tanggal_lahir,agama, status_hub, status_nikah, pendidikan,  pekerjaan, no_kk,no_rt, no_rw from tb_penduduk where nik='$nik'";
$q2="insert into tb_ktp(nik,tanggal_input, tanggal_berlaku) values ('$nik', '$tanggal_input', '$tanggal_berlaku')";
mysql_query($q1)or die(mysql_error());
mysql_query($q2)or die(mysql_error());
echo '<script type="text/javascript">alert("Berhasil! Data baru telah ditambahkan");
location.href="ktp.php";</script>';



?>