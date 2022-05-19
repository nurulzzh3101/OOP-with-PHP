<?php
    //ENKAPSUASI
    //melindungi properti / method dalam class.
    //hanya beberapa hal yg bisa di akses diluar kelas
    class org3{
        protected $smt = 1; //tdk bisa diakses diluar dari class

        function setSMT($angka){
            if ($angka >= 7 AND $angka < 10) {
                echo "Anda dalam smt belajar, status : siap-siap D.O";
            }
            elseif ($angka <7 AND $angka > 0) {
                echo "Anda dalam smt belajar, status AMAN ";
            }
            else {
                throw new Exception("ANDA TELAH DI D.O, status : bukan mahasiswa");
            }

            $this->smt = $angka;
        }

        function getSMT(){
            return $this->smt;
        }
    }

    $org3 = new org3();
    echo $org3->smt;
        echo "<br/>";
    $org3->smt = 80;
    echo $org3->smt;
    echo $org3->getSMT();
        echo "<br/>";
    $org3->setSMT(40);
    echo $org3->smt;
    echo $org3->getSMT();
    
?>