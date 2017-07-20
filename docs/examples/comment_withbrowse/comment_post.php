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
if($_POST['guestContent']!='')
	$guestContent=$_POST["guestContent"];
$createtime=date("Y/m/d G:i:s");
$guestContentType=$_POST["guestContentType"];
?>
<?php
if(isset($guestName) or isset($guestEmail) or isset($guestGender) or isset($guestSubject) or isset($guestContent))
{
	$check = 0;
	if(isset($guestName) and isset($guestEmail) and isset($guestGender) and isset($guestSubject) and isset($guestContent))
	{
		$check = 1;
		mysql_query("Insert into comment value('','$guestName','$guestEmail','$guestGender','$guestSubject','$createtime','$guestContentType','$guestContent','','','0','0')");
		header("location:comment_browse.php");
	}
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
	暱稱：<input type="text" name="guestName" id="guestName" value="<?php if($_POST['guestName'] != '') echo "$_POST[guestName]";?>"><br>
	信箱：<input type="email" name="guestEmail" id="guestEmail" value="<?php if($_POST['guestEmail'] != '') echo "$_POST[guestEmail]";?>"><br>
	性別：<input type="radio" name="guestGender" id="guestGender" value="1" <?php if($_POST['guestGender'] == '1') echo "checked=checked";?>>男
		  <input type="radio" name="guestGender" id="guestGender" value="0" <?php if($_POST['guestGender'] == '0') echo "checked=checked";?>>女<br>
	留言類型：<select name="guestContentType">
				<option value="產品" <?php if($_POST['guestContentType'] == '產品') echo "selected";?>>產品</option>
				<option value="實績" <?php if($_POST['guestContentType'] == '實績') echo "selected";?>>實績</option>
				<option value="其他" <?php if($_POST['guestContentType'] == '其他') echo "selected";?>>其他</option>
			   </select><br>
	留言主旨：<input type="text" name="guestSubject" id="guestSubject" value="<?php if($_POST['guestSubject'] != '') echo "$_POST[guestSubject]";?>"><br>
	留言內容：<textarea name="guestContent" id="guestContent" rows="5" value="<?php if($_POST['guestContent'] != '') echo "$_POST[guestContent]";?>"></textarea><br>
	<input type="submit" value="送出">
</form>
<?php
if(isset($check) and $check==0)
{
	echo "上傳失敗<br>未輸入：";
	if(!isset($guestName))
		echo "暱稱 ";
	if(!isset($guestEmail))
		echo "信箱 ";
	if(!isset($guestGender))
		echo "性別 ";
	if(!isset($guestSubject))
		echo "留言主旨 ";
	if(!isset($guestContent))
		echo "留言內容";
}
if(!isset($check) and isset($_POST['guestName']))
	echo "尚未開始輸入";
?>
</body>
</html>