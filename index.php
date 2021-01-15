<?php

    class Movie {
        public $title;
        public $director;
        public $year;

        function __construct($_title, $_director, $_year) {
            $this->title = $_title;
            $this->director = $_director;
            $this->year = $_year;
        }

    }

    $tenet = new Movie('Tenet', 'Christopher Nolan', '2020');
    $tenet_title = $tenet->title;
    $tenet_director = $tenet->director;
    $tenet_year = $tenet->year;

    echo 'Title :'.$tenet_title.'<br>'
    .'Director :'.$tenet_director.'<br>'
    .'Released :'.$tenet_year;

    $the_godfather = new Movie('The Godfather', 'Francis Ford Coppola', '1972');
    $the_godfather_title = $the_godfather->title;
    $the_godfather_director = $the_godfather->director;
    $the_godfather_year = $the_godfather->year;

    echo '<br><br>Title :'.$the_godfather_title.'<br>'
    .'Director :'.$the_godfather_director.'<br>'
    .'Released :'.$the_godfather_year;
?>
