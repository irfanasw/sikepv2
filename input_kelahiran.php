<?
session_start();

if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
}

include "tanggal.php";
include "koneksi.php";
$query = "SELECT max(no_surat_kelahiran) as maxKODE FROM tb_kelahiran";

    $hasil = mysql_query($query);
    $data = mysql_fetch_array($hasil);
    $idMax = $data['maxKODE'];
    $noUrut = (int) substr($idMax, 6, 3);
    $noUrut++;
    $char="474.1/";
    $tanda="/";
    $tahun= date('Y');
    $newNo = $char . sprintf("%03s", $noUrut)  . $tanda . $tahun;
    
$query = "SELECT max(no_reg_pend) as maxKODE FROM tb_penduduk";

    $hasil = mysql_query($query);
    $data = mysql_fetch_array($hasil);
    $idMax = $data['maxKODE'];
    $noUrut = (int) substr($idMax, 3, 5);
    $noUrut++;
    $char="Reg";
    $newID = $char . sprintf("%05s", $noUrut);
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
                                    <a class="active" href="kelahiran.php"><i class="fa fa-plus-circle fa-fw"></i>    Kelahiran</a>
                                </li>
                                <li>
                                    <a href="kematian.php"><i class="fa fa-minus-circle fa-fw"></i> Kematian</a>
                                </li>
                                <li>
                                    <a  href="pend_masuk.php"><i class="fa fa-arrow-circle-o-right fa-fw"></i>   Penduduk Masuk</a>
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
                        <li  >
                            <a href="#"><i class="fa fa-book fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a  href="laporan.php"><i class="fa fa-book fa-fw"></i>    Kependudukan</a>
                                </li>
                                <li >
                                    <a  href="lap_kk.php"><i class="fa fa-user fa-fw"></i>  Data Penduduk </a>
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
                            <small>Input</small> Data Kelahiran
                        </h1>
                        
                    </div>
                </div>
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <center>Form Input Data Kelahiran</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="tes" method="post" action="simpan_kelahiran.php" onsubmit="return confirm('Apakah Yakin Untuk Menyimpan?')">
                                    <div class="form-group">
                                     <label>No Surat</label> 
                                     <input class="form-control" type="text" name="no_surat_kelahiran" id="no_surat_kelahiran" value="<?php echo $newNo; ?>" style="background: #bab7a8;" size="20" maxlength="20"/>
                                    <input class="form-control" type="hidden" name="no_reg_pend" id="no_reg_pend" readonly="" value="<?php echo $newID; ?>" style="background: #bab7a8;" size="10" maxlength="10"/>
                                    </div>
                                    <div class="form-group">
                                     <label>Nama</label> 
                                     <input class="form-control" type="text" name="nama" id="nama" size="50" maxlength="30"/>
                                    </div>
                                    <div class="form-group">
                                     <label>Jenis Kelamin</label> 
                                     <div class="radio">
                                        <label>
                                            <input name="jenis_kelamin" type="radio" value="Laki-laki" checked>Laki-laki
                                        </label>
                                        <label class="radio-inline"></label>
                                        <label class="radio-inline">
                                            <input name="jenis_kelamin" type="radio" value="Perempuan" >Perempuan
                                        </label>
                                     </div>
                                    </div>
                                    <div class="form-group">
                                     <label>Tempat</label> 
                                     <input class="form-control" type="text" name="tempat" id="tempat" size="30" maxlength="15"/>
                                    </div>
                                    <div class="form-group">
                                     <label>Hari</label> 
                                     <div>
                                        <label>
                                           <select name="hr"  id="hr" class="form-control">
                                        <option value=- selected>- pilih -</option>
                                        <option value="Senin">Senin</option> 
                                        <option value="Selasa">Selasa</option> 
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option> 
                                        <option value="Jum'at">Jum'at</option> 
                                        <option value="Sabtu">Sabtu</option> 
                                        <option value="Ahad">Ahad</option>  
                                        </select>
                                        </label>
                                        <label class="radio-inline">
                                        <select name="pasaran" id="pasaran" class="form-control">
                                        <option value=- selected>- pilih -</option>
                                        <option value="Legi">Legi</option> 
                                        <option value="Pahing">Pahing</option> 
                                        <option value="Pon">Pon</option>
                                        <option value="Wage">Wage</option> 
                                        <option value="Kliwon">Kliwon</option> 
                                        </select>
                                        </label>
                                        
                                     </div>
                                    </div>
                                    <div class="form-group">
                                     <label>Tanggal Lahir</label> 
                                     <div>
                                        <label>
                                           <select name="tgl_lhr" size="1" id="tgl_lhr" class="form-control">
                                        <?php
                                        for ($i=1;$i<=31;$i++)
                                        {
                                        echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                        </select>
                                        </label>
                                        <label class="radio-inline">
                                        <select name="bln_lhr" size="1" id="bln_lhr" class="form-control">
                                        <?php
                                        $bulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                        for ($i=1;$i<=12;$i++)
                                        {
                                        echo "<option value=".$i.">".$bulan[$i]."</option>";
                                        }
                                        ?>
                                        </select>
                                        </label>
                                        <label class="radio-inline">
                                            <select name="thn_lhr" size="1" id="thn_lhr" class="form-control">
                                        <?php
                                        for ($i=1900;$i<=3000;$i++)
                                        {
                                        echo "<option value=".$i.">".$i."</option>";
                                        }
                                        ?>
                                        </select>
                                        </label>
                                     </div>
                                    </div>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                     <label>Nama Ayah </label> 
                                    <input class="form-control" type="text" name="nama_ayah" id="nama_ayah" size="50" maxlength="30"/>
                                    </div>
                                    <div class="form-group">
                                     <label>Nama Ibu </label> 
                                     <input class="form-control" type="text" name="nama_ibu" id="nama_ibu" size="50" maxlength="30"/>
                                    </div>
                                    <div class="form-group">
                                     <label>No KK</label> 
                                     <input class="form-control" type="text" name="no_kk" id="no_kk" size="30" maxlength="16"/>
                                    </div>
                                    <div class="form-group">
                                     <label>RT/RW</label> 
                                     <div>
                                        <label>
                                            <input class="form-control" type="text" name="no_rt" id="no_rt" size="2" maxlength="2"/>
                                        </label>
                                        <label>
                                            <input class="form-control" type="text" name="no_rw" id="no_rw" size="2" maxlength="2"/>
                                        </label>
                                     </div>
                                    </div>
                                    <div class="form-group">
                                     <label>Tanggal Input </label> 
                                     <input class="form-control" type="text" name="tanggal_input" id="tanggal_input" size="10" value="<?php echo $cetak =date('Y-m-d') ?>"/>
                                    </div> 
                                    <input name="fok" type="submit" id="fok" value="Simpan" class="btn btn-primary">
                                    <input name="fulang" type="reset" id="fulang" value="Reset" class="btn btn-default">
                                    <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-warning">
                                    
                                </div>
                                
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) --> 
                            
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

