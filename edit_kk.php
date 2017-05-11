<?
session_start();

if(!isset ($_SESSION['my_session'])){
    header('location:index.php');
}

include "tanggal.php";
include "koneksi.php";
$no_reg_kk=$_GET['no_reg_kk'];
$qrykoreksi=mysql_query("select * from tb_kk where no_reg_kk='$no_reg_kk' LIMIT 1");
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

<link rel="stylesheet" href="css/themes/base/jquery-ui.css" />
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/ui/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#nama" ).autocomplete({
            source: "get_penduduk.php",
            minLength: 1,
            select: function( event, ui ) {
            $('#no_reg_pend').val(ui.item.no_reg_pend);    
			$('#nik').val(ui.item.nik);
			$('#jenis_kelamin').val(ui.item.jenis_kelamin);
            $('#tempat').val(ui.item.tempat);
			$('#tanggal_lahir').val(ui.item.tanggal_lahir);
            $('#status_hub').val(ui.item.status_hub);
            $('#agama').val(ui.item.agama);
            $('#status_nikah').val(ui.item.status_nikah);
            $('#pekerjaan').val(ui.item.pekerjaan);
            $('#no_kk').val(ui.item.no_kk);
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
                        <li class="active" >
                            <a href="#"><i class="fa fa-file fa-fw"></i> File<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="penduduk.php"><i class="fa fa-user fa-fw"></i>    Data Penduduk</a>
                                </li>
                                <li>
                                    <a class="active" href="kk.php"><i class="fa fa-group fa-fw"></i>   Data KK</a>
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
                            <small>Edit</small> Data KK
                        </h1>
                        
                    </div>
                </div>
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <center>Form Edit Data KK</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-6">
                              <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <form name="tes" method="post" action="update_detail_kk.php" >
                                        <div class="form-group">
                                            <label>Anggota Keluarga</label>
                                            <div>
                                            <label> 
                                            <input class="form-control" type="text" name="nama" id="nama" size="50" maxlength="30" placeholder="Ketikkan nama"/>
                                            <input class="form-control" type="hidden" name="no_reg_kk" id="no_reg_kk" value="<?php echo $dataku->no_reg_kk ?>"/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin" size="10" maxlength="10" placeholder="Jenis Kelamin" readonly=""/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="tempat" id="tempat" size="19" maxlength="15" placeholder="Tempat" readonly=""/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" size="10" maxlength="10" placeholder="Tanggal Lahir" readonly=""/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="status_nikah" id="status_nikah" size="15" maxlength="15" placeholder="Status Perkawinan" readonly=""/>
                                            </label>
                                            <label>
                                            <input class="form-control" type="text" name="status_hub" id="status_hub" size="20" maxlength="20" placeholder="Hubungan Keluarga" readonly=""/>
                                            </label>
                                             </div>  
                                        </div>
                                        <input name="fok" type="submit" id="fok" value="Tambah" class="btn btn-success">
                                        </form>
                                    </div>
                               </div> 
                            </div>
                            <div class="col-lg-6">
                              <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <form name="tes" method="post" action="update_kk.php" onsubmit="return confirm('Yakin Update?')" >
                                         <div class="form-group">
                                            <label>No Reg KK</label> 
                                            <input class="form-control" type="text" name="no_reg_kk" id="no_reg_kk" readonly="" value="<?php echo $dataku->no_reg_kk ?>" style="background: #bab7a8;" size="10" maxlength="10"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama KK</label> 
                                            <input class="form-control" type="text" name="nama_kk" id="nama_kk" size="50" maxlength="25" value="<?php echo $dataku->nama_kk ?>" />
                                        </div>
                                        <div  class="form-group">
                                            <label>&nbsp;</label><label >RT</label><label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label>
                                            <label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label>
                                            <label>RW</label><label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label>
                                            <label>&nbsp;</label><label>&nbsp;</label><label>&nbsp;</label>
                                            <label>Tanggal Input </label> 
                                                <div>
                                                <label>
                                                <input class="form-control" type="text" name="no_rt" id="no_rt" size="2" maxlength="2" value="<?php echo $dataku->no_rt ?>"  />
                                                </label>
                                                <label>
                                                <input class="form-control" type="text" name="no_rw" id="no_rw" size="2" maxlength="2" value="<?php echo $dataku->no_rw ?>"  />
                                                </label>
                                                <label>
                                                <input class="form-control" type="text" name="tanggal_input" id="tanggal_input" size="10" value="<?php echo $dataku->tanggal_input ?>" />
                                                </label>
                                                </div>
                                        </div>
                                        <input name="fok" type="submit" id="fok" value="Update" class="btn btn-warning">
                                        <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()" class="btn btn-danger">
                                        </form>
                                    </div>
                               </div> 
                            </div>
                             <div class="col-lg-12">
                              <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <table align="center" class="table table-striped table-bordered table-hover ">
                                            <thead style="background: #449d44;color: #fff;">
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
                                                $no_reg_kk=$_GET['no_reg_kk'];
                                                $myquery="select no_reg_pend, nama,jenis_kelamin,tempat,DATE_FORMAT(tanggal_lahir, '%d-%m-%Y') as tanggal_lahir,no_akta, agama from tb_detail_kk where no_reg_kk='$no_reg_kk' order by status_hub desc ";
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
                                            <thead style="background: #449d44;color: #fff;">
                                            <tr> 
                                            <th align="center">No</th>
                                            <th align="center">Status Nikah</th>
                                            <th align="center">No Akta Nikah</th>
                                            <th align="center">Tanggal Nikah</th>
                                            <th align="center">No Akta Cerai</th>
                                            
                                            <th align="center">Tanggal Cerai</th>
                                            
                                            <th align="center">Status Hubungan</th>
                                            </tr>
                                            </thead>
                                                <?
                                                $no_reg_kk=$_GET['no_reg_kk'];
                                                $myquery="select no_reg_pend, status_nikah, tanggal_nikah, no_akta_nikah, tanggal_cerai, no_akta_cerai, status_hub from tb_detail_kk where no_reg_kk='$no_reg_kk' order by status_hub desc ";
                                                $no=1;
                                                
                                                $daftar=mysql_query($myquery) or die (mysql_error());
                                                while($dataku=mysql_fetch_object($daftar))
                                                {
                                                ?>
                                            <tbody style="color: #000;">
                                            <tr>
                                            <td width="10px" align="center"><?php echo $no;?></td>
                                            <td width="100px" align="center"><?php echo $dataku->status_nikah?></td>
                                            <td width="150px" align="center"><?php echo $dataku->no_akta_nikah?></td>
                                            <td width="120px" align="center"><?php echo $dataku->tanggal_nikah?></td>
                                            <td width="150px" align="center"><?php echo $dataku->no_akta_cerai?></td>
                                            <td width="120px" align="center"><?php echo $dataku->tanggal_cerai?></td>
                                            
                                            <td width="150px" align="center"><?php echo $dataku->status_hub?></td>
                                            </tr>
                                                <?php
                                                $no++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <table align="center" class="table table-striped table-bordered table-hover ">
                                            <thead style="background: #449d44;color: #fff;">
                                            <tr>
                                            <td>No</td> 
                                            <th align="center">Pendidikan</th>
                                            <th align="center">Pekerjaan</th>
                                            <th align="center">Nama Ibu</th>
                                            <th align="center">Nama Ayah</th>
                                            <th></th>
                                            </tr>
                                            </thead>
                                                <?
                                                $no_reg_kk=$_GET['no_reg_kk'];
                                                $myquery="select no_reg_pend, pendidikan,pekerjaan, nama_ayah, nama_ibu from tb_detail_kk where no_reg_kk='$no_reg_kk' order by status_hub desc ";
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
                                            <td width="10px" align="center"><a href="hapus_detail_kk.php?no_reg_pend=<?php echo $dataku->no_reg_pend?>" title="Hapus" style="color: #1484CE;" onclick="return confirm('Hapus data terpilih?')"><i class="fa fa-trash-o"></i></a></td>
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

