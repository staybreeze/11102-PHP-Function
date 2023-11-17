
<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
    span{
        color:crimson
    }
</style>
<?php

equilateralTriangle(5);
equilateralTriangle(10);
equilateralTriangle(15);
equilateralTriangle(20);
equilateralTriangle(25);
equilateralTriangle(30);
equilateralTriangle(35);

function equilateralTriangle($size){
for ($i = 0; $i < $size; $i++) {
 
    for ($j = 0; $j < $size-1 - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < $i * 2 + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}}
?>