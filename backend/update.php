<?php
require_once '../koneksi.php';

$rawData = file_get_contents('php://input');
$data = json_decode($rawData);

$sql = "update hp set " .
       "  tipe_hp='" . $data->tipe_hp . "'," .
       "  tahun_produksi='" . $data->tahun_produksi . "' " .
       "where merk_hp='" . $data->merk_hp . "'";
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