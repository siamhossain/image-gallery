<?php
    $images = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg");
    shuffle($images);
    foreach($images as $image){
        echo "<img src='images/" . $image . "' width = '23%' height = '300' />\n";
    }
?>

