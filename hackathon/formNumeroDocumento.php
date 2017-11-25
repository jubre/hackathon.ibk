<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>Interbank</title>	
        <link rel="stylesheet" type="text/css" href="static/css/styles.css"/>
        <!--[if lt IE 9]>
                <script src="static/js/html5.js"></script>
                <link rel="stylesheet" type="text/css" href="static/css/ie.css"/>
        <![endif]-->
    </head>

    <body class="seleccion-principal">
        <form action="regularizarTransferencia.php" method="post">
            <div class="cnt-wrapper">
                <div class="wrapper">
                    <header class="wancho-2">
                        <div id="header">
                            <p id="logo"></p>
                            <ul class="alineacion">
                                <li><span id="ico-telefono"></span><span>Asistencia: 311 9000</span></li>
                                <li><span id="ico-cajero"></span><span># Cajero: 0088977</span></li>
                            </ul>
                            <div class="overlay"></div>
                        </div>
                    </header>
                    <section class="main-box ac"><em class="bl"></em><em class="br"></em>
                        <h2 class="title">Ingrese su Número de Documento</h2>                

                        <form>                	
                            <div class="input mt170"><!-- para ver versión con error agregar la clase error <div class="input error">--> 
                                <div class="border ac">                       	
                                    <label class="w640"><input type="text" name="numeroDocumento"></label>
                                    <input type="hidden" name="montoTrx" value="20">
                                    <input type="hidden" name="monedaTrx" value="604">
                                    <input type="hidden" name="codigoATM" value="IB000999">
                                    <input type="hidden" name="codigoOperacionATM" value="4283">
                                    <input type="hidden" name="tipoErrorATM" value="E1">                                    
                                </div>
                                <span class="msgok ar">Usa el teclado del cajero</span>
                                <span class="msgerror ar"><img src="static/images/triangulo-error.png" width="35" height="28"> 
                                    Código incorrecto. Ingresa un nuevo código
                                </span>
                            </div>                    
                        </form>                               
                    </section>
                    <div id="buttons">
                        <div>
                            <a href="" class="bt b-left pos3 b-blanco b-xs">
                                <div class="bt-inner">
                                    Borrar		
                                </div>
                            </a>              
                            <a href="" class="bt b-left pos4 b-blanco b-xs">
                                <div class="bt-inner">
                                    Volver		
                                </div>
                            </a>

                            <a href="javascript:document.forms[0].submit()" class="bt b-right pos4">
                                <div class="bt-inner">
                                    Ingresar código
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>