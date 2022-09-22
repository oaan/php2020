<?php
require './Config/config.php';
require './Clases/Conexion.php';
require './Clases/Ingreso.php';
$Ingreso = new Ingreso();
$Ingreso->verNacidoPorHCL();
include './Includes/over-all-header.html';
include './Includes/nav.php';
?>
<main class="container">
    <h1>Borrado de Recien Nacido</h1>

    <div class="alert bg-light border-danger text-danger shadow-sm col-5 mx-auto p-4">
        Se eliminara recien nacido <span class="lead"><?= $Ingreso->getNOM(); ?></span>
        <form action="eliminarIngreso.php" method="post">

            <input type="hidden" name="HCL"
                   value="<?= $Ingreso->getHCL(); ?>">
            <!--  TAMPOCO ES NECESARIO PONER TODO EL RESTO....              
                            <input type="hidden" name="NOM"
                                   value="<?= $Ingreso->getNOM(); ?>">
                            
                            <input type="hidden" name="AP"
                                   value="<?= $Ingreso->getAP(); ?>">
                            
                            <input type="hidden" name="OS"
                                   value="<?= $Ingreso->getOS(); ?>">
                            
                            <input type="hidden" name="AFILIADO"
                                   value="<?= $Ingreso->getAFILIADO(); ?>">-->

            <button class="btn btn-danger btn-block my-3">Confirmar baja</button>

            <a href="adminIngresos.php" class="btn btn-outline-secondary btn-block my-2">
                volver a panel
            </a>

        </form>
    </div>
    <script>
        Swal.fire(
                'Advertencia',
                'Si confirma la baja, se eliminará la región seleccionada',
                'warning'
                )
    </script>

</main>

<?php
include 'includes/footer.php';
?>