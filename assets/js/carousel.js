const carouselItems = document.querySelectorAll('.slide');
let currentIndex = 0;

function showSlide(index) {
  carouselItems.forEach((item) => {
    item.style.display = 'none';
    item.style.opacity = 0;
  });

  carouselItems[index].style.display = 'block';
  carouselItems[index].offsetHeight;
  carouselItems[index].style.opacity = 1;
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % carouselItems.length;
  if (currentIndex > carouselItems.length - 1) currentIndex = 0;
  showSlide(currentIndex);
}

showSlide(currentIndex);
setInterval(nextSlide, 3000);
