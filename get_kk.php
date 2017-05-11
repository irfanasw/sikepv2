<?php
$nama = $_GET['term'];
$conn = mysql_connect("localhost","root","root");
mysql_select_db("kependudukan");
$sql = "select * from tb_penduduk where nama like '$nama%'";
$hs = mysql_query($sql);
$json = array();
while($rs = mysql_fetch_array($hs)){
	$json[] = array(
		'label' => $rs['nama'] ."  ". $rs['no_surat_masuk'],
		'value' => $rs['nama'] ,
        'nama' => $rs['nama'] ,
        'no_surat_masuk' => $rs['no_surat_masuk'],
		'no_rt' => $rs['no_rt'],
        'no_rw' => $rs['no_rw'],
        'no_kk' => $rs['no_kk'],
        
	);
}
header("Content-Type: application/json");
echo json_encode($json);
?>