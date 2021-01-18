<?php
require "connect.php";

$qr = "SELECT * from `statelist` where city_name like 'a%' limit 10";
$r = mysqli_query($db, $qr);
$arr = [];
$result = mysqli_fetch_all($r, MYSQLI_ASSOC);
// var_dump($result);
//echo json_encode($result);

function get_cordinate($x){
    require "connect.php";
    //echo "from function".'<br>';
    $q="SELECT * from `statelist` where city_name like '$x%' ";
    $r = mysqli_query($db, $q);
    $arr = [];
    $result = mysqli_fetch_all($r, MYSQLI_ASSOC);
    $lat=$result[0]["latitude"];
    $long=$result[0]["longitude"];
    $lat=explode(" ",$lat);
    $long=explode(" ",$long);
return $lat[0].' '.$long[0];
}
//echo get_cordinate("Patna");


?>