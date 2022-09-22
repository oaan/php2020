<?php
//ini_set('display_errors', 'On');
require './Config/config.php';
require './Clases/Conexion.php';
require './Clases/Neonatologo.php';
$Neonatologo = new Neonatologo;
$neonatologos = $Neonatologo->listarNeonatologo();
include './Includes/over-all-header.html';
include './Includes/nav.php';
?>
<main class="container">
    <h1>Panel de Administracion de Neonatologos</h1>
    <table class="table table-borderless table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Neonatologo</th>
                <th>Apellido</th>
                <th>MP</th>
                <th>MN</th>
                <th colspan="2">
                    <a href="formAgregarNeonatologo.php" class="btn btn-outline-secondary">
                        Agregar Neo<i class="far fa-plus-square ml-1"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($neonatologos as $neonatologo) {
                ?>
                <tr>
                    <td><?= $neonatologo['ID'] ?></td>
                    <td><?= ucwords(strtolower($neonatologo['Neonatologo'])) ?></td>
                    <td><?= ucwords(strtolower($neonatologo['Apellido'])) ?></td>
                    <td><?= $neonatologo['MP'] ?></td>
                    <td><?= $neonatologo['MN'] ?></td>
                    <td>
                        <a href="formModificarNeonatologo.php?ID=<?= $neonatologo['ID'] ?>"class="btn btn-outline-secondary">
                            Modificar <i class="far fa-edit ml-1"></i>
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarNeonatologo.php?ID=<?= $neonatologo['ID'] ?>"class="btn btn-outline-secondary">
                            Eliminar <i class="far fa-edit ml-1"></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</main>
