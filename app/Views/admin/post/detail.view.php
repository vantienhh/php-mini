<?php
    include __DIR__ . "/../layout/header.php";
 ?>

<?php
    print_r($posts);
    echo $posts[0]->ID."</br>";
    echo $posts[0]->title."</br>";
    echo $posts[0]->content."</br>";
    echo $posts[0]->date_time."</br>";
 ?>

<?php
     include __DIR__ . "/../layout/footer.php";
?>