<?php

$jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
$data  = json_decode($jsonData, true);

foreach($data as $key => $value){
    $days_count = count($value)-1;
    $days_count_prev = $days_count-1;
}
foreach($data as $key => $value2){
    $days_count = count($value2)-1;
    $days_count_prev = $days_count-1;
}

$total_confirmed = 0;
$total_recovered = 0;
$total_deaths = 0;

foreach($data as $key => $value){
    $total_confirmed = $total_confirmed + $value[$days_count]['confirmed'];
    $total_recovered = $total_recovered + $value[$days_count]['recovered'];
    $total_deaths = $total_deaths + $value[$days_count]['deaths'];
}

?>