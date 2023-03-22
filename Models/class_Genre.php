<?php
class Genre {
    public $genreType;

    public function __construct($_genreType) {
        $this->genreType = $_genreType;
    }

}

$horror = new Genre("horror");
$comedy = new Genre("comedy");
$thriller = new Genre("thriller");
$sci_fi = new Genre("sci-fi")

?>