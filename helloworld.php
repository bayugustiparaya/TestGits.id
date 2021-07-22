<?php
/*
  1. Q: Buatlah aplikasi untuk menampilkan “Hello” dan “World” dengan ketentuan berikut ini. (point 3)
    a. Jika input bilangan habis di bagi 3 menampilkan kata “Hello”
    b. Jika input bilangan habis di bagi 5 menampilkan kata “World”
    c. Jika input bilangan habis di bagi 5 dan 3 menampilkan kata “Hello World”

*/
// if (($i%3==0)  && ($i%5==0)) {
//   echo "Hello World";
// } elseif($i%3==0) {
//   echo "Hello";
// } elseif($i%5==0) {
//   echo "World";
// } else {
//   echo " ";
// }

function hello_world($int){
  return (($int%3==0)&&($int%5==0))?"Hello World":(($int%3==0)?"Hello":(($int%5==0)?"World":"Tidak terpenuhi"));
}

// echo hello_world(6);
// echo "<br>";
// echo hello_world(10);
// echo "<br>";
// echo hello_world(15);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01 Hello World</title>
</head>
<body>
  <a href="index.php">Home</a>
  <br><hr>
  <h3>1. Q: Buatlah aplikasi untuk menampilkan “Hello” dan “World” dengan ketentuan berikut ini. (point 3)</h3>
  <ol type="a">
    <li>Jika input bilangan habis di bagi 3 menampilkan kata “Hello”</li>
    <li>Jika input bilangan habis di bagi 5 menampilkan kata “World”</li>
    <li>Jika input bilangan habis di bagi 5 dan 3 menampilkan kata “Hello World”</li>
  </ol>

  <form method="POST" action="">
    <input type="number" name="angka" id="angka">
    <input type="submit" value="submit">
  </form>
  <br>Hasil : 
  <?php
  if($_POST){
    echo hello_world($_POST['angka']);
  }
  ?>
</body>
</html>
