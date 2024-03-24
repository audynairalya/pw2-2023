<?php

    class hospitality {
        protected $name;
        protected $type;
        protected $rate;

        protected function __construct($name, $type, $rate) {
            $this -> name = $name;
            $this -> type = $type;
            $this -> rate = $rate;
        }

        protected function getInfo() {
            echo 'Hotel Info : ' . $this -> name . '<br>';
            echo 'Room Type Info : ' . $this -> type . '<br>';
            echo 'Room Rate Info : ' . $this -> rate . '<br>';
        }
    }

    class hotel extends hospitality {

        public function __construct($name, $type, $rate) {
            parent::__construct($name, $type, $rate);
        }
        
        public function getInfoHotel() {
            parent::getInfo();
        }
    }

    class roomType extends hospitality {
        public $available;

        public function __construct($name, $type, $rate, $available) {
            parent::__construct($name, $type, $rate);
            $this -> available = $available;
        }

        public function getInfoType() {
            parent::getInfo();
            echo 'Room Available Info : ' . $this -> available . '<br>';
        }
    }

    class price extends hospitality {

        public function __construct($name, $type, $rate) {
            parent::__construct($name, $type, $rate);
        }
        
        public function getInfoPrice() {
            parent::getInfo();
        }
    }

?>