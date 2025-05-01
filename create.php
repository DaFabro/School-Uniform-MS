<?php
 include 'config.php';  
 include 'orders.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $class = $_POST['class'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];
    $conn->query("INSERT INTO students (name,date,class,amount,status) VALUES ('$name', '$date', '$class','$amount','$status')");
    header("Location: orders.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Student</title>
 <style>
     
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 20px;
    color: #333;
}

h2 {
    color: #2c3e50;
    text-align: center;
    margin-bottom: 25px;
    font-size: 28px;
}

form {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 25px 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="number"],
input[type="date"],
input[type="email"] {
    width: 100%;
    padding: 12px;
    margin: 8px 0 15px;
    display: inline-block;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="date"]:focus,
input[type="email"]:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
}

input[type="submit"] {
    width: 100%;
    background-color: #3498db;
    color: white;
    padding: 14px 20px;
    margin: 20px 0 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 500;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

label {
    font-weight: 500;
    color: #2c3e50;
}
 
@media (max-width: 600px) {
    form {
        padding: 15px;
    }
    
    h2 {
        font-size: 24px;
    }
}
 </style>
</head>
<body>
    <h2>Add Student</h2>
    <form method="post" >
        Student Name: <input type="text" name="name" required><br><br>
        Date: <input type="date" name="date" required><br><br>
        Class: <input type="text" name="class" required><br><br>
        Amount: <input type="number" name="amount" required><br><br>
        Status: <input type="text" name="status" required><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
