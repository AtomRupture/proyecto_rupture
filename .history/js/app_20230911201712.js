"use strict";
// alert("header test");

const enviar_form = () =>{
    this.location = "login.php";
}

let submenu = document.getElementById("sub-menu")

function Opem(){
  submenu.classList.toggle("open-menu")
}



//HAMBURGUESA
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

//CAMBIAR HEADER DE COLOR AL BAJAR
window.addEventListener("scroll", function() {
  var H = document.getElementById("headt"); // el objeto que quieres cambiar de color
  var y = window.scrollY; // la posición vertical de la página
  if (y > 600) { // si la posición es menor que 100px
    H.style.backgroundColor = "black"; 
  }else if(y ){
        H.style.backgroundColor = "rgba(0, 0, 0, 0.4)"; 
  }
});

}

//SIDEBAR
var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
  if(!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if(sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}

function se(){
  window.location.href = "../php/Buscador.php";
}

//BOTÓN UP
window.onscroll = function(){
  if(document.documentElement.scrollTop >100){
    document.querySelector('.go-top-container')
    .classList.add('show');
  }else{
    document.querySelector('.go-top-container')
    .classList.remove('show');
  }
}

document.querySelector('.go-top-container')
.addEventListener('click', ()=>{
  window.scrollTo({
    top:0,
    behavior: 'smooth'
  });
});

// IMAGENES EN MOVIMIENTO SECCIÓN 2
/*
 JS to toggle scroll axis styles

const control = document.getElementById("direction-toggle");
const marquees = document.querySelectorAll(".marquee");
const wrapper = document.querySelector(".wrapper");

control.addEventListener("click", () => {
  control.classList.toggle("toggle--vertical");
  wrapper.classList.toggle("wrapper--vertical");
  [...marquees].forEach((marquee) =>
    marquee.classList.toggle("marquee--vertical")
  );
});
*/


// Tarjetas sección 5
let activeIndex = 0;

const groups = document.getElementsByClassName("card-group");

const handleLoveClick = () => {
  const nextIndex = activeIndex + 1 <= groups.length - 1 ? activeIndex + 1 : 0;
  
  const currentGroup = document.querySelector(`[data-index="${activeIndex}"]`),
        nextGroup = document.querySelector(`[data-index="${nextIndex}"]`);
        
  currentGroup.dataset.status = "after";
  
  nextGroup.dataset.status = "becoming-active-from-before";
  
  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndex = nextIndex;
  });
}

const handleHateClick = () => {
  const nextIndex = activeIndex - 1 >= 0 ? activeIndex - 1 : groups.length - 1;
  
  const currentGroup = document.querySelector(`[data-index="${activeIndex}"]`),
        nextGroup = document.querySelector(`[data-index="${nextIndex}"]`);
  
  currentGroup.dataset.status = "before";
  
  nextGroup.dataset.status = "becoming-active-from-after";
  
  setTimeout(() => {
    nextGroup.dataset.status = "active";
    activeIndex = nextIndex;
  });
}
//seccion 6

