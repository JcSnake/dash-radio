<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns" style="height:220%">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav.php') ?>
        <div id="main">
            <div class="row">
                <div class="col s12">
                    <div class="container">
                        <div id="card-stats">
                            <div class="uk-flex uk-flex-space-between">
                                <h2 class="uk-margin-top uk-margin-small-bottom c-gray">On demand</h2>
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
                                <div class="col s12 m6 l3">
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
                                <div class="col s12 m6 l3">
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
                                <div class="col s12 m6 l3">
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
                                <div class="col s12 m6 l3">
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
                        <!--card stats end-->
                        <!--chart dashboard start-->
                    <div id="chart-dashboard">
                        <div class="row">
                            <div class="col s12 m8 l8">
                                <div class="card animate fadeUp">
                                    <div class="card-move-up waves-effect waves-block waves-light">
                                        <div class="move-up cyan darken-1">
                                            <div>
                                                <span class="chart-title white-text">Usuarios por periodo</span>
                                                <div class="chart-revenue cyan darken-2 white-text">
                                                    <p class="chart-revenue-total">$4,500.85</p>
                                                    <p class="chart-revenue-per"><i class="material-icons">arrow_drop_up</i> 21.80 %</p>
                                                </div>
                                                <div class="switch chart-revenue-switch right">
                                                    <label class="cyan-text text-lighten-5">
                                                    Month <input type="checkbox" /> <span class="lever"></span> Year
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="trending-line-chart-wrapper"><canvas id="revenue-line-chart" height="70"></canvas></div>
                                        </div>
                                    </div>
                                    <a class="btn-floating pos-filter waves-effect waves-light red accent-2 z-depth-4 right">
                                        <i class="material-icons activator">filter_list</i>
                                    </a>
                                    <div class="card-content uk-flex uk-flex-center uk-flex-middle uk-width-1-1">
                                        <div class="col s12 m4 l4">
                                            <div id="doughnut-chart-wrapper">
                                                <canvas id="doughnut-chart" height="200"></canvas>
                                                <div class="doughnut-chart-status pos-title-chart">
                                                    <p class="center-align font-weight-600 mt-4">4500</p>
                                                    <p class="ultra-small center-align">Sold</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m3 l3">
                                            <ul class="doughnut-chart-legend">
                                                <li class="mobile ultra-small"><span class="legend-color"></span>Matutino</li>
                                                <li class="kitchen ultra-small"><span class="legend-color"></span> Vespertino</li>
                                                <li class="home ultra-small"><span class="legend-color"></span> Nocturno</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m9 l9">
                                            <div class="trending-bar-chart-wrapper"><canvas id="trending-bar-chart" height="90"></canvas></div>
                                        </div>
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Revenue by Month <i class="material-icons right">close</i>
                                    </span>
                                    <table class="responsive-table">
                                        <thead>
                                            <tr>
                                                <th data-field="id">ID</th>
                                                <th data-field="month">Month</th>
                                                <th data-field="item-sold">Item Sold</th>
                                                <th data-field="item-price">Item Price</th>
                                                <th data-field="total-profit">Total Profit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>January</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>February</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>March</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>April</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>May</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>June</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>July</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>August</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Septmber</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Octomber</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>November</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>December</td>
                                                <td>122</td>
                                                <td>100</td>
                                                <td>$122,00.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4 l4">
                                <div class="card animate fadeLeft uk-text-center">
                                    <div class="card-content bg-card-purple accent-2 white-text">
                                        <p class="card-stats-title uk-flex uk-flex-center uk-flex-middle"><i class="material-icons uk-text-small">play_circle_filled</i>&nbsp;Reproducciones diarias</p>
                                        <h2 class="card-stats-number white-text uk-text-bold">365</h2>
                                        <p class="card-stats-compare uk-flex uk-flex-middle uk-flex-center">
                                            <i class="material-icons">keyboard_arrow_up</i> 15%&nbsp;<span class="red-text text-lighten-5">desde el último mes</span>
                                        </p>
                                    </div>
                                    <div class="card-action bg-card-purple-dark">
                                        <div id="sales-compositebar" class="center-align uk-width-3-4 uk-container-center"></div>
                                    </div>
                                </div>
                                <div class="card animate fadeUp">
                                    <div class="card-content teal">
                                        <a class="btn-floating pos-tick waves-effect waves-light red accent-2 z-depth-4 right">
                                            <i class="material-icons activator">done</i>
                                        </a>
                                        <div class="line-chart-wrapper">
                                            <p class="margin white-text">Inicios de sesión / Horario</p>
                                            <canvas id="line-chart" height="114"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="work-collections">
                        <div class="row">
                            <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection z-depth-1 animate fadeLeft">
                                    <li class="collection-item avatar">
                                        <i class="material-icons cyan circle">play_circle_filled</i>
                                        <h6 class="collection-header m-0">Videos más vistos</h6>
                                        <p>Todas las categorías</p>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">100% grupero</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">360,748</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">La bascula</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">560,748</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">La zona</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">260,748</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">La Libretas</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">160,748</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Patrimonio mundial</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">90,748</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Plaza sesamo</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">80,748</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Red México</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">70,748</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Reporteros</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">60,748</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Ver y creer</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">10,748</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s12 m12 l6">
                                <ul id="issues-collection" class="collection z-depth-1 animate fadeRight">
                                    <li class="collection-item avatar">
                                        <i class="material-icons red accent-2 circle">person</i>
                                        <h6 class="collection-header m-0">Porcentaje por categoría</h6>
                                        <p>Todas las categorías</p>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Noticieros</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">20%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Opinión</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">15%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Identidad</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">15%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Infantil</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">13%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Jóvenes</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">7%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Especiales</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">7%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Entretenimiento</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">5%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Deportes</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">5%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Institucionales</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">5%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Mujeres</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">5%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Cápsulas</p>
                                            </div>
                                            <div class="col s6 uk-text-right">
                                                <span class="font-bold c-gray-dark">4%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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