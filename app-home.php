<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-app-home.php') ?>
        <div id="main">
            <ul class="uk-breadcrumb w-95 uk-container-center uk-margin-top">
                <li><span class="uk-h2">App</span></li>
                <li class="uk-active"><span class="uk-h2">Home</li>
            </ul>
            <div class="uk-container-center w-95 bg-white uk-padding-small">
                <div class="uk-width-9-10 uk-container-center uk-block">
                    <div class="bg-gray">
                        <h4 class="p-blocks">General</h4>
                    </div>
                    <div class="uk-grid uk-grid-small uk-width-1-1 uk-container-center">
                        <div class="uk-width-1-3">
                            <label for="fotoHome" class="f-label-m">Logotipo (000x000 px)</label>
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0 bg-white">
                                <div class="uk-text-center">
                                    <div class="uk-form-file">
                                        <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                            <img id="imgHomeFirst" src="assets/images/radio/uploadRect.png" alt="banner" width="100%">
                                        </div>
                                        <input type='file' id="imgInpFirst" class="uk-width-1-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="bg-gray uk-width-1-1 uk-margin-top">
                        <h4 class="p-blocks">Slide principal</h4>
                    </div>
                    <div class="uk-grid uk-grid-small uk-width-1-1 uk-container-center uk-margin-top">
                        <div class="uk-width-1-3">
                            <label for="fotoHome" class="f-label-m">Agregar slide 1 (000x000 px)</label>
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0 bg-white">
                                <div class="uk-text-center">
                                    <div class="uk-form-file">
                                        <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                            <img id="imgHomeFirst" src="assets/images/radio/uploadRect.png" alt="banner" width="100%">
                                        </div>
                                        <input type='file' id="imgInpFirst" class="uk-width-1-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <label for="fotoHome" class="f-label-m">Agregar slide 2 (000x000 px)</label>
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0 bg-white">
                                <div class="uk-text-center">
                                    <div class="uk-form-file">
                                        <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                            <img id="imgHomeSecond" src="assets/images/radio/uploadRect.png" alt="banner" width="100%">
                                        </div>
                                        <input type='file' id="imgInpSecond" class="uk-width-1-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <label for="fotoHome" class="f-label-m">Agregar slide 3 (000x000 px)</label>
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0 bg-white">
                                <div class="uk-text-center">
                                    <div class="uk-form-file">
                                        <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                            <img id="imgHomeThird" src="assets/images/radio/uploadRect.png" alt="banner" width="100%">
                                        </div>
                                        <input type='file' id="imgInpThird" class="uk-width-1-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                        <button id="saveImages" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php include_once('template/scripts.php') ?>
    </body>
    <script type="text/javascript" charset="utf8" src="assets/libs/DataTables/datatables.js"></script>
    <script src="assets/js/images-func.js"></script>
</html>