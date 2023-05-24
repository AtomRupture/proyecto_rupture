
const slider = document.querySelector('.slider');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
let count = 0;
let autoSlideInterval;

function slide() {
  slider.style.transform = `translateX(-${count * 100}%)`;
}

function startAutoSlide() {
  autoSlideInterval = setInterval(() => {
    count++;
    if (count > 2) {
      count = 0;  // Ajusta este valor según la cantidad de imágenes que tengas
    }
    slide();
  }, 5000);  // Ajusta este valor para controlar la velocidad del slider (en milisegundos)
}

function stopAutoSlide() {
  clearInterval(autoSlideInterval);
}

prevButton.addEventListener('click', () => {
  count--;
  if (count < 0) {
    count = 2;  // Ajusta este valor según la cantidad de imágenes que tengas
  }
  slide();
  stopAutoSlide();
});

nextButton.addEventListener('click', () => {
  count++;
  if (count > 2) {
    count = 0;  // Ajusta este valor según la cantidad de imágenes que tengas
  }
  slide();
  stopAutoSlide();
});

startAutoSlide();