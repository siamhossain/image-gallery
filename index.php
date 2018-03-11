<?php
    //$images = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg");
    $dir = "/var/www/html/image-gallery/images";
    $all = scandir($dir);
    array_shift($all);
    array_shift($all);
    shuffle($all);
    foreach($all as $image){
        echo "<img src='images/" . $image . "' width = '23%' height = '300' />\n";
    }
?>

