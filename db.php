<?php

// 作法一

// 呼叫 all() 函數，指定資料表為 'students'，並指定條件為 ['dept' => '2', 'graduate_at' => '12']
$rows = all('students', ['dept' => '2', 'graduate_at' => '12']);

// 呼叫 dd() 函數，以更漂亮的方式輸出 $rows 變數的內容
dd($rows);

// 定義 all() 函數，接收資料表名稱 $table 和條件 $conditions

function all($table = null, $conditions = [])
{
    // 連接資料庫
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn, 'root', '');

    // 檢查是否有指定資料表名稱且不為空
    if (isset($table) && !empty($table)) {
        // 準備 SQL 查詢語句，使用條件 $conditions 過濾資料
        $where = '';

        if (!empty($conditions)) {
            // 如果有條件，構建 WHERE 子句
            $where = 'WHERE ';
            $conditionsArray = [];

            foreach ($conditions as $field => $value) {
                // 將條件陣列轉換成格式化的字串
                $conditionsArray[] = "`$field`='$value'";
            }

            // 用 AND 連接多個條件
            $where .= implode(' AND ', $conditionsArray);
        }

        // 組合 SQL 查詢語句
        $sql = "SELECT * FROM `$table` $where";

        // 執行 SQL 查詢，使用 fetchAll() 取得所有結果
        $rows = $pdo->query($sql)->fetchAll();

        // 返回查詢結果
        return $rows;
    } else {
        // 如果沒有指定資料表名稱，輸出錯誤訊息
        echo "錯誤: 沒有指定的資料表名稱";
    }
}

// 定義 dd() 函數，以更漂亮的方式輸出陣列的內容
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
