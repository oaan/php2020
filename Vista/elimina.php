<html>
    <head>
        <title>elimina.php</title>
        <link rel="stylesheet" href="../miEstilo.css"/>
    </head>
    <body>
        <header>
            <?php
            include './encabezado.php';
            include '../Persistencia/conexion.php';
            include '../Modelo/mod_rn.php';
            $objCN = new conexion();
            ?>
        </header>
        <section>
            <?php
            $objRN=new mod_rn($HCL, $FN, $NOM, $AM, $OS, $AFILIADO, $HEPB);
            $objRN->setHCL($_POST['txtHCL']);
                    
            if (isset($_POST['btnRN'])) {
                $boton = $_POST['btnRN'];
                if ($boton == 'Buscar') {
                    $rn = $objCN->busca($objRN); //LO ENCUENTRO Y LO GUARDO EN $rn
                }
                if ($boton == 'Elimina') {
                    $objCN->elimina($objRN);
                    header('location:../Vista/listado.php');
                }
            }
            ?>
            <br><br><br>
            <h3>Baja de Recien Nacidos</h3>
            <br>


            <form method="post">
                <table>
                    <tr>
                        <td>Historia</td>
                        <td>
                            <input type="text" name="txtHCL" value="<?php echo $_POST['txtHCL'];?>">
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
                        <td>Nombres </td>
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
                            <input type="text" 
                                   name="txtAFILIADO" 
                                   value="<?php echo $rn['AFILIADO']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Vacuna Hep B</td>
                        <td>
                            <input type="checkbox" 
                                   name="chkHEPB" 
                                   value="<?php echo $rn['HEPB']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnRN" value="Elimina">
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
