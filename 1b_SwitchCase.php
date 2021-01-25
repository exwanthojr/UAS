<?php

class Segitiga{
    
    public function __construct($SETENGAH = 0.5){
        $this->SETENGAH = $SETENGAH;
    }

    public function luasSegitiga($alas, $tinggi){
        echo "Luas Segitiga adalah : ". $this->SETENGAH * $alas * $tinggi;
    }

    public function kelilingSegitiga($alas, $sisimiringA, $sisimiringB){
        echo "Keliling Segitiga adalah : ". $alas + $sisimiringA + $sisimiringB;
    }

    public function noChoice()
    {
        echo 'Anda tidak memilih';
    }

    public function prosesHitungSegitiga ($hitungSegitiga, $alas, $tinggi, $sisimiringA, $sisimiringB)
    {
        switch ($hitungSegitiga) {
            case 'luas':
                $this->luasSegitiga($alas, $tinggi);
                break;
            case 'keliling':
                $this->kelilingSegitiga($alas, $sisimiringA, $sisimiringB);
                break;
            default:
            $this->noChoice();
        }
    }
}

$sisimiringA = 2;
$sisimiringB = 6;
$alas = 7;
$tinggi = 1;
$hitungSegitiga = new Segitiga;
$hitungSegitiga->prosesHitungSegitiga('keliling', $alas, $sisimiringA, $sisimiringB);

?>