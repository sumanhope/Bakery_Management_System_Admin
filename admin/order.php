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
    <style>
        .small-btn {

            width: 20;
            height: 20;
        }

        .addbutton {
            color: #fff;
            background-color: #51aded;
            border-color: #3d8fd8;
            padding: 6px 12px;
            border-radius: 3px;
        }
    </style>
    <title>Order List</title>
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
            <li class="active">
                <a href="#">
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
                <a href="adminlogin.html" class="logout">
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
                    <h1>Orders</h1>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>All Orders</h3>
                        <a  href="addorder.php" class="addbutton">Add Order</a>
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
                                while ($row = $result->fetch_assoc()) {                ?>
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
                                        <td>

                                    </tr>
                            <?php $cnt = $cnt + 1;
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class = "popup">

            </div>
        </main>
    </section>
</body>

</html>