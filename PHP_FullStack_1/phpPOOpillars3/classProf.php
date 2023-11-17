<?php 
    require_once('classPerson.php');
    class Prof extends Person {
        private $especialidade;
        private $salary;

        public function ReceberAumento ($aumento) {
            $this->especialidade += $aumento; 
        }
        public function getEspecialidade () {
            return $this->especialidade;
        }
        public function setEspecialidade ( $especialidade ) {
            $this->especialidade = $especialidade;
        }
        public function setSalary ( $salary ) {
            $this->salary = $salary;
        }
        public function getSalary () {
            return $this->salary;
        }
    }

    ?>