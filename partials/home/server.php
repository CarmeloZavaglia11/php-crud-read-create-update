<?php

    include __DIR__.'/../config/db.php';
    include __DIR__.'/../config/function.php';

    $results = getAll($conn,'stanze');