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

<?php include __DIR__.'/partials/template/footer.php'; ?>  