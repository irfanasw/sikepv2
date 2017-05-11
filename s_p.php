<?php

include "koneksi.php";
$no_reg_pend=$_GET['no_reg_pend'];
$no_reg_pend=$_POST['no_reg_pend'];
$nama_kk=$_POST['nama_kk'];
$no_kkk=$_POST['no_kkk'];
$no_rt=$_POST['no_rt'];
$no_rw=$_POST['no_rw'];
$tanggal_input = $_POST['tanggal_input'];
$no_surat_pindah=$_POST['no_surat_pindah'];
$alamat_tujuan=$_POST['alamat_tujuan'];
$rt_tujuan=$_POST['rt_tujuan'];
$rw_tujuan=$_POST['rw_tujuan'];
$kec_tujuan=$_POST['kec_tujuan'];
$kab_tujuan=$_POST['kab_tujuan'];
$prov_tujuan=$_POST['prov_tujuan'];
$klsfksi_pindah=$_POST['klsfksi_pindah'];
$jenis_pindah=$_POST['jenis_pindah'];
$alasan=$_POST['alasan'];
$status_kk_pindah=$_POST['status_kk_pindah'];
$status_kk_tdkpindah=$_POST['status_kk_tdkpindah'];
$tanggal_pindah = $_POST['tanggal_pindah'];
$nama=$_POST['nama']; 
$q="insert into tb_sementarapindah( no_reg_pend, nama,nik, jenis_kelamin,tempat, tanggal_lahir,agama,status_nikah,status_hub,pekerjaan, pendidikan,no_kk,no_rt,no_rw) select no_reg_pend, nama,nik, jenis_kelamin,tempat, tanggal_lahir,agama, status_nikah,status_hub,pekerjaan, pendidikan,no_kk,no_rt,no_rw from tb_penduduk where nama='$nama' limit 1";
mysql_query($q)or die(mysql_error());
$q1="insert into tb_pend_pindah(no_surat_pindah,nama_kk,no_kk,no_rt,no_rw,tanggal_pindah,alamat_tujuan,rt_tujuan,rw_tujuan,kec_tujuan,kab_tujuan,prov_tujuan,jenis_pindah,klsfksi_pindah,status_kk_pindah,status_kk_tdkpindah, alasan,tanggal_input) " .
"values('$no_surat_pindah','$nama_kk','$no_kkk','$no_rt','$no_rw','$tanggal_pindah','$alamat_tujuan','$rt_tujuan','$rw_tujuan','$kec_tujuan','$kab_tujuan','$prov_tujuan','$jenis_pindah','$klsfksi_pindah','$status_kk_pindah','$status_kk_tdkpindah','$alasan','$tanggal_input')";
mysql_query($q1)or die(mysql_error());
$query=mysql_query("select * from tb_sementarapindah");
        while($r=mysql_fetch_row($query)){
            mysql_query("insert into tb_detail_pend_pindah(no_surat_pindah,no_reg_pend,nik,nama, jenis_kelamin,tempat, tanggal_lahir,agama,status_nikah, status_hub,pekerjaan, pendidikan,no_rt,no_rw,no_kk)
                        values('$no_surat_pindah','$r[0]','$r[1]','$r[2]','$r[3]','$r[4]','$r[5]','$r[6]','$r[7]','$r[8]','$r[9]','$r[10]','$r[11]','$r[12]','$r[13]')");
             mysql_query("delete from tb_penduduk where no_reg_pend ='$r[0]'")or die(mysql_error());
            }
mysql_query("delete from tb_sementarapindah");
echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
location.href="surat_pindah.php";</script>';
?>