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

	<title>Sales</title>
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
			<li class = "active">
				<a href="#">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Sales</span>
				</a>
			</li>
			<li>
				<a href="profile.php">
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
					<h1>Sales</h1>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All Sales</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>No.</th>
								<th>User</th>
								<th>Date Order</th>
								<th>Cake</th>
								<th>Price</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							$sql = "SELECT * FROM sales";
							$result = $conn->query($sql);
							$cnt = 1;
							if ($result->num_rows> 0) {
								while($row = $result->fetch_assoc()){				?>
									<tr>
										<td><?php echo htmlentities($cnt); ?></td>
										<td><?php echo htmlentities($row["username"]); ?></td>
										<td><?php echo htmlentities($row["dateorder"]); ?></td>
										<td><?php echo htmlentities($row["cake"]); ?></td>
										<td><?php echo htmlentities($row["price"]); ?></td>

									</tr>
							<?php $cnt = $cnt + 1;
								}
							} ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
	</section>
</body>
</html>