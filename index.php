<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apade Uniform Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="container">
        <h1>Welcome to Apade Uniform Management System</h1>
        
        <div class="hero-section">
            <div class="hero-text">
                <h2>Streamlining uniform orders and payments</h2>
                <p>For students, parents, and school tailors</p>
            </div>
        </div>
        
        <div class="action-buttons">
            <?php if (isset($_SESSION['user_id'])): ?>
                <?php if ($_SESSION['user_type'] == 'admin'): ?>
                    <a href="dashboard.php" class="btn">Tailor Dashboard</a>
                <?php else: ?>
                    <a href="track_order.php" class="btn">Track Your Order</a>
                <?php endif; ?>
            <?php else: ?>
                <a href="orders.php" class="btn"> Add Student </a>
                
            <?php endif; ?>
        </div>
        
        <div class="features">
            <div class="feature">
                <h3>For Students</h3>
                <ul>
                    <li>Register uniform orders</li>
                    <li>Track order status</li>
                    <li>Digital payment receipts</li>
                </ul>
            </div>
            
            <div class="feature">
                <h3>For Tailors</h3>
                <ul>
                    <li>Manage all orders</li>
                    <li>Update payment status</li>
                    <li>Generate reports</li>
                </ul>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>