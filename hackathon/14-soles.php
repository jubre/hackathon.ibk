<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Interbank</title>
        <link rel="stylesheet" type="text/css" href="static-4/css/styles.css"/>
        <!--[if lt IE 9]>
                <script src="static-4/js/html5.js"></script>
                <script src="static-4/js/respond.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="static-4/css/ie.css"/>
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

    <body class="exito">
        <form action="15-dni.php" method="post">
            <input type="hidden" name="montoTrx" id="montoTrx"/>
            <input type="hidden" name="monedaTrx" id="monedaTrx"/>
            <div class="cnt-wrapper">
                <div class="wrapper">
                    <div class="main-cajero" style="background-image:url('static-4/images/bg.jpg')">
                        <div class="page-titulo">
                            <h1 class="titulo-text">
                                Indica el monto que deseas <br>
                                <strong> retirar en soles</strong>
                            </h1>
                        </div>
                        <div class="content-botonera">
                            <div class="c50 fl">
                                <a href="#" class="opciones-item-touch mt45 " onclick="javascript:SetMontoTrx(document.getElementById('monto20').value);"> 
                                    <input type="hidden" value="20" id="monto20" name="monto20"/>
                                    <div class="inner-opcion">
                                        <div class="texto-opcion">
                                            20
                                        </div>
                                    </div>
                                </a>	
                                <a href="#" class="opciones-item-touch mt20 " onclick="javascript:SetMontoTrx(document.getElementById('monto80').value);"> 
                                    <input type="hidden" value="80" id="monto80" name="monto80"/> 
                                    <div class="inner-opcion">
                                        <div class="texto-opcion">
                                            80
                                        </div>
                                    </div>
                                </a>	
                                <a href="#" class="opciones-item-touch mt20 " onclick="javascript:SetMontoTrx(document.getElementById('monto140').value);"> 
                                    <input type="hidden" value="140" id="monto140" name="monto140"/>  
                                    <div class="inner-opcion">
                                        <div class="texto-opcion">
                                            140
                                        </div>
                                    </div>
                                </a>	
                                <a href="#" class="opciones-item-touch mt20 " onclick="javascript:SetMontoTrx(document.getElementById('monto300').value);"> 
                                    <input type="hidden" value="300" id="monto300" name="monto300"/>  
                                    <div class="inner-opcion">
                                        <div class="texto-opcion">
                                            300
                                        </div>
                                    </div>
                                </a>	
                            </div>
                            <div class="c50 fr ar">
                                <a href="#" class="opciones-item-touch otright mt45 " onclick="javascript:SetMontoTrx(document.getElementById('monto40').value);"> 
                                    <input type="hidden" value="40" id="monto40" name="monto40"/>  
                                    <div class="inner-opcion">
                                        <div class="texto-opcion">
                                            40
                                        </div>
                                    </div>
                                </a>	
                                <a href="#" class="opciones-item-touch otright mt20 " onclick="javascript:SetMontoTrx(document.getElementById('monto100').value);"> 
                                    <input type="hidden" value="100" id="monto100" name="monto100"/>  
                                    <div class="inner-opcion">
                                        <div class="texto-opcion">
                                            100
                                        </div>
                                    </div>
                                </a>	
                                <a href="#" class="opciones-item-touch otright mt20 " onclick="javascript:SetMontoTrx(document.getElementById('monto200').value);"> 
                                    <input type="hidden" value="200" id="monto200" name="monto200"/>  
                                    <div class="inner-opcion">
                                        <div class="texto-opcion">
                                            200
                                        </div>
                                    </div>
                                </a>	
                                <!--<a href="#" class="opciones-item-touch otright mt20 btn-texto"> 
                                    <div class="inner-opcion">
                                        <div class="texto-opcion">
                                            Retirar Dólares
                                        </div>
                                    </div>
                                </a>-->	
                            </div>		

                        </div>
                    </div> 
                </div>
            </div>
            <script src="static-4/js/jquery1.8.3.min.js" type="text/javascript"></script>
            <script type="text/javascript">
            </script>
            <script src="static-4/js/main.js" type="text/javascript"></script>
            <div class="grid"></div>
        </form>
    </body>
</html>