<h4>
<?php
if(isset($_POST['submit_button'])){
    $username = $_POST['username_field'];
    $password = $_POST['password_field'];
    echo "username: " . $username . "<br> pass: ". $password;
}
?>    
</h4>