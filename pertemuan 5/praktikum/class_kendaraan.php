<?php

    class vehicle {
        protected $type;
        protected $fuel;

        protected function __construct($type, $fuel) {
            $this -> type = $type;
            $this -> fuel = $fuel;
        }

        protected function getInfo() {
            echo 'Jenis kendaraan : ' . $this -> type . '<br>';
            echo 'Bahan bakar : ' . $this -> fuel . '<br>';
        }
    }

    class motor extends vehicle {
        public $wheels;

        public function __construct($type, $fuel, $wheels) {
            parent::__construct($type, $fuel);
            $this -> wheels = $wheels;
        }
        
        public function getInfoMotor() {
            parent::getInfo();
            echo 'Jumlah roda : ' . $this -> wheels . '<br>';
        }
    }

    class submarine extends vehicle {
        public $max_depth;

        public function __construct($type, $fuel, $max_depth) {
            parent::__construct($type, $fuel);
            $this -> max_depth = $max_depth;
        }

        public function getInfoSubmarine() {
            parent::getInfo();
            echo 'Maksimal kedalaman : ' . $this -> max_depth . '<br>';
        }
    }

?>