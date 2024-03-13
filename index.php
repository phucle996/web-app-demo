<!DOCTYPE html>
<html>
<head>
    <title>Web App PHP</title>
</head>
<body>
    <h1>Chào mừng bạn đến với ứng dụng web PHP!</h1>

    <?php
    // Lấy thời gian hiện tại
    $time = date("H:i:s");
    // Hiển thị thời gian
    echo "<p>Bây giờ là: " . $time . "</p>";
    ?>

    <form action="process.php" method="POST">
        <label for="name">Nhập tên của bạn:</label><br>
        <input type="text" id="name" name="name"><br>
        <input type="submit" value="Gửi">
    </form>
</body>
</html>
