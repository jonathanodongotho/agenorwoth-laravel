<x-layout>

  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('images/logo 3.png') }}" alt="">
          <div>
            <p>AGENORWOTH TECHNICAL</p>
            <p>CONTRACTORS</p>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav navbar-links">
            <a href="{{ url('/') }}" class="nav-link">Home</a>
            <a href="{{ url('/about') }}" class="nav-link">About</a>
            <a href="{{ url('/services') }}" class="nav-link">Services</a>
            <a href="{{ url('/projects') }}" class="nav-link">Projects</a>
            <a href="{{ url('/contact') }}" class="nav-link current-page">Contact</a>
            <a href="{{ url('/others') }}" class="nav-link">Others</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

    <main>
        <section id="contact" class="page active-page">
          <!-- Hero Section -->
          <div class="hero-section" style="background-image: url('images/buk\ 4.jpg'); height: 50vh;">
            <div class="hero-overlay"></div>
            <div class="container">
              <div class="hero-content fade-in">
                <h1 class="hero-title">Contact Us</h1>
                <p class="hero-subtitle">Get in touch with our team for inquiries, quotes, or any information you need</p>
              </div>
            </div>
          </div>
    
          <!-- Contact Information -->
          <div class="section-padding" style="background-color: var(--light-gray);">
            <div class="container">
              <div class="grid">
                <div class="card slide-in-left">
                  <div class="card-body">
                    <div style="text-align: center; margin-bottom: 1.5rem;">
                      <div style="
                        background-color: var(--steel-blue); 
                        width: 64px; 
                        height: 64px; 
                        border-radius: 50%; 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        margin: 0 auto 1rem;
                      ">
                        <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: var(--white);"></i>
                      </div>
                      <h3 style="font-size: 1.5rem;">Address</h3>
                    </div>
                    <p style="text-align: center;">P.O.Box 331674,<br>Lira City, Uganda</p>
                  </div>
                </div>
                <div class="card slide-in-left" style="animation-delay: 0.2s;">
                  <div class="card-body">
                    <div style="text-align: center; margin-bottom: 1.5rem;">
                      <div style="
                        background-color: var(--steel-blue); 
                        width: 64px; 
                        height: 64px; 
                        border-radius: 50%; 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        margin: 0 auto 1rem;
                      ">
                        <i class="fas fa-phone" style="font-size: 1.5rem; color: var(--white);"></i>
                      </div>
                      <h3 style="font-size: 1.5rem;">Call Us</h3>
                    </div>
                    <p style="text-align: center;">+256 779 258 249<br>+256 701 020 127</p>
                  </div>
                </div>
                <div class="card slide-in-left" style="animation-delay: 0.4s;">
                  <div class="card-body">
                    <div style="text-align: center; margin-bottom: 1.5rem;">
                      <div style="
                        background-color: var(--steel-blue); 
                        width: 64px; 
                        height: 64px; 
                        border-radius: 50%; 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        margin: 0 auto 1rem;
                      ">
                        <i class="fas fa-envelope" style="font-size: 1.5rem; color: var(--white);"></i>
                      </div>
                      <h3 style="font-size: 1.5rem;">Email Us</h3>
                    </div>
                    <p style="text-align: center;">agenorwottechnicalcontractors@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Contact Form Section -->
          <div class="section-padding">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 class="section-title">Send Us a Message</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">Fill out the form below and our team will get back to you as soon as possible</p>
              </div>
              
              <div class="contact-form-container">
                <div class="row">
                  <div class="col-md-6 slide-in-left">
                    <img src="images/pallisa 1.jpg" alt="Construction team meeting" style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--border-radius);">
                  </div>
                  
                  <div class="col-md-6 slide-in-right">
                    <form id="contactForm" class="needs-validation text-secondary" novalidate>
                      <!-- Full Name -->
                      <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" required>
                        <div class="invalid-feedback">Please enter your name</div>
                      </div>
                    
                      <!-- Email -->
                      <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter a valid email address</div>
                      </div>
                    
                      <!-- Phone -->
                      <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" required>
                        <div class="invalid-feedback">Please enter a valid phone number</div>
                      </div>
                    
                      <!-- Service of Interest -->
                      <div class="mb-3">
                        <label for="service" class="form-label">Service of Interest</label>
                        <select class="form-select" id="service" required>
                          <option value="">-- Select a service --</option>
                          <option value="Building Construction">Building Construction</option>
                          <option value="Road Construction">Road Construction</option>
                          <option value="Structural Engineering">Structural Engineering</option>
                          <option value="Renovations">Renovations</option>
                          <option value="Equipment Supply">Equipment Supply</option>
                          <option value="Other">Other</option>
                        </select>
                        <div class="invalid-feedback">Please select a service</div>
                      </div>
                    
                      <!-- Message -->
                      <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                        <div class="invalid-feedback">Please enter your message</div>
                      </div>
                    
                      <!-- Consent Checkbox -->
                      <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" id="consent" required>
                        <label class="form-check-label" for="consent">
                          I agree to the processing of my personal data in accordance with the Privacy Policy
                        </label>
                        <div class="invalid-feedback">You must agree to the privacy policy</div>
                      </div>
                    
                      <!-- Submit Button -->
                      <div class="mb-3">
                        <button type="submit" class="btn btn-primary">
                          <i class="fas fa-paper-plane me-1"></i> Send Message
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Map Section -->
          <div class="section-padding" style="padding-top: 0;">
            <div class="container">
              <div class="card fade-in">
                <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                  <!-- Google Maps iframe (replace with actual embed) -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127673.70241535379!2d32.549187161551786!3d2.246698936238306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1772c616d994b1d5%3A0x7dfd330511e56ed9!2sLira%2C%20Uganda!5e0!3m2!1sen!2sus!4v1684250101086!5m2!1sen!2sus" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

</x-layout>