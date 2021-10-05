<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php') ?>
    <title>Mi cuenta</title>
</head>
<body  class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns" style="height:180%">
    <?php include_once('template/header.php') ?>
    <?php include_once('template/nav-bar/nav-campania.php') ?>
    <div id="main" class="bg-gray" style="height: 100%">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <ul class="uk-breadcrumb uk-container-center uk-margin-top">
                        <li><span class="uk-h2">Campañas</span></li>
                        <li class="uk-active"><span class="uk-h2">Samsung Galaxy note 10</li>
                    </ul>
                    <div class="bg-white uk-block p-table pt0">
                        <ul class="uk-tab uk-width-1-1" data-uk-tab="{connect:'#tabs-campania'}">
                            <li class="uk-active"><a href="">Analytics</a></li>
                            <li><a href="">Imágenes</a></li>
                            <li><a href="">Perfil de campaña</a></li>
                        </ul>
                        <ul id="tabs-campania" class="uk-switcher uk-margin">
                            <li>
                                <div class="uk-flex uk-flex-right">
                                    <div class="uk-width-1-2 uk-flex uk-form">
                                        <span>Rango</span>
                                        <div class="uk-margin-left uk-flex uk-flex-space-between uk-width-1-1 uk-flex-middle">
                                            <button id="triggerCalendar" class="uk-button uk-button-small btn-gray-icon brd-button-form"><i class="uk-icon-calendar"></i></button>
                                            <input class="calendar uk-width-1-1 uk-form-small browser-default brd-input-button datepicker-here" type="text" data-language='es' data-multiple-dates="3" data-multiple-dates-separator=" - " data-position='bottom left'>
                                        </div>
                                        <div class="uk-margin-left">
                                            <button class="uk-button uk-button-small btn-white-gray uk-text-bold c-gray">PDF</button>
                                        </div>
                                        <div class="uk-margin-left">
                                            <button class="uk-button uk-button-small btn-white-gray uk-text-bold c-gray">XLS</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-margin-top">
                                    <div class="bg-gray p-blocks uk-text-center">
                                        <h1 class="uk-margin-remove c-gray-dark-text">InverC: $100,000</h1>
                                    </div>
                                    <ul class="uk-subnav uk-subnav-pill uk-margin-top uk-flex uk-flex-right" data-uk-switcher="{connect:'#subnav-pill-content-1'}">
                                        <li class="uk-active" aria-expanded="true"><a href="#" class="brd-a-inactive"><i class="uk-icon-bar-chart"></i></a></li>
                                        <li aria-expanded="false" class=""><a href="#" class="brd-a-inactive"><i class="uk-icon-forward"></i></a></li>
                                    </ul>
                                    <ul id="subnav-pill-content-1" class="uk-switcher">
                                        <li class="uk-active" aria-hidden="false">
                                            <div class="uk-width-1-1 uk-container-center uk-grid uk-grid-collapse">
                                                <div class="bg-blue uk-width-1-3 uk-text-center p-blocks">
                                                    <h1 class="uk-contrast uk-margin-small-bottom">1.692</h1>
                                                    <h3 class="uk-contrast uk-margin-small-top">Impresiones</h3>
                                                </div>
                                                <div class="bg-red uk-width-1-3 uk-text-center p-blocks">
                                                    <h1 class="uk-contrast uk-margin-small-bottom">520</h1>
                                                    <h3 class="uk-contrast uk-margin-small-top">Alcance</h3>
                                                </div>
                                                <div class="bg-yellow uk-width-1-3 uk-text-center p-blocks">
                                                    <h1 class="uk-contrast uk-margin-small-bottom">2</h1>
                                                    <h3 class="uk-contrast uk-margin-small-top">Frecuencia</h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="true" class="">
                                            <div id="chartdiv"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h2>Estadísticas del día</h2>
                                    <canvas id="line-chart1" height="80%"></canvas>
                                </div>
                                <div class="uk-width-1-1 uk-container-center uk-grid uk-margin-top">
                                    <div class="uk-width-1-2 uk-text-center">
                                        <h3>Segmentación por sexo</h3>
                                        <canvas id="segmentoSex"></canvas>
                                    </div>
                                    <div class="uk-width-1-2 uk-text-center">
                                        <h3>Segmentación por afinidad</h3>
                                        <canvas id="segmentoAfinidad"></canvas>
                                    </div>
                                </div>
                            </li>
                            <li class="w-95 uk-container-center">
                                <h4>Lista de imágenes</h4>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">crop_original</i>Banner de campaña 1 (Galaxy)</div>
                                        <div class="collapsible-body">
                                            <div class="bg-gray">
                                                <div class="uk-flex">
                                                    <h4 class="p-blocks uk-margin-bottom-remove">Banner de campaña (1687 x 483 px)</h4>
                                                    <button id="editBanner" class="uk-button btn-white-gray uk-margin-left uk-margin-small-top uk-button-small h-btn-edit"><i class="uk-icon-pencil"></i></button>
                                                </div>
                                                <div class="p-table uk-padding-top-remove uk-padding-bottom-remove">
                                                    <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0 bg-white">
                                                        <div class="uk-text-center">
                                                            <div class="uk-form-file">
                                                                <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                                                    <img id="imgBanner" class="opacityDisabled" src="assets/images/radio/banner.png" alt="banner" width="100%">
                                                                </div>
                                                                <input type='file' id="imgInp" class="uk-width-1-1" disabled title="">
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
                                                                <input type="checkbox" name="checkBann1" disabled checked disabled>
                                                                <span>Noticieros</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Opinión</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Identidad</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Infantil</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" checked disabled>
                                                                <span>Jóvenes</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="uk-margin-top uk-width-1-1 uk-grid">
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Especiales</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Entretenimiento</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Deportes</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Institucionales</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Mujeres</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Cápsulas</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <form class="uk-form uk-margin-top uk-grid uk-width-1-2 uk-block uk-padding-top-remove">
                                                        <div class="uk-width-1-2">
                                                            <label for="genero">Sexo</label>
                                                            <select name="sexoBanner1" id="sexoBanner1" class="browser-default uk-width-1-1 uk-margin-small-top uk-form-small" disabled>
                                                                <option value="0">Sexo</option>
                                                                <option value="1" selected>Masculino</option>
                                                            </select>
                                                        </div>
                                                        <div class="uk-width-1-2">
                                                            <label for="edad">Edad</label>
                                                            <select name="edadBanner1" id="edadBanner1" class="browser-default uk-width-1-1 uk-margin-small-top uk-form-small" disabled>
                                                                <option value="0">Edad</option>
                                                                <option value="1" selected>30</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">crop_original</i>First</div>
                                        <div class="collapsible-body">
                                            <div class="bg-gray">
                                                <div class="uk-flex">
                                                    <h4 class="p-blocks uk-margin-bottom-remove">Banner de campaña (1687 x 483 px)</h4>
                                                    <button id="editBanner" class="uk-button btn-white-gray uk-margin-left uk-margin-small-top uk-button-small h-btn-edit"><i class="uk-icon-pencil"></i></button>
                                                </div>
                                                <div class="p-table uk-padding-top-remove uk-padding-bottom-remove">
                                                    <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0 bg-white">
                                                        <div class="uk-text-center">
                                                            <div class="uk-form-file">
                                                                <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                                                    <img id="imgBanner" class="opacityDisabled" src="assets/images/radio/banner.png" alt="banner" width="100%">
                                                                </div>
                                                                <input type='file' id="imgInp" class="uk-width-1-1" disabled title="">
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
                                                                <input type="checkbox" name="checkBann1" disabled checked disabled>
                                                                <span>Noticieros</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Opinión</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Identidad</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Infantil</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" checked disabled>
                                                                <span>Jóvenes</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="uk-margin-top uk-width-1-1 uk-grid">
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Especiales</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Entretenimiento</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Deportes</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Institucionales</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Mujeres</span>
                                                            </label>
                                                        </div>
                                                        <div class="uk-width-1-6">
                                                            <label>
                                                                <input type="checkbox" name="checkBann1" disabled>
                                                                <span>Cápsulas</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <form class="uk-form uk-margin-top uk-grid uk-width-1-2 uk-block uk-padding-top-remove">
                                                        <div class="uk-width-1-2">
                                                            <label for="genero">Sexo</label>
                                                            <select name="sexoBanner1" id="sexoBanner1" class="browser-default uk-width-1-1 uk-margin-small-top uk-form-small" disabled>
                                                                <option value="0">Sexo</option>
                                                                <option value="1" selected>Masculino</option>
                                                            </select>
                                                        </div>
                                                        <div class="uk-width-1-2">
                                                            <label for="edad">Edad</label>
                                                            <select name="edadBanner1" id="edadBanner1" class="browser-default uk-width-1-1 uk-margin-small-top uk-form-small" disabled>
                                                                <option value="0">Edad</option>
                                                                <option value="1" selected>30</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="uk-block uk-width-1-1">
                                    <a href="campanias.php" id="saveAdmin" class="uk-button uk-contrast uk-width-1-6 uk-margin-right btn-purple">Guardar</a>
                                    <a href="campanias.php" id="cancelarAdmin" class="uk-button uk-width-1-6 btn-forms-t">Cancelar</a>
                                </div>
                            </li>
                            <li>
                                <form class="uk-width-1-1 uk-container-center uk-grid uk-form uk-margin-large-top">
                                    <div class="uk-width-1-2 p0">
                                        <label for="nomCampania" class="f-label uk-text-bold">Nombre de campaña</label>
                                        <input type="text" class="browser-default uk-width-1-1 uk-margin-small-top uk-form-small brd-radius-5" value="Samsung Galaxy note 10">
                                    </div>
                                    <div class="uk-width-1-6">
                                        <label for="nomCampania" class="f-label uk-text-bold">Inversión</label>
                                        <input type="text" class="browser-default uk-width-1-1 uk-margin-small-top uk-form-small brd-radius-5">
                                    </div>
                                    <div class="uk-width-1-3">
                                        <label for="rango" class="f-label uk-text-bold">Temporalidad</label>
                                        <div class="uk-width-1-1 uk-flex uk-flex-middle">
                                            <span class="c-gray">Rango</span>
                                            <div class="uk-flex uk-flex-space-between uk-width-1-1 uk-flex-middle uk-margin-small-left">
                                                <button id="triggerCalendar1" type="button" class="uk-button uk-button-small btn-gray-icon brd-button-form"><i class="uk-icon-calendar"></i></button>
                                                <input class="calendar uk-width-1-1 uk-form-small browser-default brd-input-button datepicker-here" type="text" data-language='es' data-multiple-dates="3" data-multiple-dates-separator=" - " data-position='bottom left'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-4 uk-margin-large-top p0 uk-flex">
                                        <label for="activador" class="f-label uk-text-bold">Activar / Desactivar</label>
                                        <div class="onoffswitch uk-margin-small-top uk-margin-left">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                            <label class="onoffswitch-label" for="myonoffswitch">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                                        <a href="campanias.php" id="saveDetalles" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</a>
                                        <a href="campanias.php" id="cancelDetalles" class="uk-button uk-width-1-5">Cancelar</a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include_once('template/scripts.php')?>
<?php include_once('template/scripts-chart.php')?>
<script src="assets/js/index-function.js"></script>
<script src="assets/js/graphs.js"></script>
<script src="assets/js/editBanner.js"></script>
<script src="assets/js/images-func.js"></script>
<script>
    $('#triggerCalendar').click(function() {
        $(".calendar").trigger("select");
    });
    $('#triggerCalendar1').click(function() {
        $(".calendar").trigger("select");
    });
</script>
</html>