<html>
    <head>
        <title> Xóa sinh viên </title>
        <meta charset="utf-8">
    </head>
    <body>
        <div style="text-align: center; margin: auto; max-width: 800px;">
            <h2> Danh sách sinh viên <h2>
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
                    echo "<td>" . $student->id . "</td>";
                    echo "<td>" . $student->name . "</td>";
                    echo "<td>" . $student->age . "</td>";
                    echo "<td>" . $student->university . "</td>";
                    
                    echo "<td>";
                    echo "<a href='?mod=delete&stid=".$student->id."'> Xóa </a>";
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