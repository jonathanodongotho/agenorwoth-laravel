// Animated Scroll Reveal Effects
document.addEventListener('DOMContentLoaded', function() {
  // Basic fade-in animations (already implemented)
  const observerFade = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
      }
    });
  }, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  });

  const fadeElements = document.querySelectorAll('.fade-in');
  fadeElements.forEach(element => {
    observerFade.observe(element);
  });

  // Slide in from left animation
  const observerSlideLeft = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
      }
    });
  }, {
    root: null, 
    rootMargin: '0px',
    threshold: 0.1
  });

  const slideLeftElements = document.querySelectorAll('.slide-in-left');
  slideLeftElements.forEach(element => {
    observerSlideLeft.observe(element);
  });

  // Slide in from right animation
  const observerSlideRight = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
      }
    });
  }, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  });

  const slideRightElements = document.querySelectorAll('.slide-in-right');
  slideRightElements.forEach(element => {
    observerSlideRight.observe(element);
  });

  // Zoom in animation
  const observerZoom = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
      }
    });
  }, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  });

  const zoomElements = document.querySelectorAll('.zoom-in');
  zoomElements.forEach(element => {
    observerZoom.observe(element);
  });

  // Flip animation
  const observerFlip = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
      }
    });
  }, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  });

  const flipElements = document.querySelectorAll('.flip-in');
  flipElements.forEach(element => {
    observerFlip.observe(element);
  });

  // Sequential animations for grid/list items
  const observerSequential = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const children = entry.target.children;
        Array.from(children).forEach((child, index) => {
          setTimeout(() => {
            child.classList.add('active');
          }, 150 * index); // Stagger the animations
        });
        // Once animated, no need to observe anymore
        observerSequential.unobserve(entry.target);
      }
    });
  }, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  });

  const sequentialContainers = document.querySelectorAll('.sequential-container');
  sequentialContainers.forEach(container => {
    // Add the sequential-item class to all immediate children if not already present
    Array.from(container.children).forEach(child => {
      if (!child.classList.contains('sequential-item')) {
        child.classList.add('sequential-item');
      }
    });
    observerSequential.observe(container);
  });

  // Parallax effect for backgrounds
  const parallaxElements = document.querySelectorAll('.parallax-bg');
  const heroSections = document.querySelectorAll('.hero-section');
  
  window.addEventListener('scroll', () => {
    // Normal parallax elements
    parallaxElements.forEach(element => {
      const scrollPosition = window.pageYOffset;
      const elementPosition = element.offsetTop;
      const distance = scrollPosition - elementPosition;
      const speed = element.getAttribute('data-speed') || 0.5;
      
      if (isElementInViewport(element)) {
        element.style.backgroundPositionY = `${distance * speed}px`;
      }
    });
    
    // Hero section parallax effect
    heroSections.forEach(element => {
      const scrollPosition = window.pageYOffset;
      const speed = 0.4; // Slower for subtle effect
      
      // Only apply parallax when the element is visible and we're scrolling down from it
      if (scrollPosition < element.offsetHeight + element.offsetTop) {
        // Move the background image up as we scroll down
        element.style.backgroundPositionY = `${scrollPosition * speed}px`;
      }
    });
  });

  // Count-up animations for numbers
  const observerCountUp = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const targetNumber = parseInt(entry.target.getAttribute('data-target'));
        const duration = parseInt(entry.target.getAttribute('data-duration')) || 2000; // Default to 2 seconds
        
        if (!isNaN(targetNumber)) {
          countUp(entry.target, targetNumber, duration);
        }
        // Once animated, no need to observe anymore
        observerCountUp.unobserve(entry.target);
      }
    });
  }, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  });

  const countUpElements = document.querySelectorAll('.count-up');
  countUpElements.forEach(element => {
    observerCountUp.observe(element);
  });

  // Animated typing effect
  const observerTyping = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const text = entry.target.getAttribute('data-text');
        if (text) {
          typeWriter(entry.target, text);
        }
        // Once animated, no need to observe anymore
        observerTyping.unobserve(entry.target);
      }
    });
  }, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  });

  const typingElements = document.querySelectorAll('.typing-effect');
  typingElements.forEach(element => {
    observerTyping.observe(element);
  });

  // Mobile menu toggle
  const menuBtn = document.querySelector('.mobile-menu-btn');
  const mobileMenu = document.querySelector('.mobile-menu');
  
  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', function() {
      mobileMenu.classList.toggle('active');
    });
  }
  
  // Smooth scrolling for anchor links
  const anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');
  
  anchorLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      
      if (targetElement) {
        // Close mobile menu if it's open
        if (mobileMenu && mobileMenu.classList.contains('active')) {
          mobileMenu.classList.remove('active');
        }
        
        // Smooth scroll to target
        window.scrollTo({
          top: targetElement.offsetTop - 80, // Offset for fixed header
          behavior: 'smooth'
        });
        
        // Update URL without page reload
        history.pushState(null, null, targetId);
      }
    });
  });
});

// Helper Functions
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function countUp(element, target, duration) {
  let start = 0;
  const increment = target / (duration / 16); // Update roughly every 16ms (60fps)
  
  const updateCount = () => {
    start += increment;
    if (start >= target) {
      element.textContent = target;
    } else {
      element.textContent = Math.floor(start);
      requestAnimationFrame(updateCount);
    }
  };
  
  updateCount();
}

function typeWriter(element, text, speed = 50) {
  let i = 0;
  element.textContent = '';
  
  const type = () => {
    if (i < text.length) {
      element.textContent += text.charAt(i);
      i++;
      setTimeout(type, speed);
    }
  };
  
  type();
}