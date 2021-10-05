var a = 1;
var btnDeleteBanner = document.getElementById('deleteBanner');
var btncreateBanner = document.getElementById('createBanner');
var contentBanner = document.getElementById('bannerContent');

btnDeleteBanner.addEventListener('click', function() {
    document.getElementById('bannerDefault').remove();
});

btncreateBanner.addEventListener('click', function() {
    agregarBanner();
    a++;
});

function agregarBanner() {
    var divBanner = document.createElement('div');
    var banner = `<div id="bannerDefault${a}" class="bg-gray uk-margin-top">
                    <h3 class="p-blocks uk-margin-bottom-remove">Banner de campaña (1687 x 483 px)</h3>
                    <div class="uk-margin-left uk-form uk-margin-small-top uk-container-center">
                        <label for="nameBanner">Nombre del anuncio</label><br>
                        <input type="text" class="browser-default uk-width-1-3 brd-radius-5 uk-form-small">
                    </div>
                    <div class="p-table uk-padding-top-remove uk-padding-bottom-remove">
                        <div id="upload-drop" class="uk-width-1-1 uk-margin-top brd-input-file p0 bg-white">
                            <div class="uk-text-center">
                                <div class="uk-form-file">
                                    <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                        <img id="imgBanner" src="assets/images/radio/uploadRect.png" alt="banner" width="100%">
                                    </div>
                                    <input type='file' id="imgInp${a}" class="uk-width-1-1">
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
                    <div id="containerDeleteButton${a}" class="uk-margin-top uk-block uk-margin-left">
                        <button type="button" id="deleteBanner${a}" class="uk-button btn-forms-t" onClick="reply_click(this.id)">Eliminar banner</button>
                    </div>
                </div>`;
    var parentElement = document.getElementById('bannerDinamic');
    divBanner.innerHTML=banner;
    parentElement.appendChild(divBanner)
}

function reply_click(clicked_id) {
    var parentBtn = document.getElementById(clicked_id).parentNode.id;
    var parentOfParent = document.getElementById(parentBtn).parentNode.id;
    document.getElementById(parentOfParent).remove();
}