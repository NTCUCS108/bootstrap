<?php
session_start();
if($_SESSION["v"]=="yes")
	header("location:../comment_withbrowse/comment_admin_browse.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Signin Template for Bootstrap</title>

    
  </head>

  <body>

    <form role="form" method="post">
        <h2>Please sign in</h2>
        <label for="inputEmail">Email address</label><!--mean?-->
        <input type="text" id="account" name="account" placeholder="Account" required autofocus><!--2017-7-6已修改為text-->
        <label for="inputPassword">Password</label><!--mean?-->
        <input type="password" id="password" name="password" placeholder="Password" required>
        <div>
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
<!--驗證admin帳號-->
<?php
if(isset($_POST["account"]) and isset($_POST["password"]))
{
include("../comment/comment_connect.php");
$account = $_POST["account"];
$password = $_POST["password"];
$data = mysql_query("select * from admin where account = '$account' and password = '$password'");
	if(mysql_num_rows($data)>=1)
	{
		$_SESSION['v']="yes";
		header("location:../comment_withbrowse/comment_admin_browse.php");
	}
	else
		echo "<p align='center'>查無此人</p>";
}
?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
