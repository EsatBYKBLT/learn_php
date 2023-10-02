<?php
echo $_POST ? $_POST['name'] : "NULL";
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action = "022_post.php" method="post">
    <input type="text" name="name">
    <input type="submit">
</form>
</body>