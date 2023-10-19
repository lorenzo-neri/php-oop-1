<?php

$movieList = [];

class Movie
{
    //variabili d'istanza
    public $title;
    public $time;
    public $poster;

    public $genres = [];
    public $genreList;


    //costruttore
    function __construct($title)
    {
        $this->title = $title;
    }
    function get_title()
    {
        return $this->title;
    }

    function get_genre($genre)
    {
        array_push($this->genres, $genre);

        //Join array elements with a string
        $this->genreList = implode(", ", $this->genres);
    }
};
