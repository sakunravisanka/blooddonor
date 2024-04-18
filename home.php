<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        @media screen and (max-width: 600px) {
            nav a {
                float: none;
                width: 100%;
                text-align: left;
            }
        }
        header {
            background-color: #333;
            padding: 15px;
            color: #fff;
            text-align: center;
            width: 100%;
        }

    </style>
</head>
<body>
<header>
        <h1>Blood Donor</h1>
    </header>
<nav>
<a href="home.php">Home</a>
    <a href="#about">About</a>
    <a href="#why">Why Become Donor</a>
    <a href="becomedonor.php">Become a Donor</a>
    <a href="searchblood.php">Search Blood</a>
    <a href="contactus.php">Contact us</a>
</nav>

</body>
</html>
