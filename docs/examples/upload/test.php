<pre class="codeblock prettyprint">
<?php
$type=$_FILES["file"]["type"];//找name為file裡面的東西
$size=$_FILES["file"]["size"];
$name=$_FILES["file"]["name"];//網頁讀的中文(UTF-8)
$tmp_name=$_FILES["file"]["tmp_name"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<?php
define("MAX_UPLOAD",10);
if($_FILES["file"]["error"]>0)
	echo "錯誤代碼:".$_FILES["file"]["error"]."<br>";
else
{
	$sizemb = round($size/1024000,2);
	echo "檔案類型:$type<br>";
	echo "檔案大小:$sizemb"."MB<br>";
	echo "檔案名稱:$name<br>";
	echo "暫存名稱:$tmp_name<br>";
	if($type=="image/jpeg")//副檔名審核
	{
		if($sizemb < MAX_UPLOAD)//限制流量為10MB
		{
			$filename = explode(".",$name);//將檔名($filename[0])與副檔名($filename[0])分開
			$name = $filename[0]."-".date(YmdGis)."-".rand(0,10);//新檔名(加上時戳.亂數)
			echo "已修改為新檔名".$name."並上傳<br>";
			$savename=iconv("UTF-8","BIG-5",$name);//將網頁用中文(UTF-8)轉為電腦用中文(BIG-5)以利存檔
			move_uploaded_file($tmp_name,"../carousel/img/".$savename.".".$filename[1]);//搬移至想要的資料夾
			echo "上傳成功";
			echo "<br><font size='7'>位置：img/$savename.$filename[1]</font>";
		}
		else
			echo "檔案必須小於10MB";
	}
	else 
		echo "檔案格式錯誤，上傳失敗";
	
}
?>
</body>
</html>