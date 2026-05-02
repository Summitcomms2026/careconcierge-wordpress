/**
 * CareConcierge — front-end interactions.
 *
 * Concerns:
 *   1. Mark <body> with cc-is-scrolled after a short scroll (sticky header compacts).
 *   2. Mark <body> with cc-is-past-hero once the hero has scrolled out (side nav fades in).
 *   3. Track the active section as the user scrolls; sync .is-active on side-nav links
 *      and a body class cc-section-active--{slug} so CSS can recolour the side nav on
 *      dark sections (Intelligence, Investment).
 *   4. Reveal-on-enter for elements with .cc-reveal (additive .is-visible).
 *
 * Constraints:
 *   - Vanilla JS only. No animation libraries.
 *   - Respects prefers-reduced-motion: reveals shown immediately, no jank.
 *   - Idempotent: safe if loaded twice.
 *   - No console output in production.
 */
(function () {
	"use strict";

	if (window.__ccInit) { return; }
	window.__ccInit = true;

	// Drop the no-js hint as soon as JS runs (CSS uses .no-js fallback for cc-reveal).
	document.documentElement.classList.remove("no-js");

	var prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
	var body = document.body;

	/* ----------------------------------------------------------------
	 * 1) Scroll state — sticky header compacts after a small scroll
	 * ---------------------------------------------------------------- */
	var SCROLL_THRESHOLD = 24;
	var lastScrolled = null;
	function onScroll() {
		var scrolled = window.scrollY > SCROLL_THRESHOLD;
		if (scrolled === lastScrolled) { return; }
		lastScrolled = scrolled;
		body.classList.toggle("cc-is-scrolled", scrolled);
	}
	window.addEventListener("scroll", onScroll, { passive: true });
	onScroll();

	/* ----------------------------------------------------------------
	 * 2) Past-hero state — side nav fades in once hero scrolls out
	 * ---------------------------------------------------------------- */
	var hero = document.getElementById("hero");
	if (hero && "IntersectionObserver" in window) {
		var heroObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				body.classList.toggle("cc-is-past-hero", !entry.isIntersecting);
			});
		}, {
			// Trigger when the hero is mostly out of view from the top.
			rootMargin: "-40% 0px 0px 0px",
			threshold: 0
		});
		heroObserver.observe(hero);
	} else if (!hero) {
		// No hero on this page (e.g. a generic page) — nav can be visible by default.
		body.classList.add("cc-is-past-hero");
	}

	/* ----------------------------------------------------------------
	 * 3) Active section tracking
	 *    Tracks the section whose middle is closest to the viewport middle.
	 * ---------------------------------------------------------------- */
	var sections = Array.prototype.slice.call(
		document.querySelectorAll(".cc-section[id]")
	);
	var navLinks = Array.prototype.slice.call(
		document.querySelectorAll(".cc-sidenav__link")
	);

	var lastActiveId = null;
	function setActiveSection(id) {
		if (id === lastActiveId) { return; }
		lastActiveId = id;

		navLinks.forEach(function (link) {
			var matches = link.getAttribute("data-cc-target") === id;
			link.classList.toggle("is-active", matches);
			if (matches) {
				link.setAttribute("aria-current", "true");
			} else {
				link.removeAttribute("aria-current");
			}
		});

		// Body class for theming (e.g. side nav inverts on dark sections).
		body.className = body.className.replace(/\bcc-section-active--\S+/g, "").trim();
		if (id) {
			body.classList.add("cc-section-active--" + id);
		}
	}

	if (sections.length && "IntersectionObserver" in window) {
		var visibleRatios = new Map();
		var sectionObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					visibleRatios.set(entry.target.id, entry.intersectionRatio);
				} else {
					visibleRatios.delete(entry.target.id);
				}
			});

			var bestId = null;
			var bestRatio = 0;
			visibleRatios.forEach(function (ratio, id) {
				if (ratio > bestRatio) {
					bestRatio = ratio;
					bestId = id;
				}
			});

			if (bestId) {
				setActiveSection(bestId);
			}
		}, {
			// Bias the "active" detection toward the section the eye is fixated on.
			rootMargin: "-35% 0px -35% 0px",
			threshold: [0, 0.25, 0.5, 0.75, 1]
		});

		sections.forEach(function (s) { sectionObserver.observe(s); });
	}

	/* ----------------------------------------------------------------
	 * 4) Reveal-on-enter — additive .is-visible class
	 * ---------------------------------------------------------------- */
	var revealEls = Array.prototype.slice.call(document.querySelectorAll(".cc-reveal"));

	if (prefersReducedMotion || !("IntersectionObserver" in window)) {
		// Show everything immediately if motion is reduced or IO unavailable.
		revealEls.forEach(function (el) { el.classList.add("is-visible"); });
	} else {
		var revealObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add("is-visible");
					revealObserver.unobserve(entry.target);
				}
			});
		}, {
			rootMargin: "0px 0px -8% 0px",
			threshold: 0.05
		});

		revealEls.forEach(function (el) { revealObserver.observe(el); });
	}
})();
