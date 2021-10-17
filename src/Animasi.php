<?php
namespace Xitoid\Xo;

class Animasi
{
  private $durasi;
  private $awal;
  private $akhir;
  private $animasi;
  private $random;
  private $teks;
  
  public function __construct()
  {
    $this->isiDurasi(500000);
    $this->isiTeks("Teks Default Library Xitoid/XoCStyle");
    $this->isiAnimasi("nulis");
  }
  
  public function isiDurasi($durasi1, $durasi2 = 0)
  {
    if($durasi2 == 0)
    {
      $this->durasi = $durasi1;
      $this->random = false;
      unset($this->awal, $this->akhir);
    } else {
      $this->random = true;
      $this->awal   = $durasi1;
      $this->akhir  = $durasi2;
    }
  }
  
  public function isiTeks($teks)
  {
    $this -> teks = $teks;
  }
  
  public function isiAnimasi($animasi)
  {
    $this -> animasi = $animasi;
  }
  
  public function lihatDurasi()
  {
    if($this->random == false)
    {
      return $this->durasi;
    }
    
    return $this->awal.", ".$this->akhir;
  }
  
  public function lihatTeks()
  {
    return $this -> teks;
  }
  
  public function tampilkan()
  {
    
  }
}

class JalankanAnimasi
{
  private $durasi;
  private $animasi;
  private $teks;
  
  public function __construct($durasi, $animasi, $teks)
  {
    
  }
  
  private function nulis()
  {
    
  }
}