(() => {
  const imgs = Array.from(document.querySelectorAll('.gallery img'));
  const lightbox = document.getElementById('lightbox');
  const lbImg = lightbox && lightbox.querySelector('.lb-img');
  const btnClose = lightbox && lightbox.querySelector('.lb-close');
  const btnPrev = lightbox && lightbox.querySelector('.lb-prev');
  const btnNext = lightbox && lightbox.querySelector('.lb-next');
  let index = 0;

  if (!imgs.length || !lightbox) return;

  function openAt(i) {
    index = (i + imgs.length) % imgs.length;
    lbImg.src = imgs[index].src;
    lightbox.classList.add('active');
    lightbox.setAttribute('aria-hidden', 'false');
  }
  function close() {
    lightbox.classList.remove('active');
    lightbox.setAttribute('aria-hidden', 'true');
  }

  imgs.forEach((img, i) => {
    img.addEventListener('click', () => openAt(i));
  });
  btnClose.addEventListener('click', close);
  btnPrev.addEventListener('click', () => openAt(index - 1));
  btnNext.addEventListener('click', () => openAt(index + 1));
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) close();
  });
  window.addEventListener('keydown', (e) => {
    if (lightbox.classList.contains('active')) {
      if (e.key === 'Escape') close();
      if (e.key === 'ArrowLeft') openAt(index - 1);
      if (e.key === 'ArrowRight') openAt(index + 1);
    }
  });
})();

document.addEventListener('DOMContentLoaded', () => {
  // -- gallery lightbox --
  (function galleryLightbox() {
    const imgs = Array.from(document.querySelectorAll('.gallery img'));
    const lightbox = document.getElementById('lightbox');
    if (!imgs.length || !lightbox) return;
    const lbImg = lightbox.querySelector('.lb-img');
    const btnClose = lightbox.querySelector('.lb-close');
    const btnPrev = lightbox.querySelector('.lb-prev');
    const btnNext = lightbox.querySelector('.lb-next');
    let index = 0;

    function openAt(i) {
      index = (i + imgs.length) % imgs.length;
      lbImg.src = imgs[index].src;
      lightbox.classList.add('active');
      lightbox.setAttribute('aria-hidden', 'false');
    }
    function close() {
      lightbox.classList.remove('active');
      lightbox.setAttribute('aria-hidden', 'true');
    }

    imgs.forEach((img, i) => img.addEventListener('click', () => openAt(i)));
    if (btnClose) btnClose.addEventListener('click', close);
    if (btnPrev) btnPrev.addEventListener('click', () => openAt(index - 1));
    if (btnNext) btnNext.addEventListener('click', () => openAt(index + 1));
    lightbox.addEventListener('click', (e) => { if (e.target === lightbox) close(); });
    window.addEventListener('keydown', (e) => {
      if (!lightbox.classList.contains('active')) return;
      if (e.key === 'Escape') close();
      if (e.key === 'ArrowLeft') openAt(index - 1);
      if (e.key === 'ArrowRight') openAt(index + 1);
    });
  })();

  // -- reviews percent & bar setup --
  (function reviewsUI() {
    // animate SVG circle percent(s)
    const recs = Array.from(document.querySelectorAll('.rating-recommend[data-percent]'));
    recs.forEach((rec) => {
      const percent = Math.max(0, Math.min(100, Number(rec.getAttribute('data-percent')) || 0));
      const circlePath = rec.querySelector('.rating-circle .circle');
      const percentEl = rec.querySelector('.percent');
      if (!circlePath || !percentEl) {
        // fallback: set text only
        percentEl && (percentEl.textContent = `${percent}%`);
        return;
      }

      // get total length of path and animate stroke-dasharray
      const total = Math.floor(circlePath.getTotalLength ? circlePath.getTotalLength() : 100);
      circlePath.style.transition = 'stroke-dasharray 800ms ease';
      // start at 0
      const setStroke = (p) => {
        const filledLen = (p / 100) * total;
        // set stroke-dasharray as "<filled> <remaining>"
        circlePath.setAttribute('stroke-dasharray', `${filledLen} ${total}`);
        percentEl.textContent = `${Math.round(p)}%`;
      };

      // simple incremental animation
      let current = 0;
      const step = () => {
        current += Math.max(1, percent / 30); // speed adjustment
        if (current >= percent) {
          setStroke(percent);
        } else {
          setStroke(current);
          requestAnimationFrame(step);
        }
      };
      // small delay so UI painted
      setTimeout(() => requestAnimationFrame(step), 150);
    });

    // set bar-fill widths if using data-percent attributes on .bar-fill
    const barFills = Array.from(document.querySelectorAll('.bar-fill[data-percent]'));
    barFills.forEach(b => {
      const p = Math.max(0, Math.min(100, Number(b.getAttribute('data-percent')) || 0));
      b.style.width = p + '%';
    });
  })();
});