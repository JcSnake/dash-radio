<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-app-notificaciones.php') ?>
        <div id="main">
            <ul class="uk-breadcrumb w-95 uk-container-center uk-margin-top">
                <li><span class="uk-h2">App</span></li>
                <li class="uk-active"><span class="uk-h2">Notificaciones push</li>
            </ul>
            <div class="uk-container-center w-95 bg-white uk-padding-small">
                <div class="uk-width-9-10 uk-container-center uk-block">
                    <div class="bg-gray">
                        <h4 class="p-blocks">Información general</h4>
                    </div>
                    <form class="uk-form uk-grid">
                        <div class="uk-width-1-2">
                            <div class="uk-width-1-1">
                                <label for="titleNotification">Título de la notificación</label>
                                <input class="uk-margin-small-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="URL" name="titleNotification" id="inptitleNotification" value="Lluvia en carretera México-Toluca">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label for="mensaje">Mensaje</label>
                                <textarea name="mensaje" id="txtMensaje" cols="30" rows="3" placeholder="Escribe tu mensaje">Se pronostica fuertes lluvias a partir de las 2 de la tarde que afectaran La carretera México- Toluca Toma precauciones. </textarea>
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label for="linkNotification">Link</label>
                                <input class="uk-margin-small-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="URL" name="linkNotification" id="linkNotification">
                            </div>
                        </div>
                    </form>
                    <div class="uk-margin-top uk-width-3-4 uk-grid">
                        <h4 class="uk-width-1-1 uk-margin-bottom">Segmentación</h4>
                        <div class="uk-width-1-4">
                            <label>
                                <input type="checkbox">
                                <span>Tultitlan</span>
                            </label>
                        </div>
                        <div class="uk-width-1-4">
                            <label>
                                <input type="checkbox">
                                <span>Zumpango</span>
                            </label>
                        </div>
                        <div class="uk-width-1-4">
                            <label>
                                <input type="checkbox">
                                <span>Metepec</span>
                            </label>
                        </div>
                        <div class="uk-width-1-4">
                            <label>
                                <input type="checkbox" checked>
                                <span>CDMX</span>
                            </label>
                        </div><div class="uk-width-1-4">
                            <label>
                                <input type="checkbox">
                                <span>Valle de Bravo</span>
                            </label>
                        </div>
                        <div class="uk-width-1-4">
                            <label>
                                <input type="checkbox">
                                <span>Amecameca</span>
                            </label>
                        </div>
                        <div class="uk-width-1-4">
                            <label>
                                <input type="checkbox">
                                <span>Edomex</span>
                            </label>
                        </div>
                        <div class="uk-width-1-4">
                            <label>
                                <input type="checkbox" checked>
                                <span class="">Toluca</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include_once('template/scripts.php') ?>
    </body>
</html>