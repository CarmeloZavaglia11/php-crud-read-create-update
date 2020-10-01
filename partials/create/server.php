<?php

    include __DIR__.'/../config/db.php';

    if (empty($_POST['numeroStanza'])) {
        die('non hai inserito il numero della stanza');
    }

    if (empty($_POST['piano'])) {
        die('non hai inserito il numero del piano');
    }

    if (empty($_POST['numeroLetti'])) {
        die('non hai inserito il numero dei letti');
    }

    $numeroStanza = $_POST['numeroStanza'];
    $piano = $_POST['piano'];
    $numeroLetti = $_POST['numeroLetti'];

    $sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) VALUES (?,?,?,NOW(),NOW());";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii",$numeroStanza,$piano,$numeroLetti);

    $stmt->execute();

    if ($stmt && $stmt->affected_rows > 0) {
        header("Location: $basepath/index.php?insert=1");
    }else {
        header("Location: $basepath/index.php?insert=0");
    }

    $conn->close();

?>