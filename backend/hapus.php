<?php
require_once '../koneksi.php';

$raw = file_get_contents('php://input');
$data = json_decode($raw);

// echo json_encode($data->merk_hp);

$sql = "delete from hp where merk_hp='" . $data->merk_hp . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);

$obj = new stdClass();
if($row > 0) {
    $obj->status = "success";
} else {
    $obj->status = "fail";
}

echo json_encode($obj);
?>