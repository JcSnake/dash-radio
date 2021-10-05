<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-user-app.php') ?>
        <div id="main">
            <h2 class="uk-margin-top w-95 uk-container-center c-gray">Usuarios App (232,000)</h2>
            <div class="uk-container-center w-95 bg-white uk-padding-small">
                <div class="uk-flex uk-flex-right p-table uk-padding-bottom-remove uk-padding-top-remove">
                    <form class="uk-form uk-width-2-3 uk-margin-top uk-grid uk-grid-small uk-flex uk-flex-right">
                        <div class="uk-width-1-3">
                            <input class="uk-width-1-1 uk-form-small browser-default brd-form-style" type="text" placeholder="Buscar...">
                        </div>
                        <div class="uk-width-1-6">
                            <button class="uk-button uk-width-1-1 uk-button-small btn-search">XLS</button>
                        </div>
                    </form>
                </div>
                <div class="uk-width-1-1 uk-container-center p-table">
                    <table class="uk-table" id="userTable">
                        <thead>
                            <tr>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">ID</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Nombre</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Correo</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Localización</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Fecha de creación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">Toluca</td>
                                <td class="uk-text-center">16/01/19</td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">23452</td>
                                <td class="uk-text-center">Aline Salas</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">Metepec</td>
                                <td class="uk-text-center">17/01/19</td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">5324130</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">Valle de Bravo</td>
                                <td class="uk-text-center">18/01/19</td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">97410130</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">Toluca</td>
                                <td class="uk-text-center">16/01/19</td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">14055475</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">Metepec</td>
                                <td class="uk-text-center">16/01/19</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php include_once('template/scripts.php') ?>
    </body>
    <script type="text/javascript" charset="utf8" src="assets/libs/DataTables/datatables.js"></script>
    <script>
        $(document).ready( function () {
            dtOption = {
                "iDisplayLength": 7,
                "dom":"tpi",
                language: {
                "sProcessing":     "",
                "sLengthMenu":     "",
                "sZeroRecords":    "",
                "sEmptyTable":     "",
                "sInfo":           "Mostrando  _START_ al _END_ de  _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "",
                "sInfoPostFix":    "",
                "sSearch":         "",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "",
                "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Previo"
                },
                }
            };
            $('#userTable').DataTable(dtOption);
        });
    </script>
</html>