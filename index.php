<?php
// 作業：輸出學習多媒體程式設計的目標
// 顯示兩個固定目標，無需設定

$goals = [
    "我的目標是掌握多媒體程式設計的核心概念",
    "能夠製作互動影音與圖像應用"
];
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>多媒體程式設計目標</title>
</head>
<body>
    <h1>學習多媒體程式設計的目標</h1>
    <ul>
        <li><?php echo $goals[0]; ?></li>
        <li><?php echo $goals[1]; ?></li>
    </ul>
</body>
</html>


