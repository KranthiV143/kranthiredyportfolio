<!DOCTYPE html>
<html>
<head>
    <title>Mailing List Registration</title>
    <style>
        /* General body styling */
        body {
            background-color: #1E1E1E; /* Dark Gray */
            color: #FFFFFF; /* White text */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        /* Heading styling */
        h1 {
            color: #4682B4; /* Steel Blue */
            text-align: center;
        }

        /* Form styling */
        form {
            background-color: #2F4F4F; /* Dark Slate Gray */
            padding: 20px;
            border: 2px solid #4682B4; /* Steel Blue border */
            border-radius: 10px;
            width: 300px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            color: #FFFFFF; /* White */
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #4682B4; /* Steel Blue */
            border-radius: 5px;
            background-color: #1E1E1E; /* Dark Gray */
            color: #FFFFFF; /* White */
        }

        button {
            background-color: #4682B4; /* Steel Blue */
            color: #FFFFFF; /* White */
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #5F9EA0; /* Cadet Blue */
        }

        /* Thank you message styling */
        div {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Mailing List Registration</h1>
    <form method="POST" action="">
        <label>First Name:</label><br>
        <input type="text" name="firstName" required><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="lastName" required><br><br>
        <label>Birthday:</label><br>
        <input type="date" name="birthday" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <button type="submit">Submit</button>
    </form>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<h2>Thank you for registering!</h2>";
            echo "Name: " . htmlspecialchars($_POST['firstName']) . " " . htmlspecialchars($_POST['lastName']) . "<br>";
            echo "Birthday: " . htmlspecialchars($_POST['birthday']) . "<br>";
            echo "Email: " . htmlspecialchars($_POST['email']);
        }
        ?>
    </div>
</body>
</html>
