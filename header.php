<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Apade Uniform Management System</title>
    <link rel="stylesheet" href=" style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <h1><a href="index.php">School Uniform System</a></h1>
            </div>
            
            <nav>
                <ul>
                    <li><a href="index.php" <?= ($current_page == 'index.php') ? 'class="active"' : '' ?>>Home</a></li>
                    <li><a href="orders.php" <?= ($current_page == 'orders.php') ? 'class="active"' : '' ?>>Add Student</a></li>
                    <li><a href="search.php" <?= ($current_page == 'search.php') ? 'class="active"' : '' ?>>Search Student</a></li>
                
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        
