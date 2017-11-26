<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8" />

        <title>Interbank</title>

        <link rel="stylesheet" type="text/css" href="../static/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../static/css/styles.css" />
        <!--[if lt IE 9]>
            <script src="../static/js/html5.js"></script>
            <script src="../static/js/respond.js" type="text/javascript"></script>
            <link rel="stylesheet" type="text/css" href="../static/css/ie.css"/>
        <![endif]-->
        <script src="../static/js/jquery1.8.3.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            function SetMonedaTrx(monedaTrx) {
                document.getElementById('monedaTrx').value = monedaTrx;
            }

            function SetMontoTrx(montoTrx) {
                document.getElementById('montoTrx').value = montoTrx;
                document.forms[0].submit();
            }

            $(window).load(function () {
                document.getElementById('monedaTrx').value = "Soles";
            });
        </script>
    </head>

    <?php
    $numeroDocumento = $_POST['numeroDocumento1'] . $_POST['numeroDocumento2'] . $_POST['numeroDocumento3'] . $_POST['numeroDocumento4'] . $_POST['numeroDocumento5'] . $_POST['numeroDocumento6'] . $_POST['numeroDocumento7'] . $_POST['numeroDocumento8'];
    session_start();
    $_SESSION['numeroDocumento'] = $numeroDocumento;
    ?>

    <body class="touch seleccion-principal" ontouchstart="" onload="">
        <form action="3-seleccion-cuentas-soles.php" method="post">
            <input type="hidden" name="montoTrx" id="montoTrx"/>
            <input type="hidden" name="monedaTrx" id="monedaTrx"/>

            <!-- html solo para el menu responsive -->
            <div class="w-nav">
                <div class="menu-mobile icon-menu"></div>
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

                    <section>
                        <div class="menu-navegacion wancho-2 ">
                            <div class="menu-inner">
                                <ul>
                                    <li class="item-menu fl">
                                        <a href="" class="bt bt-h active ac">
                                            <div class="bt-inner">
                                                <img class="vm" src="../static/images/bt-icon-1.png" width="70" height="50"> <br>
                                                Retira
                                            </div>
                                        </a>
                                    </li>
                                    <li class="item-menu fl">
                                        <a href="" class="bt bt-h ac">
                                            <div class="bt-inner">
                                                <img class="vm" src="../static/images/consulta-img.png" width="70" height="50"> <br>
                                                Consulta
                                            </div>
                                        </a>
                                    </li>

                                    <li class="item-menu fr">
                                        <a href="" class="bt bt-h ac">
                                            <div class="bt-inner">
                                                <img class="vm" src="../static/images/bt-icon-7.png" width="70" height="50"> <br>
                                                Claves y <br> Seguridad
                                            </div>
                                        </a>
                                    </li>

                                    <li id="SalaryAdvanceOption" class="item-menu fl">
                                        <a class="bt bt-h ac">
                                            <div class="bt-inner">
                                                <img class="vm" src="../static/images/bt-icon-6.png" width="70" height="50"> <br>
                                                Adelanta <br> tu sueldo
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="wancho-2">
                            <div class="page-title">
                                <div class="page-title-seccion j-title-seccion">
                                    <div class="page-subtitle">
                                        Retira
                                    </div>
                                    <p>
                                        Ingresa la moneda y monto a retirar
                                    </p>
                                </div>
                            </div>
                            <div class="wancho-tab mt20 ma">
                                <div class="wrapper-tab wrap-tabs">
                                    <div class="header-tab lanza-tab ma botones-si-no mb20">
                                        <ul class="clearfix">
                                            <li class="bt-si active item-header-tab" data-id="tab-soles">
                                                <input type="hidden" value="Soles" id="monedaSoles" name="monedaSoles"/>
                                                <a class="" href="" onclick="javascript:SetMonedaTrx(document.getElementById('monedaSoles').value);">Soles</a>
                                            </li>
                                            <li class="bt-no item-header-tab" data-id="tab-dolares">
                                                <input type="hidden" value="Dólares" id="monedaDolares" name="monedaDolares"/>
                                                <a class="" href="" onclick="javascript:SetMonedaTrx(document.getElementById('monedaDolares').value);">Dólares</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-wrapper content-tab">
                                        <div id="tab-soles" class="content-billete soles item-tab active">
                                            <input type="hidden" value="20" id="monto20" name="monto20"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto20').value);">
                                                <div class="bt-inner">
                                                    S/ &nbsp; 20                                                
                                                </div>
                                            </a>
                                            <input type="hidden" value="50" id="monto50" name="monto50"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto50').value);">
                                                <div class="bt-inner">
                                                    S/ &nbsp; 50                                                
                                                </div>
                                            </a>
                                            <input type="hidden" value="100" id="monto100" name="monto100"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto100').value);">
                                                <div class="bt-inner">
                                                    S/ &nbsp; 100                                                
                                                </div>
                                            </a>
                                            <input type="hidden" value="150" id="monto150" name="monto150"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto150').value);">
                                                <div class="bt-inner">
                                                    S/ &nbsp; 150                                                
                                                </div>
                                            </a>
                                            <input type="hidden" value="200" id="monto200" name="monto200"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto200').value);">
                                                <div class="bt-inner">
                                                    S/ &nbsp; 200                                                
                                                </div>
                                            </a>
                                            <input type="hidden" value="400" id="monto400" name="monto400"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto400').value);">
                                                <div class="bt-inner">
                                                    S/ &nbsp; 400                                                
                                                </div>
                                            </a>
                                            <a href="#ibcontent-1" class="text-fancy bt ac b-sl">
                                                <div class="bt-inner">Otro monto en soles</div>
                                            </a>
                                        </div>
                                        <div id="tab-dolares" class="content-billete dolares item-tab">
                                            <input type="hidden" value="20" id="monto20" name="monto20"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto20').value);">
                                                <div class="bt-inner">
                                                    US$ &nbsp; 20                                                
                                                </div>
                                            </a>
                                            <input type="hidden" value="40" id="monto40" name="monto40"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto40').value);">
                                                <div class="bt-inner">
                                                    US$ &nbsp; 40                                                
                                                </div>
                                            </a>
                                            <input type="hidden" value="80" id="monto80" name="monto80"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto80').value);">
                                                <div class="bt-inner">
                                                    US$ &nbsp; 80                                            
                                                </div>
                                            </a>
                                            <input type="hidden" value="100" id="monto100" name="monto100"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto100').value);">
                                                <div class="bt-inner">
                                                    US$ &nbsp; 100
                                                </div>
                                            </a>
                                            <input type="hidden" value="140" id="monto140" name="monto140"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto140').value);">
                                                <div class="bt-inner">
                                                    US$ &nbsp; 140
                                                </div>
                                            </a>
                                            <input type="hidden" value="200" id="monto200" name="monto200"/>
                                            <a href="#" class="bt ac b-ss" onclick="javascript:SetMontoTrx(document.getElementById('monto200').value);">
                                                <div class="bt-inner">
                                                    US$ &nbsp; 200
                                                </div>
                                            </a>
                                            <a href="#ibcontent-2" class="text-fancy bt ac b-sl">
                                                <div class="bt-inner">Otro monto en dólares</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="abs b0 l15 z2">
                            <div class="ib">
                                <a href="" class="bt bt-fl ac">
                                    <div class="bt-inner">
                                        <img class="vm" src="../static/images/icon-x.png" width="15" height="15">
                                        Sacar tarjeta

                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="text-limiteretiro">
                            <div class="text-limiteinner">
                                <div class="text-limiteimg">
                                    <img class="vm" src="../static/images/icon-info.png" width="26" height="26">
                                </div>
                                <div class="text-limitetext">
                                    <div class="text-innertext">
                                        <h3>Límites de Retiro</h3>
                                        <p>
                                            De 06:00 a.m. a 11:59 p.m.: S/ 2,500 y US$ 800
                                        </p>
                                        <p>
                                            De 12:00 a.m. a 05:59 a.m. : S/ 850 y US$ 480
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </section>

                    <div style="display: none">
                        <div id="ibcontent-1" class="fancy-main f-full">
                            <div class="inner-fancy pt70 pb40">
                                <a class="close-fancy" onclick="$.fancybox.close();">
                                    <img src="../static/images/icon-cerrar-blue.png" width="30" height="31">
                                </a>
                                <div class="parrafo-resumen ac mb50 cceleste">
                                    <p>
                                        Otro monto en soles
                                    </p>
                                </div>
                                <div class="clearfix ma w-teclado">
                                    <div class="s285 fl">
                                        <div class="bt-teclado">
                                            <button class="item-bt">
                                                <span class="number">
                                                    1
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    2
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    3
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    4
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    5
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    6
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    7
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    8
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    9
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    &nbsp;
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    0
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number ib-del">
                                                    Borrar
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ar fr mt10 w380">
                                        <div class="inputsolo input-validate error">
                                            <span>S/ </span>
                                            <div id="inputBorder" class="in-monto">
                                                <input id="inputField" type="text" name="" value="" maxlength="5">
                                            </div>
                                            <div class="text-error mr10">
                                                <p id="inputNote" class="ib vm in-monto" style="color:#8f8f8f">	Ingresa un monto válido<br> en billetes de 20 ó 50.<br>Máximo S/ 2,500</p>
                                            </div>
                                        </div>
                                        <div class="ar ib mr10 mt40">
                                            <a href="#ibcontent-noche-1" class="bt ac btn-largexl text-fancy">
                                                <div class="bt-inner" onclick="ConfirmAmount()">Ingresar monto</div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display: none">
                        <div id="ibcontent-2" class="fancy-main f-full">
                            <div class="inner-fancy pt70 pb40">

                                <a class="close-fancy" onclick="$.fancybox.close();">
                                    <img src="../static/images/icon-cerrar-blue.png" width="30" height="31">
                                </a>
                                <div class="parrafo-resumen ac mb50 cceleste">
                                    <p>
                                        Otro monto en dólares
                                    </p>
                                </div>
                                <div class="clearfix ma w-teclado">
                                    <div class="s285 fl">
                                        <div class="bt-teclado">
                                            <button class="item-bt">
                                                <span class="number">
                                                    1
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    2
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    3
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    4
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    5
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    6
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    7
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    8
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    9
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    &nbsp;
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    0
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number ib-del">
                                                    Borrar
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ar fr mt10 w380">
                                        <div class="inputsolo input-validate error">
                                            <span id="currencySymbol" style="margin:0px 0px 0px -20px">US$ </span>
                                            <div id="inputBorder" class="in-monto">
                                                <input id="inputField" type="text" name="" value="" maxlength="5">
                                            </div>
                                            <div class="text-error mr10">
                                                <p id="inputNote" class="ib vm in-monto" style="color:#8f8f8f">Ingresa un monto válido en billetes de 20.<br>Máximo US$ 800</p>
                                            </div>
                                        </div>
                                        <div class="ar ib mr10 mt40">
                                            <a href="#ibcontent-noche-2" class="bt ac btn-largexl text-fancy">
                                                <div class="bt-inner" >Ingresar monto</div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display: none">
                        <div id="ibcontent-noche-1" class="fancy-main f-full">
                            <div class="inner-fancy pt70 pb40">
                                <a class="close-fancy" onclick="$.fancybox.close();">
                                    <img src="../static/images/icon-cerrar-blue.png" width="30" height="31">
                                </a>
                                <div class="parrafo-resumen ac mb50 cceleste">
                                    <p>
                                        Otro monto en soles
                                    </p>
                                </div>
                                <div class="clearfix ma w-teclado">
                                    <div class="s285 fl">
                                        <div class="bt-teclado">
                                            <button class="item-bt">
                                                <span class="number">
                                                    1
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    2
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    3
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    4
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    5
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    6
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    7
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    8
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    9
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    &nbsp;
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    0
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number ib-del">
                                                    Borrar
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ar fr mt10 w380">
                                        <div class="inputsolo input-validate error">
                                            <span>S/ </span>
                                            <div id="inputBorder" class="in-monto">
                                                <input id="inputField" type="text" name="" value="" maxlength="5">
                                            </div>
                                            <div class="text-error mr10">
                                                <p id="inputNote" class="ib vm in-monto" style="color:#8f8f8f">	Ingresa un monto válido<br> en billetes de 20 ó 50.<br>Máximo S/ 850</p>
                                            </div>
                                        </div>
                                        <div class="ar ib mr10 mt40">
                                            <a  href="#ibcontent-error-1" class="bt ac btn-largexl text-fancy">
                                                <div class="bt-inner" onclick="ConfirmAmount()">Ingresar monto</div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display: none">
                        <div id="ibcontent-noche-2" class="fancy-main f-full">
                            <div class="inner-fancy pt70 pb40">

                                <a class="close-fancy" onclick="$.fancybox.close();">
                                    <img src="../static/images/icon-cerrar-blue.png" width="30" height="31">
                                </a>
                                <div class="parrafo-resumen ac mb50 cceleste">
                                    <p>
                                        Otro monto en dólares
                                    </p>
                                </div>
                                <div class="clearfix ma w-teclado">
                                    <div class="s285 fl">
                                        <div class="bt-teclado">
                                            <button class="item-bt">
                                                <span class="number">
                                                    1
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    2
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    3
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    4
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    5
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    6
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    7
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    8
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    9
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    &nbsp;
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    0
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number ib-del">
                                                    Borrar
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ar fr mt10 w380">
                                        <div class="inputsolo input-validate error">
                                            <span id="currencySymbol" style="margin:0px 0px 0px -20px">US$ </span>
                                            <div id="inputBorder" class="in-monto">
                                                <input id="inputField" type="text" name="" value="" maxlength="5">
                                            </div>
                                            <div class="text-error mr10">
                                                <p id="inputNote" class="ib vm in-monto" style="color:#8f8f8f">Ingresa un monto válido en billetes de 20.<br>Máximo US$ 480</p>
                                            </div>
                                        </div>
                                        <div class="ar ib mr10 mt40">
                                            <a href="#ibcontent-error-2" class="bt ac btn-largexl text-fancy">
                                                <div class="bt-inner" >Ingresar monto</div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div style="display:none">
                        <div id="ibcontent-error-1" class="fancy-main f-full">
                            <div class="inner-fancy pt70 pb40">
                                <a class="close-fancy" onclick="$.fancybox.close();">
                                    <img src="../static/images/icon-cerrar-blue.png" width="30" height="31">
                                </a>
                                <div class="parrafo-resumen ac mb30 cceleste ">
                                    <p>
                                        Otro monto en soles
                                    </p>
                                </div>
                                <div class="clearfix ma s725">
                                    <div class="s285 fl">
                                        <div class="bt-teclado">
                                            <button class="item-bt">
                                                <span class="number">
                                                    1
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    2
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    3
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    4
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    5
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    6
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    7
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    8
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    9
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    &nbsp;
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    0
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number ib-del">
                                                    Borrar
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ar fr mt10 w380">
                                        <div class="inputsolo input-validate error">
                                            <span>S/ </span>
                                            <div class="border ib">
                                                <input type="text">

                                            </div>
                                            <div class="text-error mr10">
                                                <img src="../static/images/triangulo-error.png" width="35" height="28" class="ib vm">
                                                <p class="ib vm">
                                                    Ingrese un monto válido <br>en billetes de 20 ó 50
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ar ib mr10 mt40">
                                            <a href="" class="bt ac btn-largexl">
                                                <div class="bt-inner">
                                                    Ingresar monto
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display:none">
                        <div id="ibcontent-error-2" class="fancy-main f-full">
                            <div class="inner-fancy pt70 pb40">
                                <a class="close-fancy" onclick="$.fancybox.close();">
                                    <img src="../static/images/icon-cerrar-blue.png" width="30" height="31">
                                </a>
                                <div class="parrafo-resumen ac mb30 cceleste">
                                    <p>
                                        Otro monto en dólares
                                    </p>
                                </div>
                                <div class="clearfix ma s725">
                                    <div class="s285 fl">
                                        <div class="bt-teclado">
                                            <button class="item-bt">
                                                <span class="number">
                                                    1
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    2
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    3
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    4
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    5
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    6
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    7
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    8
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="number">
                                                    9
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    &nbsp;
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number">
                                                    0
                                                </span>
                                            </button>
                                            <button class="item-bt">
                                                <span class="qwerty">
                                                    &nbsp;
                                                </span>
                                                <span class="number ib-del">
                                                    Borrar
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ar fr mt10 w380">
                                        <div class="inputsolo input-validate error">
                                            <span style="margin:0px 0px 0px -20px">US$</span>
                                            <div class="border ib">
                                                <input type="text">

                                            </div>
                                            <div class="text-error mr10">
                                                <img src="../static/images/triangulo-error.png" width="35" height="28" class="ib vm">
                                                <p class="ib vm">
                                                    Ingrese un monto válido<br>en billetes de 20
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ar ib mr10 mt40">
                                            <a href="" class="bt ac btn-largexl">
                                                <div class="bt-inner">
                                                    Ingresar monto
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
            </script>

            <script type="text/javascript" src="../static/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
            <script src="../static/js/main.js" type="text/javascript"></script>
            <script type="text/javascript">

            </script>
            <div class="grid"></div>
        </form>
    </body>
</html>