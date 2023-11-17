<?php 

    require_once('classPerson.php');

    class Audience extends Person {
        private $login;
        private $totWatched;

        public function __construct($name, $age, $login, $sex, $exp) {
            parent::__construct($name, $age, $sex, $exp);//chamando a super classe pai
            $this->login = $login;
            $this->totWatched = 0;
        }
        public function WatchMore () {
            $this->totWatched ++;
        }
        public function getLogin() {
            return $this->login;
        }
        public function setLogin($login){
            $this->login = $login;
        }
        public function getTotWatched() {
            return $this->totWatched;
        }
        public function setTotWatched($totWatched){
            $this->totWatched = $totWatched;
        }
    }

    ?>