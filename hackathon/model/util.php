<?php

function RestarFechas($fecha_a, $fecha_b) {
    $dias = (strtotime($fecha_a) - strtotime($fecha_b)) / 86400;
    $dias = abs($dias);
    $dias = floor($dias);
    return $dias;
}

function ValidarFechaReclamos($listaReclamos) {
    if (count($listaReclamos) > 0) {
        foreach ($listaReclamos as $objReclamo) {
            if (RestarFechas($objReclamo->fechaAlta, date('Y-m-d')) <= 7) {
                return "Si";
                break;
            }
        }
        return "No";
    } else {
        return "No";
    }
}

function GenerarDescripcionReclamo($codigoATM, $montoTrx, $monedaTrx, $codigoOperacionATM, $tipoErrorATM) {
    return $codigoATM . " - " . $montoTrx . " " . $monedaTrx . " - " . $codigoOperacionATM . " - " . $tipoErrorATM;
}

function EnviarCorreo($textoCorreo, $destinatario) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/notificarclave",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"usuarioId\":\"JR\",\"accion\":\"E\",\"operador\":\"C\",\"nroCelular\":\"950201190\",\"email\":\"" . $destinatario . "\",\"canal\":\"bot\",\"messageId\":\"JR_UAT_20171016003\",\"clave\":\"20171016003\",\"parametros\":[{\"key\":\"Operacion\",\"value\":\"" . $textoCorreo . "\"}]}",
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
        $objCorreo = json_decode($response);
    }

    return $objCorreo;
}

function EnviarSMS($textoSMS, $numeroCelular) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/notificarclave",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"usuarioId\":\"JR\",\"accion\":\"E\",\"operador\":\"C\",\"nroCelular\":\"" . $numeroCelular . "\",\"email\":\"prueba@prueba.com\",\"canal\":\"bot\",\"messageId\":\"JR_UAT_20171016003\",\"clave\":\"20171016003\",\"parametros\":[{\"key\":\"Operacion\",\"value\":\"" . $textoSMS . "\"}]}",
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
        $objCorreo = json_decode($response);
    }

    return $objCorreo;
}

function ObtenerCoordenadasGPS($direccion) {
    $direccion = urlencode($direccion);
    $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . $direccion . '&sensor=false');
    $output = json_decode($geocode);
    $lat = $output->results[0]->geometry->location->lat;
    $long = $output->results[0]->geometry->location->lng;
    return $lat . ',' . $long;
}

?>