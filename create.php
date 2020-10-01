<?php

    include __DIR__.'/partials/template/header.php';

?>


    
    <div class="container">

        <form action="partials/create/server.php" method="post">
    
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input type="number" class="form-control" name="numeroStanza" id="roomNumber" placeholder="inserisci numero stanza..">
            </div>

            <div class="form-group">
                <label for="Piano">Piano</label>
                <input type="number" class="form-control" name="piano" id="Piano" placeholder="inserisci piano..">
            </div>

            <div class="form-group">
                <label for="numeroLetti">Numero Letti</label>
                <input type="number" class="form-control" name="numeroLetti" id="numeroLetti" placeholder="inserisci numero letti..">
            </div>

            <input type="submit" class="btn btn-dark" value="Inserisci" >


            

        </form>

    <?php include __DIR__.'/partials/template/footer.php'; ?>  