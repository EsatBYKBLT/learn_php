<!DOCTYPE html>

<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>

<body>
<form action = "017_form.php" method="post">
    <input type="text" placeholder="Enter Username" name="username_field">
    <input type="password" placeholder="Enter password" name="password_field"><br>
    <input type="submit" name="submit_button">
</form> 

<h4>
<?php
if(isset($_POST['submit_button'])){
    $username = $_POST['username_field'];
    $password = $_POST['password_field'];
    echo "username: " . $username . "<br> pass: ". $password;
}
?>    
</h4>

</body>