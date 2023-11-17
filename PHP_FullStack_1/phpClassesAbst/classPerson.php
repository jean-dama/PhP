<?php 
    
    abstract class Person {
        protected $name;
        protected $age;
        protected $sex;
        protected $exp;
        public function __construct($name, $age, $sex, $exp) {
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
            $this->exp = $exp;
        }
        protected function earnExp ($e) {
            $this->exp = $e;
        }
        public function getName () {
            return $this->name;
        }
        public function setName ($name) {
            $this->name = $name;
        }
        public function getAge () {
            return $this->age;
        }
        public function setAge ($age) {
            $this->age = $age;
        }
        public function getExp () {
            return $this->exp;
        }
        public function setExp ($exp) {
            $this->exp = $exp;
        }
    }
?>