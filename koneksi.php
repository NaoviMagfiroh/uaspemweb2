<?php

$hostDB = '127.0.0.1';
$portDB = '5432';
$nameDB = 'uas_hp';
$userDB = 'postgres';
$pwDB = 'naovi29';

$conn = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($conn){

}else{
 
}
?>