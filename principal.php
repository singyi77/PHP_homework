<?php
ob_start();
session_start();
?>
<html>
<head>
<title>校長頁面</title>
</head>
<body>

校長頁面

<?php
if($_SESSION["login"]=="Principal"){
    echo "<br/><a href=\"teacher.php\">切換至老師頁面</a>";
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