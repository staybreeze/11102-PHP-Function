<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }

    span {
        color: crimson
    }
</style>



<?php
diamond(5);
diamond(10);
diamond(15);
diamond(20);

function diamond($size)
{
    $mid = floor(($size * 2 - 1) / 2);
    // 外層要先宣告$tmp，裡面才能使用
    $tmp=0;
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