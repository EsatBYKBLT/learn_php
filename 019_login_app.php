<!DOCTYPE html>
<?php include '019_functions.php'; ?>

<html>
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>

<!-- ---------------------------------------------------- -->
<!-- ---------------------------------------------------- -->

<body>

<h4><?php kayit_bilgi(); ?></h4>

<form action = "019_login_app.php" method="post">
    <input type="text" placeholder="Enter Username" name="username_field">
    <input type="password" placeholder="Enter password" name="password_field"><br>
    <input type="submit" name="submit_button" value="add new user">
    <input type="submit" name="read_button" value="list users">
    <input type="submit" name="update_button" value="update selection">
    <br>
    <select id="selected" name="selected_id">
    <php? list_dropdown(); ?> 
    </select>
    
</form> 


<?php listele(); ?>



</body>
</html>