<?php
session_start();
if($_SESSION['v']!="yes")
{
	header("location:../signin/comment_signin_withbrowse.php");
}
include("comment_connect.php");
$id = $_GET["id"];
mysql_query("delete from comment where guestID = '$id'");
header("location:comment_admin_browse.php");
?>
