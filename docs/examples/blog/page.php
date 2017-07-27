<?php
	include("page_connect.php");
	$check = mysql_query("select * from page where post_id = '$_GET[id]' and dead_time = '0000-00-00 00:00:00' and parent != '測試'");
	if(mysql_num_rows($check)==0)
	{
		echo '<script type="text/javascript">
           window.location = "http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/examples/carousel/homepage.php"
			</script>';
	}
	$c_rs = mysql_fetch_assoc($check);
	$data = mysql_query("select * from page_data where name = '$c_rs[name]'");
	$d_rs = mysql_fetch_assoc($data);
?>
  <!-- Google Analystic -->
  <?php include_once("analyticstracking.php") ?>

<?php
include("page_connect.php");
include("master.php");
?>
<html>
<head>
	<link rel="icon" href="http://ntcucsintern.ddns.net/bootstrap-3.3.1/docs/favicon.ico">
</head>
<body>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="box">
					<div class="box-header">
					</div>
					<div class="box-body" >
					<?php
							echo "$d_rs[content]";
					?>
					</div>
				</div>
			</div>
		</div>
  </div>

    <footer class="blog-footer">
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
	</body>
</html>
