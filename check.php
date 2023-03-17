<?php
ob_start();
session_start();

$principalID="prin";
$principalPSW="impcp";
$teacherID="teacher";
$teacherPSW="imtc";
$studentID="student";
$studentPSW="imstu";

$id=$_POST["id"];
$psw=$_POST["psw"];


if(($principalID==$id)&&($principalPSW==$psw)){
    $_SESSION["login"]="Principal";
    header("Location:principal.php");
}else if(($teacherID==$id)&&($teacherPSW==$psw)){
    $_SESSION["login"]="Teacher";
    header("Location:teacher.php");
}else if(($studentID==$id)&&($studentPSW==$psw)){
    $_SESSION["login"]="Student";
    header("Location:student.php");
}else{
    $_SESSION["login"]="No";
    header("Location:fail.php");
}

ob_flush();
?>