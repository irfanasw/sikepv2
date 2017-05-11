<?php

include "koneksi.php";

$no_reg_kk=$_POST['no_reg_kk'];
$nama_kk=$_POST['nama_kk'];
$no_rt=$_POST['no_rt'];
$no_rw=$_POST['no_rw'];
$tanggal_input = $_POST['tanggal_input'];

$sementara=mysql_query("select *  from tb_sementarakk");   
$jml_anggota = mysql_num_rows($sementara);
$q1="insert into tb_kk(no_reg_kk,nama_kk,no_rt,no_rw,jml_anggota,tanggal_input)values('$no_reg_kk','$nama_kk','$no_rt','$no_rw','$jml_anggota','$tanggal_input')";
mysql_query($q1)or die(mysql_error());
$query=mysql_query("select * from tb_sementarakk");
        while($r=mysql_fetch_row($query)){
            mysql_query("insert into tb_detail_kk(no_reg_kk,no_reg_pend,nik,nama, jenis_kelamin,tempat, tanggal_lahir,no_akta, agama,status_nikah,no_akta_nikah,tanggal_nikah,no_akta_cerai,tanggal_cerai, status_hub, pendidikan,pekerjaan,nama_ayah,nama_ibu,no_rt,no_rw)
                        values('$no_reg_kk','$r[0]','$r[1]','$r[2]','$r[3]','$r[4]','$r[5]','$r[6]','$r[7]','$r[8]','$r[9]','$r[10]','$r[11]','$r[12]','$r[13]','$r[14]','$r[15]','$r[16]','$r[17]','$r[18]','$r[19]')");
            }




 mysql_query("delete from tb_sementarakk");
echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
location.href="kk.php";</script>';



?>