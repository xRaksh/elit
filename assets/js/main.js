/* ============================================================
   SunHarbor — main.js
   Navbar shadow, scroll reveal, animated counters,
   back-to-top, contact + newsletter form feedback
   ============================================================ */
(function () {
  "use strict";

  /* ---------- Sticky navbar shadow ---------- */
  var nav = document.getElementById("mainNav");
  var backToTop = document.getElementById("backToTop");

  function onScroll() {
    var y = window.scrollY || document.documentElement.scrollTop;
    if (nav) nav.classList.toggle("scrolled", y > 40);
    if (backToTop) backToTop.classList.toggle("show", y > 400);
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  if (backToTop) {
    backToTop.addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  /* ---------- Scroll reveal ---------- */
  var revealEls = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window) {
    var revealObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("reveal-visible");
            revealObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );
    revealEls.forEach(function (el) { revealObserver.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add("reveal-visible"); });
  }

  /* ---------- Animated counters ---------- */
  var counters = document.querySelectorAll(".counter");
  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  function animateCounter(el) {
    var target = parseInt(el.getAttribute("data-target"), 10) || 0;
    if (reduceMotion) { el.textContent = target.toLocaleString(); return; }
    var duration = 1800;
    var start = null;
    function tick(ts) {
      if (!start) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3); /* ease-out cubic */
      el.textContent = Math.round(target * eased).toLocaleString();
      if (progress < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  if (counters.length && "IntersectionObserver" in window) {
    var counterObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.4 }
    );
    counters.forEach(function (el) { counterObserver.observe(el); });
  } else {
    counters.forEach(animateCounter);
  }

  /* ---------- Contact form ---------- */
  var contactForm = document.getElementById("contactForm");
  if (contactForm) {
    var statusEl = document.getElementById("formStatus");
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();
      var valid = contactForm.checkValidity();
      contactForm.classList.add("was-validated");
      if (!valid) {
        var firstInvalid = contactForm.querySelector(":invalid");
        if (firstInvalid) firstInvalid.focus();
        return;
      }
      var btn = contactForm.querySelector('button[type="submit"]');
      btn.disabled = true;
      btn.innerHTML = 'Sending&hellip;';
      /* Demo site — no backend. Simulate a short send delay. */
      setTimeout(function () {
        btn.disabled = false;
        btn.innerHTML = 'Send Message <i class="bi bi-send"></i>';
        contactForm.reset();
        contactForm.classList.remove("was-validated");
        if (statusEl) {
          statusEl.textContent = "Thanks! Your message has been sent — we will reply within one business day.";
          statusEl.style.color = "var(--secondary)";
        }
      }, 900);
    });
  }

  /* ---------- Newsletter forms (all pages) ---------- */
  document.querySelectorAll(".newsletter-form").forEach(function (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var input = form.querySelector('input[type="email"]');
      if (!input.value || input.validity.typeMismatch || input.validity.valueMissing) {
        input.classList.add("is-invalid");
        input.focus();
        return;
      }
      input.classList.remove("is-invalid");
      var btn = form.querySelector("button");
      btn.innerHTML = '<i class="bi bi-check-lg"></i>';
      input.value = "";
      input.placeholder = "Subscribed — thank you!";
      setTimeout(function () {
        btn.innerHTML = '<i class="bi bi-send"></i>';
        input.placeholder = "Your email address";
      }, 3000);
    });
  });
})();
