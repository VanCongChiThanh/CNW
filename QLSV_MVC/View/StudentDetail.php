<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin chi tiết sinh viên</title>
</head>
<body>
    <h2>Chi tiết sinh viên:</h2>
    <?php
        echo "<p><b>Name: </b>" . $student->name . "</p>";
        echo "<p><b>Age: </b>" . $student->age . "</p>";
        echo "<p><b>University: </b>" . $student->university . "</p>";
    ?>
    <p><a href="javascript:history.back()">Back</a></p>
</body>
</html>
