<?php
include "private.php";
if(isset($_POST['submit']) && isset($_POST['nombre']) && !empty($_POST['nombre'])){
       $number = $_POST['nombre'];
        $insertnumber=$conn->prepare("UPDATE professor SET profnumber= $number WHERE id=1");
       if( $insertnumber->execute()){

        echo "<script> window.location.href = 'liste.php';alert('Number sent successfully!');
       </script>";
        $insertnumber->close();
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Professor  Number</title>

</head>
<body>
<div class="container">
    <form action="number.php" method="post">
        <h3>Choose a number please :</h3>
        <input type="number" name="nombre"  placeholder="choose a number">
        <input id="submit" type="submit" name="submit" value="envoyer">
        </form>
 </div>

</body>
</html>