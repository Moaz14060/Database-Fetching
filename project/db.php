<?php
# Establish database connection
$connect = mysqli_connect(
    'db',       # host (service name in Docker)
    'php_docker',  # username
    'password', # password
    'php_docker' # database name
);

# Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$table_name = "Student";
$query = "SELECT * FROM $table_name";

# Execute the query
$response = mysqli_query($connect, $query);

# Check if query was executed successfully
if (!$response) {
    die("Query failed: " . mysqli_error($connect));
}

# Check if there are rows in the result set
if (mysqli_num_rows($response) > 0) {
    # Display database content
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database Content</title>
        <style>
            /* General Styles */
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
                color: #333;
                line-height: 1.6;
            }
            header {
                background-color: #66cdaa;
                padding: 20px 0;
                text-align: center;
            }
            h1, h2, h3 {
                margin: 0;
                color: #fff;
            }
            main {
                padding: 20px;
                text-align: center;
            }
            p {
                font-size: 1.2em;
                margin-bottom: 10px;
            }
            a {
                color: #66cdaa;
                text-decoration: none;
                font-weight: bold;
            }
            footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px 0;
                position: fixed;
                bottom: 0;
                width: 100%;
            }
            /* Table Styles */
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
                color: #333;
                font-weight: bold;
            }
            /* Hover effect for links */
            a:hover {
                color: #218c74; /* Change to a different color on hover */
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Database Content</h1>
        </header>
        <main>
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>CGPA</th>
                    <th>Age</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($response)) {
                    echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['FName'] . "</td>";
                    echo "<td>" . $row['LName'] . "</td>";
                    echo "<td>" . $row['CGPA'] . "</td>";
                    echo "<td>" . $row['Age'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <p><a href="index.php">Back to Home</a></p>
        </main>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Your Company. All rights reserved.</p>
        </footer>
    </body>
    </html>
    <?php
} else {
    echo "No records found.";
}
?>
