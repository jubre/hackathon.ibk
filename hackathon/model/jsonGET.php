<?php

//LOGICA GET API IBK
function ObtenerClientePorCodigoUnicoCliente($codigoUnicoCliente) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/clientes/".$codigoUnicoCliente."",
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
        $objCliente = json_decode($response);
    }

    return $objCliente;
}

function ObtenerCuenta($url) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "content-type: application/json",
            "x-ibm-client-id: 1387b541-cb35-4511-940a-3a095567b7a3"
        ),
    ));

    $responseCuenta = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $objCuenta = json_decode($responseCuenta);
    }

    return $objCuenta;
}

function ObtenerReclamoPorCodigoUnicoCliente($codigoUnicoCliente) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/clientes/" . $codigoUnicoCliente . "/reclamos",
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