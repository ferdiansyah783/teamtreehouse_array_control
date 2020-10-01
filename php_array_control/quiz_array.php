<?php
include 'data_siswa.php';

$stamp_arr=array();
$filter_city="all";
$filter_lulus=false;

foreach($data_siswa as $value){
    if($value[1]==$filter_city && $value[3]==$filter_lulus || ($filter_city==="all" && $value[3]==$filter_lulus)){
        if($value[3]){
            $lulus="lulus";
        }else{
            $lulus="belum lulus";
        }
        $stamp_arr[]= [$value[0],$value[1],$lulus];
    }
}
 asort($stamp_arr);
print_r($stamp_arr);





