<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns" style="height: 190%">
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
                        <h4 class="p-blocks">Nueva notificación</h4>
                    </div>
                    <form class="uk-form uk-grid">
                        <div class="uk-width-1-2">
                            <div class="uk-width-1-1">
                                <label class="f-label-m" for="titleNotification">Título de la notificación</label>
                                <input class="uk-margin-small-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="Titulo de notificación" name="titleNotification" id="inptitleNotification">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label class="f-label-m" for="mensaje">Mensaje</label>
                                <textarea name="mensaje" id="txtMensaje" cols="30" rows="3" placeholder="Escribe tu mensaje"></textarea>
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label class="f-label-m" for="linkNotification">Link</label>
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
                                <input type="checkbox">
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
                                <input type="checkbox">
                                <span class="">Toluca</span>
                            </label>
                        </div>
                    </div>
                    <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                        <button id="sendNotification" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple" data-uk-modal="{target:'#modal-notification'}">Enviar</button>
                        <button id="cancelNotification" class="uk-button uk-width-1-5 btn-forms-t">Cancelar</button>
                    </div>
                </div>
            </div>
            <div class="uk-container-center w-95 bg-white uk-padding-small uk-margin-large-top uk-block">
                <div class="bg-gray w-95 uk-container-center">
                    <h4 class="p-blocks">Historial de notificaciones</h4>
                </div>
                <div class="uk-flex uk-flex-right uk-padding-bottom-remove uk-padding-top-remove w-95">
                    <form class="uk-form uk-width-1-1 uk-margin-top uk-grid uk-grid-small uk-flex uk-flex-right">
                        <div class="uk-width-1-4">
                            <select class="uk-width-1-1 uk-form-small browser-default brd-form-style" name="localizacion" id="selectLocalizacion">
                                <option value="0">Localización</option>
                            </select>
                        </div>
                        <div class="uk-width-1-4">
                            <input class="uk-width-1-1 uk-form-small browser-default brd-form-style" type="text" placeholder="Buscar...">
                        </div>
                        <div class="uk-width-1-10">
                            <button class="uk-button uk-width-1-1 uk-button-small btn-search">XLS</button>
                        </div>
                    </form>
                </div>
                <div class="w-95 uk-container-center uk-margin-top">
                    <table class="uk-table" id="userTable">
                        <thead>
                            <tr>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">ID</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Título</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Localización</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Fecha de envío</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Usuario</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Lluvia</td>
                                <td class="uk-text-center">Toluca</td>
                                <td class="uk-text-center">16/01/19</td>
                                <td class="uk-text-center">Alejandra Álvarez</td>
                                <td class="uk-text-center">
                                    <a href="detalles-notificaciones.php" class="uk-button btn-search"><i class="c-icons uk-icon-eye"></i></a>
                                </td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Cierre de calles</td>
                                <td class="uk-text-center">Metepec</td>
                                <td class="uk-text-center">17/01/19</td>
                                <td class="uk-text-center">Alejandra Álvarez</td>
                                <td class="uk-text-center">
                                    <a href="detalles-notificaciones.php" class="uk-button btn-search"><i class="c-icons uk-icon-eye"></i></a>
                                </td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Deportes</td>
                                <td class="uk-text-center">Valle de Bravo</td>
                                <td class="uk-text-center">18/01/19</td>
                                <td class="uk-text-center">Alejandra Álvarez</td>
                                <td class="uk-text-center">
                                    <a href="detalles-notificaciones.php" class="uk-button btn-search"><i class="c-icons uk-icon-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="modal-notification" class="uk-modal">
            <div class="uk-modal-dialog border-radius-5 w-modal-cuenta">
                <div>
                    <div class="uk-text-center">
                        <h3 class="uk-width-9-10 uk-container-center uk-text-bold">¿Estás seguro que deseas enviar esta notificación?</h3>
                        <div><button class="uk-button btn-purple uk-width-4-10 uk-modal-close">Sí, enviar</button></div>
                        <div class="uk-margin-top"><button class="uk-button btn-gray uk-width-4-10">Cancelar</button></div>
                    </div>
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