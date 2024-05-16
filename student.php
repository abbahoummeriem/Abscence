
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presence</title>
   <link rel="stylesheet" href="test.css">
</head>
<body>
    <div class="container">
    <h2>Enter Your Name and Select Presence</h2> <br><br>
    <form action="student.php" method="post">
        <label for="name">Enter your Full Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="presence">Presence:</label>
        <select id="presence" name="presence" required>
            <option value="present">Present</option>
            <option value="absent">Absent</option>
        </select><br><br>
        
        <input type="submit" id="submit" value="Submit">
    </form></div>
    <?php
include 'private.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $presence = $_POST['presence'];

    if (!empty($name)) {

        $x = "SELECT * FROM presence WHERE name='$name'";
        $y = $conn->query($x);
        
        if ($y->num_rows > 0) {

            echo "<script>alert('Name already exists in the database.');</script>";
        } 
        else {

            $sql = "INSERT INTO presence (name, presence) VALUES ('$name', '$presence')";
            
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Record inserted successfully!');
                window.location.href='wlc.html';</script>";
            } 
            
            else {
                echo "<script>alert('Error');</script>";
            }
        }
    } 
    
    else {
        echo "<script>alert('Name cannot be empty. Please enter your name.');</script>";
    }
}
?>
</body>
</html>

