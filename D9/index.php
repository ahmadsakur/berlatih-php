<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>OOP PHP</title>
</head>

<body>
   <h3>Release 0</h3>
   <?php
   require_once 'animal.php';
   require_once 'ape.php';
   require_once 'frog.php';


   $sheep = new Animal("shaun");
   echo 'Animal : ' . $sheep->get_name() . '<br>'; // "shaun"
   echo 'Legs : ' . $sheep->get_legs() . '<br>'; // 2
   echo 'Cold Blooded : ' . $sheep->get_cold_blooded(); // false
   echo '<br>';

   // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
   ?>

   <h3>Release 1</h3>
   <?php
   $sungokong = new Ape("kera sakti");
   echo "1. <br>";
   echo 'Nama Ape : ' . $sungokong->get_name() . '<br>'; // "kera sakti"
   echo 'Legs : ' . $sungokong->get_legs() . '<br>'; // 2
   echo 'Cold Blooded : ' . $sungokong->get_cold_blooded() . '<br>'; // false
   echo 'Yell : ';
   $sungokong->yell()  . '<br>'; // "Auooo"
   echo '<br><br>';

   $kodok = new Frog("buduk");
   echo "2. <br>";
   echo 'Animal : ' . $kodok->get_name() . '<br>'; // "buduk"
   echo 'Legs : ' . $kodok->get_legs() . '<br>'; // 4
   echo 'Cold Blooded : ' . $kodok->get_cold_blooded() . '<br>'; // false
   echo 'Jump  :  ';
   $kodok->jump() . '<br>'; // "hop hop"
   echo '<br>'; ?>
</body>

</html>