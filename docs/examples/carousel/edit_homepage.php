<?php
session_start();
if($_SESSION['v']!='yes')
	header("location:../signin/siginin.php");
?>

<!DOCTYPE html>

<html>
<head>
</head>
<body>
<button onclick="location.href='./post.php'">新增</button>
<button onclick="location.href='./delete.php'">刪除</button>
<button onclick="location.href='./admin.php'">回管理者頁面</button>
<?php ?>
</body>
</html>