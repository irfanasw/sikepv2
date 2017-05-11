<?
session_start();

if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
}

include "tanggal.php";
include "koneksi.php";
$no_surat_pindah=$_GET['no_surat_pindah'];
$qrykoreksi=mysql_query("select * from tb_pend_pindah where no_surat_pindah='$no_surat_pindah' LIMIT 1");
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
        $( "#nama" ).autocomplete({
            source: "get_penduduk.php",
            minLength: 1,
            select: function( event, ui ) { 
			$('#nik').val(ui.item.nik);
			$('#jenis_kelamin').val(ui.item.jenis_kelamin);
            $('#tempat').val(ui.item.tempat);
			$('#tanggal_lahir').val(ui.item.tanggal_lahir);
            $('#no_surat_kelahiran').val(ui.item.tanggal_lahir);
            $('#no_akta').val(ui.item.tanggal_lahir);
            $('#agama').val(ui.item.agama);
            $('#status_nikah').val(ui.item.status_nikah);
            $('#no_akta_nikah').val(ui.item.tanggal_lahir);
            $('#tanggal_nikah').val(ui.item.tanggal_lahir);
            $('#no_akta_cerai').val(ui.item.tanggal_lahir);
            $('#tanggal_cerai').val(ui.item.tanggal_lahir);
            $('#pekerjaan').val(ui.item.pekerjaan);
            $('#no_rt').val(ui.item.no_rt);
            $('#no_rw').val(ui.item.no_rw);
            $('#no_kk').val(ui.item.no_kk);
            $('#status_hub').val(ui.item.status_hub);
            $('#pendidikan').val(ui.item.pendidikan);
            $('#nama_ayah').val(ui.item.tanggal_lahir);
            $('#nama_ibu').val(ui.item.tanggal_lahir);
            }
        });
    });
