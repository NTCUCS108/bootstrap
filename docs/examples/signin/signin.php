<?php
session_start();
if(isset($_POST["account"]) and isset($_POST["password"]))
{
include("connect.php");
$account = $_POST["account"];
$password = $_POST["password"];
$user = mysql_query("select * from admin where account = '$account' and password = '$password'");
	if(mysql_num_rows($user)>=1)
	{
		$_SESSION['login']="yes";
    $_SESSION['user']=mysql_fetch_assoc($user);
		header("location:../../../../backstage-AdminLTE local/starter.php");
	}
	else
		echo "<p align='center'>查無此人</p>";
}
?>
<?php

if($_SESSION["login"]=="yes")
	header("location:../../../../backstage-AdminLTE/starter.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>管理者登入</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label><!--mean?-->
        <input type="text" id="account" name="account" class="form-control" placeholder="Account" required autofocus><!--2017-7-6已修改為text-->
        <label for="inputPassword" class="sr-only">Password</label><!--mean?-->
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
<!--驗證admin帳號-->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
