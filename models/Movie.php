<?php
class Movie
{
    public $name;
    public $duration;
    public $genres;
    public $lang;
    public function __construct($_name, $_duration,$_lang , $_genres = [])
    {
        $this->name = $_name;
        $this->duration = $_duration;
        $this->lang = $_lang;
        $this->genres = $_genres;

    }
    public function getMinutes(){
        list($hour, $min) = explode(':', $this->duration);
        $hour = intval($hour);
        $totalMinutes = ($hour * 60) + (intval($min));
        return $totalMinutes;
    }
};