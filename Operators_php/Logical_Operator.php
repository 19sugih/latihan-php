<!DOCTYPE html>
<html>
<body>


<h2>The AND Operator</h2>

<p> Sugih Aldi Setiawan</p>

<h3>AND</h3>
<?php
// and
// Benar jika $x dan $y keduanya benar
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>  

<h2>The OR Operator</h2>

<p> Sugih Aldi Setiawan</p>

<h3>OR</h3>
<?php
// or
// Benar jika $x atau $y salah satu benar
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?>  

<h1>The xor Operator</h1>

<p>Write a message if one of the conditions are true, bot not if both conditions are true.</p>

<h3>XOR</h3>
<?php
// xor
// Benar jika $x dan $y salah satu benar

$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>

<h1>The NOT Operator</h1>

<p>Write a message if the condition is NOT true.</p>

<?php
// not
// Benar jika $x bukan 90
$x = 100;  

if (!($x == 90)) {
    echo "Hello world!";
}
?>  

</body>
</html>
