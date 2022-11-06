<?php
session_start();
require_once("phpMethods.php");

$varStudentID = $_POST['studentID'];
$varStudentName = $_POST['studentName'];

if(!empty($_POST['studentID']) && !empty($_POST['studentName'])){
    $sql="SELECT * FROM tbl_member WHERE studentID = '".$varStudentID."'";
    $result = getData($sql);
    if(!empty($result)){
        echo("<script>
            window.location.href='add.php';
            alert('This student ID already exists. Please register with another student ID number.');
            </script>");
    } else{
        $sql2="SELECT * FROM tbl_member WHERE studentName = '".$varStudentName."'";
        $result2 = getData($sql2);
        if(!empty($result2)){
        echo("<script>
            window.location.href='add.php';
            alert('This student name already exists. Please add a unique letter, change the order of the student name, or use a different name.');
            </script>");
        } else{
        $sql3="INSERT INTO tbl_member (studentID, studentName) VALUES ('".$varStudentID."','".$varStudentName."')";
        $result3 = setData($sql3);
        if($result3){
            echo("<script>
                window.location.href='index.php';
                alert('Student record added successfully. Student ID => ".$varStudentID." Student Name => ".$varStudentName."');
                </script>");
        } else{
            echo("<script>
                window.location.href='add.php';
                alert('Error adding student record. Please try again.');
                </script>");
        }
        }
    }
} else{
    echo("<script>
        window.location.href='add.php';
        alert('Please fill in all fields and try again.');
        </script>");
    }
 ?>
