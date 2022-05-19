<?php
    //hubungan warisan antara parent and child
    class kendaraan{ //parent
        private $warna = "putih"; //tdk bisa diakses selain dlm class
        protected $mesin = 1000; //masih bisa diakses jika merupakan inheritance

        public function setwarna($warna)
        {
            $this->warna = $warna;
        }

        public function getwarna()
        {
            return $this->warna;
        }

        public function setmesin($mesin)
        {
            $this->mesin = $mesin;
        }

        public function getmesin()
        {
            return $this->mesin;
        }
    }


    class mobil extends kendaraan{ //child
        private $temp =0;
        public function __construct()
        {
            
        }

        public function settemp($temp)
        {
            $this->temp = $temp;
        }

        public function gettemp()
        {
            return $this->temp;
        }
    }

    $mobil = new mobil();
    echo "warna mobil : " .$mobil->getwarna() . ", dengan mesin : " .$mobil->getmesin() 
        . ", temperatur mobil : " .$mobil->gettemp();

    echo "<br/>";
    $mobil->setwarna("merah");
    $mobil->setmesin("1500");
    $mobil->settemp("25");
    echo "warna mobil : " .$mobil->getwarna() . ", dengan mesin : " .$mobil->getmesin()
    . ", temperatur mobil : " .$mobil->gettemp();
?>