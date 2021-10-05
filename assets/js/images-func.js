$("#imgInp").change(function() {
    let img = document.getElementById('imgBanner');
    readURL(this, img);
});

$("#imgInpSquare").change(function() {
    let img = document.getElementById('imgSquare');
    readURL(this, img);
});

$("#imgInpRect").change(function() {
    let img = document.getElementById('imgRect');
    readURL(this, img);
});

$('#imgInpFirst').change(function() {
    let img = document.getElementById('imgHomeFirst');
    readURL(this, img);
});

$('#imgInpSecond').change(function() {
    let img = document.getElementById('imgHomeSecond');
    readURL(this, img);
});

$('#imgInpThird').change(function() {
    let img = document.getElementById('imgHomeThird');
    readURL(this, img);
});

function readURL(input,img) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            img.setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}