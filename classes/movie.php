<?php

class Movie {
    public $title;
    public $year;
    public $director;
    public $cast;

    function __construct($title, $year, $director, $cast) {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
        $this->cast = $cast;
    }

    public function notAllCast($numCast) {
        if(array_count_values($this->cast) > $numCast) {
            for($i = 0; $i < $numCast; $i++) {
                $newCast[] = $this->cast[$i];
            }
            return $newCast;
        }
        return $this->cast;
    }

}