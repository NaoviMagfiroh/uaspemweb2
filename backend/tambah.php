<?php
require_once '../koneksi.php';

$raw = file_get_contents('php://input');
$data = json_decode($raw);



$sql = "insert into hp(merk_hp, tipe_hp, tahun_produksi) values('" .
    $data->merk_hp . "','" . $data->tipe_hp . "','" . $data->tahun_produksi . "')";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->result = "success";
} else {
    $obj->result = "failed";
}
echo json_encode($obj);
?>