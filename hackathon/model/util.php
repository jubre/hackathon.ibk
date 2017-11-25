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
            if (RestarFechas($objReclamo->fechaAlta, date('Y-m-d'))<=7) {
                return "Si";
                break;
            }
        }
        return "No";
    } else {
        return "No";
    }
}

function GenerarDescripcionReclamo($codigoATM, $montoTrx, $monedaTrx, $codigoOperacionATM, $tipoErrorATM){
    return $codigoATM . " - " . $montoTrx . " " . $monedaTrx . " - " . $codigoOperacionATM . " - " . $tipoErrorATM ;
}
?>