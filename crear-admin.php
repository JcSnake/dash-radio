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
                            <label class="f-label-m" for="nombreAdmin">Nombre del administrador</label>
                            <input id="nombreAdmin" name="nombreAdmin" type="text" class="uk-width-1-1 uk-form-small browser-default uk-margin-small-top" placeholder="Nombre" required>
                        </div>
                        <div class="uk-width-1-2">
                            <label class="f-label-m" for="correoAdmin">Correo electrónico</label>
                            <input id="correoAdmin" name="correoAdmin" type="text" class="uk-width-1-1 uk-form-small browser-default uk-margin-small-top" placeholder="Ingresa un correo electrónico" required>
                        </div>
                    </form>
                    <div class="bg-gray uk-margin-top">
                        <h4 class="p-blocks uk-margin-bottom-remove">Perfil</h4>
                    </div>
                    <label class="f-label-m">Selecciona las opciones a las que tendrá acceso el usuario</label>
                    <form class="uk-form uk-grid uk-margin-top">
                        <div class="uk-width-1-2">
                            <label class="f-label-m" for="tipoDePerfil">Tipo de perfil</label>
                            <select name="tipoDePerfil" id="tipoDePerfil" class="browser-default uk-form-small">
                                <option value="0">Selecciona una opción</option>
                            </select>
                        </div>
                    </form>
                    <div class="bg-gray uk-margin-top">
                        <h4 class="p-blocks uk-margin-bottom-remove">Contraseña</h4>
                    </div>
                    <label class="f-label-m">La contraseña debe de contener al menos 6 caracteres</label>
                    <form class="uk-form uk-grid uk-margin-top">
                        <div class="uk-width-1-2 uk-flex uk-flex-space-between">
                            <input type="text" class="browser-default uk-form uk-width-9-10" placeholder="Contraseña">
                            <button class="uk-width-1-10 uk-button"><i class="uk-icon-eye"></i></button>
                        </div>
                        <div class="uk-width-1-2 uk-flex uk-flex-space-between">
                            <input type="text" class="browser-default uk-form uk-width-9-10" placeholder="Confirmar contraseña">
                            <button class="uk-width-1-10 uk-button"><i class="uk-icon-eye"></i></button>
                        </div>
                    </form>
                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                        <a href="admin-list.php" id="saveAdmin" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</a>
                        <a href="admin-list.php" id="cancelarAdmin" class="uk-button uk-width-1-5">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('template/scripts.php') ?>
  </body>
</html>