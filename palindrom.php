<?php
/*
  5. Q: Buatlah aplikasi sederhana untuk cek kalimat palindrom (point 2)
  contoh : 
    a. Katak di balik kataK  => Result True (karena palindrom )
    b. Ubi di balik iBu => Result False (karena bukan palindrome )
    
*/

function palindrom($str){
  $str = strtolower($str);
  return ( $str == strrev($str))?"True":"False";
}

// echo palindrom("kataK")."<br>";
// echo palindrom("Ubi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>05 Palindrom</title>
</head>
<body>
  <a href="index.php">Home</a>
  <br><hr>
  <h3>5. Q: Buatlah aplikasi sederhana untuk cek kalimat palindrom (point 2) contoh : </h3>
  <ol type="a">
    <li>Katak di balik kataK  => Result True (karena palindrom )</li>
    <li>Ubi di balik iBu => Result False (karena bukan palindrome )</li>
  </ol>

  <form method="POST" action="">
    <input type="text" name="kata" id="kata">
    <input type="submit" value="submit">
  </form>
  <br>Result: 
  <?php
  if($_POST){
    echo palindrom($_POST['kata']);
  }
  ?>
</body>
</html>