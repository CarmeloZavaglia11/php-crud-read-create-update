<?php

    include __DIR__.'/../config/db.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM stanze WHERE id = $id";
    $result = $conn->query($sql);

    header('Location: ../../index.php');


    $conn->close();