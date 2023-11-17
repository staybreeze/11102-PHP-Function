 <!-- 自訂函式 -->

 <h2>一般自訂函式宣告方式</h2>
 <?php

    $c = 20;
    function sum($a, $b)
    {
        // {}區域中吃不到全域的變數，因此若要抓全域的變數，需要使用global
        global $c;
        $sum = $a + $b + $c;
        echo "輸入:" . $a . "、" . $b;
        echo "<br>";

        return $sum;
    }

    $sum = sum(10, 30);
    echo "總和是" . $sum;

    echo "<hr>";
    // 函式本身也是變數，所以可以直接拿來使用
    echo "總和是:" . sum(56, 77);
    ?>

 <h2>不定參數的用法</h2>

 <?php
    // ...$arg 是 解構賦值 的意思
    // 變數$arg設定什麼名字都可以
    // 因為不知道()裡會有多少參數，所以使用...不定參數
    function sum2(...$arg)
    {
        // print_r($arg);
        $total = 0;
        // 因為是陣列所以可以用foreach來抓陣列裡的值
        foreach ($arg as $value) {
            // 先檢查輸入的值是否為數字
            if(is_numeric($value)){
                
                $total += $value;
        }}
        return $total;
    }


    echo sum2(1,2);
    echo "<hr>";
    echo sum2(23,45,89);
    echo "<hr>";
    echo sum2(23,98,34,89,22,3,4);
    echo "<hr>";
    



    ?>





 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>