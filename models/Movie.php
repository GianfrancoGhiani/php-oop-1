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
        //pick the duration time, explode it into 2 string var called hours and min by dividing at the ':' point
        list($hours, $min) = explode(':', $this->duration);
        //turn hours into a int value
        $hours = intval($hours);
        //convert hours and add these to minl, return it
        $totalMinutes = ($hours * 60) + (intval($min));
        return $totalMinutes;
    }
};