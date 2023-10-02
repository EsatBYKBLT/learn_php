<?php
$name = "my_cookie";
$value = "important things";
$expire = time() + (60*10);
setcookie($name,$value,$expire);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_COOKIE['my_cookie'])) echo $_COOKIE['my_cookie'];
?>


</body>