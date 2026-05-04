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

	/* ----------------------------------------------------------------
	 * 5) Accordion (.cc-faq__item) — click summary to toggle.
	 *    Uses a data-cc-open attribute on the item; the smooth
	 *    height transition is driven by CSS (grid-template-rows
	 *    0fr ↔ 1fr). aria-expanded is mirrored for assistive tech.
	 * ---------------------------------------------------------------- */
	var faqItems = Array.prototype.slice.call(document.querySelectorAll(".cc-faq__item"));
	faqItems.forEach(function (item) {
		var summary = item.querySelector(".cc-faq__summary");
		if (!summary) { return; }
		summary.addEventListener("click", function () {
			var isOpen = item.getAttribute("data-cc-open") === "true";
			item.setAttribute("data-cc-open", isOpen ? "false" : "true");
			summary.setAttribute("aria-expanded", isOpen ? "false" : "true");
		});
	});

	/* ----------------------------------------------------------------
	 * 6) Deck-request form — AJAX submit to wp-admin/admin-ajax.php
	 *    On success, swap the form state to thanks/other and reveal
	 *    the dynamic deck download CTA. No page jump.
	 * ---------------------------------------------------------------- */
	var deckCard = document.querySelector(".cc-deck-form");
	if (deckCard && window.CCDeck && window.CCDeck.ajaxUrl) {
		var deckForm  = deckCard.querySelector("form");
		var pageUrlIn = deckCard.querySelector('input[name="cc_deck_page_url"]');
		if (pageUrlIn) { pageUrlIn.value = window.location.href; }

		var setState = function (state) {
			Array.prototype.forEach.call(
				deckCard.querySelectorAll(".cc-deck-form__state"),
				function (panel) {
					var match = panel.getAttribute("data-cc-state") === state;
					if (match) {
						panel.removeAttribute("hidden");
					} else {
						panel.setAttribute("hidden", "");
					}
				}
			);
		};

		var setError = function (message) {
			var errEl = deckCard.querySelector(".cc-deck-form__error");
			if (errEl) {
				errEl.textContent = message || "";
				errEl.classList.toggle("is-visible", !!message);
			}
		};

		var setSubmitting = function (isSubmitting) {
			var btn = deckCard.querySelector(".cc-deck-form__submit");
			if (!btn) { return; }
			btn.disabled = !!isSubmitting;
			btn.classList.toggle("is-submitting", !!isSubmitting);
		};

		if (deckForm) {
			deckForm.addEventListener("submit", function (event) {
				event.preventDefault();
				setError("");

				// Native HTML5 validation pass before we go to the network.
				if (!deckForm.checkValidity()) {
					setError("Please complete every required field.");
					deckForm.reportValidity();
					return;
				}

				var fd = new FormData(deckForm);
				fd.append("action", "cc_deck_request");

				setSubmitting(true);
				fetch(window.CCDeck.ajaxUrl, {
					method: "POST",
					body: fd,
					credentials: "same-origin",
				})
					.then(function (res) { return res.json().catch(function () { return { success: false, data: { message: "Unexpected server response." } }; }); })
					.then(function (json) {
						if (!json || json.success !== true) {
							var msg = (json && json.data && json.data.message) || "Submission failed. Please try again.";
							setError(msg);
							setSubmitting(false);
							return;
						}
						setSubmitting(false);

						var d = json.data || {};
						if (d.state === "thanks" && d.deckUrl) {
							var link  = deckCard.querySelector("[data-cc-deck-link]");
							var label = deckCard.querySelector("[data-cc-deck-label]");
							if (link)  { link.setAttribute("href", d.deckUrl); }
							if (label && d.marketLabel) { label.textContent = "Download the " + d.marketLabel + " deck"; }
							setState("thanks");
						} else {
							setState("other");
						}

						// Soft scroll to keep the new state in view, but only
						// if the card is currently above the viewport's top.
						var cardRect = deckCard.getBoundingClientRect();
						if (cardRect.top < 0) {
							deckCard.scrollIntoView({ behavior: "smooth", block: "start" });
						}
					})
					.catch(function () {
						setSubmitting(false);
						setError("Network error. Please try again.");
					});
			});
		}
	}

	/* ----------------------------------------------------------------
	 * 7) Legal modal — opens privacy / terms / DPA / BAA in-page
	 *    rather than navigating away. Content is sourced from the
	 *    <template data-cc-legal-doc="..."> elements inside the
	 *    footer pattern. Closes on backdrop click, Esc, or × button.
	 * ---------------------------------------------------------------- */
	var legalModal = document.querySelector("[data-cc-legal-modal]");
	if (legalModal) {
		var legalTitle = legalModal.querySelector("#cc-legal-modal-title");
		var legalBody  = legalModal.querySelector("[data-cc-legal-body]");
		var legalPanel = legalModal.querySelector(".cc-legal-modal__panel");
		var lastTrigger = null;

		var openLegal = function (slug) {
			var tpl = document.querySelector('template[data-cc-legal-doc="' + slug + '"]');
			if (!tpl) { return; }
			if (legalTitle) { legalTitle.textContent = tpl.getAttribute("data-cc-legal-title") || ""; }
			if (legalBody)  {
				legalBody.innerHTML = "";
				legalBody.appendChild(tpl.content.cloneNode(true));
				legalBody.scrollTop = 0;
			}
			legalModal.removeAttribute("hidden");
			document.body.classList.add("cc-legal-open");
			if (legalPanel) { legalPanel.focus(); }
		};
		var closeLegal = function () {
			legalModal.setAttribute("hidden", "");
			document.body.classList.remove("cc-legal-open");
			if (lastTrigger) { lastTrigger.focus(); lastTrigger = null; }
		};

		Array.prototype.forEach.call(
			document.querySelectorAll("[data-cc-legal-open]"),
			function (btn) {
				btn.addEventListener("click", function () {
					lastTrigger = btn;
					openLegal(btn.getAttribute("data-cc-legal-open"));
				});
			}
		);
		Array.prototype.forEach.call(
			legalModal.querySelectorAll("[data-cc-legal-close]"),
			function (el) { el.addEventListener("click", closeLegal); }
		);
		document.addEventListener("keydown", function (event) {
			if (event.key === "Escape" && !legalModal.hasAttribute("hidden")) { closeLegal(); }
		});
	}
})();
