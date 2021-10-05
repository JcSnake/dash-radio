let btnEditBanner = document.getElementById('editBanner');
let btnEditFields = document.getElementById('editFields');
let inpBanner = document.getElementById('imgInp');
let selectGen = document.getElementById('sexoBanner1');
let selectEdad = document.getElementById('edadBanner1');

if(btnEditBanner) {
    btnEditBanner.addEventListener('click', function(e) {
        removeClass('imgBanner');
        enableElem('checkBann1');
        inpBanner.removeAttribute('disabled');
        selectGen.removeAttribute('disabled');
        selectEdad.removeAttribute('disabled');
    });
}

if(btnEditFields) {
    btnEditFields.addEventListener('click', function(e) {
        removeClass('imgSquare');
        getInputsForm('formTvLive');
    });
}


let removeClass = (elem) => {
    let img = document.getElementById(elem);
    img.classList.remove('opacityDisabled');
}

let enableElem = (elem) => {
    let inpts = document.getElementsByName(elem);
    let arrCh = [];
    for (let i = 0; i <inpts.length; i++) {
        const element = inpts[i];
        if(element.type == 'checkbox' && element.disabled == true) {
            arrCh.push(element);
        }
    }
    for (let index = 0; index < arrCh.length; index++) {
        const element = arrCh[index];
        element.removeAttribute('disabled');
    }
}

let getInputsForm = (nameForm) => {
    let inpts = document.forms[nameForm].getElementsByTagName('input');
    let textA = document.forms[nameForm].getElementsByTagName('textarea')
    for (let i = 0; i < inpts.length; i++) {
       const element = inpts[i];
       if(element.disabled == true) {
           element.removeAttribute('disabled');
       }
    }
    for (let index = 0; index < textA.length; index++) {
        const element = textA[index];
        if(element.disabled == true) {
            element.removeAttribute('disabled');
        }
    }
}