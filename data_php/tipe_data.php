<!DOCTYPE html>
<html>

<body>

    <h2>Data bersifat String</h2>
    <div class="PHP String">
        <?php
        // PHP String
        // String adalah rangkaian karakter, seperti "Halo dunia!".
        $x = "Hello world!";
        $y = 'Hello world!';

        var_dump($x);
        echo "<br>";
        var_dump($y);
        ?>
        
        <h2>Data bersifat integer/int</h2>
        <div class="PHP Integer"></div>
        <?php
        // PHP Integer
        // Bilangan bulat adalah bilangan bulat tanpa desimal, seperti 123 atau -123.  
        $x = 190407;
        var_dump($x);
        ?>

        <h2>Data bersifat Float</h2>
        <div class="PHP Float"></div>
        <?php
        // PHP Float
        // Float adalah angka dengan desimal, seperti 19,99 atau -19,99.
        $x = 10.365;
        var_dump($x);
        ?> 

        <h2>Data bersifat Boolean</h2>
        <div class="PHP Boolean"></div>
        <?php
        // PHP Boolean
        // Boolean adalah nilai true atau false.
        $x = true;
        var_dump($x);
        ?>

        <h2>Data bersifat Array</h2>
        <div class="PHP Array"></div>
        <?php
        // PHP Array
        // Array adalah sebuah variabel yang dapat menyimpan lebih dari satu nilai.
        $cars = array("Honda", "Yamaha", "Suzuki");
        var_dump($cars);
        ?>

        <h2>Data bersifat Object</h2>
        <div class="PHP Object"></div>
        <?php
        // PHP Object
        // Object adalah sebuah variabel yang dapat menyimpan sebuah class.
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
            public function message() {
              return "My car is a " . $this->color . " " . $this->model . "!";
            }
          }
          
          $myCar = new Car("red", "BMW");
          var_dump($myCar);
          ?>

          <h2>Data bersifat NULL</h2>
          <div class="PHP NULL"></div>
          <?php
          // PHP NULL
          // NULL adalah sebuah variabel yang berisi data null.
          $x = "Hello World";
          $x = null;
          var_dump($x);
          ?>

          <h2>Data bersifat Change Data type</h2>
          <div class="PHP Change Data type"></div>
          <?php
          // PHP Change Data type
          // Mengubah data type
          $x = null;
          var_dump($x);
          $x = true;
          var_dump($x);
          $x = "Hello World";
          var_dump($x);
          $x = 10.365;
          var_dump($x);
          $x = 190407;
          var_dump($x);
          $x = array("a" => "red", "b" => "green");
          var_dump($x);
          $x = array("Hello", "World!");
          var_dump($x);
          $x = array(1, 2, 3);
          var_dump($x);
          $x = array("a" => "red", "b" => "green");
          ?>

          <h2>Data bersifat Resource</h2>
          <div class="PHP Resource"></div>
          <?php
          // PHP Resource
          // Resource adalah sebuah variabel yang dapat menyimpan sebuah resource.
          $txt = "Hello World!";
          $x = $txt;
          var_dump($x);
          ?>

          <h2>Data bersifat Constant</h2>
          <div class="PHP Constant"></div>
          <?php
          // PHP Constant
          // Constant adalah sebuah variabel yang tidak dapat diubah nilainya.
          define("GREETING", "Welcome Back!!!");
          echo GREETING;
          ?>

          <h2>Data bersifat Mixed</h2>
          <div class="PHP Mixed"></div>
          <?php
          // PHP Mixed
          // Mixed adalah sebuah variabel yang dapat menyimpan lebih dari satu tipe data.
          $x = "Hello";
          $y = 15;
          var_dump($x);
          var_dump($y);
          ?>

    </div>
</body>

</html>