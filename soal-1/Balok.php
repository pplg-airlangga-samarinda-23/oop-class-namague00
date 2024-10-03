<?php
class Balok
{
    // deklarasikan atribut-atribut kelas Balok
    private $p;
    private $l;
    private $t;


    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($p,$l,$t)
    {
        $this-> p = $p;
        $this-> l = $l;
        $this-> t = $t;
    }
    public function __get($atribut){
        return $this -> $atribut;
    }
    public function __set($atribut,$nilai){
        $this-> $atribut =$nilai;
    }


    // definisikan metode menghitung volume, luas permukaan,
    public function hitungvolume1(){
        return $this -> p * $this -> l * $this-> t;
    } 
    public function hitungluas(){
        return 2*(($this -> p * $this-> l)+($this -> p * $this -> t)+($this -> l * $this -> t));
    }
}

$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);
echo "balok 1 <br>";
echo "volume: ".$balok_1->hitungvolume1()."<br>";
echo "luas permukaan: ".$balok_1->hitungluas()."<br>";

echo "balok 2 <br>";
echo "volume: ".$balok_2 ->hitungvolume1()."<br>";
echo "luas permukaan: ".$balok_2->hitungluas()."<br>"; 

// contoh output: Balok

// Balok 1
// Volume: 160
// Luas Permukaan: 184

// Balok 2
// Volume: 360
// Luas Permukaan: 372