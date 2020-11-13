<?php
function ubah_huruf($string)
{
   $shifted = '';
   for ($i = 0; $i < strlen($string); $i++) {
      $temp = $string[$i];
      $temp = chr(ord($temp) + 1);
      $shifted = $shifted . $temp;
   }
   echo $shifted;
}

// TEST CASES
// echo ubah_huruf('wow'); // xpx
// echo ubah_huruf('developer'); // efwfmpqfs
// echo ubah_huruf('laravel'); // mbsbwfm
// echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
