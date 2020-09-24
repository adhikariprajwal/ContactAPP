<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD operation - Prajwal Adhikari</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="navbar navbar-default navbar-static-top" role="navigation">
    	<div class="container">
			<h3>My Contact App</h3> <h4>&#169; Prajwal Adhikari</h4>
			<?php
				$con = mysqli_connect("host name","user name","password");
				if (!$con) {
				  die('Could not connect: ' . mysqli_error());
				}
				
				mysqli_select_db($con,"user");
				
				$result = mysqli_query($con,"select count(1) FROM tbl_users");
				$row = mysqli_fetch_array($result);
				
				$total = $row[0];
				echo "Total Contact: " . $total;
				
				mysqli_close($con)
			?>
    	</div>
	</div>