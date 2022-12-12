<?php
//including the movie class
include(__DIR__ . '/models/Movie.php');
//including the movie list
include(__DIR__ . '/db.php');



foreach($movies as $key => $value){
    //${'movie' . $key} allows to generate variables as movie1, movie2, movie-n depending on the list length
    //at the same time new Movie creates a new obj class with values picked from the list
    ${'movie' . $key} = new Movie($value['name'], $value['duration'], $value['lang'], $value['genres']);
    //print the obj
    var_dump(${'movie' . $key});
    //use the obj method
    echo 'Il film ' . ${'movie' . $key}->name . ' ha una durata di ' . ${'movie' . $key}->getMinutes() . ' minuti';
}