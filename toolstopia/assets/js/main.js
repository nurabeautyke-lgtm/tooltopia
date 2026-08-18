/* Toolstopia — micro-interactions & progressive enhancement */
(function () {
  'use strict';

  // Sticky header shadow
  var header = document.getElementById('site-header');
  if (header) {
    var onScroll = function () {
      header.classList.toggle('is-stuck', window.scrollY > 8);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // Reveal-on-scroll (respects reduced motion)
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var reveals = document.querySelectorAll('.ts-reveal');
  if (reveals.length && 'IntersectionObserver' in window && !reduce) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.12 });
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('is-in'); });
  }

  // Highlight active mobile bottom-nav item
  var here = location.pathname.replace(/\/+$/, '');
  document.querySelectorAll('.ts-bottomnav a').forEach(function (a) {
    var href = (a.getAttribute('href') || '').replace(/^https?:\/\/[^/]+/, '').replace(/\/+$/, '');
    if (href && href === here) { a.classList.add('is-active'); }
  });

  // Simple predictive-search hint (front-end only; wire to AJAX/plugin for live results)
  var field = document.getElementById('ts-search-field');
  if (field) {
    field.addEventListener('focus', function () { field.setAttribute('autocomplete', 'off'); });
  }
})();
