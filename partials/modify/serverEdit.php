<?php

    include __DIR__.'/../config/db.php';
    include __DIR__.'/../config/env.php';

    $id = $_POST['id'];
    $room = $_POST['numeroStanza'];
    $floor = $_POST['piano'];
    $beds = $_POST['numeroLetti'];

    $sql = "UPDATE stanze
            SET room_number = ?,floor = ?,beds = ?,updated_at = NOW()
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiii",$room,$floor,$beds,$id);

    $stmt->execute();

    if ($stmt && $stmt->affected_rows > 0) {
        header("Location: $basepath/index.php?idmodified=$id");
    }else {
        header("Location: $basepath/index.php?idnotmodified=$id");
    }

    $conn->close();

?>