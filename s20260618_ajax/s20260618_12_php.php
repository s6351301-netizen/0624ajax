<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// $data = [
//     [1, 'amy', '0911'],
//     [2, 'bob', '0922'],
//     [3, 'cat', '0933']
// ];
$data = [
    [
        'id' => '1',
        'name' => 'amy',
        'mobile' => '0911'
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


?>

<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
</style>

<body>

    <h2>Hello PHP data</h2>

    <table style="width:100%">
        <tr>
            <th width="30%">id</th>
            <th width="30%">name</th>
            <th width="">mobile</th>
        </tr>

        <!-- foreach data  -->

        <?php foreach ($data as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['mobile'] ?></td>
            </tr>
        <?php endforeach; ?>


    </table>


</body>

</html>