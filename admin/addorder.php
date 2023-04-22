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
    <link rel="stylesheet" href="css/adminlogin.css">

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

        input[type=text],
        select,input[type=date] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=number],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>

    <title>Add Order</title>
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
            <li class="active">
                <a href="#">
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
                    <h1> Add Orders</h1>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="center">
                        <form method="post" action="insert.php">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name"><br><br>

                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date"><br><br>

                            <label for="cake">Cake:</label>
                            <input type="text" id="cake" name="cake"><br><br>

                            <label for="price">Price:</label>
                            <input type="number" id="price" name="price"><br><br>

                            <input type="submit" value="Submit">
                        </form>
                    </div>

                </div>
            </div>
            <div class="popup">

            </div>
        </main>
    </section>
</body>

</html>