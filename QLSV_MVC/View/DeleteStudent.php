<html>
    <head>
        <title> Xóa học sinh </title>
        <meta charset="utf-8">
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
                for ($i = 0; array_key_exists($i, $students); $i++) {
                    echo "<tr>";
                    echo "<td>" . $students[$i]->id . "</td>";
                    echo "<td>" . $students[$i]->name . "</td>";
                    echo "<td>" . $students[$i]->age . "</td>";
                    echo "<td>" . $students[$i]->university . "</td>";
                    
                    echo "<td>";
                    echo "<a href='?mod4=delete&stid=".$students[$i]->id."'> Xóa </a>";
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