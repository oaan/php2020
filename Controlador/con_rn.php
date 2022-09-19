<?php
//metemos los metodos publicos que vienen de mod_rn.php 
include '../Modelo/mod_rn.php';
include '../Persistencia/conexion.php';
//creamos objeto de conexion para acceder a los metodos registrar
$conexion=new conexion();
//validamos si se presiono boton
if (isset($_POST['btnRN'])) {
    $HCL=$_POST['txtHCL'];
    $FN=$_POST['txtFN'];
    $NOM=$_POST['txtNOM'];
    $AM=$_POST['txtAM'];
    $OS=$_POST['txtOS'];
    $AFILIADO=$_POST['txtAFILIADO'];
    $HEPB=$_POST['chkHEPB'];
    //creamos objeto del modelo para meterle los datos al constructor de la clase
    $mod_rn=new mod_rn($HCL, $FN, $NOM, $AM, $OS, $AFILIADO, $HEPB);
    //ejecutamos el registro mediante la invocacion del metodo registra
    //que se encuentra en la clase conexion...
    $conexion->registra($mod_rn);
    header('location:../Vista/listado.php');
}
