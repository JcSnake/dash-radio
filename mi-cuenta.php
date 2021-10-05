<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('template/head.php') ?>
    <title>Mi cuenta</title>
</head>
<body>
    <?php include_once('template/header.php') ?>
    <?php include_once('template/nav-bar/nav-admin.php') ?>
    <div id="main" class="bg-gray" style="height: 100%">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <h2 class="uk-margin-top uk-margin-left ">Mi cuenta</h2>
                        <div class="app-wrapper uk-grid uk-grid-match uk-width-1-1 uk-container-center">
                            <div class="uk-width-1-4">
                                <div class="bg-white uk-text-center uk-block">
                                    <img src="assets/images/radio/perfil-02.png" alt="user" width="50%">
                                    <h2 class="uk-text-bold uk-text-center uk-margin-bottom-remove">Master Admin</h2>
                                    <span>correo@rtvmxiquense.com</span>
                                </div>
                            </div>
                            <div class="uk-width-3-4">
                                <div class="bg-white">
                                    <div class="uk-width-9-10 uk-container-center uk-block">
                                        <div class="bg-gray">
                                            <h3 class="uk-margin-left p-blocks">Información general de la cuenta</h3>
                                        </div>
                                        <table class="uk-table">
                                            <tbody>
                                                <tr>
                                                    <td>Usuario:</td>
                                                    <td>Master admin</td>
                                                </tr>
                                                <tr>
                                                    <td>Correo:</td>
                                                    <td>correo@rtvmxiquense.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Contraseña</td>
                                                    <td><input class="browser-default uk-width-1-6" type="password" value="164152354" style="border:none;"><a class=" uk-text-small" href="#modalPass" data-uk-modal>¿Deseas cambiar contraseña?</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div id="modalPass" class="uk-modal">
            <div class="uk-modal-dialog w-modal-cuenta border-radius-6 p0">
                <div id="formBlock">
                    <form class="uk-form">
                        <div class="row center-align uk-block uk-padding-bottom-remove">
                            <img src="assets/images/radio/logoMexiquense.png" alt="logoMex" width="25%">
                            <h4 class="uk-text-bold">Ayuda con la contraseña</h4>
                            <p class="uk-width-3-4 uk-container-center">Introduce el correo ligado a la cuenta para modificar la contraseña</p>
                        </div>
                        <div class="row uk-margin-top">
                            <div class="col s12 uk-text-center">
                                <input class="browser-default uk-form-small brd-radius-5 uk-width-4-5 brd-table" id="correo" type="text" placeholder="Correo">
                            </div>
                        </div>
                    </form>
                    <div class="uk-block uk-padding-top-remove">
                        <div class="uk-width-1-1 uk-container-center uk-text-center uk-margin-top">
                            <button id="continuar" class="uk-button btn-purple brd-radius-5 c-white uk-width-1-2">Continuar</button>
                        </div>
                        <div class="uk-width-1-1 uk-container-center uk-text-center uk-margin-top">
                            <button id="cancelar" class="uk-button btn-dark-gray brd-radius-5 uk-contrast uk-width-1-2">Cancelar</button>
                        </div>
                    </div>
                </div>
                <div id="confBlock" class="col s12 m4 z-depth-4 card-panel border-radius-6 login-card" style="display:none;">
                    <div class="blockp">
                        <div class="uk-text-center">
                            <h3 class= font-bold uk-text-bold">Se envío una clave de seguridad a tu correo</h3>
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
                                <a class= uk-text-small">Reenviar correo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="validarBlock" class="col s12 m4 z-depth-4 card-panel border-radius-6 login-card" style="display:none;">
                    <form class="uk-form">
                        <div class="">
                            <label class= uk-text-bold uk-text-large" for="codigo">Validar código de seguridad</label>
                        </div>
                        <div class="uk-margin-top">
                            <input name="codigo" class="browser-default uk-width-1-1 brd-table brd-radius-5" type="text" placeholder="Código de seguridad">
                        </div>
                        <div class="uk-margin-top">
                            <label class= uk-text-bold uk-text-large" for="nvaPass">Crear contraseña nueva</label><br>
                            <span class=" style="font-size: 10px;">Solicitaremos esta contraseña cada vez que inicies sesión.</span>
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
                        <h5 class="uk-text-bold">Consejos para una contraseña segura:</h5>
                        <p class="uk-text-small uk-width-9-10 uk-container-center">
                            Utilizar al menos 8 caracteres, es mejor si es una combinación de cifras y letras.
                            No utilices la misma contraseña que ya has utilizado con nosotros antes.
                            No utilice palabras del diccionario, su nombre, número de teléfono u otra información personal que puede obtener fácilmente.
                            No utilices la misma contraseña para varias cuentas.
                        </p>
                    </div>
                </div>
                <div id="cambioCorrecto" class="col s12 m6 l4 z-depth-4 plr25 card-panel border-radius-6 login-card" style="display:none;">
                    <div class="blockp">
                        <div class="uk-text-center">
                            <h3 class="uk-text-bold">Se cambio correctamente tu contraseña</h3>
                            <p class="uk-text-small uk-width-8-10 uk-container-center">Ingresa tu nueva contraseña para tener acceso a Radio y TV</p>
                        </div>
                        <div class="uk-width-1-1 uk-container-center uk-text-center uk-margin-top">
                            <button id="aceptarCambioModal" class="uk-modal-close uk-button btn-purple brd-radius-5 uk-contrast uk-width-1-2">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include_once('template/scripts.php')?>
<script src="assets/js/index-function.js"></script>
</html>