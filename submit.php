<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // 显示提交的数据
    echo "<h1>提交的用户信息</h1>";
    echo "<p>姓名: $name</p>";
    echo "<p>电子邮件: $email</p>";

    // 在这里可以将数据存储到数据库或执行其他处理
}
?>