<?php
ob_start();
?>
<html>
<head>
<title>非法登入</title>
<meta charset="utf-8">
</head>
<body>
非法進入<br/>
網頁將在三秒跳轉至登入頁面或<br/>
<a href="login.php">點選這裡</a>

<?php
header("Refresh:3;url=login.php");
?>
</body>
</html>
<?php ob_flush(); ?>