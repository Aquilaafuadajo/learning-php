<?php 
  // VARIABLES
  $name = 'Aquila';

  // CONSTANTS
  define('NAME', 'Afuadajo');

  // STRINGS
  $stringOne = 'my email is';
  $stringTwo = 'aquila@gmail.com';
  
  // concatenation

  $stringOne . $stringTwo;
  'my name is ' . $name;

  // double quotes
  "Hey my name is $name";
  //escaping characters
  "the ninja screamed \"whaaa\"";
  // alternative
  'the ninja screamd "whaaa"';
  // find a particular character in a string
  $name[2];
  //String methods
  // echo strlen($name);
  // echo strtoupper($name);
  // echo strtolower($name);
  // echo str_replace('m', 'w', $name)

  // NUMBERS
  $raduis = 25;
  //floats
  $pi = 3.14;
  // basic math operations :- *, /, +, -, **
  $pi * $raduis**2;
  // order of operation (B I D M A S) I for indices
  2 * (4 + 9) / 3;
  //increment and decrement operators
  $raduis++;
  $raduis--;
  // shorthand operators
  $age = 20;
  $age += 10; //like js *=, -=, **=, /= 
  // number methods
  floor($pi);
  ceil($pi);
  pi();

  // ARRAYS
  // In php, there are 3 types of arrays - 1. indexed array, 2. associative arrays, 3. multidimensional arrays
  
  // indexed arrays
  $peopleOne = ['shaun', 'crystal', 'ryu'];
  // OR
  $peopleTwo = array('ken', 'chun-li');
  
  $ages = [29, 30, 40, 50];
  //print_r($ages);
  // change an array value
  $ages[1] = 25;
  // add value to the end
  $ages[] = 60;
  // OR
  array_push($ages, 70);
  //print_r($ages);
  // to get the length of an array
  count($ages);
  // merge two arrays
  $peopleThree = array_merge($peopleOne, $peopleTwo);
  //print_r($peopleThree);

  // ASSOCIATIVE ARRAYS (key value-pairs)
  $ninjasOne = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'brown'];
  $ninjasOne['mario'];
  $ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
  // add to an associative array
  $ninjasTwo['toad'] = 'pink';
  // N.B indexed array methods applies to here too

  // MULTI-DIMENSIONAL ARRAYS
  $blogs = [
  ['mario party', 'mario', 'lorem', 30],
  ['mario kart cheat', 'toad', 'lorem', 25],
  ['zelda hidden chests', 'link', 'lorem', 50]
  ];
  $blogs[] = ['title'=>'castle party', 'author'=>'peach', 1, 'hello'];
  // this array can be changed to key-value multi-dimensional
  //print_r($blogs);
  $popped = array_pop($blogs);
  //print_r($popped)

  // LOOPS
  // $ninjas = ['shaun', 'crystal', 'ryu'];
  // for($i=0; $i < count($ninjas); $i++) {
  //   echo $ninjas[$i] . '<br />';
  // };

  // foreach($ninjas as $ninja) {
  //   echo $ninja . '<br />';
  // };

  // $i = 0;

  // while($i < count($blogs)) {
  //   echo $blogs[$i][0];
  //   echo '<br />';
  //   $i++;
  // };
  // NOTE: everytime we output to the browser, our output is actually a string

  // BOOLEAN && COMPARISON

  // echo 5 > 10 ==> 1
  // loose comparison (==)
  // negation operator (!=)
  // less than or equal to (<=)
  // greater than or equal to (>=)
  
  //strings
  //echo 'shaun' < 'yoshi'; (the first letter is compared against each other) s comes before y so it returns true.
  //echo 'shaun' > 'yoshi' returns false
  // small letter is greater than capital letter s > S

    // loose vs strict equal comparison
    // loose doesn't take into consideration the data type
    // echo 5 == "5" returns true
    // strict takes data type into comparison 
    // echo 5 === "5" returns false

    // echo true == '1';
    // echo false == '';

    // CONDITIONAL STATEMENTS

    $price = 20;
    if($price < 10) {
      echo 'the condition is met';
    } elseif ($price > 30) {
      echo 'elseif condition met';
    } else {
      echo 'not met';
    }

    // BREAK && CONTINUE 
    for($i=0; $i< count($blogs); $i++) {
      if($blogs[$i][3] === 25) {
      //break;
      continue;
      }
      echo $blogs[$i][1];
    }

    // FUNCTIONS

    // function sayHello() {
    //   echo "hello world from php!";
    // }

    //sayHello();
    //with parameters
    // function withParam($name) { // default param $name = "shaun"
    //   echo "hello with parameter $name";
    // }
    // withParam()

    function formatProduct($product) {
      return "{$product['name']} costs ${product['price']} to buy <br />";
    }

    $formated = formatProduct(['name'=>'gold star', 'price'=>20]);
    // scope
    $naame = 'mario';
    function sayMynaame() {
      global $naame;
      $naame = 'yoshi';
      echo "Hello $naame";
    }

    sayMynaame();
    echo $naame;

    function byReference(&$naame) {
      $naame = 'wario';
      echo "bye $naame";
    }

    byReference($naame);
    echo $naame
?>

<?php
  include('ninjas.php');
  require('ninjas.php');
    // OR
  // require 'ninjas.php'; include 'ninjas.php';

  echo 'end of php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>my first php file</title>
</head>
<body>
  <h1>Products</h1>
  <ul><?php foreach($blogs as $blog) { ?>
        <h3><?php echo $blog[1]; ?></h3>
        <p><?php echo $blog[0]; ?></p>
      <?php } ?>
  </ul>
  <?php include('content.php') ?>
</body>
</html>