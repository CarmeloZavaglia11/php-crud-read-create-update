<?php

    include __DIR__.'/../config/db.php';
    include __DIR__.'/../config/function.php';

    $id = $_POST['id'];

    delete($conn,'stanze',$basepath,$id);

    