<?php

$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'gtAkademik';

$jumlah_array = count($aplikasi);

$x = 1;

while($x <= $jumlah_array) {
  echo $aplikasi[$x].'<br>';
  $x++;
}
?>
