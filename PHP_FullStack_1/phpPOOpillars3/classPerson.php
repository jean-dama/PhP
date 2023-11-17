<?php 

    class Person {
        public $nome;
        public $age;
        public $sex;

        public function Aniver () {
            $this->age ++;
        }

        public function getNome () {
            return $this->nome;
        }
        public function setNome ($nome) {
            $this->nome = $nome;
        }
        public function getAge () { 
            return $this->age;
        }
        public function setAge ($age) { 
            $this->age = $age;
        }
        public function getSex () {   
            return $this->sex;
        }
        public function setSex ($sex) { 
            $this->sex = $sex;
        }   

    }

    ?>