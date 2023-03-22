<?php

class Movie
{
    public $title;
    public $director;
    public $plot;
    public $year;
    // public $genre;

    public function __construct($_title, $_director, $_plot, $_year)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->plot = $_plot;
        $this->year = $_year;
    }

    public function whoDirectedWhat()
    {
        return "il film $this->title è stato diretto da $this->director!";
    }
}

$movies_obj = [];
foreach ($movies as $movie) {
    $movies_obj[] = new Movie(
        $movie["title"],
        $movie["director"],
        $movie["plot"],
        $movie["year"],
    );
}
// var_dump($movies_obj);

?>