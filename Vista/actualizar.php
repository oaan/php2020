<html>
    <head>
        <title>actualizar.php</title>
        <link rel="stylesheet" href="../miEstilo.css"/>
    </head>
    <body>
        <header>
            <?php
            include './encabezado.php';
            include '../Persistencia/conexion.php';
            include '../Modelo/mod_rn.php';
            $objCN = new conexion();
            $objRN = new mod_rn($HCL, $FN, $NOM, $AM, $OS, $AFILIADO, $HEPB);
            $objRN->getHCL();
            $objCN->actualiza($objRN);
            ?>
        </header>
        <section>
            <?php
            if (isset($_POST['btnRN'])) {
                $boton = $_POST['btnRN'];
                if ($boton == 'Buscar') {
                    $rn = $objCN->busca($objRN);
                }
                if ($boton == 'Actualiza') {
                    $HCL = $_POST['txtHCL'];
                    $FN = $_POST['txtFN'];
                    $NOM = $_POST['txtNOM'];
                    $AM = $_POST['txtAM'];
                    $OS = $_POST['txtOS'];
                    $AFILIADO = $_POST['txtAFILIADO'];
                    $HEPB = $_POST['txtHEPB'];
                    $rn = new mod_rn($HCL, $FN, $NOM, $AM, $OS, $AFILIADO, $HEPB);
                    $objCN->actualiza($objRN);
                }
            }
            ?>
            <h3>Actualizar Recien Nacidos</h3>
            <form method="post">
                <table>
                    <tr>
                        <td>Historia</td>
                        <td>
                            <input type="text" name="txtHCL" value="<?php echo $rn['HCL']; ?>">
                        </td>
                        <td>
                            <input type="submit" name="btnRN" value="Buscar">
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha Nacimiento</td>
                        <td>
                            <input type="text" name="txtFN" value="<?php echo $rn['FN']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nombres <td>
                        <td>
                            <input type="text" name="txtNOM" value="<?php echo $rn['NOM']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Apellido Materno</td>
                        <td>
                            <input type="text" name="txtAM" value="<?php echo $rn['AM']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Obra Social</td>
                        <td>
                            <input type="text" name="txtOS" value="<?php echo $rn['OS']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nro de Afiliado</td>
                        <td>
                            <input type="text" name="txtAFILIADO" value="<?php echo $rn['AFILIADO']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Vacuna Hep B</td>
                        <td>
                            <input type="checkbox" name="chkHEPB" value="<?php echo $rn['HEPB']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnRN" value="Actualizar">

                        </td>
                    </tr>
                </table>
            </form>
        </section>
        <footer>
            <br>
            <?php
            include './pie.php';
            ?>
        </footer>
    </body>
</html>
