<?php
require './Config/config.php';
require './Clases/Conexion.php';
require './Clases/Ingreso.php';
$Ingreso = new Ingreso();
$ingresos = $Ingreso->listarIngresos();
include './Includes/over-all-header.html';
include './Includes/nav.php';
?>
<main class="container">
    <h1>Panel de Administracion de Ingresos</h1>
    <table class="table table-borderless table-striped table-hover">
        <thead>
            <tr>
                <th>Historia Clinica</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Obra Social</th>
                <th>Nro de Afiliado</th>
                <th colspan="2">
                    <a href="formAgregarIngreso.php" class="btn btn-outline-secondary">
                        Agregar<i class="far fa-plus-square ml-1"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($ingresos as $ingreso) {
                ?>
                <tr>
                    <td><?= $ingreso['HCL'] ?></td>
                    <td><?= ucwords(strtolower($ingreso['NOM']))?></td>
                    <td><?= ucwords(strtolower($ingreso['AP'])) ?></td>
                    <td><?= ucwords(strtolower($ingreso['OS'])) ?></td>
                    <td><?= $ingreso['AFILIADO'] ?></td>
                    <td>
                        <a href="formModificarIngreso.php?HCL=<?=$ingreso['HCL']?>" class="btn btn-outline-secondary">
                            Modificar <i class="far fa-edit ml-1"></i>
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarIngreso.php?HCL=<?=$ingreso['HCL']?>" class="btn btn-outline-secondary">
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
