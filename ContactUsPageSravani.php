<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body {
            background-color: #E6E6FA; /* Light Lavender */
            color: #2C2C2C; /* Charcoal */
            font-family: 'Arial', sans-serif;
            padding: 20px;
            margin: 0;
        }

        h1 {
            color: #003366; /* Navy Blue */
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #F5F5F5; /* Light Gray */
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #8A8A8A; /* Medium Gray */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        label {
            font-size: 16px;
            color: #1C1C1C; /* Dark Charcoal */
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #8A8A8A; /* Medium Gray border */
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #003366; /* Navy Blue */
            color: #FFFFFF; /* White */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #00509E; /* Deep Sky Blue */
        }

        h2 {
            color: #003366; /* Navy Blue */
        }
    </style>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="GET" action="">
        <label>First Name:</label><br>
        <input type="text" name="firstName" required><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="lastName" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label>Message:</label><br>
        <textarea name="message" required></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {
            echo "<h2>Your Message:</h2>";
            echo "Name: " . htmlspecialchars($_GET['firstName']) . " " . htmlspecialchars($_GET['lastName']) . "<br>";
            echo "Email: " . htmlspecialchars($_GET['email']) . "<br>";
            echo "Message: " . htmlspecialchars($_GET['message']);
        }
        ?>
    </div>
</body>
</html>
