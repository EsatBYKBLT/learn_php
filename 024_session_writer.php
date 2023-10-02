<?php
session_start();
$message = "Hello SIP";
$_SESSION['message'] = $message;
echo "Session was set. The message: " . $message;
?>