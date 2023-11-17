<?php 

    require_once('classVideo.php');
    require_once('classAudience.php');

    class Visualization {
        private $audience;
        private $movie;

        public function __construct($audience, $movie) {
            $this->audience = $audience;
            $this->movie = $movie;
            $this->movie->setMovie($this->movie->getMovie()+1);
            $this->audience->setTotWatched($this->movie->getTotWatched()+ 1);
        }
        public function getAudience() {
            return $this->audience;
        }
        public function setAudience($audience) {
            $this->audience = $audience;
        }
        public function getMovie() {
            return $this->movie;
        }
        public function setMovie($movie) {
            $this->movie = $movie;
        }
        public function Avaliation($rating) { 
            $this->movie->setRating($rating);
        }
        public function AvaliationScore($rating) {
            $this->movie->setRatingScore($rating);
        }
        public function AvaliationPorc ($porc) {
            $rating = 0;
            if($porc <= 20) {
                $rating = 3;
            }
        }
    }

    ?>