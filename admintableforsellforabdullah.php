<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<?php
// Replace these variables with your actual database credentials
$servername = "localhost";
$username = "caratec_carandtech";
$password = "pakistan@0310";
$dbname = "caratec_paypal_con";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the "product" table
$sql = "SELECT `id`, `price`, `status`, `vin_number`, `email`, `phone_no`, `time` FROM `product` ORDER BY `id` DESC LIMIT 5";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
        // Output table header
        echo "<table class=\"table table-dark\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>VIN Number</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>time</th>
                    </tr>
                </thead>
                <tbody>";

        // Fetch and display data
        while ($row = $result->fetch_assoc()) {
            // Output table rows
            echo "<tr>
                    <td>{$row["id"]}</td>
                    <td>{$row["price"]}</td>
                    <td>{$row["status"]}</td>
                    <td>{$row["vin_number"]}</td>
                    <td>{$row["email"]}</td>
                    <td>{$row["phone_no"]}</td>
                    <td>{$row["time"]}</td>
                </tr>";
            // You can access other columns in a similar way
        }

        // Output table footer
        echo "</tbody></table>";
    } else {
        echo "No records found";
    }
} else {
    // Display an error message if the query fails
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
<script>
    // JavaScript code to refresh the page every 2 seconds
    setInterval(function() {
        location.reload();
    }, 2000); // 2000 milliseconds = 2 seconds
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" ></script>
</body>
</html>
