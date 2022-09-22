<?php
require 'Config/config.php';
require 'Clases/Conexion.php';
require 'Clases/Neonatologo.php';
$Neonatologo = new Neonatologo();
$Neonatologo->verNeonatologo(); 
//ERROR --> ME LLEVO 1 HORA 
//ME COSTO MUCHISISMO PRIMERO BORRE EL ID CON...
//ALTER TABLE NEONATOLOGO DROP COLUMN ID Y DESPUES.....
//ALTER TABLE NEONATOLOGO ADD COLUMN ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY;
include 'Includes/over-all-header.html';
include 'Includes/nav.php';
?>
<main class="container">
    <h1>Modificación Neonatologo</h1>
    <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">
        <form action="modificarNeonatologo.php" method="post">
<!--            <div class="form-group">
                <label for="ID">ID:</label>
                <input type="text" name="ID" 
                       value="<?= $Neonatologo->getID(); ?>"
                       id="ID" class="form-control" required>
            </div>-->
            <div class="form-group">
                <label for="Neonatologo">Neonatologo: </label>
                <input type="text" name="Neonatologo" 
                       value="<?= $Neonatologo->getNeonatologo(); ?>"
                       id="Neonatologo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Apellido">Apellido: </label>
                <input type="text" name="Apellido"
                       value="<?= $Neonatologo->getApellido(); ?>"
                       id="Apellido" class="form-control"><!-- comment -->
            </div>
            <div class="form-group">
                <label for="MP">MP: </label>
                <input type="text" name="MP"
                       value="<?= $Neonatologo->getMP(); ?>"
                       id="MP" class="form-control"><!-- comment -->
            </div>            
            <div class="form-group">
                <label for="MN">MN: </label>
                <input type="text" name="MN"
                       value="<?= $Neonatologo->getMN(); ?>"
                       id="MN" class="form-control"><!-- comment -->
            </div> 

            <input type="hidden" name="ID"
                   value="<?= $Neonatologo->getID(); ?>">

            <button class="btn btn-dark">Modificar Neonatologo</button>
            <a href="adminNeonatologo.php" class="btn btn-outline-secondary">
                Volver a panel Neonatologo
            </a>
        </form>
    </div>
</main>
<?php
include 'includes/footer.php';
?>