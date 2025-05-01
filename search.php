<?php
$conn = new mysqli("localhost", "root", "", "uniformms");
$results = [];
if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);

    $sql = "SELECT * FROM students 
            WHERE name LIKE '%$search%' 
               OR id LIKE '%$search%' 
               OR class LIKE '%$search%'";
    $query = $conn->query($sql);

    while ($row = $query->fetch_assoc()) {
        $results[] = $row;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Search</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.2em;
        }
        h3 {
            color: #3498db;
            border-bottom: 2px solid #3498db;
            padding-bottom: 8px;
            margin-top: 30px;
        }
        form {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            display: flex;
            gap: 10px;
        }

        input[type="text"] {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }

        button[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #2980b9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #3498db;
            color: white;
            font-weight: 500;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
        p {
            background: white;
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            color: #e74c3c;
            text-align: center;
        }
        @media (max-width: 600px) {
            form {
                flex-direction: column;
            }
            
            th, td {
                padding: 10px 5px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <h2>Search for a Student</h2>
    <form method="get" action="search.php">
        <input type="text" name="search" placeholder="Enter name, ID or class" required>
        <button type="submit">Search</button>
    </form>

    <?php if (!empty($results)): ?>
        <h3>Search Results:</h3>
        <table>
            <tr>
                <th>OrderID</th>
                <th>Name</th>
                <th>Class</th>
            </tr>
            <?php foreach ($results as $student): ?>
                <tr>
                    <td><?= htmlspecialchars($student['id']) ?></td>
                    <td><?= htmlspecialchars($student['name']) ?></td>
                    <td><?= htmlspecialchars($student['class']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php elseif (isset($_GET['search'])): ?>
        <p>No results found.</p>
    <?php endif; ?>
</body>
</html>