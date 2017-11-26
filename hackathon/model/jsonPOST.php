<?php

//LOGICA POST API IBK

function RegistrarCliente($numeroDocumento) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/clientes",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"tipoDocumento\":\"1\",\"numeroDocumento\":\"" . $numeroDocumento . "\",\"fechaNacimiento\":\"1980-01-01\",\"apellidoPaterno\":\"CARDENAS\",\"apellidoMaterno\":\"MENDIOLA\",\"primerNombre\":\"LORENZO\",\"segundoNombre\":\"JEREMIAS\",\"sexo\":\"M\",\"estadoCivil\":\"U\",\"tipoNacionalidad\":\"0\",\"codigoPaisNacimiento\":\"4028\",\"codigoPaisResidencia\":\"4028\",\"codigoPaisNacionalidad\":\"4028\",\"tipoVia\":\"av\",\"nombreVia\":\"SAN FRANCISCO\",\"numeroCalle\":\"258\",\"idManzana\":\"A\",\"idLote\":\"8\",\"idInterior\":\"102\",\"nombreUrbanizacion\":\"LOS CONDORES\",\"referenciaUbicacion\":\"AL FRENTE DE HOSPITAL CENTRAL\",\"departamento\":\"LIMA\",\"provincia\":\"LIMA\",\"distrito\":\"AREQUIPA\",\"listaTelefonos\":[],\"tipoEmail\":\"p\",\"email\":\"ejemplo@gmail.com\",\"codigoCIIU\":\"\",\"fechaInicioEmpleo\":\"2015-09-20\",\"nombreEmpresa\":\"TELNET S.A.\",\"codigoOcupacion\":\"EMPLEADO\"}",
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

function RegistrarCuenta($codigoUnicoCliente) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/cuentas",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"codigoUnicoCliente\":\"" . $codigoUnicoCliente . "\",\"producto\":\"002\",\"sProducto\":\"205\",\"moneda\":\"001\",\"tasaAnual\":\"110.87\"}",
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
        $objCuenta = json_decode($response);
    }

    return $objCuenta;
}

function ObtenerTiendas($latitud,$longitud) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/interbankperu-uat/pys-servicios-internos/ms/ubicacionhorario",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"operation\":2,\"zona\":\"\",\"provincia\":\"\",\"direccion\":\"\",\"distrito\":\"m\",\"instante\":\"\",\"dia\":\"\",\"latitud\":".$latitud.",\"longitud\":".$longitud."}",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "content-type: application/json",
            "x-ibm-client-id: 1387b541-cb35-4511-940a-3a095567b7a3 "
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $objTienda = json_decode($response);
    }

    return $objTienda;
}

?>