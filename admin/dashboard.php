<?php
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


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <style>
       body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    nav {
      display: flex; /* Updated to make it display horizontally */
      background: #555;
      padding-top: 20px;
    }

    nav a {
      display: block;
      padding: 15px;
      color: #fff;
      text-decoration: none;
      text-align: center;
      border-bottom: 1px solid #444;
    }

    section {
      float: center;
      width: 80%;
      padding: 20px;
    }

    form {
      max-width: 400px;
      float: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <header>
    <h1>Admin Panel</h1>
  </header>

  <nav>
    <a href="#main">Main Dashboard</a>
    <a href="#manageBloodGroup">Manage Blood Group</a>
    <a href="#addDonor">Add Donor</a>
    <a href="#donorList">Donor List</a>
    <a href="#donorList">Contact Us</a>
  </nav>

  <section id="main">
  <h2>Blood group</h2>
 <?php
// Display the count of blood groups
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bloodGroupsCountQuery = "SELECT COUNT(DISTINCT bloodgroup) as count FROM becomedonor";
$bloodGroupsCountResult = $conn->query($bloodGroupsCountQuery);
$row = $bloodGroupsCountResult->fetch_assoc();
$bloodGroupsCount = $row["count"];

echo "<h4>Blood Groups have : $bloodGroupsCount</h4>";
echo "<hr>";
$conn->close();

// Display the count of donors
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$donorsCountQuery = "SELECT COUNT(*) as count FROM becomedonor";
$donorsCountResult = $conn->query($donorsCountQuery);
$row = $donorsCountResult->fetch_assoc();
$donorsCount = $row["count"];

echo "<h4>Donors We have: $donorsCount</h4>";
echo "<hr>";
$conn->close();
?>

  </section>


  <section id="manageBloodGroup">
    <h2>Manage Donor</h2>
    <!-- Admin form to manage blood groups -->
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blooddonor";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM becomedonor";
$result = $conn->query($sql);

// Output a scrollable container
echo '<div style="max-height: 400px; overflow: auto; border: 1px solid #ccc; padding: 10px;">';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<b>Full Name: </b> " . $row["fullname"] . "<br>";
        echo "<b>Age:</b>  " . $row["age"] . "<br>";
        echo "<b>Phone:</b>  " . $row["phone"] . "<br>";
        echo "<b>Email: </b> " . $row["email"] . "<br>";
        echo "<b>Blood Group:</b>  " . $row["bloodgroup"] . "<br>";
        echo "<b>Gender: </b> " . $row["gender"] . "<br>";
        echo "<b>Address:  </b>" . $row["address"] . "<br>";

        // Add Edit and Delete links or buttons
        echo '<a href="editdonor.php?id=' . $row["id"] . '">Edit</a> | ';
        echo '<a href="dashboard.php?id=' . $row["id"] . '" onclick="return confirm(\'Are you sure?\')">Delete</a>';

        echo "<hr>";
    }
} else {
    echo "No records found";
}

// Close the scrollable container
echo '</div>';

$conn->close();
?>

</select>

  </section>

  <section id="addDonor">
    <h2>Add Donor</h2>
    <form id="addDonorForm">
      <!-- Form for adding donor goes here -->
    </form>
  </section>

  <section id="donorList">
    <h2>Donor List</h2>
    <table id="donorTable">
      <!-- Table for displaying donor list goes here -->
    </table>
  </section>

  <script>
  <script>
    // JavaScript code for handling form submissions and table updates goes here

    function showSection(sectionId) {
        // Hide all sections
        var sections = document.getElementsByClassName('content');
        for (var i = 0; i < sections.length; i++) {
            sections[i].style.display = 'none';
        }

        // Show the selected section
        var selectedSection = document.getElementById(sectionId + 'Section');
        if (selectedSection) {
            selectedSection.style.display = 'block';
        }
    }
</script>
  </script>
</body>
</html>
