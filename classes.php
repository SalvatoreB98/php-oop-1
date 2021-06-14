<?php
class Movie { 
    public $title;
    public $description;
    public $year;
    public $genres;
    public $actors;
    public $poster;
    function __construct($data)
    {
        $this->title  = $data["title"];
        $this->description  = $data["plot"];
        $this->year  = $data["year"];
        $this->genres = $data["genres"] ;
        $this->actors  = $data["actors"];
        $this->poster = $data["posterUrl"] ;
    }
    function getTitle(){
        return $this->title;
    }
    function setTitle($title){
        $this->title = $title;
    }
}
