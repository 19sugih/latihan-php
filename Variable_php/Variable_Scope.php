<!DOCTYPE html>
<html>
<body>

<h2>Global and Local Scope</h2>
<?php
// global and local scope
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: </p>";

?>

<h2>PHP The global Keyword</h2>
<?php
// PHP The global Keyword
 {
    global $x; // declare $x as a global variable
    $x = 5; // assign a value to $x
    echo "<p>Variable x inside function is: $x</p>";
}

myTest();

// using x outside the function will now print the updated value
echo "<p>Variable x outside function is: $x</p>";
?>

<h2>PHP The static Keyword</h2>
<?php
// PHP The static Keyword
class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

Counter::increment();
Counter::increment();
Counter::increment();
Counter::increment();
Counter::increment();
Counter::increment();
Counter::increment();
Counter::increment();
Counter::increment();
Counter::increment();

echo "Count: " . Counter::getCount();
?>



</body>
</html>
