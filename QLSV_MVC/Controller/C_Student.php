<?php
include_once("../Model/M_Student.php");

class Ctrl_Student
{
    public function invoke()
    {
        $modelStudent = new Model_Student();
        if (isset($_GET['mod'])) {
            $mod = $_GET['mod'];
            switch ($mod) {
                case 'insert':
                    include_once("../View/InsertStudent.php");
                    break;
                case 'update':
                    if(isset($_GET['stid'])){
                        $stid = $_GET['stid'];
                        $modelStudent = new Model_Student();
                        $student = $modelStudent->getStudentDetail($stid);
                        include_once("../View/UpdateForm.html");
                    }
                    else{
                        $students = $modelStudent->getStudents();
                        include_once("../View/UpdateStudent.php");
                    }
                    break;
                case 'view':
                    if (isset($_GET['stid'])) {
                        $student = $modelStudent->getStudentDetail($_GET['stid']);
                        include_once("../View/StudentDetail.php");
                    } else {
                        $students = $modelStudent->getStudents();
                        include_once("../View/StudentList.php");
                    }
                    break;
                case 'search':
                    include_once("../View/SearchStudent.php");
                    break;
                case 'delete':
                    if(isset($_GET['stid'])){
                        $stid = $_GET['stid'];
                        $ok = $modelStudent->deleteStudent($stid);
                        if ($ok) {
                            echo "Success !";
                            $students = $modelStudent->getStudents();
                            include_once("../View/StudentList.php");
                        } else {
                            echo " can not delete !'";
                            echo '<h1> <a href="javascript:history.back()">back</a> </h1>';
                        }
                    }
                    else{
                        $students = $modelStudent->getStudents();
                        include_once("../View/DeleteStudent.php");
                    }
                    break;
                default:
                    echo "Invalid mod value";
                    break;
            }
        } else if (isset($_POST['Insert'])) {
            // cap nhat 
            $id = $_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $university = $_POST['university'];
            $ok = $modelStudent->addStudent($id, $name, $age, $university);
            if ($ok) {
                echo "Success !";
                $students = $modelStudent->getStudents();
                include_once("../View/StudentList.php");
            } else {
                echo "ID exist, can not insert ID:  " . $id;
                echo '<h1> <a href="javascript:history.back()">Quay lại</a> </h1>';
            }
        } else if (isset($_REQUEST['UpdateDetail'])) {
            $id = $_REQUEST['id'];
            $name = trim($_REQUEST['name']);
            $age = trim($_REQUEST['age']);
            $university = trim($_REQUEST['university']);
            $ok = $modelStudent->updateStudentDetail($id, $name, $age, $university);
            if ($ok) {
                echo "Success !";
                $students = $modelStudent->getStudents();
                include_once("../View/StudentList.php");
            } else {
                echo " can not excute !'";
                echo '<h1> <a href="javascript:history.back()">back</a> </h1>';
            }
        }
        if (isset($_POST['SearchFunc'])) { 
            $criteria =  $_POST['criteria'];
            $valueSearch = $_POST['valueSearch'];
            
            if ($criteria != '' && $valueSearch != '') {
                echo 'Kết quả tìm kiếm cho <code>' . $criteria . "='" . $valueSearch . "'</code> là:";
                $students = $modelStudent->searchStudent($criteria, $valueSearch);
                include_once("../View/StudentList.php");
            } else {
                echo "<Strong> can't found </Strong>";
            }
        }
    }
}
$C_Student = new Ctrl_Student();
$C_Student->invoke();
