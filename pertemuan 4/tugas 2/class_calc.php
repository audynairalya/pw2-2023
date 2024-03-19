<?php
class calculator {
    private $bilangan1;
    private $bilangan2;

    public function __construct($bil1, $bil2) {
        $this -> bilangan1 = $bil1;
        $this -> bilangan2 = $bil2;
    }
    public function pertambahan() {
        return $this -> bilangan1 + $this -> bilangan2;
    }
    public function pengurangan() {
        return $this -> bilangan1 - $this -> bilangan2;
    }
    public function pembagian() {
        if ($this -> bilangan2 != 0) {
            return $this -> bilangan1 / $this -> bilangan2;
        } else {
            return "Cannot divided by zero number.";
        }
    }
    public function perkalian() {
        return $this -> bilangan1 * $this -> bilangan2;
    }
}
    $calc1 = new calculator(5, 9);
    $calc2 = new calculator(6, 3);

    echo "<br/> Hasil pertambahan = " . $calc1 -> pertambahan();
    echo "<br/> Hasil pengurangan = " . $calc1 -> pengurangan();
    echo "<br/> Hasil pembagian = " . $calc1 -> pembagian();
    echo "<br/> Hasil perkalian = " . $calc1 -> perkalian();

    echo "<br/>";
    echo "<br/> Hasil pertambahan = " . $calc2 -> pertambahan();
    echo "<br/> Hasil pengurangan = " . $calc2 -> pengurangan();
    echo "<br/> Hasil pembagian = " . $calc2 -> pembagian();
    echo "<br/> Hasil perkalian = " . $calc2 -> perkalian();
?>