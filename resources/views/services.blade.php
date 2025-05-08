<x-layout>

    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
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
              <a href="{{ url('/services') }}" class="nav-link current-page">Services</a>
              <a href="{{ url('/projects') }}" class="nav-link">Projects</a>
              <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
              <a href="{{ url('/others') }}" class="nav-link">Others</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
        <section id="services" class="page active-page">
          <!-- Hero Section -->
          <div class="hero-section" style="background-image: url('images/buk\ 9.png');">
            <div class="hero-overlay"></div>
            <div class="container">
              <div class="hero-content fade-in">
                <h1 class="hero-title">Our Services</h1>
                <p class="hero-subtitle">Professional construction and engineering services for all your project needs</p>
              </div>
            </div>
          </div>
    
          <!-- Services Introduction -->
          <div class="section-padding">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 class="section-title">What We Offer</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">At Agenorwoth Technical Contractors, we provide a wide range of professional construction and engineering services to meet the diverse needs of our clients. With our team of experienced professionals, we deliver high-quality results on time and within budget.</p>
              </div>
            </div>
          </div>
    
          <!-- Building Construction Services -->
          <div class="section-padding" style="background-color: var(--light-gray);">
            <div class="container">
              <div class="service-detailed slide-in-left">
                <div class="service-image-container">
                  <img src="images/buk 3.jpg" alt="Building Construction" class="service-image">
                </div>
                <div class="service-info">
                  <div class="service-icon-large">
                    <i class="fas fa-building"></i>
                  </div>
                  <h2 class="mb-4">Building Construction</h2>
                  <p>We offer comprehensive building construction services, specializing in both commercial and residential projects. Our experienced team ensures high-quality construction using the best materials and techniques.</p>
                  <div class="service-features">
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Commercial Buildings</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Residential Housing</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Institutional Facilities</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Industrial Structures</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Steel Construction</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Concrete Construction</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Road Construction Services -->
          <div class="section-padding">
            <div class="container">
              <div class="service-detailed slide-in-right">
                <div class="service-info">
                  <div class="service-icon-large">
                    <i class="fas fa-road"></i>
                  </div>
                  <h2 class="mb-4">Highway Construction</h2>
                  <p>Our road construction services include building highways, community access roads, and related infrastructure with a focus on durability and sustainability. We handle everything from site preparation to final surfacing.</p>
                  <div class="service-features">
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Highway Construction</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Access Roads</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Drainage Systems</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Culvert Installation</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Bridge Construction</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Stone Pitching</span>
                    </div>
                  </div>
                </div>
                <div class="service-image-container">
                  <img src="images/pallisa 3.jpg" alt="Road Construction" class="service-image">
                </div>
              </div>
            </div>
          </div>
    
          <!-- Structural Engineering Services -->
          <div class="section-padding" style="background-color: var(--light-gray);">
            <div class="container">
              <div class="service-detailed slide-in-left">
                <div class="service-image-container">
                  <img src="images/buk 1.jpg" alt="Structural Engineering" class="service-image">
                </div>
                <div class="service-info">
                  <div class="service-icon-large">
                    <i class="fas fa-drafting-compass"></i>
                  </div>
                  <h2 class="mb-4">Structural Engineering</h2>
                  <p>Our structural engineering services provide comprehensive evaluations, designs, and consultations for various construction projects. We ensure the structural integrity and safety of all buildings and infrastructure.</p>
                  <div class="service-features">
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Structural Analysis</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Design Services</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Structural Assessments</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Foundation Design</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Reinforcement Planning</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Construction Monitoring</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Renovation Services -->
          <div class="section-padding">
            <div class="container">
              <div class="service-detailed slide-in-right">
                <div class="service-info">
                  <div class="service-icon-large">
                    <i class="fas fa-hammer"></i>
                  </div>
                  <h2 class="mb-4">Renovation Services</h2>
                  <p>We specialize in renovations for residential and commercial properties, updating and improving spaces while maintaining structural integrity. Our skilled team handles both minor updates and major overhauls.</p>
                  <div class="service-features">
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Commercial Renovations</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Residential Remodeling</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Historic Building Restoration</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Office Space Redesign</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Structural Reinforcement</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Interior Upgrades</span>
                    </div>
                  </div>
                </div>
                <div class="service-image-container">
                  <img src="images/buk 12.png" alt="Renovation Services" class="service-image">
                </div>
              </div>
            </div>
          </div>
    
          <!-- Road works -->
          <div class="section-padding" style="background-color: var(--light-gray);">
            <div class="container">
              <div class="service-detailed slide-in-left">
                <div class="service-image-container">
                  <img src="images/wak 6.jpg" alt="Road works" class="service-image">
                </div>
                <div class="service-info">
                  <div class="service-icon-large">
                    <i class="fas fa-truck-pickup"></i>
                  </div>
                  <h2 class="mb-4">Road works</h2>
                  <p>We offer high quality works, construction and repairs of roads and related infrastructures.</p>
                  <div class="service-features">
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Concrete pavements</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Construction culverts</span>
                    </div>
                    <div class="feature">
                      <i class="fas fa-check-circle"></i>
                      <span>Stone pitching</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- CTA Section -->
          <div class="section-padding" style="background-color: var(--earth-tone);">
            <div class="container">
              <div class="text-center fade-in">
                <h2 style="font-size: 2rem; color: var(--white); margin-bottom: 1.5rem;">Ready to Start Your Project?</h2>
                <p style="color: var(--light-gray); margin-bottom: 2rem; max-width: 700px; margin: 0 auto 2rem;">Contact our team today to discuss your specific requirements and discover how our services can bring your project to successful completion.</p>
                <a href="{{ route('contact') }}" class="btn-primary animated-button" style="background-color: var(--white); color: var(--earth-tone);">
                  <span class="button-text">Get In Touch</span>
                  <i class="button-icon fas fa-arrow-right"></i>
                  <span class="button-shine"></span>
                </a>
              </div>
            </div>
          </div>
        </section>
      </main>

</x-layout>