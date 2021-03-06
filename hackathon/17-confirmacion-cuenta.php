<?php
session_start();

include 'model/jsonPOST.php';
include 'model/jsonGET.php';
include 'model/util.php';

$codigoUnicoCliente = "00" . $_SESSION["numeroDocumento"];
$objClienteTotal = ObtenerClientePorCodigoUnicoCliente($codigoUnicoCliente);

if (!isset($objClienteTotal->primerNombre)) {
    $objClienteTotal = RegistrarCliente($_SESSION["numeroDocumento"]);
    $objClienteTotal = ObtenerClientePorCodigoUnicoCliente($codigoUnicoCliente);
}

$objCuenta = RegistrarCuenta($codigoUnicoCliente);
$objTransferencia = EjecutarTransferenciaRetencion($_SESSION["monedaTrx"], $_SESSION["montoTrx"], $objCuenta->numeroCuenta, "TRANSFERENCIA POR R20");
$objReclamo = RegistrarReclamo($codigoUnicoCliente, GenerarDescripcionReclamo("IB000999", $_SESSION['montoTrx'], $_SESSION['monedaTrx'], "4546", "E1"), "ATENDIDO");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>Interbank</title>	
        <link rel="stylesheet" type="text/css" href="static-6/css/styles.css"/>
        <!--[if lt IE 9]>
                <script src="static-6/js/html5.js"></script>
                <link rel="stylesheet" type="text/css" href="static-6/css/ie.css"/>
        <![endif]-->
    </head>
    <body class="yellow">
        <div class="wrapper">
            <header class="wancho-2">
                <div id="header">
                    <div class="logo"></div>
                </div>
            </header>
            <section class="wancho-2">
                <div class="ac mt20 txtnormal size32 ml30 mr30">
                    <br/>
                    Estimado cliente, acabamos de crear la cuenta <?php echo $objCuenta->numeroCuenta; ?>
                    y abonar <?php echo $_SESSION["montoTrx"] . " " . $_SESSION["monedaTrx"];?> por el retiro no dispensado.
                </div>
                <div class="ac mt40">
                    <form> 
                        <div class="txtnormal size35 skyblue mb15" style="font-size:42px;">
                            <?php 
                                $mensaje = "Lo sentimos, tuvimos problemas en atender el retiro soliciado. Para evitar cualquier malestar, se procedio con la devolución de " . $_SESSION["montoTrx"] . " " . $_SESSION["monedaTrx"] . " a su cuenta " . $objCuenta->numeroCuenta . ". Disculpe el inconveniente. Estamos para servirte";
                                EnviarCorreo($mensaje, $objClienteTotal->email);
                                session_destroy();
                            ?>
                            <br/>
                        </div>                                         
                    </form>
                </div>
                <div class="ac mt20 txtnormal size32 ml30 mr30">
                    Disculpe el inconveniente. Acércate a cualquier tienda Interbank<br> 					
                </div>
            </section>
        </div>
    </div>
</body>
</html>