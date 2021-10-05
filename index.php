<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
<head>
    <?php include_once('template/head.php') ?>
</head>
<body class="bg-index" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
    <div class="row uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div id="loginBlock" class="col s12 m3 z-depth-4 card-panel border-radius-6 login-card">
                        <form class="uk-form uk-container-center p35">
                            <div class="uk-width-1-1 uk-flex uk-flex-center uk-flex-middle uk-margin-top">
                                <img src="assets/images/radio/logoMexiquense.png" alt="logo" width="35%">
                            </div>
                            <div class="row margin uk-margin-top">
                                <div class="col s12">
                                    <input id="username" class="browser-default uk-width-1-1 uk-border-rounded uk-form-small brd-radius-5" type="text" placeholder="Administrador">
                                </div>
                            </div>
                            <div class="row margin uk-margin-top">
                                <div class="col s12">
                                    <input id="password" class="browser-default uk-width-1-1 uk-border-rounded uk-form-small brd-radius-5" type="password" placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="row margin uk-margin-top">
                                <div class="col s12">
                                    <label>
                                        <input class="with-gap" name="group3" type="radio">
                                        <span>Recuérdame</span>
                                    </label>
                                </div>
                            </div>
                            <div class="uk-width-9-10 uk-container-center uk-margin-top">
                                <a href="dashboard-ondemand.php" class="uk-button btn-purple uk-border-rounded col s12 uk-contrast">Entrar</a>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <p class="margin center-align uk-text-small"><a id="formPass">¿Olvidaste tu contraseña ?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="formBlock" class="col s12 m4 padding-pass z-depth-4 card-panel border-radius-6 login-card uk-text-center" style="display:none;">
                        <img class="uk-margin-top" src="assets/images/radio/logoMexiquense.png" alt="logoRadio" width="30%">
                        <form class="uk-form">
                            <div class="row uk-margin-top center-align">
                                <h4 class="font-bold">Ayuda con la contraseña</h4>
                                <p class="uk-width-3-4 uk-container-center">Introduce el correo ligado a la cuenta para modificar la contraseña</p>
                            </div>
                            <div class="row uk-margin-small-top">
                                <div class="col s12 uk-text-center">
                                    <input class="browser-default uk-width-4-5 brd-table" id="correo" type="text" placeholder="Correo">
                                </div>
                            </div>
                        </form>
                        <div class="uk-block uk-padding-top-remove">
                            <div class="uk-width-1-1 uk-container-center uk-text-center uk-margin-top">
                                <button id="continuar" class="uk-button btn-purple brd-radius-5 uk-contrast uk-width-1-2">Continuar</button>
                            </div>
                            <div class="uk-width-1-1 uk-container-center uk-text-center uk-margin-top">
                                <button id="cancelar" class="uk-button btn-dark-gray brd-radius-5 uk-contrast uk-width-1-2">Cancelar</button>
                            </div>
                        </div>
                    </div>
                    <div id="confBlock" class="col s12 m4 z-depth-4 card-panel border-radius-6 login-card" style="display:none;">
                        <div class="blockp">
                            <div class="uk-text-center">
                                <h3 class="font-bold font-bold">Se envío una clave de seguridad a tu correo</h3>
                                <p class="uk-text-small uk-width-8-10 uk-container-center">Revisa tu correo e ingresa la clave de seguridad para poder recuperar tu contraseña en el siguiente paso</p>
                            </div>
                            <div class="uk-width-1-1 uk-container-center uk-text-center uk-margin-top">
                                <button id="aceptar" class="uk-button btn-purple brd-radius-5 uk-contrast uk-width-1-2">Aceptar</button>
                            </div>
                            <div class="uk-width-1-1 uk-grid uk-container-center uk-margin-top">
                                <div class="uk-width-1-2 uk-text-center">
                                    <span class="uk-text-small">¿No recibiste ningún correo?</span>
                                </div>
                                <div class="uk-width-1-2 uk-text-center">
                                    <a class="uk-text-small">Reenviar correo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="validarBlock" class="col s12 m5 l4 z-depth-4 plr25 card-panel border-radius-6 login-card" style="display:none;">
                        <div class="uk-block">
                            <form class="uk-form">
                                <div class="">
                                    <label class="font-bold uk-text-large" for="codigo">Validar código de seguridad</label>
                                </div>
                                <div class="uk-margin-top">
                                    <input name="codigo" class="browser-default uk-width-1-1 brd-table brd-radius-5" type="text" placeholder="Código de seguridad">
                                </div>
                                <div class="uk-margin-top">
                                    <label class="font-bold uk-text-large" for="nvaPass">Crear contraseña nueva</label><br>
                                    <span class=""style="font-size: 10px;">Solicitaremos esta contraseña cada vez que inicies sesión.</span>
                                </div>
                                <div class="uk-margin-top">
                                    <input name="nvaPass" class="browser-default uk-width-1-1 brd-radius-5 brd-table" type="text" placeholder="Nueva contraseña">
                                </div>
                                <div class="uk-text-right">
                                    <span class="uk-text-small">La contraseña debe tener al menos 6 caracteres</span>
                                </div>
                                <div class="uk-margin-top">
                                    <input name="nvaPass" class="browser-default uk-width-1-1 brd-radius-5 brd-table" type="text" placeholder="Vuelve a escribir la contraseña">
                                </div>
                                <div class="">
                                    <div class="uk-width-1-1 uk-container-center uk-text-center uk-margin-top">
                                        <button type="button" id="guardarPass" class="uk-button btn-purple brd-radius-5 uk-contrast uk-width-2-3">Guardar contraseña</button>
                                    </div>
                                    <div class="uk-width-1-1 uk-container-center uk-text-center uk-margin-top">
                                        <button type="button" id="cancelarConf" class="uk-button btn-dark-gray brd-radius-5 uk-contrast uk-width-2-3">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="uk-margin-large-top">
                                <h5 class="font-bold">Consejos para una contraseña segura:</h5>
                                <p class="uk-text-small uk-width-9-10 uk-container-center">
                                    Utilizar al menos 8 caracteres, es mejor si es una combinación de cifras y letras. 
                                    No utilices la misma contraseña que ya has utilizado con nosotros antes.
                                    No utilice palabras del diccionario, su nombre, número de teléfono u otra información personal que puede obtener fácilmente.
                                    No utilices la misma contraseña para varias cuentas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="cambioCorrecto" class="col s12 m6 l4 z-depth-4 plr25 card-panel border-radius-6 login-card" style="display:none;">
                        <div class="blockp">
                            <div class="uk-text-center">
                                <h3 class="font-bold">Se cambio correctamente tu contraseña</h3>
                                <p class="uk-text-small uk-width-8-10 uk-container-center">Ingresa tu nueva contraseña para tener acceso a Radio y TV Dashboard</p>
                            </div>
                            <div class="uk-width-1-1 uk-container-center uk-text-center uk-margin-top">
                                <button id="aceptarCambio" class="uk-button btn-purple brd-radius-5 uk-contrast uk-width-1-2">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/index-function.js"></script>
</body>
</html>