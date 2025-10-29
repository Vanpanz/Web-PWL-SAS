document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.carousel');
  const cards = document.querySelectorAll('.card');
  const nextBtn = document.querySelector('.next');
  const prevBtn = document.querySelector('.prev');
  const dotsContainer = document.querySelector('.carousel-indicators');

  if (!track || cards.length === 0 || !nextBtn || !prevBtn || !dotsContainer) {
    console.error("Satu atau lebih elemen HTML tidak ditemukan.");
    return;
  }

  let currentIndex = 0;
  const cardsPerSlide = 3;
  const cardWidth = cards[0].getBoundingClientRect().width;
  const gap = 20; // samakan dengan CSS
  const slideWidth = (cardWidth + gap) * cardsPerSlide - gap;

  const updateCarousel = () => {
    const offset = -currentIndex * slideWidth;
    track.style.transform = `translateX(${offset}px)`;

    const dots = dotsContainer.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === currentIndex);
    });
  };

  nextBtn.addEventListener('click', () => {
    if (currentIndex < Math.ceil(cards.length / cardsPerSlide) - 1) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
  });

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = Math.ceil(cards.length / cardsPerSlide) - 1;
    }
    updateCarousel();
  });

  dotsContainer.innerHTML = '';
  for (let i = 0; i < Math.ceil(cards.length / cardsPerSlide); i++) {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    dot.addEventListener('click', () => {
      currentIndex = i;
      updateCarousel();
    });
    dotsContainer.appendChild(dot);
  }

  updateCarousel();
});
