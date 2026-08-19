/* ============================================================
   PT REVERE — script.js
   Navbar scroll state, mobile drawer, scroll reveal, counters,
   testimonial nav, project filter, contact form validation.
   ============================================================ */
document.addEventListener('DOMContentLoaded', function () {

  /* ---------- Navbar scroll state ---------- */
  var nav = document.getElementById('siteNav');
  if (nav) {
    var heroEl = document.querySelector('.hero');
    if (heroEl) nav.classList.add('transparent-hero');
    var toggleSolid = function () {
      if (window.scrollY > 40) nav.classList.add('solid');
      else nav.classList.remove('solid');
    };
    toggleSolid();
    window.addEventListener('scroll', toggleSolid, { passive: true });
  }

  /* ---------- Mobile drawer ---------- */
  var navToggle = document.getElementById('navToggle');
  var drawer = document.getElementById('mobileDrawer');
  var overlay = document.getElementById('drawerOverlay');
  function closeDrawer() {
    drawer.classList.remove('open');
    overlay.classList.remove('open');
    navToggle.setAttribute('aria-expanded', 'false');
    drawer.setAttribute('aria-hidden', 'true');
  }
  function openDrawer() {
    drawer.classList.add('open');
    overlay.classList.add('open');
    navToggle.setAttribute('aria-expanded', 'true');
    drawer.setAttribute('aria-hidden', 'false');
  }
  if (navToggle && drawer && overlay) {
    navToggle.addEventListener('click', function () {
      drawer.classList.contains('open') ? closeDrawer() : openDrawer();
    });
    overlay.addEventListener('click', closeDrawer);
    drawer.querySelectorAll('a').forEach(function (a) { a.addEventListener('click', closeDrawer); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeDrawer(); });
  }

  /* ---------- Scroll reveal ---------- */
  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealEls.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in-view'); });
  }

  /* ---------- Counter animation ---------- */
  var counters = document.querySelectorAll('.stat-value');
  if ('IntersectionObserver' in window && counters.length) {
    var counterIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        var target = parseInt(el.getAttribute('data-count'), 10) || 0;
        var numSpan = el.querySelector('.num');
        var duration = 1400;
        var start = null;
        function step(ts) {
          if (!start) start = ts;
          var progress = Math.min((ts - start) / duration, 1);
          var eased = 1 - Math.pow(1 - progress, 3);
          numSpan.textContent = Math.floor(eased * target);
          if (progress < 1) requestAnimationFrame(step);
          else numSpan.textContent = target;
        }
        requestAnimationFrame(step);
        counterIO.unobserve(el);
      });
    }, { threshold: 0.4 });
    counters.forEach(function (el) { counterIO.observe(el); });
  }

  /* ---------- Testimonial track nav ---------- */
  var track = document.getElementById('testiTrack');
  var prevBtn = document.getElementById('testiPrev');
  var nextBtn = document.getElementById('testiNext');
  if (track && prevBtn && nextBtn) {
    var scrollAmount = function () {
      var card = track.querySelector('.testi-card');
      return card ? card.offsetWidth + 26 : 400;
    };
    nextBtn.addEventListener('click', function () { track.scrollBy({ left: scrollAmount(), behavior: 'smooth' }); });
    prevBtn.addEventListener('click', function () { track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' }); });
  }

  /* ---------- Project filter (projects.php) ---------- */
  var filterBtns = document.querySelectorAll('.filter-btn');
  var projectItems = document.querySelectorAll('.project-item');
  if (filterBtns.length && projectItems.length) {
    filterBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        filterBtns.forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');
        var filter = btn.getAttribute('data-filter');
        projectItems.forEach(function (item) {
          var match = filter === 'all' || item.getAttribute('data-category') === filter;
          item.classList.toggle('hidden-item', !match);
        });
      });
    });
  }

  /* ---------- Contact form validation ---------- */
  var form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var valid = true;
      var fields = form.querySelectorAll('[data-required]');
      fields.forEach(function (field) {
        var errorEl = document.getElementById(field.id + 'Error');
        var value = field.value.trim();
        var isEmail = field.type === 'email';
        var ok = value.length > 0 && (!isEmail || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value));
        if (!ok) {
          valid = false;
          if (errorEl) errorEl.textContent = isEmail && value.length ? 'Format email tidak valid.' : 'Kolom ini wajib diisi.';
          field.setAttribute('aria-invalid', 'true');
        } else {
          if (errorEl) errorEl.textContent = '';
          field.removeAttribute('aria-invalid');
        }
      });
      var successEl = document.getElementById('formSuccess');
      if (valid) {
        if (successEl) {
          successEl.textContent = 'Terima kasih! Pesan Anda berhasil dikirim, tim kami akan segera menghubungi Anda.';
          successEl.style.display = 'block';
        }
        form.reset();
      } else if (successEl) {
        successEl.style.display = 'none';
      }
    });
  }
});
