<html>
    <head>
        <meta charset="utf-8">
        <title> Cập nhật học sinh </title>
    </head>
    <body>
        <div style="text-align: center; margin: auto; max-width: 800px;">
            <h2> Danh sách học sinh <h2>
            <table border = "2" width = 100%>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>University</th>
                    <th>Xóa</th>
                </tr>
            <?php
                foreach ($students as $student) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($student->id) . "</td>";
                    echo "<td>" . htmlspecialchars($student->name) . "</td>";
                    echo "<td>" . htmlspecialchars($student->age). "</td>";
                    echo "<td>" . htmlspecialchars($student->university). "</td>";
                    echo "<td>";
                    echo "<a href='?mod=update&stid=".$student->id."'> Cập nhật </a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
        <hr>
        <h1> <a href="javascript:history.back()">Back</a> </h1>
    </body>
</html>