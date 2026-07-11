document.addEventListener("DOMContentLoaded", () => {
  // Mobile Hamburger Toggle
  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");

  if (hamburger) {
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active");
      navLinks.classList.toggle("active");
    });
  }

  // Close Mobile Menu on Click
  document.querySelectorAll(".nav-links a").forEach((link) => {
    link.addEventListener("click", () => {
      if (hamburger) hamburger.classList.remove("active");
      if (navLinks) navLinks.classList.remove("active");
    });
  });

  // Typed Text Effect for Hero
  const typedTextSpan = document.querySelector(".typed-text");
  if (typedTextSpan) {
    const words = JSON.parse(typedTextSpan.getAttribute("data-words") || "[]");
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    
    function typeEffect() {
      const currentWord = words[wordIndex] || "";
      if (isDeleting) {
        typedTextSpan.textContent = currentWord.substring(0, charIndex - 1);
        charIndex--;
      } else {
        typedTextSpan.textContent = currentWord.substring(0, charIndex + 1);
        charIndex++;
      }

      let speed = isDeleting ? 40 : 100;

      if (!isDeleting && charIndex === currentWord.length) {
        speed = 2000; // Pause at end of word
        isDeleting = true;
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        wordIndex = (wordIndex + 1) % words.length;
        speed = 500; // Pause before typing next word
      }

      setTimeout(typeEffect, speed);
    }

    if (words.length > 0) {
      setTimeout(typeEffect, 1000);
    }
  }

  // Scroll Entrance Animations (IntersectionObserver)
  const animElements = document.querySelectorAll(".scroll-animate");
  const animObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animated");
          // Optionally stop observing once animated
          animObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 }
  );

  animElements.forEach((el) => animObserver.observe(el));

  // Projects Grid Category Filter
  const filterBtns = document.querySelectorAll(".filter-btn");
  const projectCards = document.querySelectorAll(".project-card");

  filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      filterBtns.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
      
      const filterValue = btn.getAttribute("data-filter");

      projectCards.forEach((card) => {
        const cardCategory = card.getAttribute("data-category");
        
        if (filterValue === "all" || cardCategory === filterValue) {
          card.style.display = "flex";
          // Small delay to trigger smooth transition
          setTimeout(() => {
            card.style.opacity = "1";
            card.style.transform = "scale(1)";
          }, 50);
        } else {
          card.style.opacity = "0";
          card.style.transform = "scale(0.95)";
          // Set display none after opacity animation completes
          setTimeout(() => {
            card.style.display = "none";
          }, 350);
        }
      });
    });
  });

  // Sticky Header Active State on Scroll
  const sections = document.querySelectorAll("section[id]");
  const headerLinks = document.querySelectorAll(".nav-links a:not(.secondary-btn)");

  function updateActiveLink() {
    const scrollY = window.pageYOffset;

    sections.forEach((section) => {
      const sectionHeight = section.offsetHeight;
      const sectionTop = section.offsetTop - 120;
      const sectionId = section.getAttribute("id");

      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        headerLinks.forEach((link) => {
          link.classList.remove("active");
          if (link.getAttribute("href") === `#${sectionId}`) {
            link.classList.add("active");
          }
        });
      }
    });
  }

  window.addEventListener("scroll", updateActiveLink);

  // Client-side Contact Form Validation
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const subject = document.getElementById("subject").value.trim();
      const message = document.getElementById("message").value.trim();

      let isValid = true;
      let errorMsg = [];

      if (!name) {
        isValid = false;
        errorMsg.push("Name is required");
      }
      if (!email) {
        isValid = false;
        errorMsg.push("Email is required");
      } else {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          isValid = false;
          errorMsg.push("Please provide a valid email format");
        }
      }
      if (!subject) {
        isValid = false;
        errorMsg.push("Subject is required");
      }
      if (!message) {
        isValid = false;
        errorMsg.push("Message body is required");
      }

      if (!isValid) {
        e.preventDefault();
        alert(errorMsg.join("\n"));
      }
    });
  }
});