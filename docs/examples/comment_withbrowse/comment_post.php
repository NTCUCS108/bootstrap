<?php
include("comment_connect.php");
$guestName=$_POST["guestName"];
$guestEmail=$_POST["guestEmail"];
$guestGender=$_POST["guestGender"];
$guestSubject=$_POST["guestSubject"];
$guestContent=$_POST["guestContent"];
$time=date("Y/m/d G:i:s");
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
新增留言
<form method="post" action="">
	暱稱：<input type="text" name="guestName" id="guestName"><br>
	信箱：<input type="email" name="guestEmail" id="guestEmail"><br>
	性別：<input type="radio" name="guestGender" id="guestGender" value="1">男
		  <input type="radio" name="guestGender" id="guestGender" value="0">女<br>
	留言主旨：<input type="text" name="guestSubject" id="guestSubject"><br>
	留言內容：<textarea name="guestContent" id="guestContent" rows="5"></textarea><br>
	<input type="submit" value="送出">
</form>
<!--將留言寫到資料庫-->
<?php
if(isset($guestName) and isset($guestEmail) and isset($guestGender) and isset($guestSubject) and isset($guestContent))
{
	mysql_query("Insert into comment value('','$guestName','$guestEmail','$guestGender','$guestSubject','$time','','$guestContent','','')");
	header("location:comment_browse.php");
}	
else
	echo "尚未輸入完成";
?>
</body>
</html>