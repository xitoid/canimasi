<?php
namespace Xitoid\Canimasi;

class AnimasiNulis
{
  public static function start(array $durasi, string $teks)
  {
    for($i = 0; $i < strlen($teks); $i++)
    {
      echo $teks[$i];
      if(count($durasi) > 1)
      {
        $durasi[0] = self::cekDurasi($durasi[0]);
        $durasi[1] = self::cekDurasi($durasi[1]);
        $random    = rand($durasi[0], $durasi[1]);
        
        usleep($random);
      } else {
        $durasi[0] = self::cekDurasi($durasi[0]);
        usleep($durasi[0]);
      }
    }
  }
  private static function cekDurasi($durasi)
  {
    if(!is_numeric($durasi) && $durasi > 0)
    {
      return 50000;
    }
    return $durasi;
  }
}