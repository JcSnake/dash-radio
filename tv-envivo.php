<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns" style="height: 120%">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-demand-tv-envivo.php') ?>
        <div id="main">
            <ul class="uk-breadcrumb w-95 uk-container-center uk-margin-top">
                <li><span class="uk-h2">On demand</span></li>
                <li class="uk-active"><span class="uk-h2">TV en vivo</li>
            </ul>
            <div class="uk-container-center w-95 bg-white uk-padding-small">
                <div class="uk-width-9-10 uk-container-center uk-block">
                    <div class="uk-flex uk-flex-space-between uk-flex-middle">
                        <div class="bg-gray w-95">
                            <h4 class="p-blocks uk-margin-bottom-remove">Información general</h4>
                        </div>
                        <!-- <button id="editFields" class="uk-button btn-white-gray uk-margin-left uk-margin-small-top uk-button-small h-btn-edit"><i class="uk-icon-pencil"></i></button> -->
                    </div>
                    <form class="uk-form uk-grid" name="formTvLive">
                        <div class="uk-width-1-2">
                            <div class="uk-width-1-1 uk-margin-top">
                                <label for="linkStreaming" class="f-label-m">Link del streaming</label>
                                <input class="uk-margin-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="URL" name="linkStreaming" id="inpLinkStreaming" value="Https:// streaming.com/tv12312312312312">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label for="titleSection" class="f-label-m">Título</label>
                                <input class="uk-margin-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="Título" name="titleSection" id="inptitleSection">
                            </div>
                            <div class="uk-width-1-2 uk-margin-top">
                                <label for="imgSquare" class="f-label-m">Agregar imagen de botón</label>
                                <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file bg-white div-image">
                                    <div class="uk-text-center">
                                        <div class="uk-form-file">
                                            <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                                <img id="imgSquare" src="assets/images/radio/uploadCuad.png" alt="banner" width="100%" title="">
                                            </div>
                                            <input type='file' id="imgInpSquare" class="uk-height-1-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                        <button id="saveTvDemand" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php include_once('template/scripts.php') ?>
    </body>
    <script src="assets/js/images-func.js"></script>
    <script src="assets/js/editBanner.js"></script>
</html>