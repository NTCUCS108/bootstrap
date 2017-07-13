<?php
include("comment_connect.php");
if($_POST['guestName']!='')
	$guestName=$_POST["guestName"];
if($_POST['guestEmail']!='')
	$guestEmail=$_POST["guestEmail"];
if($_POST['guestGender']!='')
	$guestGender=$_POST["guestGender"];
if($_POST['guestSubject']!='')
	$guestSubject=$_POST["guestSubject"];
if($_POST['guestContentType']!='')
	$guestContentType=$_POST["guestContentType"];
if($_POST['guestContent']!='')
	$guestContent=$_POST["guestContent"];
$time=date("Y/m/d G:i:s");
?>
<?php
if(isset($guestName) and isset($guestEmail) and isset($guestGender) and isset($guestSubject) and isset($guestContent))
{
	mysql_query("insert into comment value('','$guestName','$guestEmail','$guestGender','$guestSubject','$time','$guestContentType','$guestContent','','','')");
	header("Location: comment_browse.php");
}	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
新增留言
<form method="post" action="">
	暱稱：<input type="text" name="guestName" id="guestName"><br>
	信箱：<input type="email" name="guestEmail" id="guestEmail"><br>
	性別：<input type="radio" name="guestGender" id="guestGender" value="1">男
		  <input type="radio" name="guestGender" id="guestGender" value="0">女<br>
	留言類型：<select name="guestContentType">
				<option value="產品">產品</option>
				<option value="實績">實績</option>
				<option value="其他">其他</option>
			   </select><br>
	留言主旨：<input type="text" name="guestSubject" id="guestSubject"><br>
	留言內容：<textarea name="guestContent" id="guestContent" rows="5"></textarea><br>
	<input type="submit" value="送出">
</form>
<!--將留言寫到資料庫-->

</body>
</html>