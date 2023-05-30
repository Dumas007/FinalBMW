const carousel = document.querySelector('.carousel');
const carouselImages = carousel.querySelectorAll('img');
const carouselInterval = 5000; // Intervalo de tiempo entre imágenes (en milisegundos)
let currentImageIndex = 0;

// Función para mostrar la siguiente imagen del carrusel
function showNextImage() {
  // Ocultar la imagen actual
  carouselImages[currentImageIndex].classList.remove('show');
  // Calcular el índice de la siguiente imagen
  currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
  // Mostrar la siguiente imagen
  carouselImages[currentImageIndex].classList.add('show');
}

// Iniciar el carrusel
carouselImages[currentImageIndex].classList.add('show');
setInterval(showNextImage, carouselInterval);
