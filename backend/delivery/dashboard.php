<?php
session_start();
if(!isset($_SESSION['delivery_id'])){
    header('location: ../../assets/pages/delivery-login.php');
    exit;
}
$delivery_name = $_SESSION['delivery_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery Dashboard | QuickKart</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #F7F8FA;
        }
        .navbar {
            background: #0077CC;
            color: white;
            padding: 18px;
            font-size: 22px;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            font-weight: 600;
        }
        .container {
            width: 85%;
            margin: 40px auto;
        }
        .welcome-card {
            background: #fff;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
            margin-bottom: 35px;
        }
        .welcome-card h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 26px;
            color: #2C2C2C;
            margin-bottom: 8px;
        }
        .welcome-card p {
            font-size: 16px;
            color: #444;
        }
        .stats {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }
        .stat-box {
            flex: 1;
            min-width: 220px;
            background: white;
            border-radius: 14px;
            padding: 28px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.10);
        }
        .stat-box h3 {
            font-size: 34px;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 5px;
        }
        .o { color: #FF6B2C; } /* Today Orders */
        .p { color: #0077CC; } /* Pending */
        .d { color: #00C853; } /* Delivered */
        .stat-box p {
            font-size: 17px;
            color: #555;
        }
        .logout-btn {
            margin-top: 40px;
            display: inline-block;
            background: #FF1744;
            color: #fff;
            border: none;
            padding: 13px 22px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 17px;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
        }
        .logout-btn:hover {
            opacity: .92;
            transform: scale(1.03);
            transition: .25s;
        }
    </style>
</head>

<body>

    <div class="navbar">🚚 Delivery Dashboard — QuickKart</div>

    <div class="container">

        <div class="welcome-card">
            <h2>Welcome, <?php echo $delivery_name; ?> 👋</h2>
            <p>You are logged in as a trusted delivery partner of QuickKart.</p>
        </div>

        <div class="stats">
            <div class="stat-box">
                <h3 class="o">📦 0</h3>
                <p>Today's Orders</p>
            </div>
            <div class="stat-box">
                <h3 class="p">⏳ 0</h3>
                <p>Pending Deliveries</p>
            </div>
            <div class="stat-box">
                <h3 class="d">✔ 0</h3>
                <p>Delivered Orders</p>
            </div>
        </div>

        <a href="logout.php" class="logout-btn">Logout</a>

    </div>

</body>
</html>
