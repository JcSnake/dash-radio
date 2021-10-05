<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
   <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns" style="height: 155%;">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-campania.php') ?>
        <div id="main">
            <h2 class="w-95 uk-container-center uk-margin-top c-gray">Crear nueva campaña</h2>
            <div class="w-95 bg-white uk-container-center">
                <div id="bannerContent" class="uk-width-1-1 uk-container-center p-table">
                    <form class="uk-form uk-grid">
                        <div class="uk-width-1-2">
                            <label for="nombreCampania" class="f-label-m">Nombre de campaña</label>
                            <input id="nombreCampania" name="nombreCampania" type="text" class="uk-width-1-1 uk-form-small browser-default uk-margin-small-top" placeholder="Nombre de la campaña" required>
                        </div>
                        <div class="uk-width-1-2 uk-grid">
                            <div class="uk-width-2-3">
                                <label for="temp" class="f-label-m">Temporalidad</label>
                                <div class="uk-width-1-1 uk-flex uk-margin-small-top">
                                    <span>Rango</span>
                                    <div class="uk-margin-left uk-flex uk-flex-space-between uk-width-1-1 uk-flex-middle">
                                        <button class="uk-button uk-button-small btn-gray-icon brd-button-form"><i class="uk-icon-calendar"></i></button>
                                        <input class="uk-width-1-1 uk-form-small browser-default brd-input-button datepicker-here" type="text" data-language='es' data-multiple-dates="3" data-multiple-dates-separator=" - " data-position='bottom left'>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-4">
                                <label for="activador" class="f-label-m">Activador</label>
                                <div class="onoffswitch uk-margin-small-top">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                    <label class="onoffswitch-label" for="myonoffswitch">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="bannerDefault" class="bg-gray uk-margin-top">
                        <h3 class="p-blocks uk-margin-bottom-remove">Banner de campaña (1687 x 483 px)</h3>
                        <div class="uk-margin-left uk-form uk-margin-small-top uk-container-center">
                            <label for="nameBanner" class="f-label-m">Nombre del anuncio</label><br>
                            <input type="text" class="browser-default uk-width-1-3 brd-radius-5 uk-form-small">
                        </div>
                        <div class="p-table uk-padding-top-remove uk-padding-bottom-remove">
                            <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0 bg-white">
                                <div class="uk-text-center">
                                    <div class="uk-form-file">
                                        <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                            <img id="imgBanner" src="assets/images/radio/uploadRect.png" alt="banner" width="100%">
                                        </div>
                                        <input type='file' id="imgInp" class="uk-width-1-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="p-blocks uk-margin-bottom-remove uk-padding-top-remove">Segmentación</h4>
                        <div class="uk-margin-left">
                            <span>Afinidad</span>
                            <div class="uk-margin-top uk-width-1-1 uk-grid">
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Noticieros</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Opinión</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Identidad</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Infantil</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Jóvenes</span>
                                    </label>
                                </div>
                            </div>
                            <div class="uk-margin-top uk-width-1-1 uk-grid">
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Especiales</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Entretenimiento</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Deportes</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Institucionales</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Mujeres</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-6">
                                    <label>
                                        <input type="checkbox">
                                        <span>Cápsulas</span>
                                    </label>
                                </div>
                            </div>
                            <form class="uk-form uk-margin-top uk-grid uk-width-1-2">
                                <div class="uk-width-1-2">
                                    <label for="sexo">Sexo</label>
                                    <select name="sexo" id="sexo" class="browser-default uk-width-1-1 uk-margin-small-top uk-form-small">
                                        <option value="0">Sexo</option>
                                    </select>
                                </div>
                                <div class="uk-width-1-2">
                                    <label for="edad">Edad</label>
                                    <select name="edad" id="edad" class="browser-default uk-width-1-1 uk-margin-small-top uk-form-small">
                                        <option value="0">Edad</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="uk-margin-top uk-block uk-margin-left">
                            <button type="button" id="deleteBanner" class="uk-button btn-forms-t">Eliminar banner</button>
                        </div>
                    </div>
                    <div id="bannerDinamic"></div>
                    <div class="uk-width-1-1 uk-margin-top">
                        <button id="createBanner" class="uk-button btn-forms-t">Agregar banner</button>
                    </div>
                    <div class="uk-block uk-width-1-1">
                        <a href="campanias.php" id="saveAdmin" class="uk-button uk-contrast uk-width-1-6 uk-margin-right btn-purple">Guardar</a>
                        <a href="campanias.php" id="cancelarAdmin" class="uk-button uk-width-1-6 btn-forms-t">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('template/scripts.php') ?>
  </body>
  <script src="assets/js/images-func.js"></script>
  <script src="assets/js/banner.js"></script>
</html>