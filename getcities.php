<?php

require "connect.php";

// $result = [
//     ["city_id" => 1, "city_name" => "Kolhapur", "city_state" => "Maharashtra"],
//     ["city_id" => 2, "city_name" => "Port Blair", "city_state" => "ndaman & Nicobar Islands"],
//     ["city_id" => 3, "city_name" => "Adilabad", "city_state" => "Andhra Pradesh"],
//     ["city_id" => 4, "city_name" => "Adoni", "city_state" => "Andhra Pradesh"],
//     ["city_id" => 5, "city_name" => "Amadalavalasa", "city_state" => "Andhra Pradesh"],
//     ["city_id" => 6, "city_name" => "Amalapuram", "city_state" => "Andhra Pradesh"],
//     ["city_id" => 7, "city_name" => "Anakapalle", "city_state" => "Andhra Pradesh"]
// ];
$key = $_GET['key'];
$limit = $_GET['limit'];
$qr = "SELECT * from `cities` where city_name like '$key%' limit $limit";
$r = mysqli_query($db, $qr);
$arr = [];
$result = mysqli_fetch_all($r, MYSQLI_ASSOC);
// var_dump($result);
echo json_encode($result);


//var_dump(getCities($key));
