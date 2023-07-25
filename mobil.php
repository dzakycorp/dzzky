<?php
 
        class mobil {
            public $merk="toyota";
            public $tahunproduksi="2018";
            public $warna="putih";
            public $kecepatan="100";

            public function star(){
                echo "mobil berjalan";
            }
            public function akselerasi(){
                echo "mobil akselerasi";
            }
            public function berhenti(){
                echo "mobil berhenti";
            }   

        }
            $mobil1 = new mobil();
            echo $mobil1->merk;
            echo "<br>";
            echo $mobil1->tahunproduksi;
            echo "<br>";
            echo $mobil1->warna;
            echo "<br>";
            echo $mobil1->kecepatan;
            echo "<br>";


               
            
            
            

            
            





        
 

    ?>