<html>
    <head>
        <title>Xem danh sách học sinh</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div style="text-align: center; margin: auto; max-width: 800px;">
            <h2>Danh sách học sinh</h2>
            <table border="2" width="100%">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>University</th>
                    <th>Trang cá nhân</th>
                </tr>
                <?php
                if (!empty($students)) { 
                    foreach ($students as $student) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($student->id) . "</td>";
                        echo "<td>" . htmlspecialchars($student->name) . "</td>";
                        echo "<td>" . htmlspecialchars($student->age) . "</td>";
                        echo "<td>" . htmlspecialchars($student->university) . "</td>";
                        echo "<td><a href='?mod=view&stid=" . htmlspecialchars($student->id) . "'>Link</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Không có sinh viên nào trong danh sách.</td></tr>";
                }
                ?>
            </table>
        </div>
        <hr>
        <h1><a href="../index.php">Home</a></h1>
    </body>
</html>
