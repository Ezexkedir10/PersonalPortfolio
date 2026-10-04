// document.addEventListener("DOMContentLoaded", () => {
//   const header = document.getElementById("site-header");
//   const hamburger = document.querySelector(".hamburger");
//   const navLinks = document.querySelector(".nav-links");
//   const navAnchors = document.querySelectorAll(".nav-links a");
//   const sections = document.querySelectorAll("section[id]");
//   const animatedItems = document.querySelectorAll(".scroll-animate");
//   const filterButtons = document.querySelectorAll(".filter-btn");
//   const projectCards = document.querySelectorAll(".project-card");
//   const typedText = document.querySelector(".typed-text");

//   const closeMobileNav = () => {
//     if (hamburger) {
//       hamburger.classList.remove("active");
//     }
//     if (navLinks) {
//       navLinks.classList.remove("active");
//     }
//   };

//   if (hamburger && navLinks) {
//     hamburger.addEventListener("click", () => {
//       hamburger.classList.toggle("active");
//       navLinks.classList.toggle("active");
//     });
//   }

//   navAnchors.forEach((anchor) => {
//     anchor.addEventListener("click", closeMobileNav);
//   });

//   document.addEventListener("click", (event) => {
//     if (!navLinks || !hamburger) {
//       return;
//     }

//     const clickedInsideMenu = navLinks.contains(event.target);
//     const clickedToggle = hamburger.contains(event.target);

//     if (!clickedInsideMenu && !clickedToggle) {
//       closeMobileNav();
//     }
//   });

//   const setActiveLink = () => {
//     const scrollPosition = window.scrollY + 140;

//     sections.forEach((section) => {
//       const top = section.offsetTop;
//       const height = section.offsetHeight;
//       const id = section.getAttribute("id");

//       if (scrollPosition >= top && scrollPosition < top + height) {
//         navAnchors.forEach((anchor) => {
//           anchor.classList.toggle("active", anchor.getAttribute("href") === `#${id}`);
//         });
//       }
//     });
//   };

//   const updateHeaderState = () => {
//     if (!header) {
//       return;
//     }

//     header.classList.toggle("scrolled", window.scrollY > 20);
//   };

//   updateHeaderState();
//   setActiveLink();

//   window.addEventListener("scroll", () => {
//     updateHeaderState();
//     setActiveLink();
//   });

//   if (animatedItems.length > 0) {
//     const observer = new IntersectionObserver(
//       (entries) => {
//         entries.forEach((entry) => {
//           if (entry.isIntersecting) {
//             entry.target.classList.add("animated");
//             observer.unobserve(entry.target);
//           }
//         });
//       },
//       { threshold: 0.18 }
//     );

//     animatedItems.forEach((item) => observer.observe(item));
//   }

//   filterButtons.forEach((button) => {
//     button.addEventListener("click", () => {
//       const filter = button.dataset.filter;

//       filterButtons.forEach((item) => item.classList.remove("active"));
//       button.classList.add("active");

//       projectCards.forEach((card) => {
//         const matches = filter === "all" || card.dataset.category === filter;
//         card.classList.toggle("is-hidden", !matches);
//       });
//     });
//   });

//   if (typedText) {
//     const words = JSON.parse(typedText.dataset.words || "[]");
//     let wordIndex = 0;
//     let charIndex = 0;
//     let deleting = false;

//     const type = () => {
//       const currentWord = words[wordIndex] || "";

//       if (deleting) {
//         charIndex -= 1;
//       } else {
//         charIndex += 1;
//       }

//       typedText.textContent = currentWord.slice(0, charIndex);

//       let timeout = deleting ? 55 : 95;

//       if (!deleting && charIndex === currentWord.length) {
//         deleting = true;
//         timeout = 1400;
//       } else if (deleting && charIndex === 0) {
//         deleting = false;
//         wordIndex = (wordIndex + 1) % words.length;
//         timeout = 320;
//       }

//       window.setTimeout(type, timeout);
//     };

//     if (words.length > 0) {
//       window.setTimeout(type, 700);
//     }
//   }

//   const contactForm = document.getElementById("contactForm");
//   if (contactForm) {
//     contactForm.addEventListener("submit", (event) => {
//       const name = document.getElementById("name")?.value.trim() || "";
//       const email = document.getElementById("email")?.value.trim() || "";
//       const subject = document.getElementById("subject")?.value.trim() || "";
//       const message = document.getElementById("message")?.value.trim() || "";

