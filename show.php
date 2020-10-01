<?php

    include __DIR__.'/partials/template/header.php';
    include __DIR__.'/partials/show/server.php';

?>



    <div class="container">

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NUMERO_CAMERA</th>
                        <th scope="col">PIANO</th>
                        <th scope="col">NUMERO_LETTI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['room_number']; ?></td>
                        <td><?php echo $row['floor']; ?></td>
                        <td><?php echo $row['beds']; ?></td>
                    </tr>   
                </tbody>
            </table>

            <form action="partials/delete/server.php" method="POST">
                <input type="submit" class="btn btn-outline-danger" value="DELETE">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </form>

            <a href="modify.php?id=<?php echo $row['id'];?>" class="btn btn-outline-warning mt-3">MODIFY</a>

<?php include __DIR__.'/partials/template/footer.php'; ?>  