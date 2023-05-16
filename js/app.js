"use strict";

const enviar_form = () =>{
    this.location = "login.php";
}

window.onload=function(){


const nav = document.querySelector(".nav");
const abrir = document.querySelector(".a-mu");
const cerrar = document.querySelector(".c-mu");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})

// document.getElementById("abrir").style.display = "block"

/*window.addEventListener("scroll", function() {
  var H = document.getElementById("headt"); // el objeto que quieres cambiar de color
  var y = window.scrollY; // la posición vertical de la página
  if (y > 600) { // si la posición es menor que 100px
    H.style.backgroundColor = "black"; 
  }else if(y ){
        H.style.backgroundColor = "rgba(0, 0, 0, 0.4)"; 
  }
});
*/
}