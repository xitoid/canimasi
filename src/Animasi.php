<?php
namespace Xitoid\Canimasi;

class Animasi
{
  private $teks;
  private $durasi;
  private $animasi;
  
  public function __construct()
  {
    $this->isiDurasi(500000);
    $this->isiTeks("Teks Default Library Xitoid/XoCStyle");
    $this->isiAnimasi("nulis");
  }
  
  public function __destruct()
  {
    $this->tampilinKursor();
  }
  
  public function isiDurasi(int $durasi1,int $durasi2 = 0)
  {
    if($durasi2 == 0)
    {
      $this->durasi = array($durasi1);
    } else {
      $this->durasi = array($durasi1, $durasi2);
    }
    return $this;
  }
  
  public function isiTeks(string $teks)
  {
    $this -> teks = $teks;
    return $this;
  }
  
  public function isiAnimasi(string $animasi)
  {
    $this -> animasi = $animasi;
    return $this;
  }
  
  public function lihatDurasi()
  {
    return $this->durasi;
  }
  
  public function lihatTeks()
  {
    return $this -> teks;
  }
  
  public function lihatAnimasi($opsional = "")
  {
    $animasi = "Xitoid\Canimasi\Animasi"
      .ucfirst($this->animasi);
    
    if(!class_exists($animasi))
    {
      echo "\nAnimasi ".$this->animasi." tidak tersedia.\n";
    } else {
      $animasi::start($this->lihatDurasi(), $this->lihatTeks(), $opsional);
    }
    
    return $this;
  }
  
  public function jeda(int $sleep)
  {
    // 1 seconds == 1 000 000 miliseconds
    usleep($sleep);
    return $this;
  }
  
  public function hapus(int $jumlahHapus, int $durasi = 50000)
  {
    for($i = 0; $i < $jumlahHapus; $i++)
    {
      if($i == 0)
      {
        $n = 1;
      } else {
        $n = 2;
      }
      
      echo "\033[".$n."D ";
      if($i == $jumlahHapus - 1)
      {
        echo "\033[1D";
      }
      usleep($durasi);
    }
    return $this;
  }
  
  public function hapusLine()
  {
    echo "\033[1K\r";
    return $this;
  }
  
  public function umpetinKursor()
  {
    echo "\033[?25l";
    return $this;
  }
  
  public function tampilinKursor()
  {
    echo "\033[?25h";
    return $this;
  }
}