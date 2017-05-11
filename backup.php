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

                        <li class="active">
                            <a href="#"><i class="fa fa-archive fa-fw"></i> Utility<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="backup.php" ><i class="fa fa-files-o fa-fw" ></i>    Backup</a>
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
                            Backup Data 
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="menu.php" style="color: #1484CE;">Home</a>
                            </li>
                            <li>
                                <i class="fa fa-archive"></i>   Utility
                            </li>
                            <li class="active">
                                <i class="fa fa-files-o fa-fw"></i> Backup
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                        <form action="" method="post" name="postform">
                        	<div align="center">
                        	  <p>
                        	    <input type="submit" name="backup"  onClick="return confirm('Apakah Anda yakin?')"value="Proses Backup" class="btn" />
                        	  </p>
                          </div>
                        </form>
                        </p>
                        <?php
                        if(isset($_POST['backup'])){
                        
                        	//membuat nama file
                        	$file=date("DdMY").'_ri32_backup_data_'.time().'.sql';
                        	
                        	//panggil fungsi dengan memberi parameter untuk koneksi dan nama file untuk backup
                        	backup_tables("localhost","root","root","kependudukan",$file);
                        	
                        	?>
                        	<p align="center">&nbsp;</p>
                        	<p align="center">Backup database telah selesai.<a style="cursor:pointer;text-decoration: none;" onclick="location.href='download_backup_data.php?nama_file=<?php echo $file;?>'" title="Download"> <font color="#0066FF">Download file database</font></a>
                        </p>
                        	<?php
                        }else{
                        	unset($_POST['backup']);
                        }
                        
                        /*
                        untuk memanggil nama fungsi :: jika anda ingin membackup semua tabel yang ada didalam database, biarkan tanda BINTANG (*) pada variabel $tables = '*'
                        jika hanya tabel-table tertentu, masukan nama table dipisahkan dengan tanda KOMA (,) 
                        */
                        function backup_tables($host,$user,$pass,$name,$nama_file,$tables = '*')
                        {
                        	//untuk koneksi database
                        	$link = mysql_connect($host,$user,$pass);
                        	mysql_select_db($name,$link);
                        	
                        	if($tables == '*')
                        	{
                        		$tables = array();
                        		$result = mysql_query('SHOW TABLES');
                        		while($row = mysql_fetch_row($result))
                        		{
                        			$tables[] = $row[0];
                        		}
                        	}else{
                        		//jika hanya table-table tertentu
                        		$tables = is_array($tables) ? $tables : explode(',',$tables);
                        	}
                        	
                        	//looping dulu ah
                        	foreach($tables as $table)
                        	{
                        		$result = mysql_query('SELECT * FROM '.$table);
                        		$num_fields = mysql_num_fields($result);
                        		
                        		//menyisipkan query drop table untuk nanti hapus table yang lama
                        		$return.= 'DROP TABLE '.$table.';';
                        		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
                        		$return.= "\n\n".$row2[1].";\n\n";
                        		
                        		for ($i = 0; $i < $num_fields; $i++) 
                        		{
                        			while($row = mysql_fetch_row($result))
                        			{
                        				//menyisipkan query Insert. untuk nanti memasukan data yang lama ketable yang baru dibuat. so toy mode : ON
                        				$return.= 'INSERT INTO '.$table.' VALUES(';
                        				for($j=0; $j<$num_fields; $j++) 
                        				{
                        					//akan menelusuri setiap baris query didalam
                        					$row[$j] = addslashes($row[$j]);
                        					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
                        					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                        					if ($j<($num_fields-1)) { $return.= ','; }
                        				}
                        				$return.= ");\n";
                        			}
                        		}
                        		$return.="\n\n\n";
                        	}
                        	
                        	//simpan file di folder yang anda tentukan sendiri. kalo saya sech folder "DATA"
                        	$nama_file;
                        	
                        	$handle = fopen('./backup/'.$nama_file,'w+');
                        	fwrite($handle,$return);
                        	fclose($handle);
                        }
                        ?>
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

