<?php

    class Movie {
        public $title;
        public $director;
        public $year;
        public $date_info;

        function __construct($_title, $_director, $_year)
        {
            $this->title = $_title;
            $this->director = $_director;
            $this->year = $_year;
        }

        public function setDateInfo($date_info)
        {
            if($this->year > 2000) {
                $this->date_info = "Film degli ultimi vent'anni";
            }else {
                $this->date_info = "Film del passato";

            }
        }

        public function getDateInfo()
        {
            return $this->date_info;
        }



    }

    $tenet = new Movie('Tenet', 'Christopher Nolan', 2020);
    $tenet_title = $tenet->title;
    $tenet_director = $tenet->director;
    $tenet_year = $tenet->year;

    // richiamo la funzione per dare uno dei due valori a date_info
    $tenet->setDateInfo($tenet_year);
    $date_info = $tenet->getDateInfo();

    echo '<b>'.$date_info.'</b><br>'
    .'Title :'.$tenet_title.'<br>'
    .'Director :'.$tenet_director.'<br>'
    .'Released :'.$tenet_year.'<br>';

    $the_godfather = new Movie('The Godfather', 'Francis Ford Coppola', 1972);
    $the_godfather_title = $the_godfather->title;
    $the_godfather_director = $the_godfather->director;
    $the_godfather_year = $the_godfather->year;

    // richiamo la funzione per dare uno dei due valori a date_info
    $the_godfather->setDateInfo($the_godfather_year);
    $date_info = $the_godfather->getDateInfo();

    echo '<br><br>'.
    '<b>'.$date_info.'</b><br>'
    .'Title :'.$the_godfather_title.'<br>'
    .'Director :'.$the_godfather_director.'<br>'
    .'Released :'.$the_godfather_year;
?>
