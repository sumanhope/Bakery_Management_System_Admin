<?php
include "db_conn.php";

?>
<?php

function getorder($conn)
{
	$sql = "SELECT * FROM cakeorder";
	$result = $conn->query($sql);

	// Get the number of rows returned by the query
	$num_rows = mysqli_num_rows($result);
	return $num_rows;
}

function getsales($conn)
{
	$sql = "SELECT * FROM sales";
	$result = $conn->query($sql);

	// Get the number of rows returned by the query
	$num_rows = mysqli_num_rows($result);
	return $num_rows;
}

function gettotal($conn)
{
	$sql = "SELECT SUM(price) as total FROM sales";
	$result = mysqli_query($conn, $sql);

	// check for errors
	if (!$result) {
		die("Error: " . mysqli_error($conn));
	}

	// fetch the result
	$row = mysqli_fetch_assoc($result);
	$total = $row['total'];
	return $total;
}
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

	<title>Dashboard</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<span>&nbsp;&nbsp;</span>
			<span class="text">Welcome Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
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
					<h1>Dashboard</h1>
				</div>

			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check'></i>
					<span class="text">

						<h3><?php
							$num_rows = getorder($conn);
							echo $num_rows;
							?></h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-bookmark-minus'></i>
					<span class="text">
						<h3><?php
							$sales_row = getsales($conn);
							echo $sales_row;
							?></h3>
						</h3>
						<p>Sold</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle'></i>
					<span class="text">
						<h3><?php
							$total = gettotal($conn);
							echo "Rs.", $total;
							?></h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>No.</th>
								<th>User</th>
								<th>Date Order</th>
								<th>Cake</th>
								<th>Price</th>
								<th>Action</th>


							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT * FROM cakeorder";
							$result = $conn->query($sql);
							$cnt = 1;
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {				?>
									<tr>
										<td><?php echo htmlentities($cnt); ?></td>
										<td><?php echo htmlentities($row["user"]); ?></td>
										<td><?php echo htmlentities($row["dateorder"]); ?></td>
										<td><?php echo htmlentities($row["cake"]); ?></td>
										<td><?php echo htmlentities($row["price"]); ?></td>
										<td>
											<a href="completeorder.php?id=<?php echo (int)$row['id']; ?>" class="small-btn" title="complete" data-toggle="tooltip">
												<span class="bx bxs-check-square"></span>
											</a>
											<a href="delete_order.php?id=<?php echo (int)$row['id']; ?>" class="small-btn" title="Delete" data-toggle="tooltip">
												<span class="bx bxs-trash"></span>
											</a>
										</td>

									</tr>
							<?php $cnt = $cnt + 1;
								}
							} ?>
						</tbody>
					</table>
				</div>

			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<!-- <script src="script.js"></script> -->
</body>

</html>