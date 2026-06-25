<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$input = $_GET;

// http://localhost/s20260624_php/s20260624_06_calc_data.php?num1=100&num2=50&opt='+';
// dd($input);

// $data = [
//     'num1' => 100,
//     'num2' => 50,
//     'opt' => '+'
// ];

$data = $input;
// echo json_encode($data);

$num1 = $data['num1'] ?? 1000;
$num2 = $data['num2'] ?? 500;
$opt = $data['opt'] ?? '+';
$result = 0;
switch ($opt) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;

    default:
        # code...
        break;
}

$data['result'] = $result;

// dd($data);

// to json

echo json_encode($data);
