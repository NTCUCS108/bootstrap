<!DOCTYPE html>
<html>
<body>
<?php
session_start();//防灌水
$file = fopen("num.txt","r");//which file do you want to read
$num = fgets($file);
fclose($file);
if($_SESSION["come"] != "v")//防灌水
{
	$num++;
	$file = fopen("num.txt","w");
	fwrite($file,$num);
	fclose($file);
	$_SESSION["come"] = "v";//防灌水
}
?>

<?php
echo "參觀人數:$num";//print the number
?>
</body>
</html>