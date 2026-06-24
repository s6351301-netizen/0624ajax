<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    // var_dump($data);
    echo "</pre>";
}

$data1 = [
    [
        'id' => '1',
        'name' => 'amy',
        'mobile' => '0911-0624'
    ],
    [
        'id' => '2',
        'name' => 'bob',
        'mobile' => '0922'
    ],
    [
        'id' => '3',
        'name' => 'cat',
        'mobile' => '0933'
    ]
];
// dd($data);

// echo "abc";

// $data2 = [
//     'myString' => 'abc',
//     'myTime' => '11:00'

// ];

// $data = [
//     'data1' => $data1,
//     'data2' => $data2
// ];

// print_r($data1);
// echo "<br><br><br><br>";

// var_dump($data1);
// echo "<br><br><br><br>";

// dd($data1);

// dd($data1);
// dd($data2);
// dd($data);
echo json_encode($data1);
// echo json_encode($data2);
// echo json_encode($data);
