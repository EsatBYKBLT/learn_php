<?php 
function link_generator($url, $link_name, $url_elems){
    $url .= "?";
    foreach ($url_elems as $key => $value) 
        $url .= $key . "=" . $value . "&";
    
    echo "<a href=" . substr($url, 0, -1) . "> $link_name </a>";
}
?>

<?php link_generator("021_get.php", "my link", ["id" => "10", "name" => "esat"]) ?>
<br>

<?php print_r($_GET); ?>