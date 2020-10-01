<?php 

    include __DIR__.'/../config/db.php';
    include __DIR__.'/../config/function.php';

    $id = $_GET['id'];

    $row = getDateFromId($conn,'stanze',$basepath,$id);

?>