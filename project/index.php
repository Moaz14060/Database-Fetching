<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our PHP Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5; /* Light gray background */
            color: #333;
            line-height: 1.6;
        }
        header {
            background-color: #66cdaa; /* Greenish background for header */
            padding: 20px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 2em;
            font-weight: bold;
            color: #fff; /* White text color */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        main {
            padding: 40px;
            text-align: center;
        }
        h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        a {
            color: #66cdaa; /* Greenish link color */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease; /* Smooth color transition on hover */
        }
        a:hover {
            color: #218c74; /* Darker greenish color on hover */
        }
        footer {
            background-color: #333; /* Dark background for footer */
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
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
            background-color: #f2f2f2; /* Light gray background for table header */
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our PHP Page</h1>
    </header>
    <main>
        <h2>Team members and Roles:</h2>
        <div>
            <p>Name: Omar Hassan ---- Role: Database</p>
            <p>Name: Ali Alaa ---- Role: Database</p>
            <p>Name: Abdullah Atef ---- Role: Docker-Compose</p>
            <p>Name: Mahmoud El-Sherbiny ---- Role: Web Application</p>
            <p>Name: Moaz Ahmed ---- Role: Leader and Web Application</p>
        </div>
        <p>Click <a href="db.php">here</a> to view database content.</p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
