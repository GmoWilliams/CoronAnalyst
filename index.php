<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Corona-Analyst</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/raleway-font.css">
    <link rel="stylesheet" type="text/css"
        href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="images/icon.png">

</head>

<body>
    <div class="page-content" style="background-image: url('images/mapa.png')">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <form class="form-register" id="form-register" action="pruebas.php" method="post">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                            <span class="step-number">1</span>
                            <span class="step-text">Cuéntanos sobre ti</span>
                        </h2>

                        <!--<form action="guarda.php">-->

                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="gender">1. Seleccione el sexo con el que se identifique*</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="" selected> </option>
                                            <option value="h">Hombre</option>
                                            <option value="m">Mujer</option>
                                            <option value="o">Otro</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="edad">2. Seleccione su rango de edad*</label>
                                        <select name="edad" id="edad" class="form-control">
                                            <option value="" selected> </option>
                                            <option value="15">Menos de 15 años</option>
                                            <option value="20">15 - 20</option>
                                            <option value="25">21 - 25</option>
                                            <option value="30">26 - 30</option>
                                            <option value="35">31 - 35</option>
                                            <option value="40">36 - 40</option>
                                            <option value="45">41 - 45</option>
                                            <option value="50">46 - 50</option>
                                            <option value="55">51 - 55</option>
                                            <option value="60">56 - 60</option>
                                            <option value="65">61 - 65</option>
                                            <option value="70">66 - 70</option>
                                            <option value="+70">Más de 70</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="estadoC">3. Cuál es su estado civil?*</label>
                                        <select name="estadoC" id="estadoC" class="form-control">
                                            <option value="" selected> </option>
                                            <option value="soltero">Soltero</option>
                                            <option value="casado">Casado</option>
                                            <option value="divorciado">Divorciado</option>
                                            <option value="union">Unión libre</option>
                                            <option value="viudo">Viudo</option>
                                        </select>
                                    </div>
                                </div>

                                <br>


                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="estudios">4. Cuál es su nivel de estudios?* (Si eres estudiante
                                            selecciona el que estás cursando)</label>
                                        <select name="estudios" id="estudios" class="form-control">
                                            <option value="" selected> </option>
                                            <option value="no">No aplica</option>
                                            <option value="primaria">Primaria</option>
                                            <option value="secundaria">Secundaria</option>
                                            <option value="prepa">Preparatoria/Bachillerato</option>
                                            <option value="uni">Universidad</option>
                                            <option value="master">Maestría</option>
                                            <option value="doc">Doctorado</option>
                                        </select>
                                    </div>
                                </div>

                                <br>
                                
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="ocupacion">5. Cuál es su ocupación?*</label>
                                        <select name="ocupacion" id="ocupacion" class="form-control">
                                            <option value="" selected> </option>
                                            <option value="industrial">Sector Industrial</option>
                                            <option value="educativo">Sector Educativo</option>
                                            <option value="gubernamental">Sector Gubernamental</option>
                                            <option value="comercio">Sector de Comercio</option>
                                            <option value="transporte">Sector de Transporte</option>
                                            <option value="comida">Sector de Comida</option>
                                            <option value="alojamiento">Sector de Alojamiento</option>
                                            <option value="construccion">Sector de Construcción</option>
                                            <option value="energia">Sector de Suministro de Energía</option>
                                            <option value="inmobiliaria">Sector de Actividades Inmobiliarias</option>
                                            <option value="artistico">Sector Artístico</option>
                                            <option value="pesca_acuicultura">Sector de Pesca y Acuicultura</option>
                                            <option value="informatica">Sector de Informática</option>
                                            <option value="financiero">Sector de Servicios Financieros</option>
                                            <option value="judicial">Sector Judicial</option>
                                            <option value="hogar">Hogar</option>
                                            <option value="estudiante">Estudiante</option>
                                            <option value="otro">Otro</option>

                                            
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="ingresos">6. Cuál es su ingreso económico mensual?*</label>
                                        <select name="ingresos" id="ingresos" class="form-control">
                                            <option value="" selected> </option>
                                            <option value="0">No percibo algún salario</option>
                                            <option value="1000">Menos de 1,000</option>
                                            <option value="10000">1,000 - 10,000</option>
                                            <option value="30000">10,000 - 30,000</option>
                                            <option value="50000">30,000 - 50,000</option>
                                            <option value="+50000">Más de 50,000</option>

                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="estado">7. De qué estado de la república proviene?*</label>
                                        <select name="estado" id="estado" class="form-control">
                                            <option value="" selected> </option>
                                            <option value="AGS">Aguascalientes</option>
                                            <option value="BC">Baja California</option>
                                            <option value="BCS">Baja California Sur</option>
                                            <option value="CAM">Campeche</option>
                                            <option value="COA">Coahuila</option>
                                            <option value="COL">Colima</option>
                                            <option value="CHIS">Chiapas</option>
                                            <option value="CHIH">Chihuahua</option>
                                            <option value="DGO">Durango</option>
                                            <option value="CDMX">Ciudad de México</option>
                                            <option value="GTO">Guanajuato</option>
                                            <option value="GRO">Guerrero</option>
                                            <option value="HGO">Hidalgo</option>
                                            <option value="JAL">Jalisco</option>
                                            <option value="MEX">Estado de México</option>
                                            <option value="MICH">Michoacán</option>
                                            <option value="MOR">Morelos</option>
                                            <option value="NAY">Nayarit</option>
                                            <option value="NL">Nuevo León</option>
                                            <option value="OAX">Oaxaca</option>
                                            <option value="PUE">Puebla</option>
                                            <option value="QRO">Querétaro</option>
                                            <option value="QR">Quintana Roo</option>
                                            <option value="SLP">San Luis Potosí</option>
                                            <option value="SIN">Sinaloa</option>
                                            <option value="SON">Sonora</option>
                                            <option value="TAB">Tabasco</option>
                                            <option value="TAMS">Tamaulipas</option>
                                            <option value="TLAX">Tlaxcala</option>
                                            <option value="VER">Veracruz</option>
                                            <option value="YUC">Yucatán</option>
                                            <option value="ZAC">Zacatecas</option>
                                            <option value="No">No provengo de ninguno de los estados de México</option>


                                
                                        </select>
                                    </div>
                                </div>


                                <br>
                            </div>
                        </section>
                        <!-- SECTION 2 -->
                        <!-- SECTION 2 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-number">2</span>
                            <span class="step-text">Previo a la Pandemia</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="freq20">¿Qué tan seguido compraba en línea?</label>
                                        <select name="freq20" id="freq20" class="form-control" required>
                                            <option value="" selected> </option>
                                            <option value="1a5">1 a 5 veces al mes</option>
                                            <option value="6a10">6 a 10 veces al mes</option>
                                            <option value="+10">Más de 10 veces al mes</option>
                                            <option value="1enMeses">1 vez cada varios meses</option>
                                            <option value="No">No realizaba compras en línea</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="none">¿Qué plataformas utilizaba para realizar compras en línea?</label>
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr class="space-row">
                                            <h3>
                                            <input type="checkbox" id="plataforma20" name="plataforma20[ ]" class="form-control" value="amazon" required>
                                            <labe for="amazon">Amazon</labe><br>
                                            <input type="checkbox" id="plataforma20" name="plataforma20[ ]" class="form-control" value="mercadoLibre">
                                            <labe for="mercadoLibre">Mercado Libre</labe><br>
                                            <input type="checkbox" id="plataforma20" name="plataforma20[ ]" class="form-control" value="fb">
                                            <labe for="fb">Facebook Marketplace</labe><br>
                                            <input type="checkbox" id="plataforma20" name="plataforma20[ ]" class="form-control" value="alibaba">
                                            <labe for="alibaba">Alibaba/Aliexpress</labe><br>
                                            <input type="checkbox" id="plataforma20" name="plataforma20[ ]" class="form-control" value="ebay">
                                            <labe for="ebay">eBay</labe><br>
                                            <input type="checkbox" id="plataforma20" name="plataforma20[ ]" class="form-control" value="eshop">
                                            <labe for="eshop">E-shop propia de cada marca (Nike, Supreme, Walmart, Liverpool, etc)</labe><br>
                                            <input type="checkbox" id="plataforma20" name="plataforma20[ ]" class="form-control" value="otros">
                                            <labe for="otros">Otros</labe><br>
                                            <input type="checkbox" id="plataforma20" name="plataforma20[ ]" class="form-control" value="No">
                                            <labe for="No">No realizaba compras en línea</labe><br>
                                            </h3>
                                        </tr>
                                    </tbody>
                                </table>

                                

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="none">¿Qué métodos de pago utilizaba para realizar compras en línea?</label>
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr class="space-row">
                                            <h3>
                                            <input type="checkbox" id="pago20" name="pago20[ ]" class="form-control" value="credito">
                                            <labe for="credito">Tarjeta de Crédito</labe><br>
                                            <input type="checkbox" id="pago20" name="pago20[ ]" class="form-control" value="debito">
                                            <labe for="debito">Tarjeta de Débito</labe><br>
                                            <input type="checkbox" id="pago20" name="pago20[ ]" class="form-control" value="paypal">
                                            <labe for="paypal">Paypal</labe><br>
                                            <input type="checkbox" id="pago20" name="pago20[ ]" class="form-control" value="mercadoPago">
                                            <labe for="mercadoPago">Mercado Pago</labe><br>
                                            <input type="checkbox" id="pago20" name="pago20[ ]" class="form-control" value="efectivo">
                                            <labe for="efectivo">Efectivo</labe><br>
                                            <input type="checkbox" id="pago20" name="pago20[ ]" class="form-control" value="transferencia">
                                            <labe for="transferencia">Transferencia Electrónica</labe><br>
                                            <input type="checkbox" id="pago20" name="pago20[ ]" class="form-control" value="depositoTiendas">
                                            <labe for="depositoTiendas">Depósito en tiendas de conveniencia (Oxxo, 7Eleven, etc.)</labe><br>
                                            <input type="checkbox" id="pago20" name="pago20[ ]" class="form-control" value="Otro">
                                            <labe for="Otro">Otro</labe><br>
                                            <input type="checkbox" id="pago20" name="pago20[ ]" class="form-control" value="No">
                                            <labe for="No">No realizaba compras en internet</labe><br>
                                            </h3>
                                        </tr>
                                    </tbody>
                                </table>

                                <br>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="none">¿De cuáles de las siguientes categorías realizaba compras?</label>
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr class="space-row">
                                            <h3>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="credito">
                                            <labe for="ropa">Ropa</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="comida">
                                            <labe for="comida">Comida a domicilio (Rappi, UberEats, etc)</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="super">
                                            <labe for="super">Super a domicilio (víveres)</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="muebles">
                                            <labe for="muebles">Muebles y/o electrodomésticos</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="coleccionables">
                                            <labe for="coleccionables">Coleccionables</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="libros">
                                            <labe for="libros">Libros (físicos o electrónicos)</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="computadoras">
                                            <labe for="computadoras">Computadoras y/o electrónicos</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="herramienta">
                                            <labe for="herramienta">Herramientas y ferretería</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="entretenimiento">
                                            <labe for="entretenimiento">Entretenimiento (música, tv, videojuegos, juguetes, etc.)</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="programas">
                                            <labe for="programas">Programas o aplicaciones</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="boletos">
                                            <labe for="boletos">Reservaciones y boletos</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="higiene">
                                            <labe for="higiene">Artículos de higiene</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="deportivos">
                                            <labe for="deportivos">Artículos deportivos</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="otros">
                                            <labe for="otros">Otros</labe><br>
                                            <input type="checkbox" id="categoria20" name="categoria20[ ]" class="form-control" value="No">
                                            <labe for="No">No realizaba compras en línea</labe><br>
                                            </h3>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="compu20">¿Cuánto tiempo estima que se encontraba usando la computadora para actividades diarias?</label>
                                        <select name="compu20" id="compu20" class="form-control" required>
                                            <option value="" selected> </option>
                                            <option value="7hrsDia">7 horas o más al día</option>
                                            <option value="6a2hrsDia">6 a 2 horas al día</option>
                                            <option value="6a2hrsSem">6 a 2 horas a la semana</option>
                                            <option value="2hrsSem">Menos de 2 horas a la semana</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <br>
                                
                            </div>
                        </section>

                        <!-- SECTION 3 -->
                        <!-- SECTION 3 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-number">3</span>
                            <span class="step-text">Actualmente</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="freq21">¿Qué tan seguido compraba en línea?</label>
                                        <select name="freq21" id="freq21" class="form-control" required>
                                            <option value="" selected> </option>
                                            <option value="1a5">1 a 5 veces al mes</option>
                                            <option value="6a10">6 a 10 veces al mes</option>
                                            <option value="+10">Más de 10 veces al mes</option>
                                            <option value="1enMeses">1 vez cada varios meses</option>
                                            <option value="No">No realizaba compras en línea</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="none">¿Qué plataformas utilizaba para realizar compras en línea?</label>
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr class="space-row">
                                            <h3>
                                            <input type="checkbox" id="plataforma21" name="plataforma21[ ]" class="form-control" value="amazon">
                                            <labe for="amazon">Amazon</labe><br>
                                            <input type="checkbox" id="plataforma21" name="plataforma21[ ]" class="form-control" value="mercadoLibre">
                                            <labe for="mercadoLibre">Mercado Libre</labe><br>
                                            <input type="checkbox" id="plataforma21" name="plataforma21[ ]" class="form-control" value="fb">
                                            <labe for="fb">Facebook Marketplace</labe><br>
                                            <input type="checkbox" id="plataforma21" name="plataforma21[ ]" class="form-control" value="alibaba">
                                            <labe for="alibaba">Alibaba/Aliexpress</labe><br>
                                            <input type="checkbox" id="plataforma21" name="plataforma21[ ]" class="form-control" value="ebay">
                                            <labe for="ebay">eBay</labe><br>
                                            <input type="checkbox" id="plataforma21" name="plataforma21[ ]" class="form-control" value="eshop">
                                            <labe for="eshop">E-shop propia de cada marca (Nike, Supreme, Walmart, Liverpool, etc)</labe><br>
                                            <input type="checkbox" id="plataforma21" name="plataforma21[ ]" class="form-control" value="otros">
                                            <labe for="otros">Otros</labe><br>
                                            <input type="checkbox" id="plataforma21" name="plataforma21[ ]" class="form-control" value="No">
                                            <labe for="No">No realizaba compras en línea</labe><br>
                                            </h3>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <br>
                                
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="none">¿Qué métodos de pago utilizaba para realizar compras en línea?</label>
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr class="space-row">
                                            <h3>
                                            <input type="checkbox" id="pago21" name="pago21[ ]" class="form-control" value="credito">
                                            <labe for="credito">Tarjeta de Crédito</labe><br>
                                            <input type="checkbox" id="pago21" name="pago21[ ]" class="form-control" value="debito">
                                            <labe for="debito">Tarjeta de Débito</labe><br>
                                            <input type="checkbox" id="pago21" name="pago21[ ]" class="form-control" value="paypal">
                                            <labe for="paypal">Paypal</labe><br>
                                            <input type="checkbox" id="pago21" name="pago21[ ]" class="form-control" value="mercadoPago">
                                            <labe for="mercadoPago">Mercado Pago</labe><br>
                                            <input type="checkbox" id="pago21" name="pago21[ ]" class="form-control" value="efectivo">
                                            <labe for="efectivo">Efectivo</labe><br>
                                            <input type="checkbox" id="pago21" name="pago21[ ]" class="form-control" value="transferencia">
                                            <labe for="transferencia">Transferencia Electrónica</labe><br>
                                            <input type="checkbox" id="pago21" name="pago21[ ]" class="form-control" value="depositoTiendas">
                                            <labe for="depositoTiendas">Depósito en tiendas de conveniencia (Oxxo, 7Eleven, etc.)</labe><br>
                                            <input type="checkbox" id="pago21" name="pago21[ ]" class="form-control" value="Otro">
                                            <labe for="Otro">Otro</labe><br>
                                            <input type="checkbox" id="pago21" name="pago21[ ]" class="form-control" value="No">
                                            <labe for="No">No realizaba compras en internet</labe><br>
                                            </h3>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <br>
                                
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="none">¿De cuáles de las siguientes categorías realizaba compras?</label>
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr class="space-row">
                                            <h3>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="credito">
                                            <labe for="ropa">Ropa</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="comida">
                                            <labe for="comida">Comida a domicilio (Rappi, UberEats, etc)</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="super">
                                            <labe for="super">Super a domicilio (víveres)</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="muebles">
                                            <labe for="muebles">Muebles y/o electrodomésticos</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="coleccionables">
                                            <labe for="coleccionables">Coleccionables</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="libros">
                                            <labe for="libros">Libros (físicos o electrónicos)</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="computadoras">
                                            <labe for="computadoras">Computadoras y/o electrónicos</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="herramienta">
                                            <labe for="herramienta">Herramientas y ferretería</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="entretenimiento">
                                            <labe for="entretenimiento">Entretenimiento (música, tv, videojuegos, juguetes, etc.)</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="programas">
                                            <labe for="programas">Programas o aplicaciones</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="boletos">
                                            <labe for="boletos">Reservaciones y boletos</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="higiene">
                                            <labe for="higiene">Artículos de higiene</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="deportivos">
                                            <labe for="deportivos">Artículos deportivos</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="otros">
                                            <labe for="otros">Otros</labe><br>
                                            <input type="checkbox" id="categoria21" name="categoria21[ ]" class="form-control" value="No">
                                            <labe for="No">No realizaba compras en línea</labe><br>
                                            </h3>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="compu21">¿Cuánto tiempo estima que se encontraba usando la computadora para actividades
                                            diarias?</label>
                                        <select name="compu21" id="compu21" class="form-control" required>
                                            <option value="" selected> </option>
                                            <option value="7hrsDia">7 horas o más al día</option>
                                            <option value="6a2hrsDia">6 a 2 horas al día</option>
                                            <option value="6a2hrsSem">6 a 2 horas a la semana</option>
                                            <option value="2hrsSem">Menos de 2 horas a la semana</option>
                                
                                        </select>
                                    </div>
                                </div>

                                <br>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="gasto21">En promedio cuánto dinero estima que gasta en compras en línea al mes?</label>
                                        <select name="gasto21" id="gasto21" class="form-control" required>
                                            <option value="" selected> </option>
                                            <option value="-1000">Menos de 1,000</option>
                                            <option value="1000a2500">1,000 - 2,500</option>
                                            <option value="2500a5000">2,500 - 5,000</option>
                                            <option value="5000a7500">5,000 - 7,500</option>
                                            <option value="7500a10000">7,500 - 10,000</option>
                                            <option value="+10000">Más de 10,000</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="medio21">¿Actualmente compras más seguido en físico o en línea?</label>
                                        <select name="medio21" id="medio21" class="form-control" required>
                                            <option value="" selected> </option>
                                            <option value="fisico">Físico</option>
                                            <option value="linea">Línea</option>
                                        </select>
                                    </div>
                                </div>
                                <br>

                            </div>


                        </section>

                        <!-- SECTION 4 -->
                        <!-- SECTION 4 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-number">4</span>
                            <span class="step-text">Salud y Bienestar</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="sintomas">Desde que empezó la pandemia, ¿ha presentado síntomas relacionados al COVID-19?</label>
                                        <select name="sintomas" id="sintomas" class="form-control" required>
                                            <option value="" selected> </option>
                                            <option value="Si">Sí</option>
                                            <option value="No">No</option>
                                        
                                        </select>
                                    </div>
                                </div>
                        
                                <br>
                        
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="none">¿Usted sufre de alguna de las siguientes condiciones médicas?</label>
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr class="space-row">
                                            <h3>
                                            <input type="checkbox" id="condicionMed" name="condicionMed[ ]" class="form-control" value="diabetes">
                                            <labe for="diabetes">Diabetes</labe><br>
                                            <input type="checkbox" id="condicionMed" name="condicionMed[ ]" class="form-control" value="hipertension">
                                            <labe for="hipertension">Hipertensión</labe><br>
                                            <input type="checkbox" id="condicionMed" name="condicionMed[ ]" class="form-control" value="obesidad">
                                            <labe for="obesidad">Obesidad</labe><br>
                                            <input type="checkbox" id="condicionMed" name="condicionMed[ ]" class="form-control" value="asma">
                                            <labe for="asma">Asma</labe><br>
                                            <input type="checkbox" id="condicionMed" name="condicionMed[ ]" class="form-control" value="cardiacas">
                                            <labe for="cardiacas">Condiciones Cardíacas</labe><br>
                                            <input type="checkbox" id="condicionMed" name="condicionMed[ ]" class="form-control" value="inmunodeficiencia">
                                            <labe for="inmunodeficiencia">Inmunodeficiencia</labe><br>
                                            <input type="checkbox" id="condicionMed" name="condicionMed[ ]" class="form-control" value="hepatitis">
                                            <labe for="hepatitis">Hepatitis</labe><br>
                                            <input type="checkbox" id="condicionMed" name="condicionMed[ ]" class="form-control" value="otros">
                                            <labe for="otros">Otros</labe><br>
                                            <input type="checkbox" id="condicionMed" name="condicionMed[ ]" class="form-control" value="ninguna">
                                            <labe for="ninguna">Ninguna</labe><br>
                                            </h3>
                                        </tr>
                                    </tbody>
                                </table>
                        
                                <br>
                        
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="none">¿A causa de la pandemia usted se ha sentido relacionado con algunas de las siguientes situaciones?</label>
                                    </div>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr class="space-row">
                                            <h3>
                                            <input type="checkbox" id="mental" name="mental[ ]" class="form-control" value="ansiedad">
                                            <labe for="ansiedad">Ansiedad</labe><br>
                                            <input type="checkbox" id="mental" name="mental[ ]" class="form-control" value="estres">
                                            <labe for="estres">Estrés</labe><br>
                                            <input type="checkbox" id="mental" name="mental[ ]" class="form-control" value="depresion">
                                            <labe for="depresion">Depresión</labe><br>
                                            <input type="checkbox" id="mental" name="mental[ ]" class="form-control" value="deficitAtencion">
                                            <labe for="deficitAtencion">Déficit de atención</labe><br>
                                            <input type="checkbox" id="mental" name="mental[ ]" class="form-control" value="bajaLab/Acad">
                                            <labe for="bajaLab/Acad">Baja de rendimiento Laboral /  Académico</labe><br>
                                            <input type="checkbox" id="mental" name="mental[ ]" class="form-control" value="bajaAutoest">
                                            <labe for="bajaAutoest">Baja autoestima</labe><br>
                                            <input type="checkbox" id="mental" name="mental[ ]" class="form-control" value="otros">
                                            <labe for="otros">Otros</labe><br>
                                            <input type="checkbox" id="mental" name="mental[ ]" class="form-control" value="ninguna">
                                            <labe for="ninguna">No me he sentido afectado</labe><br>
                                            </h3>
                                        </tr>
                                    </tbody>
                                </table>
                        
                                <br>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="actFisica">¿Durante la pandemia ¿Cómo ha cambiado su actividad física?</label>
                                        <select name="actFisica" id="actFisica" class="form-control" required>
                                            <option value="" selected> </option>
                                            <option value="aumento">Aumentó</option>
                                            <option value="igual">Permaneció igual que antes</option>
                                            <option value="disminuyo">Disminuyó</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                        
                            </div>
                        
                        <input type="submit" value="Enviar">
                        </section>

                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="js/jquery.steps.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
</html>