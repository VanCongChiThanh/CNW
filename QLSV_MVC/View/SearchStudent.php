<?php
    echo '<form name="searchForm" action="../Controller/C_Student.php" method="POST" style="margin: auto; max-width: 1000px; border: 1px solid black; text-align: center;">';
    echo '            <h2><caption> FORM TÌM KIẾM </caption><h2> ';
    echo '            <p>';
    echo '            <input type="hidden" name="mode" id="mode" value="search">';
    echo '            <select name="criteria" id="criteria">';
    echo '                <option value="name"> Name </option>';
    echo '                <option value="age"> Age </option>';
    echo '                <option value="university"> University </option>';
    echo '            </select>';
    echo '            <input type="text" name="valueSearch" id="valueSearch" placeholder="Nhập giá trị bạn muốn tìm">';
    echo '            ';
    echo '            <input type="submit" value="Tìm" id="SearchFunc" name ="SearchFunc">';
    echo '            <input type="reset" value="Reset" id="ResetButton">';
    echo '            </p>';
    echo '</form>';
?>