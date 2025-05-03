document.addEventListener('DOMContentLoaded', function() {
  // Get form elements
  const contactForm = document.getElementById('contactForm');
  const newsletterForm = document.getElementById('newsletterForm');
  const formInputs = document.querySelectorAll('.animated-input');
  const submitButtons = document.querySelectorAll('.submit-button');
  const successModal = document.getElementById('successModal');
  const newsletterSuccessModal = document.getElementById('newsletterSuccessModal');
  const closeModalButton = document.getElementById('closeModal');
  const closeNewsletterModalButton = document.getElementById('closeNewsletterModal');

  // Email validation regex
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  // Phone validation regex - simple version for demo
  const phoneRegex = /^[0-9+\-\s]{7,15}$/;

  // Initialize form
  formInputs.forEach(input => {
    // Set placeholder to empty string to enable our custom label animations
    input.setAttribute('placeholder', '');
    
    // Add focus animation
    input.addEventListener('focus', function() {
      this.classList.add('highlight');
      setTimeout(() => {
        this.classList.remove('highlight');
      }, 1000);
    });
    
    // Input validation on blur
    input.addEventListener('blur', function() {
      validateInput(this);
    });
    
    // Input real-time validation
    input.addEventListener('input', function() {
      // Remove shake animation if it was previously applied
      this.classList.remove('shake');
      
      // Validate in real-time
      if (this.value.trim() !== '') {
        validateInput(this);
      }
    });
  });

  // Form submission handler for Contact Form
  if (contactForm) {
    contactForm.addEventListener('submit', function(event) {
      event.preventDefault();
      
      // Validate all inputs before submission
      let isValid = true;
      const inputs = this.querySelectorAll('.animated-input, .animated-checkbox');
      const submitBtn = this.querySelector('.submit-button');
      
      inputs.forEach(input => {
        if (!validateInput(input)) {
          isValid = false;
          // Apply shake animation to invalid fields
          input.classList.add('shake');
        }
      });
      
      if (isValid) {
        // Show loading animation
        submitBtn.classList.add('loading');
        
        // Simulate form submission (replace with actual AJAX submission)
        setTimeout(() => {
          submitBtn.classList.remove('loading');
          submitBtn.classList.add('success');
          
          // Show success modal
          successModal.classList.add('active');
          
          // Reset form after submission
          setTimeout(() => {
            contactForm.reset();
            submitBtn.classList.remove('success');
            
            // Reset all inputs to initial state
            inputs.forEach(input => {
              input.classList.remove('valid', 'invalid');
            });
          }, 1000);
        }, 1500);
      }
    });
  }
  
  // Form submission handler for Newsletter Form
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(event) {
      event.preventDefault();
      
      // Validate all inputs before submission
      let isValid = true;
      const inputs = this.querySelectorAll('.animated-input, .animated-checkbox');
      const submitBtn = this.querySelector('.submit-button');
      
      inputs.forEach(input => {
        if (!validateInput(input)) {
          isValid = false;
          // Apply shake animation to invalid fields
          input.classList.add('shake');
        }
      });
      
      if (isValid) {
        // Show loading animation
        submitBtn.classList.add('loading');
        
        // Simulate form submission (replace with actual AJAX submission)
        setTimeout(() => {
          submitBtn.classList.remove('loading');
          submitBtn.classList.add('success');
          
          // Show success modal
          newsletterSuccessModal.classList.add('active');
          
          // Reset form after submission
          setTimeout(() => {
            newsletterForm.reset();
            submitBtn.classList.remove('success');
            
            // Reset all inputs to initial state
            inputs.forEach(input => {
              input.classList.remove('valid', 'invalid');
            });
          }, 1000);
        }, 1500);
      }
    });
  }

  // Close modals event
  if (closeModalButton) {
    closeModalButton.addEventListener('click', function() {
      successModal.classList.remove('active');
    });
  }
  
  if (closeNewsletterModalButton) {
    closeNewsletterModalButton.addEventListener('click', function() {
      newsletterSuccessModal.classList.remove('active');
    });
  }

  // Click outside modal to close it
  if (successModal) {
    successModal.addEventListener('click', function(event) {
      if (event.target === this) {
        successModal.classList.remove('active');
      }
    });
  }
  
  if (newsletterSuccessModal) {
    newsletterSuccessModal.addEventListener('click', function(event) {
      if (event.target === this) {
        newsletterSuccessModal.classList.remove('active');
      }
    });
  }

  // Input validation function
  function validateInput(input) {
    const inputId = input.id;
    let isValid = false;
    
    switch (inputId) {
      case 'name':
      case 'newsletter-name':
        isValid = input.value.trim().length >= 2;
        break;
      
      case 'email':
      case 'newsletter-email':
        isValid = emailRegex.test(input.value.trim());
        break;
      
      case 'phone':
        isValid = phoneRegex.test(input.value.trim());
        break;
      
      case 'service':
        isValid = input.value.trim() !== '';
        break;
      
      case 'message':
        isValid = input.value.trim().length >= 10;
        break;
      
      case 'consent':
      case 'newsletter-consent':
        isValid = input.checked;
        break;
      
      default:
        isValid = input.value.trim() !== '';
    }
    
    // Update input status based on validation
    if (isValid) {
      input.classList.remove('invalid');
      input.classList.add('valid');
    } else if (input.value.trim() !== '') {
      input.classList.remove('valid');
      input.classList.add('invalid');
    }
    
    return isValid;
  }

  // Add subtle hover effects to inputs
  formInputs.forEach(input => {
    // Exclude checkbox as it has its own hover effect
    if (input.type !== 'checkbox') {
      input.addEventListener('mouseover', function() {
        if (!this.classList.contains('valid') && !this.classList.contains('invalid')) {
          this.style.borderColor = '#c0c0c0';
        }
      });
      
      input.addEventListener('mouseout', function() {
        if (!this.classList.contains('valid') && !this.classList.contains('invalid') && document.activeElement !== this) {
          this.style.borderColor = '#e0e0e0';
        }
      });
    }
  });

  // Add button hover animation for all submit buttons
  submitButtons.forEach(button => {
    button.addEventListener('mouseover', function() {
      const icon = this.querySelector('.button-icon');
      if (icon) {
        icon.style.opacity = '1';
        icon.style.transform = 'translateX(0)';
      }
    });
    
    button.addEventListener('mouseout', function() {
      const icon = this.querySelector('.button-icon');
      if (icon) {
        icon.style.opacity = '0';
        icon.style.transform = 'translateX(10px)';
      }
    });
    
    // Add custom ripple effect on click
    button.addEventListener('click', function(e) {
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      
      // Update the background-position of the ::after pseudo-element
      this.style.setProperty('--ripple-x', x + 'px');
      this.style.setProperty('--ripple-y', y + 'px');
      
      // Force repaint to restart the animation
      this.classList.remove('ripple-active');
      void this.offsetWidth; // Force reflow
      this.classList.add('ripple-active');
    });
  });

  // Add micro-interaction when tabbing between inputs
  document.addEventListener('keydown', function(event) {
    if (event.key === 'Tab' && document.activeElement.classList.contains('animated-input')) {
      const currentInput = document.activeElement;
      
      // Add a slight scale effect
      currentInput.style.transform = 'scale(0.98)';
      setTimeout(() => {
        currentInput.style.transform = '';
      }, 200);
    }
  });

  // Interactive label animation - make it follow cursor slightly on focus
  formInputs.forEach(input => {
    if (input.type !== 'checkbox') {
      const label = input.nextElementSibling;
      
      input.addEventListener('focus', function(e) {
        this.addEventListener('mousemove', moveLabel);
      });
      
      input.addEventListener('blur', function() {
        this.removeEventListener('mousemove', moveLabel);
        if (label) {
          label.style.transform = input.value.trim() !== '' ? 
            'translateY(-2.5rem) scale(0.85)' : 
            '';
        }
      });
      
      function moveLabel(e) {
        if (label && input.value.trim() === '') {
          const rect = input.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const inputWidth = rect.width;
          
          // Limit the movement to a small range
          const moveRange = 5;
          const moveX = (x / inputWidth) * moveRange - moveRange / 2;
          
          label.style.transform = `translateX(${moveX}px)`;
        }
      }
    }
  });
});