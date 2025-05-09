<!DOCTYPE html>
<html lang="en">
<head>

<script>
  const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Sending...';

   const serviceID = 'default_service';
   const templateID = 'template_c6awltk';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Send Email';
      alert('Sent!');
    }, (err) => {
      btn.value = 'Send Email';
      alert(JSON.stringify(err));
    });
  });
</script>

<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script type="text/javascript">
  emailjs.init('3p_qPAO_XJSoCTFZ8')
</script>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenorwot Technical Contractors Ltd</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link href="{{ url('/css/styles.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/form-animations.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.7.2-web/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.7.2-web/css/brands.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.7.2-web/css/solid.css') }}">
  <script src="{{ asset('js/scripts.js') }}" defer></script>
  <script src="{{ asset('js/form-animations.js') }}" defer></script>
  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>


  


  <style>
    .navbar-toggler{
      border: none;
    }
    .navbar-toggler:focus{
      box-shadow: none;
      border: none;
    }
    .navbar-collapse{
      justify-content: flex-end;
    }
    .navbar-collapse a{
      background-color: rgb(223, 223, 223);
      padding-left: 0.8rem;
    }

    @media  screen and (min-width: 980px) {
      .navbar-collapse a{
      background-color: rgba(255, 255, 255, 0);
      padding-left: 0.8rem;
    }
  }
  </style>
</head>
<body>
  
  
  {{ $slot }}


  <footer>
    <div class="container">
      <div class="footer-grid">
        <div>
          <a class="navbar-brand footer" href="#">
            <img src="images/logo 3.png" alt="">
            <div>
              <p>AGENORWOTH TECHNICAL</p>
              <p>CONTRACTORS</p>
            </div>
          </a>
          <p class="footer-description">Providing exceptional construction and engineering services across Uganda.</p>
          <div class="social-links">
            <a href="{{ url('/contact') }}" class="social-link">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{ url('/contact') }}" class="social-link">
              <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="{{ url('/contact') }}" class="social-link">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="{{ url('/contact') }}" class="social-link">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
        <div>
          <h3 class="footer-heading">Quick Links</h3>
          <ul class="footer-links">
            <li class="footer-link"><a href="{{ url('/') }}">Home</a></li>
            <li class="footer-link"><a href="{{ url('/about') }}">About Us</a></li>
            <li class="footer-link"><a href="{{ url('/services') }}">Our Services</a></li>
            <li class="footer-link"><a href="{{ url('/projects') }}">Projects</a></li>
            <li class="footer-link"><a href="{{ url('/contact') }}">Contact Us</a></li>
          </ul>
        </div>
        <div>
          <h3 class="footer-heading">Our Services</h3>
          <ul class="footer-links">
            <li class="footer-link"><a href="{{ url('/services') }}">Building Construction</a></li>
            <li class="footer-link"><a href="{{ url('/services') }}">Road Construction</a></li>
            <li class="footer-link"><a href="{{ url('/services') }}">Structural Engineering</a></li>
            <li class="footer-link"><a href="{{ url('/services') }}">Renovations</a></li>
          </ul>
        </div>
        <div>
          <h3 class="footer-heading">Contact Info</h3>
          <div class="footer-contact">
            <i class="fas fa-map-marker-alt"></i>
            <span>Lira City, Uganda</span>
          </div>
          <div class="footer-contact">
            <i class="fas fa-phone"></i>
            <span>+256 701020127 <br>+256 779258249</span>
          </div>
          <div class="footer-contact">
            <i class="fas fa-envelope"></i>
            <span>
              agenorwottechnical<br>@gmail.com
            </span>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 Agenorwoth Technical Contractors Ltd. All rights reserved.</p>
        <div style="margin-top: 1rem;">
          <a href="" style="margin-right: 1.5rem;">Privacy Policy</a>
          <a href="">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
      const menuBtn = document.querySelector('.mobile-menu-btn');
      const mobileMenu = document.querySelector('.mobile-menu');
      
      menuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('active');
      });
    });

    // Scroll animations
    document.addEventListener('DOMContentLoaded', function() {
      const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('active');
          }
        });
      }, observerOptions);

      const fadeElements = document.querySelectorAll('.fade-in');
      fadeElements.forEach(element => {
        observer.observe(element);
      });
    });
 
    // Project filtering logic
    document.addEventListener('DOMContentLoaded', function() {
      const filterBtns = document.querySelectorAll('.filter-btn');
      const projectItems = document.querySelectorAll('.project-item');
      
      filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          // Remove active class from all buttons
          filterBtns.forEach(button => button.classList.remove('active'));
          
          // Add active class to clicked button
          this.classList.add('active');
          
          // Get the filter value
          const filterValue = this.getAttribute('data-filter');
          
          // Filter projects
          projectItems.forEach(item => {
            if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
              item.style.display = 'block';
              setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
              }, 100);
            } else {
              item.style.opacity = '0';
              item.style.transform = 'translateY(20px)';
              setTimeout(() => {
                item.style.display = 'none';
              }, 300);
            }
          });
        });
      });
    });
  </script>

  <!-- Success Modal for Newsletter -->
  <div class="success-modal" id="newsletterSuccessModal">
    <div class="success-modal-content zoom-in">
      <div class="success-icon">
        <i class="fas fa-check"></i>
      </div>
      <h3>Thank You for Subscribing!</h3>
      <p>You have successfully subscribed to our newsletter. We'll keep you updated with our latest news and projects.</p>
      <button class="btn-primary" id="closeNewsletterModal">Close</button>
    </div>
  </div>
</body>
</html>
