<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome php</title>
</head>
<body>

<form method="get" action="main.php">
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name" required><br><br>

        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>

        <label for="skills">Skills:</label>
        <input type="checkbox" id="php" name="skills[]" value="php">
        <label for="php">PHP</label>
        <input type="checkbox" id="java" name="skills[]" value="java">
        <label for="java">Java</label>
        <input type="checkbox" id="mysql" name="skills[]" value="mysql">
        <label for="mysql">MySQL</label>
        <input type="checkbox" id="python" name="skills[]" value="python">
        <label for="python">Python</label><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="Software engineering">Software engineering</option>
            <option value="Network">Network</option>
            <option value="Cyber Security">Cyber Security</option>
            <option value="Artificial Intelligence">Artificial Intelligence</option>
        </select><br><br>

        <label for="code">Code:</label>
        <input type="text" id="code" name="code" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php


    ?>
