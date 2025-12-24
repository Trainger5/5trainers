<script>
(function () {
  // Event delegation for any button with data-oc-target
  document.addEventListener('click', function (e) {
    const btn = e.target.closest('[data-oc-target]');
    if (!btn) return;
    const targetSel = btn.getAttribute('data-oc-target');
    const panel = document.querySelector(targetSel);
    if (panel) openOC(panel);
  });

  // Close buttons
  document.addEventListener('click', function (e) {
    if (e.target.closest('[data-oc-close]')) {
      const panel = e.target.closest('.oc');
      if (panel) closeOC(panel);
    }
  });

  // Click outside using overlay
  function ensureOverlay() {
    let overlay = document.querySelector('.oc-overlay');
    if (!overlay) {
      overlay = document.createElement('div');
      overlay.className = 'oc-overlay';
      document.body.appendChild(overlay);
      overlay.addEventListener('click', function () {
        document.querySelectorAll('.oc.is-open').forEach(closeOC);
      });
    }
    return overlay;
  }

  function openOC(panel) {
    const overlay = ensureOverlay();
    panel.classList.add('is-open');
    overlay.classList.add('is-open');
    panel.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeOC(panel) {
    const overlay = ensureOverlay();
    panel.classList.remove('is-open');
    // If none open, hide overlay and restore scroll
    setTimeout(() => {
      if (!document.querySelector('.oc.is-open')) {
        overlay.classList.remove('is-open');
        document.body.style.overflow = '';
      }
    }, 10);
    panel.setAttribute('aria-hidden', 'true');
  }

  // Esc key closes the last open offcanvas
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      const openPanels = document.querySelectorAll('.oc.is-open');
      const last = openPanels[openPanels.length - 1];
      if (last) closeOC(last);
    }
  });
})();
</script>
