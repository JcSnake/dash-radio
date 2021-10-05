<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-demand-cap.php') ?>
        <div id="main">
            <ul class="uk-breadcrumb w-95 uk-container-center uk-margin-top">
                <li><span class="uk-h2">TV</span></li>
                <li class="uk-active"><span class="uk-h2">Capítulos</li>
            </ul>
            <div class="uk-container-center w-95 bg-white uk-padding-small">
                <div class="uk-width-9-10 uk-container-center uk-block">
                    <div class="bg-gray">
                        <h4 class="p-blocks">Información general</h4>
                    </div>
                    <form class="uk-form uk-grid">
                        <div class="uk-width-1-2">
                            <div class="uk-width-1-1">
                                <label for="nomCapitulo" class="f-label-m">Nombre del capítulo</label>
                                <input class="uk-margin-small-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="Nombre" name="nomCapitulo" id="nomCapitulo">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label for="urlCap" class="f-label-m">Agregar URL</label>
                                <input type="text" class="browser-default uk-form-small uk-width-1-1 uk-margin-small-top" placeholder="Pega URL" name="urlCap" id="urlCap">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label for="programCap" class="f-label-m">Agregar a programa</label>
                                <select name="programCap" id="programCap" class="browser-default uk-width-1-1 uk-form-small uk-margin-small-top">
                                    <option value="0">Elegir programa</option>
                                </select>
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label for="tempCap" class="f-label-m">Agregar a temporada</label>
                                <select name="tempCap" id="tempCap" class="browser-default uk-width-1-1 uk-form-small uk-margin-small-top">
                                    <option value="0">Elegir temporada</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-width-1-2">
                            <div class="uk-width-1-1">
                                <label for="descriptionCap" class="f-label-m">Agregar descripción</label>
                                <textarea class="uk-margin-small-top uk-width-1-1 uk-form-small" name="descriptionCap" id="descriptionCap" cols="40" rows="3" placeholder="Escribe aquí"></textarea>
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label for="descriptionCap" class="f-label-m">Agregar imagen de portada</label>
                                <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0">
                                    <div class="uk-text-center">
                                        <div class="uk-form-file">
                                            <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                                <img id="imgBanner" src="assets/images/radio/uploadRect.png" alt="banner" width="100%">
                                            </div>
                                            <input type='file' id="imgInp" class="uk-height-1-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                        <a href="tv-capitulo.php" id="saveProgram" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</a>
                        <a href="tv-capitulo.php" id="cancelarProgram" class="uk-button uk-width-1-5 btn-forms-t">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php include_once('template/scripts.php') ?>
    </body>
    <script type="text/javascript" charset="utf8" src="assets/libs/DataTables/datatables.js"></script>
</html>