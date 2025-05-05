<?php
 class kisi
 {
     public $ad="Bahar Evin";
     private $soyad="Özdemir";
     protected $meslek=".";
     public function bilgileriYazdir()
     {
         echo $this->ad."<br>".
             $this->soyad."<br>".
             $this->meslek."<br>";
     }
 }
 $kisi1=new kisi();
 $kisi1->bilgileriYazdir();
 ?>