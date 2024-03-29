<?php

    class Kendaraan {
        protected $jenis;
        protected $bahanbakar;

        function __construct($jenis, $bahanBakar)
        {
             $this->jenis = $jenis;
             $this->bahanBakar = $bahanBakar;
        }

        protected function getInfo(){
            echo "Jenis kendaraan: " . $this->jenis . "<br>";
            echo "Bahan Bakar: " . $this->bahanBakar . "<br>";
        }
    }

    class motor extends Kendaraan {
        public $roda;

        public function __construct($jenis,$bahanBakar,$roda)
        {
            parent::__construct($jenis,$bahanBakar);
            $this->roda = $roda;
        }

        public function getInfo(){
            parent::getInfo();
            echo "Jumlah Roda: " . $this->roda . "<br>";
        }
    }

    class submarine extends Kendaraan {
        public $maks_kedalaman;

        public function __construct($jenis, $bahanBakar, $max_depth)
        {
            parent::__construct($jenis, $bahanBakar);
            $this->maks_kedalaman = $max_depth;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Kedalaman Maks: " . $this->maks_kedalaman . "meter <br>";
        }
    }

?>