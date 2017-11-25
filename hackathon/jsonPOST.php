<?php

//LOGICA POST API IBK
function ObtenerCodigoUnicoClientePorNumeroDocumento($numeroDocumento, $url) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"numeroDocumento\":\"" . $numeroDocumento . "\"}",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "content-type: application/json",
            "x-ibm-client-id: 1387b541-cb35-4511-940a-3a095567b7a3"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $objCliente = json_decode($response);
    }

    return $objCliente;
}

function EjecutarTransferenciaRetencion($monedaTrx, $montoTrx, $numeroCuenta, $glosa) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/transferencia",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"numeroCuentaCargo\":\"7707687352368\",\"monedaCargo\":\"" . $monedaTrx . "\",\"importeCargo\":\"" . $montoTrx . "\",\"numeroCuentaAbono\":\"" . $numeroCuenta . "\",\"monedaAbono\":\"" . $monedaTrx . "\",\"importeAbono\":\"" . $montoTrx . "\",\"tipoCambio\":\"3.0\",\"glosa\":\"" . $glosa . "\"}",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "content-type: application/json",
            "x-ibm-client-id: 1387b541-cb35-4511-940a-3a095567b7a3"
        ),
    ));

    $responseTransferencia = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $objTransferencia = json_decode($responseTransferencia);
    }

    return $objTransferencia;
}

function RegistrarReclamo($codigoUnicoCliente, $descripcionReclamo, $estsadoReclamo) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/reclamos",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"codigoUnicoCliente\":\"" . $codigoUnicoCliente . "\",\"tipo\":\"272\",\"subtipo\":\"134\",\"estado\":\"" . $estsadoReclamo . "\",\"descripcion\":\"" . $descripcionReclamo . "\",\"fechaAlta\":\"" . date('Y-m-d') . "\",\"usuarioDerivado\":\"dejzitn\",\"codigoAplicativo\":\"ATM\"}",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "content-type: application/json",
            "x-ibm-client-id: 1387b541-cb35-4511-940a-3a095567b7a3"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $objReclamo = json_decode($response);
    }

    return $objReclamo;
}

function ObtenerReclamoPorCodigoUnicoCliente($codigoUnicoCliente) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/clientes/".$codigoUnicoCliente."/reclamos",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "x-ibm-client-id: 1387b541-cb35-4511-940a-3a095567b7a3"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $objReclamo = json_decode($response);
    }

    return $objReclamo;
}

?>