<?php
    $a = true;
    $b = false;

    //Variable $c Akan Bernilai False
    $c = $a && $b;
    printf("%b && %b = %b", $a,$b,$c);
    echo "<hr>";

    //Variable $c Akan Bernilai True
    $c = $a || $b;
    printf("%b || %b = %b", $a,$b,$c);
    echo "<hr>";

    //Variable $c Akan Bernilai False
    $c = !$a;
    printf("!%b = %b", $a,$c);
    echo "<hr>";
?>