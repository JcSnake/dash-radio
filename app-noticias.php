<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php') ?>
    <title>Mi cuenta</title>
</head>
<body  class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns" style="height:100%">
    <?php include_once('template/header.php') ?>
    <?php include_once('template/nav-bar/nav-app-noticias.php') ?>
    <div id="main" class="bg-gray" style="height: 100%">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <ul class="uk-breadcrumb uk-container-center uk-margin-top">
                        <li><span class="uk-h2">App</span></li>
                        <li class="uk-active"><span class="uk-h2">Noticias</li>
                    </ul>
                    <div class="bg-white uk-block p-table pt0">
                        <ul class="uk-tab uk-width-1-1" data-uk-tab="{connect:'#tabs-radio'}">
                            <li class="uk-active"><a href="">Información general</a></li>
                            <li><a href="">Categorías</a></li>
                        </ul>
                        <ul id="tabs-radio" class="uk-switcher uk-margin uk-form">
                            <li class="w-95 uk-container-center">
                                <div class="uk-width-1-2">
                                    <label for="titleSection" class="f-label-m">Título de la sección</label>
                                    <input class="uk-margin-small-top uk-form-small uk-width-1-1 browser-default" type="text" placeholder="Sección de noticia" name="titleSection" id="inpLinkStreaming">
                                </div>
                                <div class="uk-width-1-4 uk-margin-top">
                                    <label for="imgSquare" class="f-label-m">Agregar imagen de botón (000x000 px)</label>
                                    <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file bg-white div-image">
                                        <div class="uk-text-center">
                                            <div class="uk-form-file">
                                                <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                                    <img id="imgSquare" src="assets/images/radio/uploadCuad.png" alt="banner" width="100%">
                                                </div>
                                                <input type='file' id="imgInpSquare" class="uk-height-1-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-block uk-width-1-1 uk-padding-bottom-remove">
                                    <button id="saveImgApp" class="uk-button uk-contrast uk-width-1-5 uk-margin-right btn-purple">Guardar</button>
                                    <button id="cancelarImgApp" class="uk-button uk-width-1-5 btn-forms-t">Cancelar</button>
                                </div>
                            </li>
                            <li>
                                <div class="uk-flex uk-flex-right p-table uk-padding-bottom-remove uk-padding-top-remove">
                                    <form class="uk-form uk-width-2-3 uk-margin-top uk-grid uk-grid-small uk-flex uk-flex-right">
                                        <div class="uk-width-1-4">
                                            <input class="uk-width-1-1 uk-form-small browser-default brd-form-style" type="text" placeholder="Buscar...">
                                        </div>
                                        <div class="w5">
                                            <a href="app-crear-noticia.php" class="uk-button uk-width-1-1 uk-button-small btn-search">
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
                                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Categoría</th>
                                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Fecha de creación</th>
                                                <th class="uk-text-center c-black uk-text-capitalize font-bold">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="uk-table-divider">
                                                <td class="uk-text-center">893864</td>
                                                <td class="uk-text-center">Estado de México</td>
                                                <td class="uk-text-center">16/01/19</td>
                                                <td class="uk-text-center">
                                                    <a href="app-editar-noticias.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                                    <a href="#modalConfirmDelete" class="uk-button btn-search" data-uk-modal="{center:true}"><i class="c-icons uk-icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="uk-table-divider">
                                                <td class="uk-text-center">893864</td>
                                                <td class="uk-text-center">Nacional</td>
                                                <td class="uk-text-center">17/01/19</td>
                                                <td class="uk-text-center">
                                                    <a href="app-editar-noticias.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                                    <a href="#modalConfirmDelete" class="uk-button btn-search" data-uk-modal="{center:true}"><i class="c-icons uk-icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="uk-table-divider">
                                                <td class="uk-text-center">893864</td>
                                                <td class="uk-text-center">Internacional</td>
                                                <td class="uk-text-center">18/01/19</td>
                                                <td class="uk-text-center">
                                                    <a href="app-editar-noticias.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                                    <a href="#modalConfirmDelete" class="uk-button btn-search" data-uk-modal="{center:true}"><i class="c-icons uk-icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="uk-table-divider">
                                                <td class="uk-text-center">893864</td>
                                                <td class="uk-text-center">Política</td>
                                                <td class="uk-text-center">19/01/19</td>
                                                <td class="uk-text-center">
                                                    <a href="app-editar-noticias.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                                    <a href="#modalConfirmDelete" class="uk-button btn-search" data-uk-modal="{center:true}"><i class="c-icons uk-icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="uk-table-divider">
                                                <td class="uk-text-center">893864</td>
                                                <td class="uk-text-center">Deportes</td>
                                                <td class="uk-text-center">20/01/19</td>
                                                <td class="uk-text-center">
                                                    <a href="app-editar-noticias.php" class="uk-button btn-search"><i class="c-icons uk-icon-pencil"></i></a>
                                                    <a href="#modalConfirmDelete" class="uk-button btn-search" data-uk-modal="{center:true}"><i class="c-icons uk-icon-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modalConfirmDelete" class="uk-modal">
        <div class="uk-modal-dialog border-radius-5 w-modal-cuenta">
            <div>
                <div class="uk-text-center">
                    <h3 class="uk-width-9-10 uk-container-center uk-text-bold">¿Estás seguro que deseas borrar esta noticia?</h3>
                    <div><button class="uk-button btn-purple uk-width-4-10 uk-modal-close">Borrar</button></div>
                    <div class="uk-margin-top"><button class="uk-button btn-gray uk-width-4-10">Cancelar</button></div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include_once('template/scripts.php')?>
<script src="assets/js/images-func.js"></script>

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