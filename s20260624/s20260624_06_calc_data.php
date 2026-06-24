<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$input = $_GET;

// http://localhost/s20260624_php/s20260624_06_calc_data.php?num1=100&num2=50&opt='+';
dd($input);

$data = [
    'num1' => 100,
    'num2' => 50,
    'opt' => '+'
];

dd($data);

// to json

echo json_encode($data);
