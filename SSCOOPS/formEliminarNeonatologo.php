<?php
require './Config/config.php';
require './Clases/Conexion.php';
require './Clases/Neonatologo.php';
$Neonatologo = new Neonatologo();
$Neonatologo->verNeonatologo();
include './Includes/over-all-header.html';
include './Includes/nav.php';
?>
<main class="container">
    <h1>Borrado de Neonatologo</h1>

    <div class="alert bg-light border-danger text-danger shadow-sm col-5 mx-auto p-4">
        Se eliminara Neonatologo <span class="lead"><?= $Neonatologo->getNeonatologo(); ?></span>
        <form action="eliminarNeonatologo.php" method="POST">

            <input type="hidden" name="ID"
                   value="<?= $Neonatologo->getID(); ?>">

            <button class="btn btn-danger btn-block my-3">Confirmar baja</button>

            <a href="adminNeonatologo.php" class="btn btn-outline-secondary btn-block my-2">
                volver a panel
            </a>

        </form>
    </div>
    <script>
        Swal.fire(
                'Advertencia',
                'Si confirma la baja, se eliminará el neonatologo seleccionado',
                'warning'
                )
    </script>

</main>

<?php
include 'includes/footer.php';
?>