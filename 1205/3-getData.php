<?php
$data = [
    'name' => 'Yen',
    'mobile' => '0988-168-168',
    'word' => 'Life is about Eating, Drinking and Sleeping',
];

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// dd($data);

$myJSON = json_encode($data);

echo $myJSON;


?>