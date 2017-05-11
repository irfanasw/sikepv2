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
                                    <a class="active" href="laporan.php"><i class="fa fa-book fa-fw"></i>    Kependudukan</a>
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
                            Laporan Kependudukan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-table"></i>  <a href="laporan.php" style="color: #1484CE;">Periode</a>
                            </li>
                            <li>
                                <i class="fa fa-group"></i>  <a href="lap_penduduk.php" style="color: #1484CE;">Penduduk Per RT/RW</a>
                            </li>
                            
                        </ol>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <center>Data Kependudukan</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-7">
                              <div class="panel panel-default">
                                    <div class="panel-heading" align="center">
                                     <?php
                                        include "koneksi.php";
                                        
                                     ?> 
                                     <div align="center"><label>Tentukan Pencarian Penduduk berdasarkan RT dan RW</label></div>
                                     <form action="" method="get">
                                    	<div class="form-group" >
                                        <label class="radio-inline">RT</label>
                                        <label class="radio-inline">
                                            <div >
                                            <input size="2" type="text" name="rt" id="rt"  required="" class="form-control"/>
                                            <span class="add-on"><i class="icon-remove"></i></span>
                                					<span class="add-on"><i class="icon-th"></i></span>
                                            </div>
                                        </label>
                                       <label class="radio-inline">RW</label>
                          				<label class="radio-inline">
                                            <div >
                                            <input size="2" type="text" name="rw" id="rw"  required="" class="form-control"/>
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
                                        <form action="laporan?id=<?php echo $_GET['rt']?>">
                                        <a href='export/lap_rtrw_excel.php?rt=<?php echo $_GET['rt']?>&rw=<?php echo $_GET['rw']?>&nb=<?php echo $_POST['nasabah']?>'
                                    	target='_blank'
                                    	class="btn btn-primary" ><i class='fa fa-download'></i> Excel</a>
                                        </form>
                                        </label>
                                        <label>
                                        <form action="laporan?id=<?php echo $_GET['rt']?>">
                                        <a href='export/lap_rtrw_pdf.php?rt=<?php echo $_GET['rt']?>&rw=<?php echo $_GET['rw']?>&nb=<?php echo $_POST['nasabah']?>'
                                    	target='_blank'
                                    	class="btn btn-danger" ><i class='fa fa-download'></i> PDF</a>
                                        </form>
                                        </label>
                                        <label>
                                        <form action="laporan?id=<?php echo $_GET['rt']?>">
                                        <a href='export/lap_rtrw_cetak.php?rt=<?php echo $_GET['rt']?>&rw=<?php echo $_GET['rw']?>&nb=<?php echo $_POST['nasabah']?>'
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
                                            <b>Tabel Informasi : </b> Pencarian data penduduk dari RT <b><?php echo $_GET['rt']?></b> RW <b><?php echo $_GET['rw']?></b>
                                            <center>

                                    </div>
                                    <div class="panel-heading scroll">
                                        <table align="center" class="table table-striped table-bordered table-hover " >
                                            
                                            <thead>
                                            <tr   style="background: #ec971f;color: #fff;"> 
                                            <th align="center">No</th>
                                            <th align="center">Tanggal Input</th>
                                            <th align="center">NIK</th> 
                                            <th align="center">Nama</th>
                                            <th align="center">Jenis kelamin</th>
                                            <th align="center">TTL</th>
                                            
                                            <th align="center">RT/RW</th>     
                                            </tr>
                                            </thead>
                                                                                        
                                             <?php
                                             include "koneksi.php";
                                                $txtcari=$_GET['search'];
                                            	$rt=$_GET['rt'];
                                            	$rw=$_GET['rw'];
                                            	if(isset($txtcari)){
                                        		  if(empty($rt) and empty($rw)){
                                            		$sql = mysql_query("SELECT DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    nik,nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    status_nikah,no_rt,no_rw from tb_penduduk ");
                                            		}else{
                                            		$sql = mysql_query("SELECT DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    nik,nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    status_nikah,no_rt,no_rw from tb_penduduk where
                                                     no_rt= '$rt' and no_rw='$rw' ");
                                                    }
                                          		}else{
                                            		$sql = mysql_query("SELECT DATE_FORMAT(tanggal_input, '%d-%m-%Y') as tanggal_input,
                                                    nik,nama, jenis_kelamin,tempat, DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,
                                                    no_rt,no_rw from tb_penduduk
                                            		 ");
                                        		}
                                        		$no =  1;		
                                        		while ($r=mysql_fetch_array($sql)){				
                                        		
                                        		?>
                                                
                                                <tbody >
                                        		<tr><td width="25px"><?php echo $no; ?></td>
                                        		<td ><?php echo $r['tanggal_input'] ?></td>
                                                <td ><?php echo $r['nik']; ?></td>
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

