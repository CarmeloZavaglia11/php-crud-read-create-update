<?php

    include __DIR__.'/partials/template/header.php';
    include __DIR__.'/partials/modify/server.php';

?>


    
    <div class="container">

        <form action="partials/modify/serverEdit.php" method="post">
    
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input type="number" class="form-control" name="numeroStanza" id="roomNumber" value="<?php echo $row['room_number']; ?>">
            </div>

            <div class="form-group">
                <label for="Piano">Piano</label>
                <input type="number" class="form-control" name="piano" id="Piano" value="<?php echo $row['floor']; ?>">
            </div>

            <div class="form-group">
                <label for="numeroLetti">Numero Letti</label>
                <input type="number" class="form-control" name="numeroLetti" id="numeroLetti" value="<?php echo $row['beds']; ?>">
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
            </div>

            <input type="submit" class="btn btn-dark" value="Modifica" >


            

        </form>

    <?php include __DIR__.'/partials/template/footer.php'; ?>  