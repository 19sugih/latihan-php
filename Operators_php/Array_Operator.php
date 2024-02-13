<!DOCTYPE html>
<html>

<body>


    <h1> Array Operator </h1>
    <h3> Union </h3>
    <?php
    // union
// Gabungan $x dan $y
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");

    print_r($x + $y); // union of $x and $y
    ?>

    <h3>Equality</h3>
    <?php
    // equality
// Mengembalikan nilai benar jika $x dan $y memiliki pasangan kunci/nilai yang sama
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");

    var_dump($x == $y);
    ?>

    <h3>Identity</h3>
    <?php
    // identity
// Mengembalikan nilai benar jika $x dan $y memiliki pasangan kunci/nilai yang sama dalam urutan dan tipe yang sama
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");

    var_dump($x === $y);
    ?>

    <h3>Inequality</h3>
    <?php
    // inequality
    // Mengembalikan nilai benar jika $x tidak sama dengan $y
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");

    var_dump($x != $y);
    ?>

    <h3>Not Identity</h3>
    <?php
    // not identity
    // Mengembalikan nilai benar jika $x tidak identik dengan $y
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");

    var_dump($x !== $y);
    ?>


</body>

</html>