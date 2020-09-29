<?php

    include __DIR__.'/../config/db.php';

    $sql = "SELECT id,room_number,floor,beds FROM stanze";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {

        $results = [];

        while($row = $result->fetch_assoc()) {
            $results[] = $row;
        }

    } elseif ($result) {
        echo "0 results";
    } else {
        echo "query error";
    }
    $conn->close();