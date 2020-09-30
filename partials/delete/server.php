<?php

    include __DIR__.'/../config/db.php';
    include __DIR__.'/../config/env.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM stanze WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$id);

    $stmt->execute();

    if ($stmt && $stmt->affected_rows > 0) {
        header("Location: $basepath/index.php?roomId=$id");
    }else {
        header("Location: $basepath/index.php?notRoomId=$id");
    }


    $conn->close();