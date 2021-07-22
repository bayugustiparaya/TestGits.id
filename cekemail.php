<?php
/*
  2. Q: Buatlah aplikasi sederhana untuk melakukan check format email. (point 3)
    a. Format email wajib menggunakan ‘@’
    b. Format email wajib menggunakan tanda  titik ‘.’ setelah ‘@’
    c. Panjang email maksimum 20 karakter sebelum ‘@’
    d. domain yang diperbolehkan hanya “.co.id” dan “.id”
    
*/

function cek_email($str){
  $regex = '/^([a-z0-9_\.-]{2,20}+)@([a-z0-9_-]+)\.((co)\.)?(id)$/';
  return preg_match_all($regex, $str)?"Valid":"Tidak Valid";
}


// echo cek_email("bayu.gustip7820@gmail.co.id");
// echo "<br>";
// echo cek_email("bayu.gustip7820@gmail.com");  // tidak memenuhi d
// echo "<br>";
// echo cek_email("aaaaaaaa___1345678901@gmail.co.id"); // tidak memenuhi c
// echo "<br>";
// echo cek_email("aaa678@gmai-ls.id"); 
// echo "<br>";
// echo cek_email("aaa678@gmailsid"); // tidak memenuhi b
// echo "<br>";
// echo cek_email("aaa678gmailsid"); // tidak memenuhi a
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>02 Cek Email</title>
</head>
<body>
  <a href="index.php">Home</a>
  <br><hr>
  <h3>2. Q: Buatlah aplikasi sederhana untuk melakukan check format email. (point 3)</h3>
  <ol type="a">
    <li>Format email wajib menggunakan ‘@’</li>
    <li>Format email wajib menggunakan tanda  titik ‘.’ setelah ‘@’</li>
    <li>Panjang email maksimum 20 karakter sebelum ‘@’</li>
    <li>domain yang diperbolehkan hanya “.co.id” dan “.id”</li>
  </ol>

  <form method="POST" action="">
    <input type="text" name="email" id="email">
    <input type="submit" value="submit">
  </form>
  <br>Hasil : 
  <?php
  if($_POST){
    echo cek_email($_POST['email']);
  }
  ?>
</body>
</html>
