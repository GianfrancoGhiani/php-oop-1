<?php
include(__DIR__ . '/models/Movie.php');
include(__DIR__ . '/db.php');



foreach($movies as $key => $value){
    ${'movie' . $key} = new Movie($value['name'], $value['duration'], $value['lang'], $value['genres']);
    var_dump(${'movie' . $key});
    echo 'Il film ' . ${'movie' . $key}->name . ' ha una durata di ' . ${'movie' . $key}->getMinutes() . ' minuti';
}