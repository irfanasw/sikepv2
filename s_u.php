<?php
                                    include "koneksi.php";
                                    $no_surat=$_POST['no_surat'];
                                    $nik=$_POST['nik'];
                                    $nama=$_POST['nama'];
                                    $tempat=$_POST['tempat'];
                                    $tanggal_lahir =  $_POST['tanggal_lahir'];
                                    $jenis_kelamin=$_POST['jenis_kelamin'];
                                    $agama=$_POST['agama'];
                                    $pekerjaan=$_POST['pekerjaan'];
                                    $no_rt=$_POST['no_rt'];
                                    $no_rw=$_POST['no_rw'];
                                    $tanggal_input = $_POST['tanggal_input'];
                                    $umur=$POST['umur'];
                                    $oleh=$_POST['oleh'];
                                     $usaha = $_POST['usaha'];
                                    mysql_query("insert into tb_surat_usaha(no_surat, nik,nama,jenis_kelamin,tempat,tanggal_lahir, agama,pekerjaan,no_rt,no_rw,tanggal_input,usaha,oleh) " .
                                     "values('$no_surat','$nik','$nama','$jenis_kelamin','$tempat','$tanggal_lahir','$agama','$pekerjaan','$no_rt','$no_rw','$tanggal_input','$usaha','$oleh')") or die(mysql_error());
                                    echo '<script type="text/javascript">alert("Data baru telah ditambahkan, Silahkan tunggu...");
                                    location.href="surat_usaha.php";</script>';
                                    ?>