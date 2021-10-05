<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns" style="height: 130%">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-demand-program.php') ?>
        <div id="main">
            <ul class="uk-breadcrumb w-95 uk-container-center uk-margin-top">
                <li><span class="uk-h2">TV</span></li>
                <li class="uk-active"><span class="uk-h2">Editar programa</li>
            </ul>
            <div class="uk-container-center w-95 bg-white uk-padding-small">
                <div class="uk-width-9-10 uk-container-center uk-block">
                    <div class="bg-gray">
                        <h4 class="p-blocks">Información general</h4>
                    </div>
                    <form class="uk-form uk-grid">
                        <div class="uk-width-1-2">
                            <div class="uk-width-1-1">
                                <label class="f-label-m" for="nomPrograma">Nombre del programa</label>
                                <input class="uk-margin-small-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="Nombre" name="nomPrograma" id="nomPrograma">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label class="f-label-m" for="catPrograma">Agregar a categoría</label>
                                <select name="catPrograma" id="catPrograma" class="browser-default uk-width-1-1 uk-form-small uk-margin-top">
                                    <option value="0">Elegir cateogría</option>
                                </select>
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label class="f-label-m" for="tempPrograma">Agregar temporada</label>
                                <select name="tempPrograma" id="tempPrograma" class="browser-default uk-width-1-1 uk-form-small uk-margin-top">
                                    <option value="0">Seleccionar número</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-width-1-2">
                            <label class="f-label-m" for="descriptionCat">Agregar descripción</label>
                            <textarea class="uk-margin-small-top uk-width-1-1 uk-form-small" name="descriptionCat" id="descriptionCat" cols="40" rows="5" placeholder="Escribe aquí"></textarea>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <label class="f-label-m" for="">Seleccionar como programa principal de categoría</label>
                            <div class="onoffswitch uk-margin-small-top">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        <div class="uk-width-1-4 uk-margin-top">
                            <label class="f-label-m" for="imgSquare">Imagen miniatura</label>
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-small-top brd-input-file bg-white">
                                <div class="uk-text-center">
                                    <div class="uk-form-file">
                                        <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                            <img id="imgBanner" src="assets/images/radio/uploadCuad.png" alt="banner" width="100%">
                                        </div>
                                        <input type='file' id="imgInp" class="uk-height-1-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-4 uk-margin-top">
                            <label class="f-label-m" for="imgSquare">Logo de programa</label>
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-small-top brd-input-file bg-white">
                                <div class="uk-text-center">
                                    <div class="uk-form-file">
                                        <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                            <img id="imgBanner" src="assets/images/radio/uploadCuad.png" alt="banner" width="100%">
                                        </div>
                                        <input type='file' id="imgInp" class="uk-height-1-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-2 uk-margin-top">
                            <label class="f-label-m" for="imgRec">Imagen de portada</label>
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-small-top brd-input-file p0">
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
                    </form>
                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                        <a href="tv-programas.php" id="saveProgram" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</a>
                        <a href="tv-programas.php" id="cancelarProgram" class="uk-button uk-width-1-5 btn-forms-t">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php include_once('template/scripts.php') ?>
    </body>
    <script type="text/javascript" charset="utf8" src="assets/libs/DataTables/datatables.js"></script>
</html>