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

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
    <script type="text/javascript" src="js/titlebar.js"></script>
    <script type="text/javascript" src="js/ajax_login.js"></script>
<script type="text/javascript">
function logout(){
    if(confirm("Logout ?")){
        doLogout();
    }
}
</script>
<link rel="stylesheet" href="css/table.css" />
<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/ui/jquery-ui.js"></script>

<script>
    $(function() {
        $( "#nama_kk" ).autocomplete({
            source: "get_penduduk.php",
            minLength: 1,
            select: function( event, ui ) { 
            $('#no_kkk').val(ui.item.no_kk);
            $('#no_rt').val(ui.item.no_rt);
            $('#no_rw').val(ui.item.no_rw);
            
            }
        });
    });
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

                        <li class="active">
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i>  Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="kelahiran.php"><i class="fa fa-plus-circle fa-fw"></i>    Kelahiran</a>
                                </li>
                                <li>
                                    <a href="kematian.php"><i class="fa fa-minus-circle fa-fw"></i> Kematian</a>
                                </li>
                                <li>
                                    <a class="active" href="pend_masuk.php"><i class="fa fa-arrow-circle-o-right fa-fw"></i>   Penduduk Masuk</a>
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
                            <small>Edit</small> Data Masuk
                        </h1>
                        
                    </div>
                </div>
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <center>Form Edit Data Pindah</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <div class="col-lg-12">
                              <div class="panel panel-warning">
                                    <div class="panel-heading">
                                    <div class="panel-body">
                                    <div class="row">
                                    <div class="col-lg-6">
                                        <form name="tes" method="post" action="update_pend_masuk.php" onsubmit="return confirm('Yakin Update?')" >
                                        
                                         <div class="form-group">
                                            <label>No Surat Masuk</label> 
                                            <input class="form-control" type="text" name="no_surat_masuk" id="no_surat_masuk"  size="30" maxlength="30" value="<?php echo $dataku->no_surat_masuk?>" readonly="" style="background: #999;"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nama KK</label> 
                                            <input class="form-control" type="text" name="nama_kk" id="nama_kk" size="50" maxlength="25" placeholder="Ketikkan nama" value="<?php echo $dataku->nama_kk?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>No KK</label> 
                                            <input class="form-control" type="text" name="no_kkk" id="no_kkk" size="25" maxlength="25" value="<?php echo $dataku->no_kk?>" />
                                        </div>
                                        <div  class="form-group">
                                            <label>RT/RW </label> 
                                                <div>
                                                <label>
                                                <input class="form-control" type="text" name="no_rt" id="no_rt" size="2" maxlength="2" value="<?php echo $dataku->no_rt?>"/>
                                                </label>
                                                <label>
                                                <input class="form-control" type="text" name="no_rw" id="no_rw" size="2" maxlength="2" value="<?php echo $dataku->no_rw?>"/>
                                                </label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                     <label>Alasan</label> 
                                     <div>
                                        <label>
                                        <select name="alasan" id="alasan" class="form-control" > 
                                       
                                        <?php
                                        if($dataku->alasan=='1'){
                                            echo "<option value='1'>Pekerjaan</option>";
                                        }else if($dataku->alasan=='2'){
                                            echo "<option value='2'>Pendidikan</option>";
                                        }else if($dataku->alasan=='3'){
                                            echo "<option value='3'>Keamanan</option>";
                                        }else if($dataku->alasan=='4'){
                                            echo "<option value='4'>Kesehatan</option>";
                                        }else if($dataku->alasan=='5'){
                                            echo "<option value='5'>Perumahan</option>";
                                        }else if($dataku->alasan=='6'){
                                            echo "<option value='6'>Keluarga</option>";
                                        }else if($dataku->alasan=='7'){
                                            echo "<option value='7'>Lainnya</option>";
                                        }
                                        ?>
                                        
                                        
                                        <option value="1">Pekerjaan</option> 
                                        <option value="2">Pendidikan</option> 
                                        <option value="3">Keamanan</option>
                                        <option value="4">Kesehatan</option> 
                                        <option value="5">Perumahan</option> 
                                        <option value="6">Keluarga</option> 
                                        <option value="7">Lainnya</option>
                                        </select>
                                        </label>
                                        
                                     </div>
                                    </div>
                                       <div class="form-group">
                                     <label>Klasifikasi Pindah</label> 
                                     <div>
                                        <label>
                                        <select name="klsfksi_pindah" id="klsfksi_pindah" class="form-control" > 
                                        
                                        <?php
                                        if($dataku->klsfksi_pindah=='1'){
                                            echo "<option value='1'>Dalam Satu Desa/Kelurahan</option>";
                                        }else if($dataku->klsfksi_pindah=='2'){
                                            echo "<option value='2'>Antar Desa/Kelurahan</option>";
                                        }else if($dataku->klsfksi_pindah=='3'){
                                            echo "<option value='3'>Antar Kecamatan</option>";
                                        }else if($dataku->klsfksi_pindah=='4'){
                                            echo "<option value='4'>Antar Kab/Kota</option>";
                                        }else if($dataku->klsfksi_pindah=='5'){
                                            echo "<option value='5'>Antar Provinsi</option>";
                                        }
                                        ?>
                                        
                                        <option value="1">Dalam Satu Desa/Kelurahan</option> 
                                        <option value="2">Antar Desa/Kelurahan</option> 
                                        <option value="3">Antar Kecamatan</option>
                                        <option value="4">Antar Kab/Kota</option> 
                                        <option value="5">Antar Provinsi</option> 
                                        </select>
                                        </label>
                                        
                                     </div>
                                    </div>
                                    <div class="form-group">
                                     <label>Jenis Pindah</label> 
                                     <div>
                                        <label>
                                        <select name="jenis_pindah" id="jenis_pindah" class="form-control" > 
                                        
                                        <?php
                                        if($dataku->jenis_pindah=='1'){
                                            echo "<option value='1'>Kepala Keluarga</option>";
                                        }else if($dataku->jenis_pindah=='2'){
                                            echo "<option value='2'>Kepala Keluarga dan Seluruh Anggota Keluarga</option>";
                                        }else if($dataku->jenis_pindah=='3'){
                                            echo "<option value='3'>Kepala Keluarga dan Sbg Anggota Keluarga</option>";
                                        }else if($dataku->jenis_pindah=='4'){
                                            echo "<option value='4'>Anggota Keluarga</option>";
                                        }
                                        ?>
                                        
                                        <option value="1">Kepala Keluarga</option> 
                                        <option value="2">Kepala Keluarga dan Seluruh Anggota Keluarga</option> 
                                        <option value="3">Kepala Keluarga dan Sbg Anggota Keluarga</option>
                                        <option value="4">Anggota Keluarga</option> 
                                        </select>
                                        </label>
                                        
                                     </div>
                                    </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <form name="tes" method="post" action="simpan_pindah.php" >
                                         <div class="form-group">
                                            <label>Alamat Asal</label> 
                                            <input class="form-control" type="text" name="alamat_sebelum" id="alamat_sebelum" size="20" maxlength="20" value="<?php echo $dataku->alamat_sebelum?>"/>
                                        </div>
                                        <div  class="form-group">
                                            <label>RT/RW Asal </label> 
                                                <div>
                                                <label>
                                                <input class="form-control" type="text" name="rt_sebelum" id="rt_sebelum" size="2" maxlength="2" value="<?php echo $dataku->rt_sebelum?>"/>
                                                </label>
                                                <label>
                                                <input class="form-control" type="text" name="rw_sebelum" id="rw_sebelum" size="2" maxlength="2" value="<?php echo $dataku->rw_sebelum?>"/>
                                                </label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan Asal</label> 
                                            <input class="form-control" type="text" name="kec_sebelum" id="kec_sebelum" size="30" maxlength="15" value="<?php echo $dataku->kec_sebelum?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten Asal</label> 
                                            <input class="form-control" type="text" name="kab_sebelum" id="kab_sebelum" size="30" maxlength="15" value="<?php echo $dataku->kab_sebelum?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>provinsi Asal</label> 
                                            <input class="form-control" type="text" name="prov_sebelum" id="prov_sebelum" size="30" maxlength="15" value="<?php echo $dataku->prov_sebelum?>"/>
                                        </div>
                                        
                                    <div class="form-group">
                                     <label>Status Nomor KK Bagi Yang Pindah</label> 
                                     <div>
                                        <label>
                                        <select name="status_kk_pindah" id="status_kk_pindah" class="form-control" > 
                                       
                                        <?php
                                        if($dataku->status_kk_pindah=='1'){
                                            echo "<option value='1'>Numpang KK</option>";
                                        }else if($dataku->status_kk_pindah=='2'){
                                            echo "<option value='2'>Membuat KK Baru</option>";
                                        }else if($dataku->status_kk_pindah=='3'){
                                            echo "<option value='3'>Nama Kep. Keluarga dan Nomor KK Tetap</option>";
                                        }
                                        ?>
                                      
                                        <option value="1">Numpang KK</option> 
                                        <option value="2">Membuat KK Baru</option> 
                                        <option value="3">Nama Kep. Keluarga dan Nomor KK Tetap</option>
                                        </select>
                                        </label>
                                        
                                     </div>
                                    </div>
                                    <div class="form-group">
                                     <label>Tanggal Input </label> 
                                     <input class="form-control" type="text" name="tanggal_input" id="tanggal_input" size="10" value="<?php echo $dataku->tanggal_input ?>"/>
                                    </div> 
                                     
                                        <input name="fok" type="submit" id="fok" value="Update" class="btn btn-warning">
                                        <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-danger">
                                        </form>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
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

    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>

