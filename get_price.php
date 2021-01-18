<?php 

function get_prices($km){
    if($_SESSION["booking_data"]["roundtrip"]=="True"){
        $km=$km*2;
    }
    return [
        "sadan" =>$km*5,
        "hatchback"=>$km*4.5,
        "suv" =>$km*7,
        "random"=> $km*4.7,
        "bike"=>$km*3.5,
        "traveller"=>$km*10
    ];
}
?>