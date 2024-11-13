<?php
include_once("E_Student.php");
class Model_Student
{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connectDatabase();
    }

    private function connectDatabase()
    {
        $conn = mysqli_connect("localhost", "root", "12345Thanh", "quanlysinhvien");
        if (!$conn) {
            die("Không thể kết nối tới cơ sở dữ liệu: " . mysqli_connect_error());
        }
        return $conn;
    }

    public function getStudents()
    {
        $sql = "SELECT * FROM sinhvien";
        $result = $this->conn->query($sql);
        $students = [];

        while ($row = mysqli_fetch_array($result)) {
            $id = $row["id"];
            $name = $row["name"];
            $age = $row["age"];
            $university = $row["university"];
            $students[$id] = new Entity_Student($id, $name, $age, $university);
        }

        return $students;
    }

    public function getStudentDetail($stid)
    {
        $allStudent = $this->getStudents();
        return $allStudent[$stid] ?? null;
    }

    public function searchStudent($criteria, $searchFor)
    {
        $all = $this->getStudents();
        $found = array();

        foreach ($all as $student) {
            if (property_exists($student, $criteria) && $student->$criteria == $searchFor) {
                $found[] = $student;
            }
        }

        return $found;
    }

    public function addStudent($id, $name, $age, $university)
    {
        $sql = "SELECT * FROM sinhvien WHERE ID = '" . $id . "'";
        $rs = mysqli_query($this->conn, $sql);
        $num_rows = mysqli_num_rows($rs);

        if ($num_rows == 0) {
            $sql = "INSERT INTO sinhvien(id, name, age, university) VALUES ('$id', '$name', '$age', '$university')";
            $rs = mysqli_query($this->conn, $sql);
            return $rs ? 1 : 0;
        } else {
            echo "ID đã tồn tại, không thể thêm ID: " . $id;
            echo '<h1> <a href="javascript:history.back()">Quay lại</a> </h1>';
            return 0;
        }
    }

    public function deleteStudent($id)
    {
        $sql = "DELETE FROM sinhvien WHERE id = '$id'";
        $rs = mysqli_query($this->conn, $sql);
        return $rs;
    }

    public function updateStudentDetail($id, $name, $age, $university)
    {
        $sql = "UPDATE sinhvien SET name = '$name', age = '$age', university = '$university' WHERE id = $id";
        $rs = mysqli_query($this->conn, $sql);
        return $rs;
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}
