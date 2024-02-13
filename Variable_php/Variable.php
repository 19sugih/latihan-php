<!DOCTYPE html>
<html>
<body>

<div class="PHP Variables"></div>
<h2>Ouput Varibles</h2>
<?php
// output variables
// Pernyataan PHP echo sering digunakan untuk menampilkan data ke layar.
$txt = "SMKN 2 SUBANG";
echo "I love $txt!";
?>

<h2>Variable Types</h2>
<?php
// variable types
// PHP tidak memiliki perintah untuk mendeklarasikan variabel, dan tipe datanya bergantung pada nilai variabel.
$x = 5;      // $x is an integer
$y = "Sugih"; // $y is a string

echo $x;
echo $y;
?>

<h2>Get the Type</h2>
<?php
// get the type
// Untuk mendapatkan tipe data suatu variabel, gunakan fungsi var_dump().
$x = 5;
var_dump($x);
var_dump(5);
var_dump("Sugih");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
?>

<h2>Assign String to a Variable</h2>
<?php
// assign string to a variable
// Variable bisa diinisialisasi dengan nilai string.
$txt = "Hello World!";
echo $txt;
?>

<h2>Assign Multiple Values</h2>
<?php
// assign multiple values
// Variable dapat diinisialisasi dengan beberapa nilai.
$x = 10;
$y = "Sugih";
$z = true;
echo $x;
echo $y;
echo $z;
?>



</body>
</html>