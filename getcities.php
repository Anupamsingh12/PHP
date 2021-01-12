<?php

require "connect.php";
$key=$_GET['key'];
$limit=$_GET['limit'];
$qr = "SELECT * from `cities` where city_name like '$key%' limit $limit";
$r = mysqli_query($db,$qr);
$arr = [];
$result = mysqli_fetch_all($r, MYSQLI_ASSOC);
//var_dump($result);
echo json_encode($result);


//var_dump(getCities($key));


?>