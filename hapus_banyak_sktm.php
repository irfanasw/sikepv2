<?php

include "koneksi.php";
$jumlah = count($_POST["item"]);
for($i=0; $i < $jumlah; $i++)
{
$no_surat=$_POST["item"][$i];

$myquery1 = "delete from tb_sktm where no_surat ='$no_surat' limit 1";
$hapus = mysql_query($myquery1) or die ("gagal menghapus");
}
echo '<script type="text/javascript">alert("Data telah dihapus, Silahkan tunggu...");
location.href="sktm.php";</script>';

?>