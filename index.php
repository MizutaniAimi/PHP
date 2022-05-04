<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP</h1>
    
</body>
</html>




<?php

// // // 1.FizzBuzz //
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz';
    } else if ($i % 5 === 0) {
        echo 'Buzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } else {
        echo $i;
    }
        echo '<br></br>';

}

// 2.素数
for ($i = 1; $i <= 10000; $i++){

   $target = 0;
 
  for ($k = 1; $k <= $i; $k++) {
    if ($i % $k == 0) {
       $target += 1;
       }
    }
    
    if ($target == 2) {
       echo $i. '' ;

       }     
}
    echo "<br></br>";


// 3.５次元配列　//

echo "Today is ". date("Y/m/d/l/h:i") .   "<br></br>";

