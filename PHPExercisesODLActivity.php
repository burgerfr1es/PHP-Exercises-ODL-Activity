<?php
    echo "Andre Evan F. Tiamzon\n";
    echo "CIT17 | CITCS INTL\n\n";
    echo "PHP excercise 1\n";
    echo "Twinkle, Twinkle little star. \n";
    $twinkle = "Twinkle";
    $star = "star";
    echo "$twinkle $star\n";
    $twinkle = "no";
    $star = "yes";
    echo "$twinkle $star\n\n";

    echo "PHP excercise 2\n";
    $x=10;
    $y=7;
    $sum= $x + $y;
    $dif= $x - $y;
    $prd= $x * $y;
    $quo= $x / $y;
    $mod= $x % $y;
    echo "$x + $y = ".$sum."\n";
    echo "$x - $y = ".$dif."\n";
    echo "$x * $y = ".$prd."\n";
    echo "$x / $y = ".$quo."\n";
    echo "$x % $y = ".$mod."\n\n";


    echo "PHP excercise 3\n";
    $variable = 8;
    echo "Value is now $variable.\n";
    $variable = $variable + 2;
    echo "Value is now $variable.\n";
    $variable = $variable - 4;
    echo "Value is now $variable.\n";
    $variable = $variable * 5;
    echo "Value is now $variable.\n";
    $variable = $variable / 3;
    echo "Value is now $variable.\n";
    $variable = $variable + 1;
    echo "Value is now $variable.\n";
    $variable = $variable - 1;
    echo "Value is now $variable.\n\n";


    echo "PHP excercise 4\n";
    echo "string(5) ".'"Harry"'."\n";
    echo "Harry\n";
    echo "int(28)\n";
    echo "NULL";

    echo "PHP exercise 5\n";
    $around ="around";
    echo 'What goes '."$around".', comes '."$around".'.';

    echo "\n\nPHP exercise 6\n";
    for ($x=1; $x<=12; $x++){
    $y = $x*$x;
    echo "$x * $x = $y\n";
}

    echo "\n\nPHP exercise 7\n";
    for ($i=1; $i<=7; $i++){
    for ($j=1; $j<=7; $j++){
    $k = $i*$j;
    echo "$k\t";
}
    echo "\n";
}
?>