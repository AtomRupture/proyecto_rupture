

const slider = document.querySelector('.slider');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
let count = 0;

function slide() {
  slider.style.transform = `translateX(-${count * 100}%)`;
}

prevButton.addEventListener('click', () => {
  count--;
  if (count < 0) {
    count = 2;  // Ajusta este valor según la cantidad de imágenes que tengas
  }
  slide();
});

nextButton.addEventListener('click', () => {
  count++;
  if (count > 2) {
    count = 0;  // Ajusta este valor según la cantidad de imágenes que tengas
  }
  slide();
});