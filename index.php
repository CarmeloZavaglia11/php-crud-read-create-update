<?php

    include __DIR__.'/partials/template/header.php';
    include __DIR__.'/partials/home/server.php';

?>



    <div class="container">
        <?php if (!empty($_GET['roomId'])) { 
            $stanza_cancellata = $_GET['roomId'];
            $message = "la stanza:$stanza_cancellata è stata cancellata!"; ?>
            
        
        <div class="alert bg-warning mt-3">
            <?php echo $message ?>
        </div>

        <?php } else if(!empty($_GET['notRoomId'])){ 
            $id_stanza = $_GET['notRoomId'];?>

            <div class="alert bg-danger mt-3">
                <?php echo "la stanza con id:$id_stanza non è stata cancellata" ?>
            </div>

        <?php } ?>

        <?php if (!empty($_GET['idmodified'])) { 
            $stanza_cancellata = $_GET['idmodified'];
            $message = "la stanza:$stanza_cancellata è stata modificata!"; ?>
            
        
        <div class="alert bg-warning mt-3">
            <?php echo $message ?>
        </div>

        <?php } else if(!empty($_GET['idnotmodified'])){ 
            $id_stanza = $_GET['idnotmodified'];?>

            <div class="alert bg-danger mt-3">
                <?php echo "la stanza con id:$id_stanza non è stata modificata (non hai cambiato nessun parametro)" ?>
            </div>

        <?php } ?>

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
                    <td><a href="modify.php?id=<?php echo $room['id']; ?>" class="btn btn-outline-warning">MODIFY</a></td>
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

        <script src="dist/app.js"></script>
<?php include __DIR__.'/partials/template/footer.php'; ?>        
    
