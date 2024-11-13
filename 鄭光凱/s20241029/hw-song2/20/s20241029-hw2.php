<?php
// 檢查是否有提交的表單資料
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 獲取表單資料
    $name = $_POST['name'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $address = $_POST['address'] ?? '';
    $email = $_POST['email'] ?? '';

    // 顯示訂單資訊
    echo "<h2>訂單已提交</h2>";
    echo "<p>姓名: " . htmlspecialchars($name) . "</p>";
    echo "<p>聯絡電話: " . htmlspecialchars($mobile) . "</p>";
    echo "<p>通訊地址: " . htmlspecialchars($address) . "</p>";
    echo "<p>電子信箱: " . htmlspecialchars($email) . "</p>";
} else {
    echo "<p>無效的請求。</p>";
}
?>