<?php
session_start();
session_destroy();
header("Location: wlc.html");
exit;
?>
