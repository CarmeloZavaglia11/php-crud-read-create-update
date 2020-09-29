<?php

    include __DIR__.'/partials/template/header.php';
    include __DIR__.'/partials/home/server.php';

?>


<body>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NUMERO_CAMERA</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $room) {?>
                <tr>
                    <td><?php echo $room['id']; ?></td>
                    <td><?php echo $room['room_number']; ?></td>
                    <td><a href="show.php?id=<?php echo $room['id']; ?>" class="btn btn-outline-info">VIEW</a></td>
                    <td><a href="" class="btn btn-outline-warning">MODIFY</a></td>
                    <td>
                        <form action="partials/delete/server.php" method="POST">
                            <input type="submit" class="btn btn-outline-danger" value="DELETE">
                            <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                        </form>
                    </td>
                </tr>
            <?php } ?>    
            </tbody>
        </table>
    </div>
</body>
</html>