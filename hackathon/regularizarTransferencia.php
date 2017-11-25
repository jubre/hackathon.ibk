<html>
    <head>
        <script src="util/jquery-3.2.1.min.js" type="text/javascript"></script>   
        <script>

        </script>
    </head>
    <body>
        <?php
        include 'model/jsonPOST.php';
        include 'model/jsonGET.php';
        include 'model/util.php';

        $objCliente = ObtenerCodigoUnicoClientePorNumeroDocumento($_POST["numeroDocumento"], "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/clientes");
        $objReclamo = ObtenerReclamoPorCodigoUnicoCliente($objCliente->codigoUnicoCliente);

        if (ValidarFechaReclamos($objReclamo) == "No") {
            if ($_POST["montoTrx"] >= 1500) {
                $objReclamo = RegistrarReclamo($objCliente->codigoUnicoCliente, GenerarDescripcionReclamo($_POST['codigoATM'], $_POST['montoTrx'], $_POST['monedaTrx'], $_POST['codigoOperacionATM'], $_POST['tipoErrorATM']),"PENDIENTE");
            } else {
                $objCuenta = ObtenerCuenta("https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/clientes/" . $objCliente->codigoUnicoCliente . "/cuentas");
                $objTransferencia = EjecutarTransferenciaRetencion($_POST["monedaTrx"], $_POST["montoTrx"], $objCuenta[0]->numeroCuenta, "TRANSFERENCIA POR R20");
                $objReclamo = RegistrarReclamo($objCliente->codigoUnicoCliente, GenerarDescripcionReclamo($_POST['codigoATM'], $_POST['montoTrx'], $_POST['monedaTrx'], $_POST['codigoOperacionATM'], $_POST['tipoErrorATM']),"ATENDIDO");
            }
        } else {
            $objReclamo = RegistrarReclamo($objCliente->codigoUnicoCliente, GenerarDescripcionReclamo($_POST['codigoATM'], $_POST['montoTrx'], $_POST['monedaTrx'], $_POST['codigoOperacionATM'], $_POST['tipoErrorATM']),"PENDIENTE");
        }
        ?>

        <form>
            <h1>R20 detectado</h1>

            <h2>Transferencia regularizada a la cuenta: <?php echo $objCuenta[0]->numeroCuenta; ?></h2>
            <h2>Monto <?php echo $_POST["montoTrx"]; ?> y Moneda <?php echo $_POST["monedaTrx"]; ?></h2>
            <h2>Fecha y Hora: <?php echo date('Y-m-d'); ?></h2>
            <h2>Numero de Operacion: <?php echo $objTransferencia->numOperacion; ?></h2>
            <h2>Reclamo: <?php echo $objReclamo->numeroReclamo; ?></h2>
        </form>
    </body>
</html>