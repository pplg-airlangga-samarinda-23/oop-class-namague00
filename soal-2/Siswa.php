<?php

class Siswa
{
    // deklarasikan atribut-atribut kelas Siswa
    private $nama;
    private $nisn;
    private $alamat;
    private $jurusan;
    private $tanggal_lahir;

    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($nama,$nisn,$alamat,$jurusan,$tanggal_lahir)
    {
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->alamat= $alamat;
        $this->jurusan = $jurusan;
        $this->tanggal_lahir = $tanggal_lahir;
    }
    public function __get($atribut){
        return $this -> $atribut;
    }
    public function __set($atribut,$nilai){
        $this->$atribut = $nilai;
    }



    // buat metode untuk menghitung umur siswa
    public function hitungUmur() {
        $date1=new DateTime("today");
        $date2=new DateTime($this->tanggal_lahir);
        $umur=date_diff($date1,$date2);
        $umur -> format("%a hari %m bulan %y tahun");

        return $umur;
    }
}

// buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");

if($siswa_1 -> hitungUmur()->format("%a hari %m bulan %y tahun")>$siswa_2 -> hitungUmur()->format("%a hari %m bulan %y tahun")){
    echo $siswa_1->nama." lebih tua dari pada ".$siswa_2 ->nama."<br>";
    echo $sisa = $siswa_1 ->hitungUmur()-> format("%a")-$siswa_2 ->hitungUmur()-> format("%a")." hari "."<br>";
    echo $sisa = $siswa_1 ->hitungUmur()-> format("%m")-$siswa_2 ->hitungUmur()-> format("%m")." bulan "."<br>";
    echo $sisa = $siswa_1 ->hitungUmur()-> format("%y")-$siswa_2 ->hitungUmur()-> format("%y")." tahun "."<br>";
}
else{
    echo $siswa_2->nama ." lebih tua dari ".$siswa_1->nama;
}

// contoh output:
// Bambang lebih tua dibandingkan Bahrun.