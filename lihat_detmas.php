<?
session_start();

if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
}

include "tanggal.php";
include "koneksi.php";
$no_surat_masuk=$_GET['no_surat_masuk'];
$qrykoreksi=mysql_query("select * from tb_pend_masuk where no_surat_masuk='$no_surat_masuk' LIMIT 1");
$dataku=mysql_fetch_object($qrykoreksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo "Detail Data Penduduk Masuk" ?></title>
<link rel="stylesheet" href="css/table.css" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="img/favicon(1).ico">
    
    <script type="text/javascript" src="js/ajax_login.js"></script>
<script type="text/javascript">
function logout(){
    if(confirm("Logout ?")){
        doLogout();
    }
}
</script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="menu.php"><img src="img/2.png" width="700px" style="margin-top: -10px;"/></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="margin-top: 20px;margin-right: 30px;">
                <i class="fa fa-user fa-fw"></i> Hai, <b style="color: #fff;"><?php echo $_SESSION['my_name'];?></b> |
                 <a href="#" onclick="javascript:logout()" title="Logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <center><li ><b style="color: #fff;"><i class="fa  fa-calendar fa-fw"></i><?php  echo $cetak_date ?></b></li></center>
                        </li>
                        <li >
                            <a   href="menu.php"><i class="fa fa-home fa-fw"></i>     Home</a>
                        </li>
                        <li  >
                            <a href="#"><i class="fa fa-file fa-fw"></i> File<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="penduduk.php"><i class="fa fa-user fa-fw"></i>    Data Penduduk</a>
                                </li>
                                <li>
                                    <a href="kk.php"><i class="fa fa-group fa-fw"></i>   Data KK</a>
                                </li>
                                <li>
                                    <a href="ktp.php"><i class="fa fa-credit-card fa-fw"></i>   Data KTP</a>
                                </li>
                                <li>
                                    <a href="rt.php"><i class="fa fa-table fa-fw"></i>   Data RT/RW</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li class="active" >
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i>  Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="kelahiran.php"><i class="fa fa-plus-circle fa-fw"></i>    Kelahiran</a>
                                </li>
                                <li>
                                    <a href="kematian.php"><i class="fa fa-minus-circle fa-fw"></i> Kematian</a>
                                </li>
                                <li>
                                    <a class="active"  href="pend_masuk.php"><i class="fa fa-arrow-circle-o-right fa-fw"></i>   Penduduk Masuk</a>
                                </li>
                                <li>
                                    <a href="pend_pindah.php"><i class="fa fa-arrow-circle-o-left fa-fw"></i>  Penduduk Pindah</a>
                                </li>
                                <li>
                                    <a href="surat.php"><i class="fa fa-envelope-o fa-fw"></i>    Surat-surat</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-book fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a  href="laporan.php"><i class="fa fa-book fa-fw"></i>    Kependudukan</a>
                                </li>
                                <li >
                                    <a href="lap_kk.php"><i class="fa fa-user fa-fw"></i>  Data Penduduk </a>
                                </li>
                                <li >
                                    <a href="lap_surat_domisili.php"><i class="fa fa-envelope fa-fw"></i>  Data Surat </a>
                                </li>
                                <li>
                                    <a href="grafik.php"><i class="fa fa-bar-chart-o fa-fw"></i>    Grafik</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-archive fa-fw"></i> Utility<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="backup.php"><i class="fa fa-files-o fa-fw"></i>    Backup</a>
                                </li>
                                <li>
                                    <a href="restore.php"><i class="fa fa-paste fa-fw"></i>    Restore</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Data Penduduk Masuk, <small>dari Kepala Keluarga <b><?php echo $dataku->nama_kk?></b></small>
                        </h1>
                        
                    </div>
                </div>
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <center>Data Penduduk Masuk</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-12">
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                    
                                        <table align="center" class="table table-striped   ">
                                        <tr>
                                        <td>No Surat Masuk</td><td>:</td>
                                        <td><?php echo $dataku->no_surat_masuk?></td>
                                        
                                        <td> Alamat Asal </td><td>:</td>
                                        <td ><?php echo $dataku->alamat_sebelum ?></td>
                                        
                                        </tr>
                                        <tr>
                                        <td> Nama KK </td><td>:</td>
                                        <td><?php echo $dataku->nama_kk ?></td>
                                        
                                        <td> RT/RW Asal </td><td>:</td>
                                        <td><?php echo $dataku->rt_sebelum ?> / <?php echo $dataku->rw_sebelum ?></td>
                                        </tr>
                                        <tr>
                                        <td> No KK </td><td>:</td>
                                        <td><?php echo $dataku->no_kk ?></td>
                                        <td> Kec. Asal </td><td>:</td>
                                        <td ><?php echo $dataku->kec_sebelum ?></td>
                                        </tr>
                                        <tr>
                                        <td> RT/RW </td><td>:</td>
                                        <td><?php echo $dataku->no_rt ?> / <?php echo $dataku->no_rw ?></td>
                                        <td> Kab. Tujuan </td><td>:</td>
                                        <td ><?php echo $dataku->kec_sebelum ?></td>
                                        </tr>
                                        <tr>
                                        <td> Alasan </td><td>:</td>
                                        <td>
                                        <?php
                                        if($dataku->alasan=='1'){
                                            echo "Pekerjaan";
                                        }else if($dataku->alasan=='2'){
                                            echo "Pendididikan";
                                        }else if($dataku->alasan=='3'){
                                            echo "Keamanan";
                                        }else if($dataku->alasan=='4'){
                                            echo "Kesehatan";
                                        }else if($dataku->alasan=='5'){
                                            echo "Perumahan";
                                        }else if($dataku->alasan=='6'){
                                            echo "Keluarga";
                                        }else if($dataku->alasan=='7'){
                                            echo "Lainnya";
                                        }
                                        ?>
                                        </td>
                                        <td> Prov Asal </td><td>:</td>
                                        <td ><?php echo $dataku->prov_sebelum ?></td></tr>
                                        <tr>
                                        <td>Klasifikasi Pindah </td><td>:</td>
                                        <td>
                                        <?php
                                        if($dataku->klsfksi_pindah=='1'){
                                            echo "Dalam Satu Desa/Kelurahan";
                                        }else if($dataku->klsfksi_pindah=='2'){
                                            echo "Antar Desa/Kelurahan";
                                        }else if($dataku->klsfksi_pindah=='3'){
                                            echo "Antar Kecamatan";
                                        }else if($dataku->klsfksi_pindah=='4'){
                                            echo "Antar Kab/Kota";
                                        }else if($dataku->klsfksi_pindah=='5'){
                                            echo "Antar Provinsi";
                                        }
                                        ?>
                                        </td>
                                        <td> Status Nomor KK<br />Bagi Yang Pindah </td><td>:</td>
                                        <td>
                                        <?php
                                        if($dataku->status_kk_pindah=='1'){
                                            echo "Numpang KK";
                                        }else if($dataku->status_kk_pindah=='2'){
                                            echo "Membuat KK Baru";
                                        }else if($dataku->status_kk_pindah=='3'){
                                            echo "Nama Kep. Keluarga dan Nomor KK Tetap";
                                        }
                                        ?>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>Jenis Pindah </td><td>:</td>
                                        <td>
                                        <?php
                                        if($dataku->jenis_pindah=='1'){
                                            echo "Kepala Keluarga";
                                        }else if($dataku->jenis_pindah=='2'){
                                            echo "Kepala Keluarga dan Seluruh Anggota Keluarga";
                                        }else if($dataku->jenis_pindah=='3'){
                                            echo "Kepala Keluarga dan Sbg Anggota Keluarga";
                                        }else if($dataku->jenis_pindah=='4'){
                                            echo "Anggota Keluarga";
                                        }
                                        ?>
                                        </td>
                                        <td> Tanggal Masuk </td><td>:</td>
                                        <td><?php echo $dataku->tanggal_input ?></td>
                                        
                                        </tr>
                                        <tr>
                                        <td colspan="6"><b>Anggota Keluarga Yang Masuk :</b></td>
                                        </tr>
                                        </table>
                                    </div>
                               </div> 
                            </div> 
                            <div class="col-lg-12">
                              <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <table align="center" class="table table-striped table-bordered table-hover ">
                                            <thead style="background: #d43f3a;color: #fff;">
                                            <tr> 
                                            <th align="center">No</th>
                                            <th align="center" >Nama</th>
                                            <th align="center">Jenis Kelamin</th>
                                            <th align="center">Tempat</th>
                                            <th align="center">Tanggal Lahir</th>
                                            <th align="center">No Akta Lahir</th>
                                            <th align="center">Agama</th>
                                            </tr>
                                            </thead>
                                                <?
                                                $no_surat_masuk=$_GET['no_surat_masuk'];
                                                $myquery="select * from   tb_detail_pend_masuk where no_surat_masuk='$no_surat_masuk' order by status_hub desc";
                                                $no=1;
                                                
                                                $daftar=mysql_query($myquery) or die (mysql_error());
                                                while($dataku=mysql_fetch_object($daftar))
                                                {
                                                ?>
                                            <tbody style="color: #000;">
                                            <tr>
                                            <td width="10px" align="center"><?php echo $no;?></td>
                                            <td width="150px"><?php echo $dataku->nama?></td>
                                            <td width="120px" align="center"><?php echo $dataku->jenis_kelamin?></td>
                                            <td width="100px" align="center"><?php echo $dataku->tempat?></td>
                                            <td width="100px" align="center"><?php echo $dataku->tanggal_lahir?></td>
                                            <td width="100px" align="center"><?php echo $dataku->no_akta?></td>
                                            <td width="100px" align="center"><?php echo $dataku->agama?></td>
                                            </tr>
                                                <?php
                                                $no++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                
                                        <table align="center" class="table table-striped table-bordered table-hover" >
                                            <thead style="background: #d43f3a;color: #fff;">
                                            <tr> 
                                            <th align="center">No</th>
                                            <th align="center">Status Nikah</th>
                                            <th align="center">Tanggal Nikah</th>
                                            <th align="center">No Akta Nikah</th>
                                            <th align="center">Tanggal Cerai</th>
                                            <th align="center">No Akta Cerai</th>
                                            <th align="center">Status Hubungan</th>
                                            </tr>
                                            </thead>
                                                <?
                                                $no_surat_masuk=$_GET['no_surat_masuk'];
                                                $myquery="select * from tb_detail_pend_masuk where no_surat_masuk='$no_surat_masuk' order by status_hub desc";
                                                $no=1;
                                                
                                                $daftar=mysql_query($myquery) or die (mysql_error());
                                                while($dataku=mysql_fetch_object($daftar))
                                                {
                                                ?>
                                            <tbody style="color: #000;">
                                            <tr>
                                            <td width="10px" align="center"><?php echo $no;?></td>
                                            <td width="100px" align="center"><?php echo $dataku->status_nikah?></td>
                                            <td width="120px" align="center"><?php echo $dataku->tanggal_nikah?></td>
                                            <td width="150px" align="center"><?php echo $dataku->no_akta_nikah?></td>
                                            <td width="120px" align="center"><?php echo $dataku->tanggal_cerai?></td>
                                            <td width="150px" align="center"><?php echo $dataku->no_akta_cerai?></td>
                                            <td width="150px" align="center"><?php echo $dataku->status_hub?></td>
                                            </tr>
                                                <?php
                                                $no++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <table align="center" class="table table-striped table-bordered table-hover ">
                                            <thead style="background: #d43f3a;color: #fff;">
                                            <tr>
                                            <td>No</td> 
                                            <th align="center">Pendidikan</th>
                                            <th align="center">Pekerjaan</th>
                                            <th align="center">Nama Ibu</th>
                                            <th align="center">Nama Ayah</th>
                                            <th align="center">RT/RW</th>
                                            <th align="center">NO KK</th>
                                            <th align="center">NIK</th>
                                            
                                            </tr>
                                            </thead>
                                                <?
                                                $no_surat_masuk=$_GET['no_surat_masuk'];
                                                $myquery="select * from   tb_detail_pend_masuk where no_surat_masuk='$no_surat_masuk' order by status_hub desc";
                                                $no=1;
                                                
                                                $daftar=mysql_query($myquery) or die (mysql_error());
                                                while($dataku=mysql_fetch_object($daftar))
                                                {
                                                ?>
                                            <tbody style="color: #000;">
                                            <tr>
                                            <td width="10px" align="center"><?php echo $no;?></td>
                                            <td width="150px"><?php echo $dataku->pendidikan?></td>
                                            <td width="150px"><?php echo $dataku->pekerjaan?></td>
                                            <td width="150px"><?php echo $dataku->nama_ayah?></td>
                                            <td width="150px"><?php echo $dataku->nama_ibu?></td>
                                            <td width="50px"><?php echo $dataku->no_rt?>/<?php echo $dataku->no_rw?></td>
                                            <td width="150px"><?php echo $dataku->no_kk?></td>
                                            <td width="150px"><?php echo $dataku->nik?></td>
                                            </tr>
                                                <?php
                                                $no++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <input name="fulang2" type="button" id="fulang2" value="Kembali" onClick="javascript:history.back()" class="btn btn-warning">
                                    </div>
                               </div> 
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>

