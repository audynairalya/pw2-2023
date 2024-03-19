<?php
class balok {
    private $panjang;
    private $lebar;
    private $tinggi;

    function __construct($p, $l, $t) {
        $this -> panjang = $p;
        $this -> lebar = $l;
        $this -> tinggi = $t;
    }

    function getLuas() {
        return $this -> panjang * $this -> lebar;
    }

    function getKeliling() {
        return 2 * ($this -> panjang + $this -> lebar + $this -> tinggi);
    }

    function getVolume() {
        return $this -> panjang * $this -> lebar * $this -> tinggi;
    }
}
?>