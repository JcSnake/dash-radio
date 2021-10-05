<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns" style="height: 140% !important;">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-demand-cat.php') ?>
        <div id="main">
            <ul class="uk-breadcrumb w-95 uk-container-center uk-margin-top">
                <li><span class="uk-h2">TV</span></li>
                <li class="uk-active"><span class="uk-h2">Categorias</li>
            </ul>
            <div class="uk-container-center w-95 bg-white uk-padding-small">
                <div class="uk-width-9-10 uk-container-center uk-block">
                    <div class="bg-gray">
                        <h4 class="p-blocks">Información general</h4>
                    </div>
                    <form class="uk-form uk-grid uk-grid-match">
                        <div class="uk-width-1-2">
                            <label class="f-label-m" for="nomCategoria">Nombre de la categoría</label>
                            <input class="uk-margin-top uk-width-1-1 browser-default brd-radius-5" type="text" placeholder="Nombre" name="nomCategoria" id="nomCategoria">
                        </div>
                        <div class="uk-width-1-2">
                            &nbsp;
                        </div>
                        <div class="uk-width-1-2 uk-margin-top">
                            <label class="f-label-m" for="descriptionCat">Agregar descripción</label>
                            <textarea class="uk-margin-top uk-width-1-1 browser-default brd-radius-5" name="descriptionCat" id="descriptionCat" cols="40" rows="5" placeholder="Escribe aquí"></textarea>
                        </div>
                        <div class="uk-width-1-2 uk-margin-top">
                            &nbsp;
                        </div>
                        <div class="uk-width-1-4 uk-margin-top">
                            <label class="f-label-m" for="imgSquare">Imagen miniatura</label>
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file bg-white">
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
                        <div class="uk-width-3-4 uk-margin-top">
                            <label class="f-label-m" for="imgRec">Imagen de portada</label>
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0">
                                <div class="uk-text-center">
                                    <div class="uk-form-file">
                                        <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                            <img id="imgRect" src="assets/images/radio/uploadRect.png" alt="banner" width="100%">
                                        </div>
                                        <input type='file' id="imgInpRect" class="uk-height-1-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                        <a href="tv-categoria.php" id="saveAdmin" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</a>
                        <a href="tv-categoria.php" id="cancelarAdmin" class="uk-button uk-width-1-5 btn-forms-t">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php include_once('template/scripts.php') ?>
    </body>
    <script src="assets/js/images-func.js"></script>
</html>