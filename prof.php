<?php
include 'private.php';
$enter_pswd = $_POST['password'];
$entered_username=$_POST['username'];
$corr_pswd = "professor";

if ($enter_pswd === $corr_pswd ) {
   
    header("Location: number.php");
    exit();
} else {
    
    echo "<script>
            alert('Incorrect password. Please try again.');
            window.location.href='professor.php';
          </script>";
}
?>
