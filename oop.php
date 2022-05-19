<?php

    //INTRODUCTION
    class orang{ //object
        public $nama = "nurul"; //dpt diakses tdk hanya dlm class
        function setNama(){
            //code
            return "izzah";
        }
    }

    $orang = new orang(); //buat new object
    echo $orang->nama; //panggil object
        echo "<br/>";
    echo $orang->setNama(); //panggil fungsi

    echo "<br/>";



    //THIS, SET DAN GET METHOD
    class orang2{
        public $umur = 1;
        function setUmur($newUmur){ //untuk set data
            //code
            $this->umur = $newUmur; //untuk tentukan data yang ingin diambil 
        }

        function getUmur(){ //untuk ambil data
            return $this->umur;
        }
    }

    $orang2 = new orang2();
    echo $orang2->umur;
        echo "<br/>";
    $orang2->setUmur(20);
    echo $orang2->umur;
        echo "<br/>";
    echo $orang2->getUmur();
?>