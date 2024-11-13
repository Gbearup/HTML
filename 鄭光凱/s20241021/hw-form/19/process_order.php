<?php
// 檢查是否有菜單項被選中
if (isset($_POST['quantity'])) {
    $quantities = $_POST['quantity'];
    $prices = [
        "漢堡" => 5,
        "薯條" => 2,
        "可樂" => 1,
        "沙拉" => 3
    ];

    // 統計總金額
    $total = 0;
    echo "<!DOCTYPE html>
    <html lang='zh-Hant'>
    <head>
        <meta charset='UTF-8'>
        <title>您的訂單</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            h1 {
                color: #333;
            }
            ul {
                list-style-type: none;
                padding: 0;
            }
            li {
                background: #e9ecef;
                margin: 10px 0;
                padding: 10px;
                border-radius: 5px;
            }
            h2 {
                color: #28a745;
            }
        </style>
    </head>
    <body>";

    echo "<h1>您的訂單</h1>";
    echo "<ul>";

    foreach ($quantities as $item => $quantity) {
        if ($quantity > 0 && array_key_exists($item, $prices)) {
            $itemTotal = $prices[$item] * $quantity;
            $total += $itemTotal;
            echo "<li>$item - 數量: $quantity, 小計: $$itemTotal</li>";
        }
    }

    echo "</ul>";
    echo "<h2>總金額: $$total</h2>";
    echo "</body></html>";
} else {
    echo "<h1>未選擇任何菜單項</h1>";
}
?>