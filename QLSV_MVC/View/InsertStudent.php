<head>
    <meta charset="utf-8"/>
    <title> Chèn sinh viên </title>
</head>


<body>

<h2>Form nhập thông tin sinh viên</h2>
<form action="../Controller/C_Student.php" method="POST">
  <label for="id">ID:</label><br>
  <input type="text" id="id" name="id" required><br>
  
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br>
  
  <label for="age">Age:</label><br>
  <input type="number" id="age" name="age" required><br>
  
  <label for="university">University:</label><br>
  <input type="text" id="university" name="university" required><br>
  
  <input type="submit" name="Insert" value="Insert">
</form> 


</body>