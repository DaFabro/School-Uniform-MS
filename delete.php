<?php
include 'config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM students WHERE id = $id");
header("Location: orders.php");
?>
