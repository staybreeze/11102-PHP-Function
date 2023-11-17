<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }

    span {
        color: crimson
    }
</style>
<?php


stars('菱形', 20);
echo "<br>";
stars('正三角形', 20);
echo "<br>";
stars('矩形', 20);
echo "<br>";
stars('交叉矩形', 20);

function stars($shape, $size)
{
    switch ($shape) {

        case '正三角形':
            equilateralTriangle($size);
            break;
        case '菱形':
            diamond($size);
            break;
        case '矩形':
            retangle($size);
            break;
        case "交叉矩形":
            retangleCross($size);
            break;
    }
}
function equilateralTriangle($size)
{
    for ($i = 0; $i < $size; $i++) {

        for ($j = 0; $j < $size - 1 - $i; $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < $i * 2 + 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}
?>

<?php


function diamond($size)
{
    $mid = floor(($size * 2 - 1) / 2);
    // 外層要先宣告$tmp，裡面才能使用
    $tmp = 0;
    for ($i = 0; $i < $size * 2 - 1; $i++) {

        if ($i <= $mid) {
            $tmp = $i;
        } else {
            $tmp--;
        }
        for ($j = 0; $j < ($mid - $tmp); $j++) {
            echo "&nbsp;";
        }

        for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
}
?>

<?php
function retangle($size)
{
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {


            if ($i == 0 || $i == $size - 1) {
                echo "*";
            } elseif ($j == 0 || $j == $size - 1) {
                echo "*";
            } else {
                echo "&nbsp";
            }
        }
        echo "<br>";
    }
}
?>

<?php
function retangleCross($size)
{
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {


            if ($i == 0 || $i == $size - 1) {
                echo "*";
            } elseif ($j == 0 || $j == $size - 1) {
                echo "*";
            } elseif ($j == $i || $i + $j == $size - 1) {
                echo "<span>*</span>";
            } else {
                echo "&nbsp";
            }
        }
        echo "<br>";
    }
}
?>