<?php


include "koneksi.php";
$no_reg_pend=$_POST['no_reg_pend'];
$no_surat_kelahiran=$_POST['no_surat_kelahiran'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$hari=$_POST['hr']." ".$_POST['pasaran'];
$tempat=$_POST['tempat'];
$tanggal_lahir =  $_POST['thn_lhr']."-".$_POST['bln_lhr']."-".$_POST['tgl_lhr'];
$nama_ayah=$_POST['nama_ayah'];
$nama_ibu=$_POST['nama_ibu'];
$no_kk=$_POST['no_kk'];
$no_rt=$_POST['no_rt'];
$no_rw=$_POST['no_rw'];
$tanggal_input = $_POST['tanggal_input'];
$intro = $nama;
$nm = strtoupper($intro);
$intri = $nama_ayah;
$ayah= strtoupper($intri);
$intru = $nama_ibu;
$ibu= strtoupper($intru);
if(empty($nama))
{
die("Isikan Nama!");
}
else
{
$cekdata="select no_surat_kelahiran from tb_kelahiran where no_surat_kelahiran='$no_surat_kelahiran'";
$ada=mysql_query($cekdata) or die(mysql_error());
if(mysql_num_rows($ada)>0)
{ die("No Surat telah Terdaftar!"); }
else{
$q1="insert into tb_kelahiran(no_surat_kelahiran,no_reg_pend,nama,jenis_kelamin,hari,tempat,tanggal_lahir,nama_ibu,nama_ayah,no_kk,no_rt,no_rw,tanggal_input) " .
 "values('$no_surat_kelahiran','$no_reg_pend','$nm','$jenis_kelamin','$hari','$tempat','$tanggal_lahir','$ibu','$ayah','$no_kk','$no_rt','$no_rw','$tanggal_input')"; 
$q2="insert into tb_penduduk(no_reg_pend,nama,jenis_kelamin,tempat,tanggal_lahir,nama_ayah,nama_ibu,no_kk,no_surat_kelahiran,no_rt,no_rw,tanggal_input) select no_reg_pend,nama,jenis_kelamin,tempat,tanggal_lahir,nama_ayah,nama_ibu,no_kk,no_surat_kelahiran,no_rt,no_rw,tanggal_input from tb_kelahiran where no_reg_pend='$no_reg_pend' limit 1"; 
mysql_query($q1)or die(mysql_error());
mysql_query($q2)or die(mysql_error());
echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
location.href="kelahiran.php";</script>';
}
}

?>