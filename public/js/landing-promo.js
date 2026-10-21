(function () {
  "use strict";

  var reduceMotion = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  function safe(fn) {
    try { fn(); } catch (err) {
      if (window.console && console.warn) console.warn("landing-promo:", err);
    }
  }

  function hasGsap() {
    return typeof window.gsap !== "undefined";
  }

  /* ---------- Hero entrance (progressive enhancement) ----------
     gsap.from() applies its hidden starting state via inline style
     the instant it's called (immediateRender), then relies on GSAP's
     own rAF ticker to animate back to visible. If that ticker never
     advances (throttled background tab, some headless/embedded
     environments), the inline opacity:0 sticks forever. A hard
     timeout below clears the inline styles no matter what, so hero
     content can never get stuck invisible. */
  function playHero() {
    var heroEls = document.querySelectorAll(
      ".lp-hero__logo, .lp-hero__title, .lp-hero__subtitle, .lp-hero-ctas .lp-btn, .lp-trust-item"
    );

    function clearInlineStyles() {
      heroEls.forEach(function (el) {
        el.style.opacity = "";
        el.style.transform = "";
        el.style.translate = "";
      });
    }

    if (!hasGsap() || reduceMotion) return;

    var tl = gsap.timeline({ defaults: { ease: "power3.out" }, onComplete: clearInlineStyles });
    tl.from(".lp-hero__logo", { y: -24, opacity: 0, duration: 0.7 })
      .from(".lp-hero__title", { y: 30, opacity: 0, duration: 0.8 }, "-=0.4")
      .from(".lp-hero__subtitle", { y: 20, opacity: 0, duration: 0.7 }, "-=0.5")
      .from(".lp-hero-ctas .lp-btn", { y: 20, opacity: 0, duration: 0.6, stagger: 0.12 }, "-=0.4")
      .from(".lp-trust-item", { y: 16, opacity: 0, duration: 0.5, stagger: 0.1 }, "-=0.3");

    // Hard safety net: the timeline above totals ~2.5s; if it hasn't
    // finished (or never started ticking) by 3s, force visibility.
    setTimeout(clearInlineStyles, 3000);
  }

  /* ---------- Scroll reveals ----------
     Base mechanism is a native IntersectionObserver + CSS transition —
     no external library required, so content can never get stuck
     hidden if a CDN script is slow, blocked, or fails. Elements start
     visible; JS "arms" them (adds .is-armed) only once it is certain
     it can also reveal them again. */
  function setupReveals() {
    var items = document.querySelectorAll(".lp-reveal");
    if (!items.length) return;

    if (reduceMotion || typeof IntersectionObserver === "undefined") {
      return; // stay visible, no animation
    }

    items.forEach(function (el) { el.classList.add("is-armed"); });

    var groups = document.querySelectorAll("[data-reveal-group]");
    var staggerIndex = new Map();
    groups.forEach(function (group) {
      Array.prototype.forEach.call(group.querySelectorAll(".lp-reveal"), function (el, i) {
        staggerIndex.set(el, i);
      });
    });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        var delay = (staggerIndex.get(el) || 0) * 90;
        setTimeout(function () { el.classList.add("is-in"); }, delay);
        observer.unobserve(el);
      });
    }, { threshold: 0.15, rootMargin: "0px 0px -8% 0px" });

    items.forEach(function (el) { observer.observe(el); });

    // Hard safety net: whatever hasn't revealed itself after 4s
    // (observer edge case, layout shift, etc.) is force-shown.
    setTimeout(function () {
      document.querySelectorAll(".lp-reveal.is-armed:not(.is-in)").forEach(function (el) {
        el.classList.add("is-in");
      });
    }, 4000);
  }

  /* ---------- Sticky mobile CTA bar ---------- */
  function setupStickyCta() {
    var bar = document.querySelector(".lp-sticky-cta");
    var hero = document.querySelector(".lp-hero");
    if (!bar || !hero || typeof IntersectionObserver === "undefined") return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        bar.classList.toggle("is-visible", !entry.isIntersecting);
      });
    }, { threshold: 0 });
    observer.observe(hero);
  }

  /* ---------- Smooth anchor scroll with sticky-nav offset ---------- */
  function setupAnchorScroll() {
    var nav = document.querySelector(".lp-nav");
    var offset = nav ? nav.offsetHeight + 8 : 0;

    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener("click", function (e) {
        var id = link.getAttribute("href");
        if (!id || id === "#") return;
        var target = document.querySelector(id);
        if (!target) return;
        e.preventDefault();
        var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top: top, behavior: reduceMotion ? "auto" : "smooth" });
      });
    });
  }

  /* ---------- Quote-request modal ---------- */
  function setupFormModal() {
    var modal = document.querySelector(".lp-modal");
    if (!modal) return;

    var lastTrigger = null;

    function open(trigger) {
      lastTrigger = trigger || null;
      modal.classList.add("is-open");
      modal.setAttribute("aria-hidden", "false");
      document.documentElement.classList.add("lp-modal-open");
      var firstField = modal.querySelector("input, select, textarea");
      if (firstField) firstField.focus();
    }

    function close() {
      modal.classList.remove("is-open");
      modal.setAttribute("aria-hidden", "true");
      document.documentElement.classList.remove("lp-modal-open");
      if (lastTrigger && typeof lastTrigger.focus === "function") lastTrigger.focus();
    }

    document.querySelectorAll("[data-open-form]").forEach(function (trigger) {
      trigger.addEventListener("click", function (e) {
        e.preventDefault();
        open(trigger);
      });
    });

    modal.querySelectorAll("[data-close-form]").forEach(function (closer) {
      closer.addEventListener("click", close);
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && modal.classList.contains("is-open")) close();
    });

    if (modal.classList.contains("is-open")) {
      document.documentElement.classList.add("lp-modal-open");
    }
  }

  /* ---------- Ads conversion tracking ----------
     Fires generic events GTM can pick up with a Trigger once a container is
     configured (GTM_CONTAINER_ID in .env). No GTM present = dataLayer.push is
     a harmless no-op array write, so this is always safe to leave on.
     If GOOGLE_ADS_CONVERSION_LABEL is also configured (see google-ads-tag.blade.php),
     the same lead_form_submit moment reports a Google Ads conversion directly
     via gtag, without waiting on GTM. */
  function reportLeadConversion() {
    if (typeof window.gtag === "function" && window.GOOGLE_ADS_CONVERSION_SEND_TO) {
      window.gtag("event", "conversion", { send_to: window.GOOGLE_ADS_CONVERSION_SEND_TO });
    }
  }

  function setupTracking() {
    window.dataLayer = window.dataLayer || [];

    document.querySelectorAll("[data-track]").forEach(function (el) {
      el.addEventListener("click", function () {
        window.dataLayer.push({ event: el.getAttribute("data-track") });
      });
    });
  }

  /* ---------- Success overlay (shown once, right after the form
     redirects back with a flash message) ----------
     Fires the lead_form_submit conversion event exactly once (on open).
     The close (x) button and backdrop just dismiss the overlay and stay
     on the page; the "go to homepage" button navigates immediately; the
     countdown redirects automatically if the visitor does nothing. */
  function setupSuccessModal() {
    var modal = document.querySelector(".lp-success-modal");
    if (!modal) return;

    var redirectUrl = modal.getAttribute("data-redirect-url") || "/";
    var countdownEl = modal.querySelector("[data-countdown]");
    var seconds = 4;
    var timer = null;

    function stopCountdown() {
      if (timer) clearInterval(timer);
      timer = null;
    }

    function dismiss() {
      stopCountdown();
      modal.classList.remove("is-open");
      modal.setAttribute("aria-hidden", "true");
      document.documentElement.classList.remove("lp-modal-open");
    }

    function goHome() {
      stopCountdown();
      window.location.href = redirectUrl;
    }

    modal.querySelectorAll("[data-success-close]").forEach(function (el) {
      el.addEventListener("click", dismiss);
    });

    modal.querySelectorAll("[data-success-redirect]").forEach(function (el) {
      el.addEventListener("click", goHome);
    });

    document.addEventListener("keydown", function onEscape(e) {
      if (e.key === "Escape") {
        document.removeEventListener("keydown", onEscape);
        dismiss();
      }
    });

    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.documentElement.classList.add("lp-modal-open");

    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: "lead_form_submit" });
    reportLeadConversion();

    timer = setInterval(function () {
      seconds -= 1;
      if (countdownEl) countdownEl.textContent = seconds;
      if (seconds <= 0) goHome();
    }, 1000);
  }

  /* ---------- Tour duration cards: subtle hover micro-interaction ---------- */
  function setupCardTilt() {
    if (!hasGsap() || reduceMotion) return;
    document.querySelectorAll(".lp-tour-card").forEach(function (card) {
      var icon = card.querySelector(".lp-tour-card__arrow");
      if (!icon) return;
      card.addEventListener("mouseenter", function () {
        gsap.to(icon, { rotate: 45, duration: 0.3, ease: "back.out(2)" });
      });
      card.addEventListener("mouseleave", function () {
        gsap.to(icon, { rotate: 0, duration: 0.3, ease: "power2.out" });
      });
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    safe(playHero);
    safe(setupReveals);
    safe(setupStickyCta);
    safe(setupAnchorScroll);
    safe(setupFormModal);
    safe(setupSuccessModal);
    safe(setupTracking);
    safe(setupCardTilt);
  });
})();
