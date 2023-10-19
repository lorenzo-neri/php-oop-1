<?php

$movieList = [];

class Movie
{
    //variabili d'istanza
    public $title;
    public $time;
    public $poster;


    //costruttore
    function __construct($title)
    {
        $this->title = $title;
    }
    function get_title()
    {
        return $this->title;
    }
};