</script>
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
                                    <a  href="pend_masuk.php"><i class="fa fa-arrow-circle-o-right fa-fw"></i>   Penduduk Masuk</a>
                                </li>
                                <li>
                                    <a class="active" href="pend_pindah.php"><i class="fa fa-arrow-circle-o-left fa-fw"></i>  Penduduk Pindah</a>
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
                            <small>Edit</small> Data Pindah
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
                              <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <form name="tes" method="post" action="update_detail_pindah.php" >
                                        <div class="form-group">
                                            <label>Anggota Keluarga Yang Pindah</label>
                                            <div>
                                            <label> 
                                            <input class="form-control" type="text" name="nama" id="nama" size="50" maxlength="30" placeholder="Ketikkan nama"/>
                                            <input class="form-control" type="hidden" name="no_surat_pindah" id="no_surat_pindah" value="<?php echo $dataku->no_surat_pindah ?>"/>
                                            </label>
                                            <label> 
                                            <input class="form-control" type="text" name="nik" id="nik" size="22" maxlength="16" placeholder="NIK"/>
                                            </label>
                                            <label> 
                                            <input class="form-control" type="text" name="no_kk" id="no_kk" size="22" maxlength="16" placeholder="No KK"/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin" size="10" maxlength="10" placeholder="Jenis Kelamin"/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="tempat" id="tempat" size="19" maxlength="15" placeholder="Tempat"/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" size="10" maxlength="10" placeholder="Tanggal Lahir"/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="status_nikah" id="status_nikah" size="15" maxlength="15" placeholder="Status Perkawinan"/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="status_hub" id="status_hub" size="30" maxlength="20" placeholder="Hubungan Keluarga"/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="pendidikan" id="pendidikan" size="50" maxlength="50" placeholder="Pendidikan"/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" size="50" maxlength="50" placeholder="Pekerjaan"/>
                                            </label>
                                             </div>  
                                        </div>
                                        <input name="fok" type="submit" id="fok" value="Tambah" class="btn btn-default">
                                        </form>
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
                                            <th align="center" >NIK</th>
                                            <th align="center">Jenis Kelamin</th>
                                            <th align="center">Tempat</th>
                                            <th align="center">Tanggal Lahir</th>
                                            </tr>
                                            </thead>
                                                <?
                                                $no_surat_pindah=$_GET['no_surat_pindah'];
                                                $myquery="select no_reg_pend,no_surat_pindah, nama, nik, jenis_kelamin,tempat,DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir from   tb_detail_pend_pindah where no_surat_pindah='$no_surat_pindah' order by status_hub desc";
                                                $no=1;
                                                
                                                $daftar=mysql_query($myquery) or die (mysql_error());
                                                while($dataku=mysql_fetch_object($daftar))
                                                {
                                                ?>
                                            <tbody style="color: #000;">
                                            <tr>
                                            <td width="10px" align="center"><?php echo $no;?></td>
                                            <td width="150px"><?php echo $dataku->nama?></td>
                                            <td width="100px" align="center"><?php echo $dataku->nik?></td>
                                            <td width="120px" align="center"><?php echo $dataku->jenis_kelamin?></td>
                                            <td width="100px" align="center"><?php echo $dataku->tempat?></td>
                                            <td width="100px" align="center"><?php echo $dataku->tanggal_lahir?></td>
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
                                            <th align="center">Status keluarga</th>
                                            <th align="center">Pendidikan</th>
                                            <th align="center">Pekerjaan</th>
                                            <th align="center">No KK</th>
                                            <th align="center"></th>
                                            </tr>
                                            </thead>
                                                <?
                                                $no_surat_pindah=$_GET['no_surat_pindah'];
                                                $myquery="select no_reg_pend,no_surat_pindah,status_nikah,status_hub,pendidikan,pekerjaan,no_kk from   tb_detail_pend_pindah where no_surat_pindah='$no_surat_pindah' order by status_hub desc";
                                                $no=1;
                                                
                                                $daftar=mysql_query($myquery) or die (mysql_error());
                                                while($dataku=mysql_fetch_object($daftar))
                                                {
                                                ?>
                                            <tbody style="color: #000;">
                                            <tr>
                                            <td width="10px" align="center"><?php echo $no;?></td>
                                            <td width="100px" align="center"><?php echo $dataku->status_nikah?></td>
                                            <td width="120px" align="center"><?php echo $dataku->status_hub?></td>
                                            <td width="150px" align="center"><?php echo $dataku->pendidikan?></td>
                                            <td width="120px" align="center"><?php echo $dataku->pekerjaan?></td>
                                            <td width="150px" align="center"><?php echo $dataku->no_kk?></td>
                                            <td width="10px" align="center"><a href="hapus_detail_pindah.php?no_reg_pend=<?php echo $dataku->no_reg_pend?>" title="Hapus" style="color: #1484CE;" onclick="return confirm('Hapus data terpilih?')"><i class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                                <?php
                                                $no++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                               </div> 
                            </div>
                            <div class="col-lg-12">
                              <div class="panel panel-warning">
                                    <div class="panel-heading">
                                    <div class="panel-body">
                                    <div class="row">
                                    <div class="col-lg-6">
                                        <form name="tes" method="post" action="update_pindah.php" onsubmit="return confirm('Yakin Update?')">
                                        <?
                                        $no_surat_pindah=$_GET['no_surat_pindah'];
                                        $qrykoreksi=mysql_query("select * from tb_pend_pindah where no_surat_pindah='$no_surat_pindah' LIMIT 1");
                                        $dataku=mysql_fetch_object($qrykoreksi);
                                        ?>
                                         <div class="form-group">
                                            <label>No Surat Pindah</label> 
                                            <input class="form-control" type="text" name="no_surat_pindah" id="no_surat_pindah"  size="30" maxlength="30" value="<?php echo $dataku->no_surat_pindah?>" readonly="" style="background: #999;"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pindah</label> 
                                            <input class="form-control" type="text" name="tanggal_pindah" id="tanggal_pindah" size="10" placeholder="TTTT-BB-HH" value="<?php echo $dataku->tanggal_pindah?>"/>
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
                                            <label>Alamat Tujuan</label> 
                                            <input class="form-control" type="text" name="alamat_tujuan" id="alamat_tujuan" size="20" maxlength="20" value="<?php echo $dataku->alamat_tujuan?>"/>
                                        </div>
                                        <div  class="form-group">
                                            <label>RT/RW Tujuan </label> 
                                                <div>
                                                <label>
                                                <input class="form-control" type="text" name="rt_tujuan" id="rt_tujuan" size="2" maxlength="2" value="<?php echo $dataku->rt_tujuan?>"/>
                                                </label>
                                                <label>
                                                <input class="form-control" type="text" name="rw_tujuan" id="rw_tujuan" size="2" maxlength="2" value="<?php echo $dataku->rw_tujuan?>"/>
                                                </label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan Tujuan</label> 
                                            <input class="form-control" type="text" name="kec_tujuan" id="kec_tujuan" size="30" maxlength="15" value="<?php echo $dataku->kec_tujuan?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten Tujuan</label> 
                                            <input class="form-control" type="text" name="kab_tujuan" id="kab_tujuan" size="30" maxlength="15" value="<?php echo $dataku->kab_tujuan?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>provinsi Tujuan</label> 
                                            <input class="form-control" type="text" name="prov_tujuan" id="prov_tujuan" size="30" maxlength="15" value="<?php echo $dataku->prov_tujuan?>"/>
                                        </div>
                                        <div class="form-group">
                                     <label>Status Nomor KK Bagi Yang Tidak Pindah</label> 
                                     <div>
                                        <label>
                                        <select name="status_kk_tdkpindah" id="status_kk_tdkpindah" class="form-control" > 
                                        
                                        <?php
                                        if($dataku->status_kk_tdkpindah=='1'){
                                            echo "<option value='1'>Numpang KK</option>";
                                        }else if($dataku->status_kk_tdkpindah=='2'){
                                            echo "<option value='2'>Membuat KK Baru</option>";
                                        }else if($dataku->status_kk_tdkpindah=='3'){
                                            echo "<option value='3'>Tidak Ada Angg. Keluarga Yang Ditinggal</option>";
                                        }else if($dataku->status_kk_tdkpindah=='4'){
                                            echo "<option value='4'>Nomor KK Tetap</option>";
                                        }
                                        ?>
                                        
                                        <option value="1">Numpang KK</option> 
                                        <option value="2">Membuat KK Baru</option> 
                                        <option value="3">Tidak Ada Angg. Keluarga Yang Ditinggal</option>
                                        <option value="4">Nomor KK Tetap</option> 
                                        </select>
                                        </label>
                                        
                                     </div>
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

