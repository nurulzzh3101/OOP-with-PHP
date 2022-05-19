<?php
    interface buah{
        public function warna();
    }

    class apel implements buah{
        public function warna(){
            return "merah";
        }
    }

    class jeruk implements buah{
        public function warna(){
            return "orange";
        }
    }


    interface prosesDB{
        public function simpan($pesan);
    }

    class DBmysql implements prosesDB{
        public function simpan($pesan){
            return "data berhasil disimpan di MySQL : " . $pesan;
        }
    }

    class DBmongo implements prosesDB{
        public function simpan($pesan){
            return "data berhasil disimpan di Mongo : " . $pesan;
        }
    }

    class konten {
        protected $proses;
        public function __construct(prosesDB $proses){
            $this->proses = $proses;
        }
        public function newKonten(){
            $konten = "save new content";
            return $this->proses -> simpan($konten);
        }
    }


    $konten = new konten(new DBmysql);
    echo $konten->newKonten();

    echo "<br/>";
    $konten = new konten(new DBmongo);
    echo $konten->newKonten();
?>