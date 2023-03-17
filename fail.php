<?php
ob_start();
session_start();

if($_SESSION["login"]=="No"){

}else{
    header("Location:error.php");
}

?>
<html>
<head>
<title>登入失敗！</title>
<meta charset="utf-8">
</head>
<body>
登入失敗！<br/>
網頁將在三秒跳轉至登入頁面或<br/>
<a href="login.php">點選這裡</a>

<?php
header("Refresh:3;url=login.php");
?>
</body>
</html>
<?php ob_flush(); ?>