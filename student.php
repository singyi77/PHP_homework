<?php
ob_start();
session_start();
?>
<html>
<head>
<title>學生頁面</title>
</head>
<body>

學生頁面

<?php
if($_SESSION["login"]=="Teacher"){
    echo "<br/><a href=\"teacher.php\">切換至教師頁面</a>";
}else if($_SESSION["login"]!="Student"){
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