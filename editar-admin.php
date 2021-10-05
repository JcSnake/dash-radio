<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
   <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns" style="height: 115vh;">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-admin.php') ?>
        <div id="main">
            <h2 class="w-95 uk-container-center uk-margin-top c-gray">Crear nuevo administrador</h2>
            <div class="w-95 bg-white uk-container-center">
                <div class="uk-width-9-10 uk-container-center uk-block">
                    <div class="bg-gray">
                        <h4 class="p-blocks">Información general</h4>
                    </div>
                    <form class="uk-form uk-grid">
                        <div class="uk-width-1-2">
                            <label for="nombreAdmin">Nombre del administrador</label>
                            <input id="nombreAdmin" name="nombreAdmin" type="text" class="uk-width-1-1 uk-form-small browser-default uk-margin-small-top" placeholder="Nombre" value="Maya Martinez">
                        </div>
                        <div class="uk-width-1-2">
                            <label for="correoAdmin">Correo electrónico</label>
                            <input id="correoAdmin" name="correoAdmin" type="text" class="uk-width-1-1 uk-form-small browser-default uk-margin-small-top" placeholder="Ingresa un correo electrónico" value="correo@rtvmxiquense.com">
                        </div>
                    </form>
                    <div class="bg-gray uk-margin-top">
                        <h4 class="p-blocks uk-margin-bottom-remove">Perfil</h4>
                    </div>
                    <label>Selecciona las opciones a las que tendrá acceso el usuario</label>
                    <form class="uk-form uk-grid uk-margin-top">
                        <div class="uk-width-1-2">
                            <label for="tipoDePerfil">Tipo de perfil</label>
                            <select name="tipoDePerfil" id="tipoDePerfil" class="browser-default uk-form-small">
                                <option value="0">Selecciona una opción</option>
                                <option value="1" selected>Administrador</option>
                            </select>
                        </div>
                    </form>
                    <div class="bg-gray uk-margin-top">
                        <h4 class="p-blocks uk-margin-bottom-remove">Generar nueva contraseña</h4>
                    </div>
                    <label>La contraseña debe de contener al menos 6 caracteres</label>
                    <form class="uk-form uk-grid uk-margin-top">
                        <div class="uk-width-1-2">
                            <button type="button" id="btnNewPass" class="uk-button uk-width-1-3 btn-forms-t" >Generar</button>
                            <a id="file" href="assets/images/radio/banner.png" download hidden>hola</a>
                            <div id="passBlock" class="uk-width-1-1" hidden>
                                <label for="newPass">Nueva contraseña</label><br>
                                <input type="text" class="browser-default uk-width-1-2 uk-text-center" value="f1243asasffaac"><br>
                                <button href="#modalPass" type="button" class="uk-button btn-purple uk-margin-top" data-uk-modal="{target: '#modalPass', center: true }">Restaurar contraseña</button>
                            </div>
                        </div>
                    </form>
                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                        <a href="admin-list.php" id="saveAdmin" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</a>
                        <a href="admin-list.php" id="cancelarAdmin" class="uk-button uk-width-1-5 btn-forms-t">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('template/scripts.php') ?>
        <div id="modalPass" class="uk-modal">
            <div class="uk-modal-dialog h-modal w-modal brd-radius-5">
                <div class="uk-text-center uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
                    <div>
                        <h4 class="font-bold uk-text-center uk-margin-bottom-remove">Se envío una clave de seguridad por correo</h4>
                        <p class="uk-margin-small-top">La contraseña se podrá restarurar mediante el correo que fue enviado</p>
                        <button id="aceptarModal" class="uk-button btn-purple uk-width-1-3">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
  </body>
  <script src="assets/js/function.js"></script>
</html>