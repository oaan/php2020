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
                    ;
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
