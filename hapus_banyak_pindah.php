<?php


include "koneksi.php";
$jumlah = count($_POST["item"]);
for($i=0; $i < $jumlah; $i++)
{
$no_surat_pindah=$_POST["item"][$i];

$myquery = "delete from tb_pend_pindah where no_surat_pindah ='$no_surat_pindah' limit 1";
$hapus = mysql_query($myquery) or die ("gagal menghapus");
$myquery2 = "delete from tb_detail_pend_pindah where no_surat_pindah ='$no_surat_pindah'";
$hapus = mysql_query($myquery2) or die ("gagal menghapus");
}
echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="pend_pindah.php";</script>';

?>