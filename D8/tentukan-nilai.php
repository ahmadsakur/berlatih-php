<?php
function tentukan_nilai($number)
{
   if ($number >= 85 && $number <= 100) {
      echo "Sangat Baik";
   } else if ($number >= 70 && $number < 85) {
      echo "Baik";
   } else if ($number >= 60 && $number < 70) {
      echo "Cukup";
   } else {
      echo "Kurang";
   }
}



//TEST CASES
// echo tentukan_nilai(100); //Sangat Baik
echo tentukan_nilai(76); //Baik
// echo tentukan_nilai(67); //Cukup
// echo tentukan_nilai(43); //Kurang
