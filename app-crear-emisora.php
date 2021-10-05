<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/navv-app-radio-envivo.php') ?>
        <div id="main">
            <ul class="uk-breadcrumb w-95 uk-container-center uk-margin-top">
                <li><span class="uk-h2">App</span></li>
                <li class="uk-active"><span class="uk-h2">Radio en vivo</li>
            </ul>
            <div class="uk-container-center w-95 bg-white uk-padding-small">
                <div class="uk-width-9-10 uk-container-center uk-block">
                    <div class="bg-gray">
                        <h4 class="p-blocks">Agregar nueva estación</h4>
                    </div>
                    <form class="uk-form uk-grid">
                        <div class="uk-width-1-2">
                            <div class="uk-width-1-1">
                                <label class="f-label-m" for="NomEstacion">Nombre de la estación</label>
                                <input class="uk-margin-small-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="Nombre de la estación" name="NomEstacion" id="inpNomEstacion">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label class="f-label-m" for="linkStreaming">Link de destino</label>
                                <input class="uk-margin-small-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="URL" name="linkStreaming" id="inpLinkStreaming">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label class="f-label-m" for="imgSquare">Agregar imagen de botón (000x000 px)</label>
                                <div id="upload-drop" class="uk-width-1-2 uk-margin-top brd-input-file bg-white">
                                    <div class="uk-text-center">
                                        <div class="uk-form-file">
                                            <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                                <img id="imgSquare" src="assets/images/radio/uploadCuad.png" alt="banner" width="100%">
                                            </div>
                                            <input type='file' id="imgInpSquare" class="uk-height-1-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                        <a href="app-radioenvivo.php" id="saveProgram" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</a>
                        <a href="app-radioenvivo.php" id="cancelarProgram" class="uk-button uk-width-1-5 btn-forms-t">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php include_once('template/scripts.php') ?>
    </body>
    <script src="assets/js/images-func.js"></script>
</html>