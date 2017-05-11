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
<style type="text/css">
      .scroll{
       width:auto;
       height:300px;
       overflow:scroll;
      }
    </style>
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

                        <li >
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i>  Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="kelahiran.php"><i class="fa fa-plus-circle fa-fw"></i>    Kelahiran</a>
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
                        <li class="active" >
                            <a href="#"><i class="fa fa-book fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a  href="laporan.php"><i class="fa fa-book fa-fw"></i>    Kependudukan</a>
                                </li>
                                <li >
                                    <a  href="lap_kk.php"><i class="fa fa-user fa-fw"></i>  Data Penduduk </a>
                                </li>
                                <li >
                                    <a class="active" href="lap_surat_domisili.php"><i class="fa fa-envelope fa-fw"></i>  Data Surat </a>
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
                            Laporan Data Surat Pengantar
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-comments"></i>  <a href="lap_surat_domisili.php" style="color: #1484CE;">Domisili</a>
                            </li>
                            <li>
                                <i class="fa fa-tasks"></i>  <a href="lap_skck.php" style="color: #1484CE;">SKCK</a>
                            </li>
                            <li>
                                <i class="fa fa-shopping-cart"></i>  <a href="lap_sku.php" style="color: #1484CE;">SKU</a>
                            </li>
                            <li>
                                <i class="fa fa-support"></i>  <a href="lap_sktm.php" style="color: #1484CE;">SKTM</a>
                            </li>
                            <li>
                                <i class="fa fa-file-o"></i>  <a href="lap_surat_lain.php" style="color: #1484CE;">Surat Lain</a>
                            </li>
                            
                        </ol>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>Laporan Surat Keterangan Usaha (SKU)</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <div class="col-lg-7">
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                     <?php
                                        include "koneksi.php";
                                        include "tgl_indo.php";
                                     ?> 
                                     <div align="center"><label>Tentukan Periode Register SKU</label></div>
                                     <form action="" method="get">
                                    	<div class="form-group" >
                                        <label class="radio-inline">
                                            <div class="controls input-append date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input size="16" type="text" name="tanggal_awal"  required="" class="form-control"/>
                                            <span class="add-on"><i class="icon-remove"></i></span>
                                					<span class="add-on"><i class="icon-th"></i></span>
                                            </div>
                                        </label>
                                       <label class="radio-inline">sampai dengan</label>
                          				<label class="radio-inline">
                                            <div class="controls input-append date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input size="16" type="text" name="tanggal_akhir"  required="" class="form-control"/>
                                            <span class="add-on"><i class="icon-remove"></i></span>
                         					<span class="add-on"><i class="icon-th"></i></span>
                                            </div>
                                        </label>
                          			<label><button type="submit" name="search" class="btn btn-warning">Search</button></label>
                                        
                    				</form>    
                                    </div>
                               </div> 
                            </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="panel panel-default">
                                    <div class="panel-heading" align="center">
                                    <div align="center"><label></label></div>
                                        <label>
                                        <form action="laporan?id=<?php echo $_GET['tanggal_awal']?>">
                                        <a href='export/lap_sku_excel.php?firstdate=<?php echo $_GET['tanggal_awal']?>&lastdate=<?php echo $_GET['tanggal_akhir']?>&nb=<?php echo $_POST['nasabah']?>'
                                    	target='_blank'
                                    	class="btn btn-primary" ><i class='fa fa-download'></i> Excel</a>
                                        </form>
                                        </label>
                                        <label>
                                        <form action="laporan?id=<?php echo $_GET['tanggal_awal']?>">
                                        <a href='export/lap_sku_pdf.php?firstdate=<?php echo $_GET['tanggal_awal']?>&lastdate=<?php echo $_GET['tanggal_akhir']?>&nb=<?php echo $_POST['nasabah']?>'
                                    	target='_blank'
                                    	class="btn btn-danger" ><i class='fa fa-download'></i> PDF</a>
                                        </form>
                                        </label>
                                        <label>
                                        <form action="laporan?id=<?php echo $_GET['tanggal_awal']?>">
                                        <a href='export/lap_sku_cetak.php?firstdate=<?php echo $_GET['tanggal_awal']?>&lastdate=<?php echo $_GET['tanggal_akhir']?>&nb=<?php echo $_POST['nasabah']?>'
                                    	target='_blank'
                                    	class="btn btn-warning" ><i class='fa fa-print'></i>cetak</a>
                                        </form>
                                        </label>
                                        <div align="center"><label></label></div>
                                    </div>
                               </div> 
                            </div>
                            <div class="col-lg-12">
                              <div class="panel panel-warning">
                                    <div class="panel-heading">
                                            <b>Tabel Informasi : </b> Pencarian data register SKU dari tanggal <b><?php echo $_GET['tanggal_awal']?></b> sampai dengan tanggal <b><?php echo $_GET['tanggal_akhir']?></b>
                                            <center>

                                    </div>
                                    <div class="panel-heading scroll">
                                        <table align="center" class="table table-striped table-bordered table-hover " >
                                            
                                            <thead>
                                            <tr   style="background: #ec971f;color: #fff;"> 
                                            <th align="center">No</th>
                                            <th align="center">Tanggal Input</th>
                                            <th align="center">No Surat</th>
                                            <th align="center">Nama</th>
                                            <th align="center">Jenis kelamin</th> 
                                            <th align="center">TTL</th>
                                            <th align="center">RT/RW</th> 
                                            
                                            </tr>
                                            </thead>
                                                                                        
                                             <?php
                                             include "koneksi.php";
                                                $txtcari=$_GET['search'];
                                            	$tanggal_awal=$_GET['tanggal_awal'];
                                            	$tanggal_akhir=$_GET['tanggal_akhir'];
                                            	if(isset($txtcari)){
                                        		  if(empty($tanggal_awal) and empty($tanggal_akhir)){
                                            		$sql = mysql_query("SELECT DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    no_surat, nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    no_rt,no_rw from tb_surat_usaha ");
                                            		}else{
                                            		$sql = mysql_query("SELECT DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    no_surat, nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    no_rt,no_rw from tb_surat_usaha where
                                                    tanggal_input BETWEEN '$tanggal_awal' and '$tanggal_akhir' ");
                                                    }
                                          		}else{
                                            		$sql = mysql_query("SELECT DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    no_surat, nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    no_rt,no_rw from tb_surat_usaha
                                            		 ");
                                        		}
                                        		$no =  1;		
                                        		while ($r=mysql_fetch_array($sql)){				
                                        		
                                        		?>
                                                
                                                <tbody >
                                        		<tr><td width="25px"><?php echo $no; ?></td>
                                        		<td ><?php echo $r['tanggal_input'] ?></td>
                                        		<td ><?php echo $r['no_surat']; ?></td>
                                                <td ><?php echo $r['nama']; ?></td>
                                                <td ><?php echo $r['jenis_kelamin']; ?></td>
                                                <td ><?php echo $r['tempat']; ?>, <?php echo $r['tanggal_lahir']; ?></td>
                                        		<td ><?php echo $r['no_rt']; ?>/<?php echo $r['no_rw']; ?></td>
                                                </tr>
                                        		<?php $no++; } ?></tbody>  
                                        </table>
                                
                                        
                                      
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
<script type="text/javascript" src="calender/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="calender/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="calender/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="calender/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
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

