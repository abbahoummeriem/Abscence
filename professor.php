<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Login</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <div class="container">
        <h2>Professor Login</h2> <br>
        <form action="prof.php" method="post">
        <label for="username">Professor name:</label>
            <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
        <input type="submit" id="submit" value="Login">
        </form>
    </div>
</body>
</html>
