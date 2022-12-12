<?php
include(__DIR__ . '/models/Movie.php');

$movie1= new Movie('Nope', '1:30',  'en', ['thriller', 'horror']);
$movie2= new Movie('Pinocchio', '2:45',  'it', ['Fantasy']);

var_dump($movie1, $movie2);
echo 'Il film '. $movie1->name . ' ha una durata di ' .$movie1->getMinutes().' minuti';
echo '<br>Il film '. $movie2->name . ' ha una durata di ' .$movie2->getMinutes().' minuti';
