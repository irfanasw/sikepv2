<?
session_start();

if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
}
include "koneksi.php";
include "tanggal.php";
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
    <link href="css/table.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

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


<script type="text/javascript" src="assets/js/jquery.js"></script>
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
                            <small>Data</small> Kelahiran
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="menu.php" style="color: #1484CE;">Home</a>
                            </li>
                            <li>
                                <i class="fa fa-shopping-cart"></i>   Transaksi
                            </li>
                            <li class="active">
                                <i class="fa fa-plus-circle"></i> Kelahiran
                            </li>
                        </ol>
                    </div>
                </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <center>Semua Data Kelahiran</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                
                                 <form name="FLaporan" method="post" action="input_kelahiran.php">
                                    <center><input name="fok" type="submit" id="fok" value="Input Data" class="btn btn-outline btn-success" style="margin-bottom: 10px;" title="Input Data Kelahiran">
                                    </center>
                                </form>  
                                <form name="FLaporan" method="post" action="hapus_banyak_kelahiran.php" onsubmit="return confirm('Hapus data terpilih?')" >
                                    
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
                                    <tr  style="background: #4cae4c;color: #fff;"> 
                                    <th align="center">&nbsp;</th>
                                    <th align="center">No</th>
                                    <th>No Surat</th>
                                    <th align="center">Nama</th>
                                    <th align="center">JK</th>
                                    <th align="center">TTL</th>
                                    <th align="center">Ibu/Ayah</th>
                                    <th align="center">RT/ RW</th>
                                     
                                      <th align="center">Tanggal Input</th>
                                       
                                    </tr>
                                    </thead>
                                    <?
                                    $myquery="select no_surat_kelahiran, nama, jenis_kelamin, hari, tempat,
                                     DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir, nama_ibu, nama_ayah,
                                     no_kk, no_rt, no_rw,DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input from tb_kelahiran";
                                    $no=1;
                                    
                                    $daftar=mysql_query($myquery) or die (mysql_error());
                                    while($dataku=mysql_fetch_object($daftar))
                                    {
                                    ?>
                                    <tr>
                                    <td align="center" width="35px">
                                    <input type="checkbox" name="item[]" id="item[]" value="<?php echo $dataku->no_surat_kelahiran?>" title="Tandai" />
                                    <a href="export/kelahiran_cetak.php?no_surat_kelahiran=<?php echo $dataku->no_surat_kelahiran?>"  title="Cetak" style="color: #1484CE;"  ><i class="fa fa-print"></i></a><br />
                                    <a href="edit_kelahiran.php?no_surat_kelahiran=<?php echo $dataku->no_surat_kelahiran?>" title="Edit" style="color: #1484CE;"><i class="fa fa-pencil"></i></a>          
                                    <a href="hapus_kelahiran.php?no_surat_kelahiran=<?php echo $dataku->no_surat_kelahiran?>" title="Hapus" style="color: #1484CE;" onclick="return confirm('Hapus data terpilih?')"><i class="fa fa-trash-o"></i></a>
                                    
                                    </td>
                                    <td width="15px" align="center"><?php echo $no;?></td>
                                    <td width="100px" align="center"><?php echo $dataku->no_surat_kelahiran?></td>
                                    <td width="100px" align="center"><?php echo $dataku->nama?></td>
                                    <td width="20px" align="center"><?php echo $dataku->jenis_kelamin?></td>
                                    <td width="80px" align="center"><?php echo $dataku->tempat?><br /><?php echo $dataku->hari?><br /><?php echo $dataku->tanggal_lahir?></td>
                                    <td width="100px" align="center"><?php echo $dataku->nama_ibu?>/<br /><?php echo $dataku->nama_ayah?></td>
                                    <td width="50px" align="center"><?php echo $dataku->no_rt?>/<?php echo $dataku->no_rw?></td>
                                    
                                    
                                    <td width="80px" align="center"><?php echo $dataku->tanggal_input?></td>
                                    
                                    </tr>
                                    
                                    <?php
                                    $no++;
                                    }
                                    ?>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                                    
                                    <input  title="Hapus Banyak" name="fok11" type="submit" id="fok11" value="Hapus Banyak" class="btn btn-danger"  style="margin-top: 10px;">
                            </form>
                                    
                            </div>
                            <!-- /.table-responsive -->
                            
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

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>

