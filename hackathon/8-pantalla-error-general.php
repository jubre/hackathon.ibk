<?php
session_start();

include 'model/jsonPOST.php';
include 'model/jsonGET.php';
include 'model/util.php';

$objCliente = ObtenerCodigoUnicoClientePorNumeroDocumento($_SESSION["numeroDocumento"], "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/clientes");
$objClienteTotal = ObtenerClientePorCodigoUnicoCliente($objCliente->codigoUnicoCliente);
$objReclamo = ObtenerReclamoPorCodigoUnicoCliente($objCliente->codigoUnicoCliente);

if (ValidarFechaReclamos($objReclamo) == "No") {
    if ($_SESSION["montoTrx"] >= 1500) {
        $objReclamo = RegistrarReclamo($objCliente->codigoUnicoCliente, GenerarDescripcionReclamo("IB000999", $_SESSION['montoTrx'], $_SESSION['monedaTrx'], "4546", "E1"), "PENDIENTE");
        $escenario = 1;
    } else {
        $objCuenta = ObtenerCuenta("https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/clientes/" . $objCliente->codigoUnicoCliente . "/cuentas");
        $objTransferencia = EjecutarTransferenciaRetencion($_SESSION["monedaTrx"], $_SESSION["montoTrx"], $objCuenta[0]->numeroCuenta, "TRANSFERENCIA POR R20");
        $objReclamo = RegistrarReclamo($objCliente->codigoUnicoCliente, GenerarDescripcionReclamo("IB000999", $_SESSION['montoTrx'], $_SESSION['monedaTrx'], "4546", "E1"), "ATENDIDO");
        $escenario = 2;
    }
} else {
    $objReclamo = RegistrarReclamo($objCliente->codigoUnicoCliente, GenerarDescripcionReclamo("IB000999", $_SESSION['montoTrx'], $_SESSION['monedaTrx'], "4546", "E1"), "PENDIENTE");
    $escenario = 3;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <title>Interbank</title>
        <link rel="stylesheet" type="text/css" href="../static/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../static/css/styles.css"/>
        <!--[if lt IE 9]>
                <script src="../static/js/html5.js"></script>
                <script src="../static/js/respond.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="../static/css/ie.css"/>
        <![endif]-->
        <script src="../static/js/jquery1.8.3.min.js" type="text/javascript"></script>
    </head>
    <body class="touch " ontouchstart="">
        <!-- html solo para el menu responsive -->
        <div class="w-nav">
            <div  class="menu-mobile icon-menu"></div>
            <div class="menu-mobile-close icon-close"></div>
        </div>
        <div class="r-overlay"></div>
        <!-- html solo para el menu responsive -->
        <div class="cnt-wrapper">
            <div class="wrapper">
                <header class="wancho-2">
                    <div id="header">
                        <p id="logo"></p>
                        <ul class="alineacion">
                            <li><span id="ico-telefono"></span><span>Asistencia: 311 9000</span></li>
                            <li><span id="ico-cajero"></span><span># Cajero: 0088977</span></li>
                        </ul>
                    </div>
                </header>
                <!-- /header -->

                <section class="c-main wancho-2">

                    <div class="c-texto1 text-error -solo mt200">
                        <span></span>
                        <p class="vm">
                            <?php
                            if (($escenario == 1) OR ( $escenario == 3)) {
                                $mensaje = "Hola Juan. Lo sentimos, tuvimos problemas en atender el retiro solicitado. Hemos procedido con crear el reclamo " . $objReclamo->numeroReclamo . " que se atendera en los próximos dias. Disculpa  el inconveniente. Estamos para servirte.";
                                ?>
                                <center>
                                    Hola Juan<br/>
                                    Lo sentimos, tuvimos problemas en atender el retiro solicitado.<br/>
                                    Hemos procedido con crear el reclamo <?php echo $objReclamo->numeroReclamo;?> que se atendera en los próximos dias.<br/>
                                    Disculpa  el inconveniente.<br/>
                                    Estamos para servirte
                                </center>
                            <?php
                            }
                            if ($escenario == 2) {
                                $mensaje = "Hola " . $objClienteTotal->primerNombre . "Lo sentimos, tuvimos problemas en atender el retiro soliciado. Para evitar cualquier malestar, se procedio con la devolución de " . $_SESSION["montoTrx"] . " " . $_SESSION["monedaTrx"] . " a su cuenta " . $objCuenta[0]->numeroCuenta . ". Disculpe el inconveniente. Estamos para servirte";
                                ?>
                                <center>
                                    Hola <?php echo $objClienteTotal->primerNombre; ?><br/>
                                    Lo sentimos, tuvimos problemas en atender el retiro soliciado.<br/>
                                    Para evitar cualquier malestar, se procedio con la devolución de <br/>
                                    <?php echo $_SESSION["montoTrx"] . " " . $_SESSION["monedaTrx"] . " a su cuenta " . $objCuenta[0]->numeroCuenta; ?><br/>
                                    Disculpe el inconveniente.<br/>
                                    Estamos para servirte
                                </center>
                                <?php
                            }
                            
                            EnviarCorreo($mensaje, $objClienteTotal->email);
                            ?>
                        </p>
                    </div>

                </section>

            </div>
        </div>
        <script type="text/javascript">
        </script>

        <script type="text/javascript" src="../static/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script src="../static/js/main.js" type="text/javascript"></script>
        <script type="text/javascript">

        </script>
        <div class="grid"></div>
    </body>
</html>