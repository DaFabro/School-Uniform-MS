<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Orders</title>
    <link rel="stylesheet" href="style.css">
    <style>
     .addstudent a{
    background-color: #3498db;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
 }
 /* Add this to your style.css file or in the <style> section */

.orders-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    font-family: Arial, sans-serif;
}

.orders-table th {
    background-color: #3498db;
    color: white;
    padding: 12px;
    text-align: left;
}

.orders-table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.orders-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.orders-table tr:hover {
    background-color: #e6f7ff;
}

/* Action links styling */
.orders-table a {
    text-decoration: none;
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    margin: 0 2px;
    display: inline-block;
}

/* Edit button */
.orders-table a[href*="update"] {
    background-color: #3498db;
    color: white;
    border: 1px solid #2980b9;
}

.orders-table a[href*="update"]:hover {
    background-color: #2980b9;
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Delete button */
.orders-table a[href*="delete"] {
    background-color: #e74c3c;
    color: white;
    border: 1px solid #c0392b;
}

.orders-table a[href*="delete"]:hover {
    background-color: #c0392b;
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Pipe separator between buttons */
.orders-table td:last-child {
    color: #ddd;
    user-select: none;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .orders-table a {
        padding: 4px 8px;
        font-size: 12px;
    }
}
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="addstudent">
            <a href="create.php">Add Student</a>
        </div>
        <h2>Manage Orders</h2>
        
        <table class="orders-table" border="1" cellpadding="7">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Student</th>
                    <th>Date</th>
                    <th>Class</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php
        $result = $conn->query("SELECT * FROM students");
       while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['date']}</td>
                    <td>{$row['class']}</td>
                    <td>{$row['amount']}</td>
                    <td>{$row['status']}</td> 
                    <td>
                     <div class='orders-table'>
                        <a href='update.php?id={$row['id']}'>Edit</a> |
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </div>
                    </td>
                  </tr>";
        }
            ?>
        </table>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>