<?php
session_start();
if($_SESSION['v']!="yes")
{
	header("location:../signin/signin.php");
}
include("comment_connect.php");
if(!isset($_GET['id']))
	header("location:comment_admin_browse.php");
$id = $_GET["id"];
mysql_query("delete from comment where guestID = '$id'");
header("location:comment_admin_browse.php");
?>
