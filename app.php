<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-app.php') ?>
        <div id="main">
            <div class="row">
                <div class="col s12">
                    <div class="container">
                        <div id="card-stats">
                            <div class="uk-flex uk-flex-space-between">
                                <h2 class="uk-margin-top uk-margin-small-bottom c-gray">App</h2>
                                <div class="uk-width-1-3 uk-flex uk-flex-middle uk-form">
                                    <span class="c-gray">Rango</span>
                                    <div class="uk-margin-left uk-flex uk-flex-space-between uk-width-1-1 uk-flex-middle">
                                        <button id="triggerCalendar" class="uk-button uk-button-small btn-gray-icon brd-button-form"><i class="uk-icon-calendar"></i></button>
                                        <input class="calendar uk-width-1-1 uk-form-small browser-default brd-input-button datepicker-here" type="text" data-language='es' data-multiple-dates="3" data-multiple-dates-separator=" - " data-position='bottom left'>
                                    </div>
                                    <div class="uk-margin-left">
                                        <button class="uk-button uk-button-small btn-white-gray uk-text-bold c-gray">PDF</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6 l6">
                                    <div class="card animate fadeLeft">
                                        <div class="card-content cyan white-text">
                                            <p class="card-stats-title"><i class="material-icons">person_outline</i> Nuevos registros</p>
                                            <h4 class="card-stats-number white-text">365</h4>
                                            <p class="card-stats-compare">
                                                <i class="material-icons">keyboard_arrow_up</i> 15%
                                                <span class="cyan text text-lighten-5">desde el último mes</span>
                                            </p>
                                        </div>
                                        <div class="card-action cyan darken-1">
                                            <div id="clients-bar" class="center-align uk-width-3-4 uk-container-center"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6">
                                    <div class="card animate fadeLeft">
                                        <div class="card-content red accent-2 white-text">
                                            <p class="card-stats-title"><i class="material-icons">access_time</i> Tiempo promedio en APP</p>
                                            <h4 class="card-stats-number white-text">2:14 hrs</h4>
                                            <p class="card-stats-compare">
                                                <i class="material-icons">keyboard_arrow_up</i> 70% <span class="red-text text-lighten-5">desde el último mes</span>
                                            </p>
                                        </div>
                                        <div class="card-action red">
                                            <div id="sales-compositebar" class="center-align uk-width-3-4 uk-container-center"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6">
                                    <div class="card animate fadeRight">
                                        <div class="card-content orange lighten-1 white-text">
                                            <p class="card-stats-title"><i class="material-icons">trending_up</i> Inicios de sesión</p>
                                            <h4 class="card-stats-number white-text">120</h4>
                                            <p class="card-stats-compare">
                                                <i class="material-icons">keyboard_arrow_up</i> 25%
                                                <span class="orange-text text-lighten-5">desde el último mes</span>
                                            </p>
                                        </div>
                                        <div class="card-action orange">
                                            <div id="profit-tristate" class="center-align uk-width-3-4 uk-container-center"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6">
                                    <div class="card animate fadeRight">
                                        <div class="card-content green lighten-1 white-text">
                                            <p class="card-stats-title"><i class="material-icons">content_copy</i> Usuarios únicos</p>
                                            <h4 class="card-stats-number white-text">80</h4>
                                            <p class="card-stats-compare">
                                                <i class="material-icons">keyboard_arrow_down</i> 5%
                                                <span class="green-text text-lighten-5">desde el último mes</span>
                                            </p>
                                        </div>
                                        <div class="card-action green">
                                            <div id="invoice-line" class="center-align"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>
        </div>
      </div>
    </div>
        <?php include_once('template/scripts.php') ?>
        <?php include_once('template/scripts-chart.php') ?>
    </body>
    <script>
        $('#triggerCalendar').click(function() {
            $(".calendar").trigger("select");
        });
    </script>
</html>