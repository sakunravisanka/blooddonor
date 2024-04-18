<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blooddonor";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize $row and $id
$row = [];
$id = null;

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM becomedonor WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        exit();
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Handle form submission for editing here 
    $id = $_POST['id'] ?? null;

    if ($id === null) {
        echo "Invalid ID.";
        exit();
    }

    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $bloodgroup = $_POST['bloodgroup'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    // Use prepared statements to prevent SQL injection
    $updateSql = "UPDATE becomedonor SET fullname=?, age=?, phone=?, email=?, 
                  bloodgroup=?, gender=?, address=? WHERE id=?";

    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("sssssssi", $fullname, $age, $phone, $email, $bloodgroup, $gender, $address, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
    exit();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>
    <h2>Edit Record</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Full Name: <input type="text" name="fullname" value="<?php echo $row['fullname'] ?? ''; ?>"><br>
        Age: <input type="text" name="age" value="<?php echo $row['age'] ?? ''; ?>"><br>
        Phone: <input type="text" name="phone" value="<?php echo $row['phone'] ?? ''; ?>"><br>
        Email: <input type="text" name="email" value="<?php echo $row['email'] ?? ''; ?>"><br>
        Blood Group: <input type="text" name="bloodgroup" value="<?php echo $row['bloodgroup'] ?? ''; ?>"><br>
        Gender: <input type="text" name="gender" value="<?php echo $row['gender'] ?? ''; ?>"><br>
        Address: <input type="text" name="address" value="<?php echo $row['address'] ?? ''; ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>

