<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

function csv_to_json($file){
    $conents = file_get_contents($file);
    $lines = explode(PHP_EOL, $conents);
    $headers = str_getcsv(array_shift($lines));
    $data = [];
    foreach($lines as $line){
        if(empty($line)){
            continue;
        }
        $row = array_combine($headers, str_getcsv($line));
        $data[] = $row;
    }

    $json = json_encode($data,JSON_PRETTY_PRINT);
    return $json;
}

$csv = 'customer_data.csv';
$json = csv_to_json($csv);
print_r($json);