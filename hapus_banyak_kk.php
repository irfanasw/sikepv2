<?php

include "koneksi.php";
$jumlah = count($_POST["item"]);
for($i=0; $i < $jumlah; $i++)
{
$no_reg_kk=$_POST["item"][$i];

$myquery = "delete from tb_kk where no_reg_kk ='$no_reg_kk' limit 1";
$hapus = mysql_query($myquery) or die ("gagal menghapus");
$myquery2 = "delete from tb_detail_kk where no_reg_kk ='$no_reg_kk'";
$hapus = mysql_query($myquery2) or die ("gagal menghapus");
}
echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="kk.php";</script>';

?>