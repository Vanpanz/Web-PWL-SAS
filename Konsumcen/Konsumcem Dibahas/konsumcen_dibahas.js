document.addEventListener('DOMContentLoaded', () => {
  // sidebar selection
  document.querySelectorAll('.side-item').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.side-item').forEach(b=>b.classList.remove('active'));
      btn.classList.add('active');
      // placeholder: could load section via AJAX
    });
  });

  // like button toggle + count
  document.querySelectorAll('.post .action.like').forEach(btn => {
    btn.addEventListener('click', () => {
      const countEl = btn.querySelector('.count');
      let count = Number(btn.getAttribute('data-count') || countEl.textContent || 0);
      const pressed = btn.getAttribute('aria-pressed') === 'true';
      if (pressed) {
        count = Math.max(0, count - 1);
        btn.setAttribute('aria-pressed','false');
        btn.classList.remove('liked');
      } else {
        count = count + 1;
        btn.setAttribute('aria-pressed','true');
        btn.classList.add('liked');
      }
      btn.setAttribute('data-count', count);
      if (countEl) countEl.textContent = count;
    });
  });

  // simple event delegation for comment/share (placeholder)
  document.body.addEventListener('click', (e) => {
    const c = e.target.closest('.action.comment');
    if (c) {
      alert('Buka komentar (placeholder)');
    }
    const s = e.target.closest('.action.share');
    if (s) {
      alert('Bagikan link (placeholder)');
    }
  });
});