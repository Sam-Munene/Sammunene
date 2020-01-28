
<?php


session_start();
	$_SESSION["user"] = "SAM";
?><!DOCTYPE html>
<html>
<head>
	<title>Inventory management system</title>
	<link rel="stylesheet" type="text/css" href="sam.css">
</head>
<body>
	<div id="header">
		<h2>INVENTORY MANAGEMENT SYSTEM</h2><form action="search.php" method="post"><input type="text" name="search" placeholder="search here"><input type="submit" name="search-item" value="SEARCH"></form>
	</div>
	<div id="sidebar">
		<nav>
			<a href="home.php"><li>HOME<style type="text/css" background: url('icons/home_48');></style></li></a><br><br>
			<a href="category.php"><li>CATEGORY</li></a><br><br>

			<a href="suppliers.php"><li>SUPPLIERS</li></a><br><br>

			<a href="stock.php"><li>STOCK</li></a><br><br>

			<a href="sales.php"><li>SALES</li></a><br><br>

			<a href="reports.php"><li>REPORTS</li></a><br><br>

			<a href="payments.php"><li>PAYMENTS</li></a><br><br>

			<a href="cash.php"><li>CASH</li></a><br><br>

			<a href="pending.php"><li>PENDING</li></a><br><br>








		</nav>

	</div>

</body>
</html>