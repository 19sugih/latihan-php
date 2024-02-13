<!DOCTYPE html>
<html>
<body>
    
    <?php
    // String Operator
    // PHP memiliki dua operator yang dirancang khusus untuk string.
    ?>

<h2>Concatenation Operator "."</h2>
<?php
// Concatenation Operator
// Penggabungan $txt1 dan $txt2
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>

<h2>Concatenation assignment ".="</h2>
<?php
// Concatenation assignment
// Menambahkan $txt2 ke $txt1
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
?>  

</body>
</html>