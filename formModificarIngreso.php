<?php
require 'Config/config.php';
require 'Clases/Conexion.php';
require 'Clases/Ingreso.php';
$Ingreso = new Ingreso();
$Ingreso->verNacidoPorHCL(); //ERROR --> ME LLEVO 1 HORA 
include 'Includes/over-all-header.html';
include 'Includes/nav.php';
?>
ARQUITECTA MANE BICAN
<main class="container">
    <h1>Modificación Recien Nacido</h1>
    <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">
        <form action="modificarIngreso.php" method="post">

            <div class="form-group">
                <label for="NOM">Nombre: </label>
                <input type="text" name="NOM" 
                       value="<?= $Ingreso->getNOM(); ?>"
                       id="NOM" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="AP">Apellido Paterno: </label>
                <input type="text" name="AP" 
                       value="<?= $Ingreso->getAP(); ?>"
                       id="AP" class="form-control">
            </div>
            <div class="form-group">
                <label for="OS">Obra Social: </label>
                <input type="text" name="OS" 
                       value="<?= $Ingreso->getOS(); ?>"
                       id="OS" class="form-control">
            </div>
            <div class="form-group">
                <label for="AFILIADO">Nro de Afiliado: </label>
                <input type="text" name="AFILIADO"
                       value="<?= $Ingreso->getAFILIADO();?>"
                       id="AFILIADO" class="form-control"><!-- comment -->
            </div>
            <input type="hidden" name="HCL"
                   value="<?= $Ingreso->getHCL(); ?>">

            <button class="btn btn-dark">Modificar región</button>
            <a href="adminIngresos.php" class="btn btn-outline-secondary">
                Volver a panel de regiones
            </a>
        </form>
    </div>
</main>
<?php
include 'includes/footer.php';
?>