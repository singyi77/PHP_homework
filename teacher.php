<?php
ob_start();
session_start();
?>
<html>
<head>
<title>老師頁面</title>
</head>
<body>

老師頁面

<?php
if($_SESSION["login"]=="Teacher"){
    echo "<br/><a href=\"student.php\">切換至學生頁面</a>";
}else if($_SESSION["login"]=="Principal"){
    echo "<br/><a href=\"principal.php\">切換至校長頁面</a>";
}else{
    header("Location:error.php");
}
?>
<hr>
<br/>
內容內容內容內容內容內容內容內容內容
<br/>
<a href="logout.php">登出</a>

</body>
</html>
<?php ob_flush(); ?>