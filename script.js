document.addEventListener("DOMContentLoaded", () => {
  const header = document.getElementById("site-header");
  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");
  const navAnchors = document.querySelectorAll(".nav-links a");
  const sections = document.querySelectorAll("section[id]");
  const animatedItems = document.querySelectorAll(".scroll-animate");
  const filterButtons = document.querySelectorAll(".filter-btn");
  const projectCards = document.querySelectorAll(".project-card");
  const typedText = document.querySelector(".typed-text");

  const closeMobileNav = () => {
    if (hamburger) {
      hamburger.classList.remove("active");
    }
    if (navLinks) {
      navLinks.classList.remove("active");
    }
  };

  if (hamburger && navLinks) {
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active");
      navLinks.classList.toggle("active");
    });
  }

  navAnchors.forEach((anchor) => {
    anchor.addEventListener("click", closeMobileNav);
  });

  document.addEventListener("click", (event) => {
    if (!navLinks || !hamburger) {
      return;
    }

    const clickedInsideMenu = navLinks.contains(event.target);
    const clickedToggle = hamburger.contains(event.target);

    if (!clickedInsideMenu && !clickedToggle) {
      closeMobileNav();
    }
  });

  const setActiveLink = () => {
    const scrollPosition = window.scrollY + 140;

    sections.forEach((section) => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      const id = section.getAttribute("id");

      if (scrollPosition >= top && scrollPosition < top + height) {
        navAnchors.forEach((anchor) => {
          anchor.classList.toggle("active", anchor.getAttribute("href") === `#${id}`);
        });
      }
    });
  };

  const updateHeaderState = () => {
    if (!header) {
      return;
    }

    header.classList.toggle("scrolled", window.scrollY > 20);
  };

  updateHeaderState();
  setActiveLink();

  window.addEventListener("scroll", () => {
    updateHeaderState();
    setActiveLink();
  });

  if (animatedItems.length > 0) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animated");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.18 }
    );

    animatedItems.forEach((item) => observer.observe(item));
  }

  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const filter = button.dataset.filter;

      filterButtons.forEach((item) => item.classList.remove("active"));
      button.classList.add("active");

      projectCards.forEach((card) => {
        const matches = filter === "all" || card.dataset.category === filter;
        card.classList.toggle("is-hidden", !matches);
      });
    });
  });

  if (typedText) {
    const words = JSON.parse(typedText.dataset.words || "[]");
    let wordIndex = 0;
    let charIndex = 0;
    let deleting = false;

    const type = () => {
      const currentWord = words[wordIndex] || "";

      if (deleting) {
        charIndex -= 1;
      } else {
        charIndex += 1;
      }

      typedText.textContent = currentWord.slice(0, charIndex);

      let timeout = deleting ? 55 : 95;

      if (!deleting && charIndex === currentWord.length) {
        deleting = true;
        timeout = 1400;
      } else if (deleting && charIndex === 0) {
        deleting = false;
        wordIndex = (wordIndex + 1) % words.length;
        timeout = 320;
      }

      window.setTimeout(type, timeout);
    };

    if (words.length > 0) {
      window.setTimeout(type, 700);
    }
  }

  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", (event) => {
      const name = document.getElementById("name")?.value.trim() || "";
      const email = document.getElementById("email")?.value.trim() || "";
      const subject = document.getElementById("subject")?.value.trim() || "";
      const message = document.getElementById("message")?.value.trim() || "";

      const errors = [];
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!name) errors.push("Name is required.");
      if (!email) errors.push("Email is required.");
      if (email && !emailPattern.test(email)) errors.push("Enter a valid email address.");
      if (!subject) errors.push("Subject is required.");
      if (!message) errors.push("Message is required.");

      if (errors.length > 0) {
        event.preventDefault();
        window.alert(errors.join("\n"));
      }
    });
  }
});
