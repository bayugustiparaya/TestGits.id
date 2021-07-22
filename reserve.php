<?php
/*
  4. Q: Buatlah aplikasi sederhana untuk membalik / reverse kalimat (point 2) 
    contoh : “Aplikasi” => “isakilpA”
    
*/
// function reserve($str){  return strrev($str); }

use function strrev as reserve;

// echo reserve("Aplikasi Testing ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>04 Reserve Kata</title>
</head>
<body>
  <a href="index.php">Home</a>
  <br><hr>
  <h3>4. Q: Buatlah aplikasi sederhana untuk membalik / reverse kalimat (point 2) </h3>
  <ul>
    <li>contoh : “Aplikasi” => “isakilpA”</li>
  </ul>

  <form method="POST" action="">
    <input type="text" name="kata" id="kata">
    <input type="submit" value="submit">
  </form>
  <br>Hasil Reserve: 
  <?php
  if($_POST){
    echo reserve($_POST['kata']);
  }
  ?>
</body>
</html>