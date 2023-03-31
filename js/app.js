"use strict";

  // Seleccionar los elementos del DOM
  const menu = document.querySelector(".menu");
  const hamburger = document.querySelector(".hamburger");

  // Añadir un evento de click al botón hamburguesa
  hamburger.addEventListener("click", function() {
    
    // Alternar la clase active al menú y al botón
    menu.classList.toggle("active");
    hamburger.classList.toggle("active");
    
  });
  