//       const errors = [];
//       const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//       if (!name) errors.push("Name is required.");
//       if (!email) errors.push("Email is required.");
//       if (email && !emailPattern.test(email)) errors.push("Enter a valid email address.");
//       if (!subject) errors.push("Subject is required.");
//       if (!message) errors.push("Message is required.");

//       if (errors.length > 0) {
//         event.preventDefault();
//         window.alert(errors.join("\n"));
//       }
//     });
//   }
// });
/* =========================================================
   Ezedin Kedir portfolio — interactions
   Preloader, hero sequence, typed role, scroll-linked text,
   timeline fill, project preview, cursor, magnetic buttons,
   AJAX contact form.
   ========================================================= */
(() => {
  "use strict";

  const $  = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];
  const clamp = (n, min, max) => Math.min(max, Math.max(min, n));
  const lerp = (a, b, t) => a + (b - a) * t;

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const finePointer  = window.matchMedia("(hover: hover) and (pointer: fine)").matches;
  const body = document.body;

  /* ---------- Preloader → hero sequence ---------- */
  const preloader = $("#preloader");
  const countEl = $("#preloaderCount");
  let started = false;

  function finishLoading() {
    if (started) return;
    started = true;
    body.classList.add("is-loaded");
    body.classList.remove("is-locked");
    window.setTimeout(() => body.classList.add("is-done"), 1100);
    window.setTimeout(startTyped, 1600);
  }

  if (preloader && !reduceMotion) {
    body.classList.add("is-locked");
    const duration = 1500;
    const t0 = performance.now();
    const tick = (now) => {
      const p = clamp((now - t0) / duration, 0, 1);
      const eased = 1 - Math.pow(1 - p, 3);
      countEl.textContent = Math.round(eased * 100);
      if (p < 1) requestAnimationFrame(tick);
      else window.setTimeout(finishLoading, 180);
    };
    requestAnimationFrame(tick);
    window.setTimeout(finishLoading, 4000); // safety net
  } else {
    finishLoading();
  }

  /* ---------- Typed role line ---------- */
  const typedEl = $("#typed");
  function startTyped() {
    if (!typedEl || reduceMotion) return;
    let words = [];
    try { words = JSON.parse(typedEl.dataset.words || "[]"); } catch (_) { return; }
    if (!words.length) return;

    let w = 0, c = words[0].length, deleting = true;
    const step = () => {
      const word = words[w];
      c += deleting ? -1 : 1;
      typedEl.textContent = word.slice(0, c);
      let wait = deleting ? 38 : 70;
      if (!deleting && c === word.length) { deleting = true; wait = 1800; }
      else if (deleting && c === 0) { deleting = false; w = (w + 1) % words.length; wait = 350; }
      window.setTimeout(step, wait);
    };
    window.setTimeout(step, 1800);
  }

  /* ---------- Header, menu, active link ---------- */
  const header = $("#siteHeader");
  const nav = $("#nav");
  const toggle = $("#menuToggle");

  const setMenu = (open) => {
    if (!toggle || !nav) return;
    toggle.setAttribute("aria-expanded", String(open));
    toggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
    nav.classList.toggle("is-open", open);
    body.classList.toggle("is-locked", open);
  };
  toggle?.addEventListener("click", () => setMenu(toggle.getAttribute("aria-expanded") !== "true"));
  $$(".nav-links a").forEach((a) => a.addEventListener("click", () => setMenu(false)));
  document.addEventListener("keydown", (e) => { if (e.key === "Escape") setMenu(false); });

  const links = $$(".nav-links a");
  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      links.forEach((a) => a.classList.toggle("is-active", a.getAttribute("href") === "#" + entry.target.id));
    });
  }, { rootMargin: "-45% 0px -50% 0px" });
  $$("main section[id]").forEach((s) => sectionObserver.observe(s));

  /* ---------- Scroll-linked effects (one rAF-throttled handler) ---------- */
  const progressBar = $("#scrollProgress");
  const words = $$("#statement .word");
  const statement = $("#statement");
  const timeline = $("#timeline");
  const timelineFill = $("#timelineFill");
  let lastY = window.scrollY;
  let ticking = false;

  function onScroll() {
    const y = window.scrollY;
    const vh = window.innerHeight;
    const max = document.documentElement.scrollHeight - vh;

    progressBar.style.transform = `scaleX(${max > 0 ? y / max : 0})`;

    header.classList.toggle("is-scrolled", y > 24);
    const menuOpen = toggle?.getAttribute("aria-expanded") === "true";
    header.classList.toggle("is-hidden", !menuOpen && y > lastY && y > 520 && y - lastY > 2);
    if (y < lastY) header.classList.remove("is-hidden");
    lastY = y;

    if (statement && words.length) {
      const r = statement.getBoundingClientRect();
      const p = clamp((vh * 0.86 - r.top) / (r.height + vh * 0.36), 0, 1);
      const lit = reduceMotion ? words.length : Math.round(p * words.length);
      words.forEach((w, i) => w.classList.toggle("is-lit", i < lit));
    }

    if (timeline && timelineFill) {
      const r = timeline.getBoundingClientRect();
      const p = clamp((vh * 0.6 - r.top) / r.height, 0, 1);
      timelineFill.style.transform = `scaleY(${p})`;
    }
    ticking = false;
  }
  window.addEventListener("scroll", () => {
    if (!ticking) { ticking = true; requestAnimationFrame(onScroll); }
  }, { passive: true });
  window.addEventListener("resize", onScroll);
  onScroll();

  /* ---------- Reveal on enter + counters ---------- */
  const revealObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const siblings = $$("[data-reveal]", el.parentElement);
      const index = Math.max(0, siblings.indexOf(el));
      el.style.transitionDelay = `${Math.min(index, 5) * 70}ms`;
      el.classList.add("in");
      obs.unobserve(el);
    });
  }, { threshold: 0.12, rootMargin: "0px 0px -6% 0px" });
  $$("[data-reveal]").forEach((el) => revealObserver.observe(el));

  const countObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      obs.unobserve(el);
      const target = parseFloat(el.dataset.count);
      const decimals = parseInt(el.dataset.decimals || "0", 10);
      if (reduceMotion) { el.textContent = target.toFixed(decimals); return; }
      const t0 = performance.now();
      const run = (now) => {
        const p = clamp((now - t0) / 1600, 0, 1);
        el.textContent = (target * (1 - Math.pow(1 - p, 4))).toFixed(decimals);
        if (p < 1) requestAnimationFrame(run);
      };
      requestAnimationFrame(run);
    });
  }, { threshold: 0.6 });
  $$("[data-count]").forEach((el) => countObserver.observe(el));

  /* ---------- Cursor, magnetic buttons, portrait parallax (pointer devices only) ---------- */
  if (finePointer && !reduceMotion) {
    body.classList.add("has-cursor");
    const dot = $("#cursorDot");
    const ring = $("#cursorRing");
    let mx = -100, my = -100, rx = -100, ry = -100;

    window.addEventListener("pointermove", (e) => {
      mx = e.clientX; my = e.clientY;
      dot.style.transform = `translate3d(${mx}px, ${my}px, 0)`;
    }, { passive: true });

    const hoverables = "a, button, .field, .project-row, input, textarea";
    document.addEventListener("pointerover", (e) => ring.classList.toggle("is-hover", !!e.target.closest(hoverables)));
    document.addEventListener("mouseleave", () => { dot.style.opacity = 0; ring.style.opacity = 0; });
    document.addEventListener("mouseenter", () => { dot.style.opacity = ""; ring.style.opacity = ""; });

    // Magnetic pull
    $$(".magnetic").forEach((el) => {
      el.addEventListener("pointermove", (e) => {
        const r = el.getBoundingClientRect();
        const x = (e.clientX - (r.left + r.width / 2)) * 0.28;
        const y = (e.clientY - (r.top + r.height / 2)) * 0.34;
        el.style.transition = "none";
        el.style.transform = `translate(${x}px, ${y}px)`;
      });
      el.addEventListener("pointerleave", () => {
        el.style.transition = "transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)";
        el.style.transform = "";
      });
    });

    // Portrait follows the pointer slightly
    const posterImg = $("#posterImg");
    let px = 0, py = 0, tx = 0, ty = 0;
    window.addEventListener("pointermove", (e) => {
      tx = (e.clientX / window.innerWidth - 0.5) * -22;
      ty = (e.clientY / window.innerHeight - 0.5) * -22;
    }, { passive: true });

    // Project preview that trails the cursor
    const list = $("#projectList");
    const preview = $("#projectPreview");
    const previewImg = preview ? $("img", preview) : null;
    let px2 = 0, py2 = 0, prevX = 0, tilt = 0, previewOK = true;

    if (list && preview && previewImg) {
      previewImg.addEventListener("error", () => { previewOK = false; preview.classList.remove("is-visible"); });
      previewImg.addEventListener("load", () => { previewOK = true; });
      $$(".project-row", list).forEach((row) => {
        row.addEventListener("pointerenter", () => {
          if (window.innerWidth <= 860) return;
          previewOK = true;
          previewImg.src = row.dataset.image;
          preview.classList.add("is-visible");
        });
      });
      list.addEventListener("pointerleave", () => preview.classList.remove("is-visible"));
    }

    const frame = () => {
      rx = lerp(rx, mx, 0.16); ry = lerp(ry, my, 0.16);
      ring.style.transform = `translate3d(${rx}px, ${ry}px, 0)`;

      if (posterImg) {
        px = lerp(px, tx, 0.07); py = lerp(py, ty, 0.07);
        posterImg.style.transform = `translate3d(${px}px, ${py}px, 0) scale(1.08)`;
      }

      if (preview && preview.classList.contains("is-visible") && previewOK) {
        const w = preview.offsetWidth, h = preview.offsetHeight;
        const targetX = clamp(mx + 36, 12, window.innerWidth - w - 12);
        const targetY = clamp(my - h / 2, 12, window.innerHeight - h - 12);
        px2 = lerp(px2, targetX, 0.14); py2 = lerp(py2, targetY, 0.14);
        tilt = lerp(tilt, clamp((mx - prevX) * 0.6, -9, 9), 0.12);
        prevX = mx;
        preview.style.transform = `translate3d(${px2}px, ${py2}px, 0) rotate(${tilt}deg) scale(1)`;
      }
      requestAnimationFrame(frame);
    };
    requestAnimationFrame(frame);
  }

  /* ---------- Project filters ---------- */
  const filters = $$(".filter");
  const rows = $$(".project-row");
  filters.forEach((btn) => {
    btn.addEventListener("click", () => {
      filters.forEach((b) => b.classList.toggle("is-active", b === btn));
      const f = btn.dataset.filter;
      rows.forEach((row) => row.classList.toggle("is-hidden", f !== "all" && row.dataset.category !== f));
    });
  });

  /* ---------- Contact form (fetch with normal-submit fallback) ---------- */
  const form = $("#contactForm");
  const statusBox = $("#formStatus");
  const submitBtn = $("#submitBtn");

  const showStatus = (ok, message, errors = []) => {
    statusBox.className = "form-status " + (ok ? "is-ok" : "is-error");
    statusBox.innerHTML = "";
    const strong = document.createElement("strong");
    strong.textContent = message;
    statusBox.appendChild(strong);
    if (errors.length) {
      const ul = document.createElement("ul");
      errors.forEach((t) => { const li = document.createElement("li"); li.textContent = t; ul.appendChild(li); });
      statusBox.appendChild(ul);
    }
    statusBox.scrollIntoView({ behavior: reduceMotion ? "auto" : "smooth", block: "nearest" });
  };

  if (form) {
    if (statusBox.textContent.trim()) statusBox.scrollIntoView({ block: "center" }); // result of a non-JS post

    form.addEventListener("submit", async (e) => {
      const data = new FormData(form);
      const errors = [];
      const val = (k) => String(data.get(k) || "").trim();
      $$("input, textarea", form).forEach((f) => f.classList.remove("is-invalid"));

      const mark = (id) => $("#" + id).classList.add("is-invalid");
      if (!val("name"))    { errors.push("Enter your name."); mark("name"); }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val("email"))) { errors.push("Enter a valid email address so I can reply."); mark("email"); }
      if (!val("subject")) { errors.push("Add a subject."); mark("subject"); }
      if (val("message").length < 10) { errors.push("Write a message of at least 10 characters."); mark("message"); }

      e.preventDefault();
      if (errors.length) { showStatus(false, "Fix these and send again:", errors); return; }

      submitBtn.classList.add("is-sending");
      submitBtn.querySelector("span").textContent = "Sending...";

      try {
        const res = await fetch(form.action, { method: "POST", body: data, headers: { "X-Requested-With": "fetch" } });
        const json = await res.json();
        showStatus(json.ok, json.message, json.errors || []);
        if (json.ok) form.reset();
      } catch (err) {
        showStatus(false, "The message did not go through.", ["Check your connection or email me at ezexkedir19@gmail.com."]);
      } finally {
        submitBtn.classList.remove("is-sending");
        submitBtn.querySelector("span").textContent = "Send message";
      }
    });
  }
})();