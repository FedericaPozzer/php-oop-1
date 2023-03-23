<?php

class Movie
{
    public $title;
    public $director;
    public $plot;
    public $year;

    public function __construct(string $_title, $_director, $_plot, $_year)
    {
        $this->setTitle($_title);
        $this->director = $_director;
        $this->plot = $_plot;
        $this->year = $_year;
    }

    public function whoDirectedWhat()
    {
        return "il film $this->title è stato diretto da $this->director!";
    }

    // setter a caso per controllae che il title sia una stringa (qui e a linea 15)
    public function setTitle($title) {
        if(!is_string($title) || $title === "") return false;
        $this->title = $title;
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