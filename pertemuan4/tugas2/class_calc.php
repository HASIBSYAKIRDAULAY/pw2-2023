<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        public $bilangan_kesatu;
        public $bilangan_kedua;

        public function __construct($number1, $number2) {
            // code..
            $this->bilangan_kesatu = $number1;
            $this->bilangan_kedua = $number2;
        }

        // Method lainnya
        public function Pertambahan() {
            $tambah = $this->bilangan_kesatu + $this->bilangan_kedua;
            return $tambah;
        }
        public function Pengurangan() {
            $kurang = $this->bilangan_kesatu - $this->bilangan_kedua;
            return $kurang;
        }
        public function Perkalian() {
            $kali = $this->bilangan_kesatu * $this->bilangan_kedua;
            return $kali;
        }
        public function Pembagian() {
            $bagi = $this->bilangan_kesatu / $this->bilangan_kedua;
            return $bagi;
        }
    }
    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);
    echo '<br>Bilangan pertama= 10';
    echo '<br>Bilangan kedua = 5';
    echo '<br>Pertambahan = '.$calculator->Pertambahan();
	echo '<br>Pengurangan = '.$calculator->Pengurangan();
	echo '<br>Perkalian = '.$calculator->Perkalian();
	echo '<br>Pembagian = '.$calculator->Pembagian();
?>