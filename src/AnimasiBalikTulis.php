<?php
namespace Xitoid\Canimasi;

class AnimasiBalikTulis
{
  public static function start($durasi, $teks, $opsional = 1)
  {
    echo "\033[".$opsional."D";
    for($i = 0; $i < $opsional - 1; $i++)
    {
      echo " ";
    }
    echo "\033[".($opsional - 1)."D";
    AnimasiNulis::start($durasi, $teks);
  }
}
