<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #333;
            padding: 15px;
            color: #fff;
            text-align: center;
            width: 100%;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        nav a:hover {
            background-color: #555;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 70%;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .results {
            margin-top: 20px;
        }

        .results p {
            margin: 8px 0;
        }

        /* Responsive styles */
        @media(max-width: 800px) {
            form {
                width: 90%;
            }
        }
    </style>
    <title>Search Blood</title>
</head>
<body>
    <header>
        <h1>Search Blood</h1>
    </header>

    <nav>
    <a href="home.php">Home</a>
    <a href="#about">About</a>
    <a href="#why">Why Become Donor</a>
    <a href="becomedonor.php">Become a Donor</a>
    <a href="searchblood.php">Search Blood</a>
    <a href="contactus.php">Contact us</a>
    </nav>

    <form action="#" method="post">
        <label for="searchBloodGroup">Select Blood Group:</label>
        <select id="searchBloodGroup" name="searchBloodGroup" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>

        <button type="submit">Search</button>
    </form>

    <?php
    // Your existing database connection code here
    $servername = "localhost"; 
    $username = "root";      
    $password = "";      
    $dbname = "blooddonor";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Process search when the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchBloodGroup = $_POST["searchBloodGroup"];

        // SQL query to retrieve data from the database based on the selected blood group
        $searchQuery = "SELECT * FROM becomedonor WHERE bloodgroup = '$searchBloodGroup'";
        $result = $conn->query($searchQuery);

        if ($result->num_rows > 0) {
            // Display the search results
            echo "<div class='results'>";
            echo "<h2>Search Results:</h2>";
            while ($row = $result->fetch_assoc()) {
                // Output the donor information as needed
                echo "<p>{$row['fullname']} - {$row['phone']} - {$row['email']} - {$row['address']}</p>";
            }
            echo "</div>";
        } else {
            echo "<p>No results found.</p>";
        }
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
