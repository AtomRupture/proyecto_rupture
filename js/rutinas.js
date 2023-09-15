let Imgfrontal = document.getElementById("frontal");
let ImgTrasera = document.getElementById("trasero");
let CambioImg = document.getElementById("img_change");

Imgfrontal.onclick = function(){
    CambioImg.src = "img/rutinas/personaje_frontal.svg";
}

ImgTrasera.onclick = function(){
    CambioImg.src = "img/rutinas/personaje_espalda.svg";
}