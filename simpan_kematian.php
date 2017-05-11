<?php

 

include "koneksi.php";
$no_reg_pend = $_GET['no_reg_pend'];
$no_surat_kematian=$_POST['no_surat_kematian'];
$no_reg_pend=$_POST['no_reg_pend'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$tempat=$_POST['tempat'];
$tanggal_lahir =  $_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$status_nikah=$_POST['status_nikah'];
$pekerjaan=$_POST['pekerjaan'];

$no_kk=$_POST['no_kk'];
$no_rt=$_POST['no_rt'];
$no_rw=$_POST['no_rw'];
$tanggal_input = $_POST['tanggal_input'];


$tanggal_meninggal =  $_POST['thn_mngl']."-".$_POST['bln_mngl']."-".$_POST['tgl_mngl'];
$tempat_meninggal=$_POST['tempat_meninggal'];
$desa=$_POST['desa'];
$kota=$_POST['kota'];
$sebab=$_POST['sebab'];
$oleh=$_POST['oleh'];
$hari_meninggal=$_POST['hari_meninggal'];

$hitunghari['awal'] = $tanggal_lahir;
$hitunghari['akhir'] = $tanggal_meninggal;

$tahun = $hitunghari['akhir'] - $hitunghari['awal'];

if(empty($nama))
{
die("Isikan Nama!");
}


else{
$q1="insert into tb_detail_kematian(no_surat_kematian,no_reg_pend, nik,nama,jenis_kelamin,tempat,tanggal_lahir, agama,status_nikah,pekerjaan,no_rt,no_rw,no_kk) " .
 "values('$no_surat_kematian','$no_reg_pend','$nik','$nama','$jenis_kelamin','$tempat','$tanggal_lahir','$agama','$status_nikah','$pekerjaan','$no_rt','$no_rw','$no_kk')";
$q2="insert into tb_kematian(no_surat_kematian, tanggal_meninggal, hari_meninggal,umur, tempat_meninggal, desa, kota,sebab, oleh,tanggal_input)".
"values('$no_surat_kematian','$tanggal_meninggal','$hari_meninggal','$tahun','$tempat_meninggal','$desa','$kota','$sebab','$oleh','$tanggal_input')";
$q3 = "delete from tb_penduduk where no_reg_pend ='$no_reg_pend' limit 1";
mysql_query($q1)or die(mysql_error());
mysql_query($q2)or die(mysql_error());
mysql_query($q3) or die ("gagal menghapus");
echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
location.href="kematian.php";</script>';
}


?>