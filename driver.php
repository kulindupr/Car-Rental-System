<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the table
$sql = "SELECT driver_id, driver_name, age FROM driver_data";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Driver Data</title>
    <link rel="stylesheet" href="Css/driverstyles.css">
    <style> 
        footer{
            margin-top: 35%;
        }
    </style>
</head>
<body>
    <?php include_once 'header.php'; ?>
    <?php include_once 'navigation.php'; ?>







    <div class="all"> 
        <div class="h1"><h1>Our Drivers</h1></div>
        <div class="h3"><h3>Take Your Driver</h3></div>
        <div class="dtable">
            <table>
                <tr>
                    <th>Driver ID</th>
                    <th>Driver Name</th>
                    <th>Age</th>
                </tr>
                <?php
                // Check if there are any rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["driver_id"] . "</td>";
                        echo "<td>" . $row["driver_name"] . "</td>";
                        echo "<td>" . $row["age"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>








    <?php include_once 'footer.php'; ?>
</body>
</html>
