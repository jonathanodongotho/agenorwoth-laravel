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
                <a href="{{ url('/') }}" class="nav-link current-page">Home</a>
                <a href="{{ url('/about') }}" class="nav-link">About</a>
                <a href="{{ url('/services') }}" class="nav-link">Services</a>
                <a href="{{ url('/projects') }}" class="nav-link">Projects</a>
                <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                <a href="{{ url('/others') }}" class="nav-link">Others</a>
              </div>
            </div>
          </div>
        </nav>
      </header>

       <main>
        <section id="home" class="page active-page">
          <!-- Hero Section -->
          <div class="hero-section" style="background-image: url('images/buk\ 8.png');">
            <div class="hero-overlay"></div>
            <div class="container">
              <div class="hero-content fade-in">
                <!-- <p class="hero-name">AGENORWOTH Technical Contractors LTD</p> -->
                <h1 class="hero-title">Building the Future with Excellence</h1>
                <p class="hero-subtitle">Providing top-quality construction and engineering services across Uganda</p>
                <div class="hero-buttons">
                  <a href="{{ route('projects') }}" class="btn-primary">See Our Work</a>
                  <a href="{{ route('contact') }}" class="btn-secondary">Get a Quote</a>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
              <div class="about-section">
                <div class="about-content">
                  <h2>Who We Are</h2>
                  <p class="about-text">Agenorwot Technical Contractors Ltd is a globally
                    growing construction company in the industry.</p>
                  <p class="about-text">With years of experience in the industry, we have
                    built a reputation for reliability, technical excellence, and
                      timely delivery on projects of all sizes across Uganda, and as a
                      result it has grown its clientele numbers due to its good values
                        of trust, honesty and professionalism. It offers all engineering
                        services, consultancy and routine maintenance contracts.</p>
                  <p class="about-text">Working with us as part of your team allows you to concentrate on the 
                    priorities of your day today business, while we take care of
                    your construction works and equipment.
                  </p>
                  <a href="{{ route('about') }}" style="color: var(--steel-blue); font-weight: bold; display: inline-flex; align-items: center;">
                    Learn more about us <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
                  </a>
                </div>
              </div>
            </div>

          <!-- Services Overview -->
          <div class="section-padding">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 class="section-title">Our Services</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">We offer a comprehensive range of construction and engineering services to meet all your project needs.</p>
              </div>
              <div class="grid sequential-container">
                <div class="service-card card sequential-item">
                  <div class="service-icon">
                    <i class="fas fa-building"></i>
                  </div>
                  <h3 class="card-title">Building Construction</h3>
                  <p class="card-text">Commercial and residential building construction with expert techniques and quality materials.</p>
                </div>
                <div class="service-card card sequential-item">
                  <div class="service-icon">
                    <i class="fas fa-road"></i>
                  </div>
                  <h3 class="card-title">Highway Construction</h3>
                  <p class="card-text">Highway and road construction including pavements, culverts, and stone pitching.</p>
                </div>
                <div class="service-card card sequential-item">
                  <div class="service-icon">
                    <i class="fas fa-drafting-compass"></i>
                  </div>
                  <h3 class="card-title">Structural Analysis</h3>
                  <p class="card-text">Comprehensive structural evaluation, design, and engineering consultancy services.</p>
                </div>
              </div>
              <div class="text-center" style="margin-top: 3rem;">
                <a href="{{ route('services') }}" class="btn-primary fade-in delay-500" style="background-color: var(--steel-blue); color: var(--white);">View All Services</a>
              </div>
            </div>
          </div>

          <!-- Core Values -->
          <div class="section-padding" style="background-color: var(--slate-gray);">
            <div class="container">
              <div class="text-center flip-in">
                <h2 class="section-title" style="color: var(--white);">Our Core Values</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle" style="color: var(--light-gray);">The principles that guide every project we undertake.</p>
              </div>
              <div class="grid sequential-container">
                <div class="card sequential-item">
                  <div class="card-body">
                    <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                      <div style="
                        background-color: var(--construction-yellow); 
                        width: 56px; 
                        height: 56px; 
                        border-radius: 50%; 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        margin-right: 1rem;
                      ">
                        <i class="fas fa-handshake" style="font-size: 1.5rem; color: var(--dark-gray);"></i>
                      </div>
                      <h3 style="margin: 0;">Integrity</h3>
                    </div>
                    <p>We maintain the highest ethical standards in all our business dealings, ensuring transparency and honesty in every project.</p>
                  </div>
                </div>
                <div class="card sequential-item">
                  <div class="card-body">
                    <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                      <div style="
                        background-color: var(--construction-yellow); 
                        width: 56px; 
                        height: 56px; 
                        border-radius: 50%; 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        margin-right: 1rem;
                      ">
                        <i class="fas fa-users" style="font-size: 1.5rem; color: var(--dark-gray);"></i>
                      </div>
                      <h3 style="margin: 0;">Teamwork</h3>
                    </div>
                    <p>Our collaborative approach brings together diverse talents and expertise to deliver exceptional results on every project.</p>
                  </div>
                </div>
                <div class="card sequential-item">
                  <div class="card-body">
                    <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                      <div style="
                        background-color: var(--construction-yellow); 
                        width: 56px; 
                        height: 56px; 
                        border-radius: 50%; 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        margin-right: 1rem;
                      ">
                        <i class="fas fa-chart-line" style="font-size: 1.5rem; color: var(--dark-gray);"></i>
                      </div>
                      <h3 style="margin: 0;">Performance</h3>
                    </div>
                    <p>We are committed to excellence in execution, striving to exceed expectations in quality, timeline, and budget management.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Featured Projects -->
          <div class="section-padding">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 class="section-title">Featured Projects</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">Take a look at some of our recent work across Uganda.</p>
              </div>
              <div class="projects-grid sequential-container">
                <div class="project-card sequential-item">
                  <div class="relative">
                    <img src="images/buk 3.jpg" alt="Commercial Building Project" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Building</span>
                        <p class="project-description">Complete structural design and construction of a scheme building ware house in Bukedea district.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Commercial Ware house</h3>
                    <p class="project-location">Bukedea, Uganda</p>
                    <!-- <div class="project-stats" style="display: flex; justify-content: space-between; margin-top: 0.5rem;">
                      <div style="text-align: center;">
                        <span class="count-up" data-target="12" data-duration="1500" style="color: var(--steel-blue); font-size: 1.2rem;">0</span>
                        <p style="font-size: 0.8rem; margin-top: 0.2rem;">Months</p>
                      </div>
                      <div style="text-align: center;">
                        <span class="count-up" data-target="45" data-duration="1500" style="color: var(--steel-blue); font-size: 1.2rem;">0</span>
                        <p style="font-size: 0.8rem; margin-top: 0.2rem;">Workers</p>
                      </div>
                      <div style="text-align: center;">
                        <span class="count-up" data-target="5" data-duration="1500" style="color: var(--steel-blue); font-size: 1.2rem;">0</span>
                        <p style="font-size: 0.8rem; margin-top: 0.2rem;">Floors</p>
                      </div>
                    </div> -->
                  </div>
                </div>
                <div class="project-card sequential-item">
                  <div class="relative">
                    <img src="images/pallisa 1.jpg" alt="Highway Construction" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Roads</span>
                        <p class="project-description">Stone pitching during the construction of Pallisa road.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Pallisa Highway</h3>
                    <p class="project-location">Pallisa, Uganda</p>
                    <!-- <div class="project-stats" style="display: flex; justify-content: space-between; margin-top: 0.5rem;">
                      <div style="text-align: center;">
                        <span class="count-up" data-target="18" data-duration="1500" style="color: var(--steel-blue); font-size: 1.2rem;">0</span>
                        <p style="font-size: 0.8rem; margin-top: 0.2rem;">Months</p>
                      </div>
                      <div style="text-align: center;">
                        <span class="count-up" data-target="30" data-duration="1500" style="color: var(--steel-blue); font-size: 1.2rem;">0</span>
                        <p style="font-size: 0.8rem; margin-top: 0.2rem;">Kilometers</p>
                      </div>
                      <div style="text-align: center;">
                        <span class="count-up" data-target="24" data-duration="1500" style="color: var(--steel-blue); font-size: 1.2rem;">0</span>
                        <p style="font-size: 0.8rem; margin-top: 0.2rem;">Culverts</p>
                      </div>
                    </div> -->
                  </div>
                </div>
                <div class="project-card sequential-item">
                  <div class="relative">
                    <img src="images/masaka 4.jpg" alt="Residential Complex" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Building</span>
                        <p class="project-description">Construction of water chamber on Nyendo Bukakata road.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Water Chamber</h3>
                    <p class="project-location">Masaka, Uganda</p>
                    <!-- <div class="project-stats" style="display: flex; justify-content: space-between; margin-top: 0.5rem;">
                      <div style="text-align: center;">
                        <span class="count-up" data-target="8" data-duration="1500" style="color: var(--steel-blue); font-size: 1.2rem;">0</span>
                        <p style="font-size: 0.8rem; margin-top: 0.2rem;">Months</p>
                      </div>
                      <div style="text-align: center;">
                        <span class="count-up" data-target="35" data-duration="1500" style="color: var(--steel-blue); font-size: 1.2rem;">0</span>
                        <p style="font-size: 0.8rem; margin-top: 0.2rem;">Rooms</p>
                      </div>
                      <div style="text-align: center;">
                        <span class="count-up" data-target="3" data-duration="1500" style="color: var(--steel-blue); font-size: 1.2rem;">0</span>
                        <p style="font-size: 0.8rem; margin-top: 0.2rem;">Floors</p>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="text-center" style="margin-top: 3rem;">
                <a href="{{ route('projects') }}" class="btn-primary zoom-in delay-500" style="background-color: var(--steel-blue); color: var(--white);">View All Projects</a>
              </div>
            </div>
          </div>

          <!-- Contact CTA -->
          <div class="section-padding parallax-bg" style="background-color: var(--earth-tone); background-image: url('images/buk\ 1.jpg'); background-blend-mode: multiply; background-size: cover;" data-speed="0.2">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 style="font-size: 2.5rem; color: var(--white); margin-bottom: 1.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Ready to Start Your Project?</h2>
                <p style="font-size: 1.1rem; color: var(--light-gray); margin-bottom: 2.5rem; max-width: 700px; margin: 0 auto 2.5rem; text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">
                  Contact us today for a consultation and quote. Our team of experts is ready to bring your construction vision to life.
                </p>
                <a href="{{ route('contact') }}" class="btn-primary" style="background-color: var(--white); color: var(--earth-tone); transform: scale(1.1); box-shadow: 0 4px 15px rgba(0,0,0,0.2);">Contact Us Today</a>
              </div>
            </div>
          </div>
        </section>
       </main>

        <!-- Newsletter Section -->
       <div class="section-padding" style="background-color: var(--light-gray);">
        <div class="container">
          <div class="text-center fade-in">
            <h2 class="section-title">Stay Updated</h2>
            <div class="heading-divider"></div>
          </div>
          
          <div class="row" style="justify-content: center;">
            <div class="col-md-6" style="justify-content: center;">

              <p class="section-subtitle">Subscribe to our newsletter to receive updates about our latest projects and services.</p>

              <div style="display: flex; flex-direction: column;">
                <a class="btn p-3 text-white" style="background: rgb(3, 98, 175)" href="{{ route('indexform') }}">Subscribe here</a>
              </div>


            </div>
          </div>
        </div>
       </div>

  
    </x-layout>