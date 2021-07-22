<?php
/*
  3. Q: Buatlah aplikasi sederhana untuk mengkonversi waktu tanpa menggunakan fungsi / class DateTime (point 4)
  contoh : 
    a. 12:00:00 PM => 12:00 
    b. 12:00:00 AM => 00:00

*/

// function cek($h, $m, $s, $f){
//   return (($h<=12) && ($m<=59) && ($s<=59) && (($f=="AM") || ($f=="PM")));
// }

function pola($tm, $f){
  $time = $tm." ".$f;
  $regex = "/((0[1-9]|1[0-2]):([0-5][0-9]):([0-5][0-9]) ?([AaPp][Mm]))/";
  return preg_match_all($regex, $time);
}

function konversiwaktu($time, $format){
  $arr = explode(":",$time);
  $jam = $arr[0];
  $menit = $arr[1];
  $detik = $arr[2];
  pola($time, $format) or die("Inputan Salah");
  if ($format=="AM" && $jam==12) {
    $jam = "00";
  } elseif ($format=="PM" && $jam<12){
    $jam += 12;
  }
  // return $jam.":".$menit.":".$detik;
  return $jam.":".$menit;
}

// echo konversiwaktu("12:00:00", "PM")."<br>";
// echo konversiwaktu("12:00:00", "AM")."<br>";
// echo konversiwaktu("04:33:12", "AM")."<br>";
// echo konversiwaktu("05:20:12", "PM")."<br>";
// echo konversiwaktu("15:20:12", "PM")."<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>03 Konversi Waktu</title>
</head>
<body>
  <a href="index.php">Home</a>
  <br><hr>
  <h3>3. Q: Buatlah aplikasi sederhana untuk mengkonversi waktu tanpa menggunakan fungsi / class DateTime (point 4) contoh : </h3>
  <ol type="a">
    <li>12:00:00 PM => 12:00</li>
    <li>12:00:00 AM => 00:00</li>
  </ol>

  <form method="POST" action="">
    <input type="text" name="waktu" id="waktu">
    <select name="ampm" id="ampm">
      <option value="AM">AM</option>
      <option value="PM">PM</option>
    </select>
    <input type="submit" value="submit">
  </form>
  <br>Hasil Konversi: 
  <?php
  if($_POST){
    echo konversiwaktu($_POST['waktu'], $_POST['ampm']);
  }
  ?>
</body>
</html>

