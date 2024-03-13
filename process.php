<!DOCTYPE html>
<html>
<head>
    <title>Xử lý dữ liệu</title>
</head>
<body>
    <h1>Dữ liệu đã được xử lý</h1>

    <?php
    // Kiểm tra xem có dữ liệu được gửi hay không
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ form
        $name = $_POST['name'];
        // Hiển thị tên đã được gửi
        echo "<p>Xin chào, $name!</p>";
    } else {
        // Nếu không có dữ liệu được gửi, thông báo lỗi
        echo "<p>Lỗi: Không có dữ liệu được gửi.</p>";
    }
    ?>
</body>
</html>
