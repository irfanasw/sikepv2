<?php



include "koneksi.php";
                                    $nama=$_POST['nama']; 
                                    $nik=$_POST['nik']; 
                                    $no_surat=$_POST['no_surat'];
                                    $nik=$_POST['nik'];
                                    $nama=$_POST['nama'];
                                    $agama=$_POST['agama'];
                                    $tempat=$_POST['tempat'];
                                    $tanggal_lahir =  $_POST['tanggal_lahir'];
                                    $jenis_kelamin=$_POST['jenis_kelamin'];
                                    $agama=$_POST['agama'];
                                    $status_nikah=$_POST['status_nikah'];
                                    $pendidikan=$_POST['pendidikan'];
                                    $pekerjaan=$_POST['pekerjaan'];
                                    $nama_ayah=$_POST['nama_ayah'];
                                    $nama_ibu=$_POST['nama_ibu'];
                                    $no_kk=$_POST['no_kk'];
                                    $no_rt=$_POST['no_rt'];
                                    $no_rw=$_POST['no_rw'];
                                    $tanggal_input = $_POST['tanggal_input'];
                                    $umur=$POST['umur'];
                                    $oleh=$_POST['oleh'];
                                    mysql_query("insert into tb_surat_domisili(no_surat, nik,nama,jenis_kelamin,tempat,tanggal_lahir, status_nikah,pekerjaan,no_rt,no_rw,tanggal_input,oleh) " .
                                     "values('$no_surat','$nik','$nama','$jenis_kelamin','$tempat','$tanggal_lahir','$status_nikah','$pekerjaan','$no_rt','$no_rw','$tanggal_input','$oleh')") or die(mysql_error());
                                    echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
                                    location.href="surat_domisili.php";</script>';

?>