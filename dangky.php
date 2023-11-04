<?php

// Kiểm tra xem có dữ liệu được gửi đi hay không
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ biểu mẫu đăng ký
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    // Kiểm tra xem các trường đã được điền đầy đủ chưa
    if ($username && $password && $email) {
        // Thực hiện lưu thông tin đăng ký vào CSDL hoặc các xử lý khác tùy thuộc vào yêu cầu của bạn
        // Ở đây, chúng ta chỉ in thông tin đăng ký ra màn hình
        echo "Tên đăng nhập: $username<br>";
        echo "Mật khẩu: $password<br>";
        echo "Email: $email<br>";
    } else {
        echo "Vui lòng điền đầy đủ thông tin!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký tài khoản</title>
</head>
<body>
    <h1>Đăng ký tài khoản mới</h1>
    <form method="POST" action="">
        <label>Tên đăng nhập:</label>
        <input type="text" name="username" required><br>

        <label>Mật khẩu:</label>
        <input type="password" name="password" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" name="submit" value="Đăng ký">
    </form>
</body>
</html>
