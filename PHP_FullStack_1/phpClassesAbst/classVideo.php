<?php 

    class Video implements VideoActions {

        private $title;
        private $rating;
        private $likes;
        private $views;
        private $playing;

        public function __construct($title) {//setando os valores default
            $this->title = $title;
            $this->rating = 0;
            $this->likes = 0;
            $this->views = 0;
            $this->playing = false;
        }

        public function like() {
            $this->likes++;
        }
        public function pause() {
            $this->playing = false;                
        }
        public function play() {
            $this->playing = true;
        }
        public function getTitle () {
            return $this->title;
        }
        public function setTitle ($title) {
            $this->title = $title;
        }
        public function getRating () {
            return $this->rating;
        }
        public function setRating ($rating) {
            $m = 0;
            $m = ($this->rating + $rating) / $this->views;
            $this->rating = $rating;
        }
        public function getLikes () {
            return $this->likes;
        }
        public function setLikes ($likes) {
            $this->likes = $likes;
        }
        public function getViews () {
            return $this->views;
        }
        public function setViews ($views) {
            $this->views = $views;
        }
        public function getPlaying () {
            return $this->playing;
        }
        public function setPlaying ($playing) {
            $this->playing = $playing;
        }
    }

    ?>