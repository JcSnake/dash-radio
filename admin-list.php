<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php include_once('template/head.php')?>
   </head>
  <!-- END: Head-->
    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
        <?php include_once('template/header.php') ?>
        <?php include_once('template/nav-bar/nav-admin.php') ?>
        <div id="main">
            <h2 class="uk-margin-top w-95 uk-container-center c-gray">Administrador</h2>
            <div class="uk-container-center w-95 bg-white uk-padding-small">
                <div class="uk-flex uk-flex-right p-table uk-padding-bottom-remove uk-padding-top-remove">
                    <form class="uk-form uk-width-3-4 uk-margin-top uk-grid uk-grid-small uk-flex uk-flex-right">
                        <div class="uk-width-1-4">
                            <select class="uk-width-1-1 uk-form-small browser-default brd-form-style" name="categoria" id="selectCategoria">
                                <option value="0">Categoría</option>
                            </select>
                        </div>
                        <div class="uk-width-1-4">
                            <select class="uk-width-1-1 uk-form-small browser-default brd-form-style" name="programa" id="selectPrograma">
                                <option value="0">Programa</option>
                            </select>
                        </div>
                        <div class="uk-width-1-4">
                            <input class="uk-width-1-1 uk-form-small browser-default brd-form-style" type="text" placeholder="Buscar...">
                        </div>
                        <div class="uk-width-1-10">
                            <button class="uk-button uk-width-1-1 uk-button-small btn-search">XLS</button>
                        </div>
                        <div class="w5">
                            <a href="crear-admin.php" class="uk-button uk-width-1-1 uk-button-small btn-search">
                                <img src="assets/images/radio/plus.svg" width="15" alt="i-plus">
                            </a>
                        </div>
                    </form>
                </div>
                <div class="uk-width-1-1 uk-container-center p-table">
                    <table class="uk-table" id="userTable">
                        <thead>
                            <tr>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">ID</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Nombre</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Tipo de perfil</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Correo</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Fecha de creación</th>
                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">Admin</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">16/01/19</td>
                                <td class="uk-text-center">
                                    <a href="editar-admin.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                    <a href="#modalConfirmDelete" class="uk-button btn-search" data-uk-modal="{center:true}"><i class="c-icons uk-icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">Admin</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">16/01/19</td>
                                <td class="uk-text-center">
                                    <a href="editar-admin.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                    <a href="#" class="uk-button btn-search"><i class="c-icons uk-icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">Admin</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">16/01/19</td>
                                <td class="uk-text-center">
                                    <a href="editar-admin.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                    <a href="#" class="uk-button btn-search"><i class="c-icons uk-icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">Admin</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">16/01/19</td>
                                <td class="uk-text-center">
                                    <a href="editar-admin.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                    <a href="#" class="uk-button btn-search"><i class="c-icons uk-icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">Admin</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">16/01/19</td>
                                <td class="uk-text-center">
                                    <a href="editar-admin.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                    <a href="#" class="uk-button btn-search"><i class="c-icons uk-icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr class="uk-table-divider">
                                <td class="uk-text-center">893864</td>
                                <td class="uk-text-center">Maya Martínez</td>
                                <td class="uk-text-center">Admin</td>
                                <td class="uk-text-center">correo@rtvmxiquense.com</td>
                                <td class="uk-text-center">16/01/19</td>
                                <td class="uk-text-center">
                                    <a href="editar-admin.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                    <a href="#" class="uk-button btn-search"><i class="c-icons uk-icon-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="modalConfirmDelete" class="uk-modal">
            <div class="uk-modal-dialog border-radius-5 w-modal-cuenta">
                <div>
                    <div class="uk-text-center">
                        <h3 class="uk-width-9-10 uk-container-center uk-text-bold">¿Estás seguro que deseas borrar un Administrador/editor?</h3>
                        <div><button class="uk-button btn-purple uk-width-4-10 uk-modal-close">Borrar</button></div>
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