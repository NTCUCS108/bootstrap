<!DOCTYPE html>
<html>
<body>
<?php
//session_start();//防灌水
$file = fopen("../../../browse_count/num.txt","r");//which file do you want to read
$num = fgets($file);
fclose($file);
if($_SESSION["come"] != "v")//防灌水
{
	$num++;
	$file = fopen("../../../browse_count/num.txt","w");
	fwrite($file,$num);
	fclose($file);
	$_SESSION["come"] = "v";//防灌水
}
?>

<?php
echo "參觀人數:";
$token = strlen($num);
for($i=0;$i<$token;$i++)
{
	$this_num = substr($num,$i,1);
	echo "<img src=../../../browse_count/$this_num.jpg width=100 height=100>";//show picture
}
?>
</body>
</html>