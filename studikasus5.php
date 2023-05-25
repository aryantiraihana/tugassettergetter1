<?php 

    class Siswa{
        public $nama, $rombel;
        private $tb, $bb;

        // setter
        public function setIsi($nama, $rombel, $tb, $bb){
            $this->nama = $nama;
            $this->rombel = $rombel;
            $this->tb = $tb;
            $this->bb = $bb;
        }

        // getter
        public function getInfo(){
            return $this->nama;
            return $this->rombel;
            return $this->tb;
            return $this->bb;
        }

        public function tampilData(){
            echo "Tugas 25 Mei 2023 <br>";
            echo "Nama Siswa : " . $this->nama . "<br>";
            echo "Rombel : " . $this->rombel . "<br>";
            echo "Tinggi Badan : " . $this->tb . "<br>";
            echo "Berat Badan : " . $this->bb;

        }
    }

    $siswa1 = new Siswa();
    $siswa1->setIsi("Z", "PPLG", "165 cm", "45 kg");
    $siswa1->tampilData();

?>