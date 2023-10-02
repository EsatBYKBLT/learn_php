<?php

function kayit_bilgi(){
    if(isset($_POST['submit_button'])){
        $username = $_POST['username_field'];
        $password = $_POST['password_field'];

        $connection = mysqli_connect('localhost','root','','loginapp');

        if($connection){
            echo "Connection successful<br>";
        }else{
            die("Connection failed<br>");
        }

        $query = "INSERT INTO users(username, password) ";
        $query.= "VALUES ('$username','$password')";
        
        $result = mysqli_query($connection,$query);

        if(!$result)
            die("Query FAILED " . mysqli_error());

        echo "username: " . $username . "<br> pass: ". $password;
    }
}


function listele() {
    if(isset($_POST['read_button'])){
        echo "<h3> Değerler</h3><br>";
    
        $username = $_POST['username_field'];
        $password = $_POST['password_field'];
    
        $connection = mysqli_connect('localhost','root','','loginapp');
    
        if($connection){
            echo "Connection successful<br>";
        }else{
            die("Connection failed<br>");
        }
    
        $query = "SELECT * FROM users ";
        //$query.= "VALUES ('$username','$password')";
        
        $result = mysqli_query($connection,$query);
    
        if(!$result)
            die("Query FAILED " . mysqli_error());
    
        echo "<ol>";
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['username'] . "\t" . $row['password'] . "</li>";
        }
        
        echo "</ol>";
    }
}

function list_dropdown(){
    $connection = mysqli_connect('localhost','root','','loginapp');

    if($connection) echo "Connection successful<br>"; 
    else die("Connection failed<br>");

    $query = "SELECT * FROM users ";
    $result = mysqli_query($connection,$query);

    if(!$result) die("Query FAILED " . mysqli_error());

    while ($row = mysqli_fetch_assoc($result)) {
        $selected_id = $row['id'];
        echo "<option value='<?php $selected_id ?>'><?php $selected_id ?></option>";
        print_r($row);
    }

}

?>