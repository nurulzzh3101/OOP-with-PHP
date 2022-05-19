<?php
    class org1{
        public $nama = "nurul";
        public static $umur = 20;
        const alamat = "palembang";

        public function tambahumur($umur){
            static::$umur += $umur;
        }
    }
    
    echo org1::$umur;
    echo "<br/>";

    $org1 = new org1();
    echo $org1->nama;
    
    
    echo "<br/>";
    $saya = new org1();
    $saya -> tambahumur(1);
    echo org1::$umur;

    echo "<br/>";
    echo $org1->nama . ", anda tinggal di " .org1::alamat;
?>