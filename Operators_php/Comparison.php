<!DOCTYPE html>
<html>

<body>

    <h1>PHP Comparison Operators</h1>
    <h3>Equel ==</h3>
    <?php
    //equel
    //Mengembalikan nilai benar jika $x sama dengan $y
    $x = 100;
    $y = "100";

    var_dump($x == $y); // mengembalikan nilai benar karena nilainya sama
    ?>

    <h3>Identical ===</h3>
    <?php
    //identical
    // Mengembalikan nilai benar jika $x sama dengan $y, dan keduanya bertipe sama
    $x = 100;
    $y = "100";

    var_dump($x === $y); // mengembalikan false karena tipenya tidak sama
    ?>

    <h3>Not Equal !=</h3>
    <?php
    //not equel
    // Mengembalikan nilai benar jika $x tidak sama dengan $y
    $x = 100;
    $y = "100";
    var_dump($x === $y); // mengembalikan true
    ?>

    <h3>Not Identical !==</h3>
    <?php
    //not identical
    // Mengembalikan nilai benar jika $x tidak sama dengan $y, dan keduanya bertipe sama
    $x = 100;
    $y = "100";

    var_dump($x !== $y); // mengembalikan nilai true karena tipenya tidak sama
    ?>

    <h3>Greater Than ></h3>
    <?php
    //greater than
    // Mengembalikan nilai benar jika $x lebih besar dari $y
    $x = 100;
    $y = 50;

    var_dump($x > $y); // kembali benar karena $x lebih besar dari $y
    ?>

    <h3>Less Than << </h3>
    <?php
    //less than
    // Mengembalikan nilai benar jika $x lebih kecil dari $y
    $x = 10;
    $y = 50;

    var_dump($x < $y); // mengembalikan nilai true karena $x kurang dari $y
    ?>

    <h3>Greater or Equal >=</h3>
    <?php
    //greater or equal
    // Mengembalikan nilai benar jika $x lebih besar dari atau sama dengan $y
    $x = 50;
    $y = 50;

    var_dump($x >= $y); // mengembalikan nilai true karena $x lebih besar atau sama dengan $y
    ?>

    <h3>Less or Equal <=</h3>
    <?php
    //less or equal
    // Mengembalikan nilai benar jika $x lebih kecil dari atau sama dengan $y
    $x = 50;
    $y = 50;

    var_dump($x <= $y); // mengembalikan nilai true karena $x lebih kecil atau sama dengan $y
    ?>
    
    <h3>Spaceship</h3>
    <?php
    //spaceship
    // Mengembalikan nilai yang menunjukkan apakah $x lebih kecil dari $y
    $x = 5;  
    $y = 10;

    echo ($x <=> $y); // mengembalikan -1 karena $x kurang dari $y
    echo "<br>";

    $x = 10;  
    $y = 10;

    echo ($x <=> $y); // mengembalikan 0 karena nilainya sama
    echo "<br>";

    $x = 15;  
    $y = 10;

    echo ($x <=> $y); // mengembalikan +1 karena $x lebih besar dari $y  
    ?> 





</body>

</html>