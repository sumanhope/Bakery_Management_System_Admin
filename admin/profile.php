<?php
include "db_conn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/admindashboard.css">

	<title>AdminHub</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<span>&nbsp;&nbsp;</span>
			<span class="text">Welcome Admin</span>
		</a>
		<ul class="side-menu top">
            <li>
				<a href="admindashboard.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="addorder.php">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Add Orders</span>
				</a>
			</li>
			<li>
				<a href="order.php">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Orders List</span>
				</a>
			</li>
			<li>
				<a href="sales.php">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Sales</span>
				</a>
			</li>
			<li class="active">
				<a href="#">
					<i class='bx bxs-user'></i>
					<span class="text">Profile</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="index.html" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<section id="content">

		<nav>
		</nav>
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Profile</h1>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
                    </div>
				</div>
			</div>
		</main>
	</section>
</body>
</html>