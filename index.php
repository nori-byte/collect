<?php
//namespace Collect;
//
//require_once 'vendor/autoload.php';
//
//$records =
//    [
//        'id' => 2135,
//        'first_name' => 'John',
//        'last_name' => 'Doe',
//    ];



require_once 'vendor/autoload.php';

$records = [
    'id' => 2135,
    'first_name' => 'John',
    'last_name' => 'Doe',
];

$collection = \Collect\collection($records);
print_r($collection->get());
