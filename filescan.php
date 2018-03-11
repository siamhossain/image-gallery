<?php
    $dir = "/var/www/html/image-gallery/images";
    $all = scandir($dir);
    $remove1 = array_shift($all);
    $remove2 = array_shift($all);
    var_dump($all);


?>
