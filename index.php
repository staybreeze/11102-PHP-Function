<?php

// 自訂函式
$c=20;
function sum($a,$b){
    // {}區域中吃不到全域的變數，因此若要抓全域的變數，需要使用global
    global $c;
    $sum=$a+$b+$c;
    echo "輸入:".$a."、".$b;
    echo "<br>";

    return $sum;
}

$sum=sum (10,30);
echo "總和是".$sum;

echo "<hr>";
// 函式本身也是變數，所以可以直接拿來使用
echo "總和是:".sum(56,77);




