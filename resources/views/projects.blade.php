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
            <a href="{{ url('/projects') }}" class="nav-link current-page">Projects</a>
            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            <a href="{{ url('/others') }}" class="nav-link">Others</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

    <main>
        <section id="projects" class="page active-page">
          <!-- Hero Section -->
          <div class="hero-section" style="background-image: url('images/pallisa\ 2.jpg');">
            <div class="hero-overlay"></div>
            <div class="container">
              <div class="hero-content fade-in">
                <h1 class="hero-title">Our Projects</h1>
                <p class="hero-subtitle">Showcasing our expertise through successfully completed construction projects</p>
              </div>
            </div>
          </div>
    
          <!-- Project Filters -->
          <div class="section-padding">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 class="section-title">Project Portfolio</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">Browse through our diverse range of completed projects across Uganda</p>
              </div>
              
              <div class="projects-filter fade-in">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="building">Buildings</button>
                <button class="filter-btn" data-filter="roads">Roads</button>
                <button class="filter-btn" data-filter="renovation">Renovations</button>
              </div>
              
              <div class="projects-grid-full sequential-container">
                <!-- Project 1 -->
                <div class="project-card project-item sequential-item" data-category="building">
                  <div class="relative">
                    <img src="images/buk 3.jpg" alt="Commercial Building Project" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Building</span>
                        <p class="project-description">Construction of a ware house building in Bukedea district.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Ware House</h3>
                    <p class="project-location">Bukedea, Uganda</p>
                    <!-- <div class="project-stats">
                      <div>
                        <span class="count-up" data-target="12" data-duration="1500">0</span>
                        <p>Months</p>
                      </div>
                      <div>
                        <span class="count-up" data-target="45" data-duration="1500">0</span>
                        <p>Workers</p>
                      </div>
                      <div>
                        <span class="count-up" data-target="5" data-duration="1500">0</span>
                        <p>Floors</p>
                      </div>
                    </div> -->
                  </div>
                </div>
                
                <!-- Project 2 -->
                <div class="project-card project-item sequential-item" data-category="roads">
                  <div class="relative">
                    <img src="images/pallisa 3.jpg" alt="Highway Construction" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Roads</span>
                        <p class="project-description">Stone pitching in the construction of Pallisa road.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Pallisa Highway</h3>
                    <p class="project-location">Pallisa, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 3 -->
                <div class="project-card project-item sequential-item" data-category="roads">
                  <div class="relative">
                    <img src="images/pallisa 4.jpg" alt="Highway Construction" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Drainage</span>
                        <p class="project-description">Installation of pipe culverts on Pallisa road</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Pallisa Highway</h3>
                    <p class="project-location">Pallisa, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 4 -->
                <div class="project-card project-item sequential-item" data-category="building">
                  <div class="relative">
                    <img src="images/pallisa 3.jpg" alt="Highway Construction" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Concrete works</span>
                        <p class="project-description">Construction f headworks and bridge.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Acomai Irrigation Scheme</h3>
                    <p class="project-location">Bukedea, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 5 -->
                <div class="project-card project-item sequential-item" data-category="building">
                  <div class="relative">
                    <img src="images/buk 12.png" alt="Highway Construction" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Building</span>
                        <p class="project-description">Construction of farm shade at Acomai Irrigation Scheme.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Acomai Irrigation</h3>
                    <p class="project-location">Bukedea, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 6 -->
                <div class="project-card project-item sequential-item" data-category="building">
                  <div class="relative">
                    <img src="images/buk 11.png" alt="Highway Construction" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Concrete works</span>
                        <p class="project-description">Installation of cross and head regulator gate including form works and concrete.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Acomai Irrigation</h3>
                    <p class="project-location">Bukedea, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 7 -->
                <div class="project-card project-item sequential-item" data-category="building">
                  <div class="relative">
                    <img src="images/buk 10.png" alt="image" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Building</span>
                        <p class="project-description">Construction of guard house at Acomai Irrigation.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Acomai Irrigation</h3>
                    <p class="project-location">Bukedea, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 8 -->
                <div class="project-card project-item sequential-item" data-category="building">
                  <div class="relative">
                    <img src="images/buk 9.png" alt="image" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Concrete</span>
                        <p class="project-description">Canal concrete lining.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Acomai</h3>
                    <p class="project-location">Bukedea, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 9 -->
                <div class="project-card project-item sequential-item" data-category="roads">
                  <div class="relative">
                    <img src="images/wak 1.jpg" alt="Highway Construction" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Roads</span>
                        <p class="project-description">Excavation and pipe culvert works</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Wakiso</h3>
                    <p class="project-location">Wakiso, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 10 -->
                <div class="project-card project-item sequential-item" data-category="roads">
                  <div class="relative">
                    <img src="images/wak 4.jpg" alt="Highway Construction" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Roads</span>
                        <p class="project-description">Laying of hard core and masonry works.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Wakiso</h3>
                    <p class="project-location">Wakiso, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 11 -->
                <div class="project-card project-item sequential-item" data-category="roads">
                  <div class="relative">
                    <img src="images/wak 5.jpg" alt="Highway Construction" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Roads</span>
                        <p class="project-description">Laying of pavers and construction of manholes.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Wakiso</h3>
                    <p class="project-location">Wakiso, Uganda</p>
                  </div>
                </div>
    
                <!-- Project 12 -->
                <div class="project-card project-item sequential-item" data-category="roads">
                  <div class="relative">
                    <img src="images/masaka 1.jpg" alt="image" class="project-image">
                    <div class="project-overlay">
                      <div class="text-center">
                        <span class="project-category">Roads</span>
                        <p class="project-description">Installation of MS pipe culverts on Nyendo Bukakata road.</p>
                      </div>
                    </div>
                  </div>
                  <div class="project-info">
                    <h3 class="project-title">Masaka</h3>
                    <p class="project-location">Masaka, Uganda</p>
                  </div>
                </div>
    
    
              </div>
            </div>
          </div>
    
          <!-- Project Stats -->
          <!-- <div class="section-padding" style="background-color: var(--slate-gray);">
            <div class="container">
              <div class="text-center flip-in">
                <h2 class="section-title" style="color: var(--white);">Our Track Record</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle" style="color: var(--light-gray);">A snapshot of our achievements over the past decade</p>
              </div>
              
              <div class="stats-container fade-in">
                <div class="stat-item">
                  <div class="stat-icon">
                    <i class="fas fa-building"></i>
                  </div>
                  <div class="stat-number count-up" data-target="150" data-duration="2000">0</div>
                  <div class="stat-label">Projects Completed</div>
                </div>
                
                <div class="stat-item">
                  <div class="stat-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="stat-number count-up" data-target="32" data-duration="2000">0</div>
                  <div class="stat-label">Districts Covered</div>
                </div>
                
                <div class="stat-item">
                  <div class="stat-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="stat-number count-up" data-target="85" data-duration="2000">0</div>
                  <div class="stat-label">Team Members</div>
                </div>
                
                <div class="stat-item">
                  <div class="stat-icon">
                    <i class="fas fa-award"></i>
                  </div>
                  <div class="stat-number count-up" data-target="12" data-duration="2000">0</div>
                  <div class="stat-label">Industry Awards</div>
                </div>
              </div>
            </div>
          </div> -->
    
          <!-- Testimonials -->
          <!-- <div class="section-padding">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 class="section-title">Client Testimonials</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">What our clients say about working with us</p>
              </div>
              
              <div class="testimonials-container sequential-container">
                <div class="testimonial-card sequential-item">
                  <div class="testimonial-content">
                    <i class="fas fa-quote-left testimonial-quote"></i>
                    <p>Agenorwot Technical Contractors exceeded our expectations with their professionalism and attention to detail. The commercial complex was completed on schedule and within budget, with exceptional quality standards.</p>
                  </div>
                  <div class="testimonial-author">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="James Okello" class="testimonial-avatar">
                    <div>
                      <div class="testimonial-name">James Okello</div>
                      <div class="testimonial-position">Director, Kampala Property Investments</div>
                    </div>
                  </div>
                </div>
                
                <div class="testimonial-card sequential-item">
                  <div class="testimonial-content">
                    <i class="fas fa-quote-left testimonial-quote"></i>
                    <p>The highway construction project was handled with the highest level of expertise. The team's engineering solutions for challenging terrain were innovative, and the finished road has significantly improved transportation in our district.</p>
                  </div>
                  <div class="testimonial-author">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Sarah Atim" class="testimonial-avatar">
                    <div>
                      <div class="testimonial-name">Sarah Atim</div>
                      <div class="testimonial-position">District Engineer, Lira District</div>
                    </div>
                  </div>
                </div>
                
                <div class="testimonial-card sequential-item">
                  <div class="testimonial-content">
                    <i class="fas fa-quote-left testimonial-quote"></i>
                    <p>The renovation of our heritage hotel preserved its historical character while updating it with modern amenities. Agenorwot's team showed remarkable skill in balancing preservation with modernization throughout the project.</p>
                  </div>
                  <div class="testimonial-author">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Daniel Mukasa" class="testimonial-avatar">
                    <div>
                      <div class="testimonial-name">Daniel Mukasa</div>
                      <div class="testimonial-position">General Manager, Entebbe Heritage Hotel</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
     -->
          <!-- CTA Section -->
          <div class="section-padding parallax-bg" style="background-color: var(--earth-tone); background-image: url('images/buk\ 1.jpg'); background-blend-mode: overlay;" data-speed="0.2">
            <div class="container">
              <div class="text-center fade-in">
                <h2 style="font-size: 2rem; color: var(--white); margin-bottom: 1.5rem;">Have a Project in Mind?</h2>
                <p style="color: var(--light-gray); margin-bottom: 2rem; max-width: 700px; margin: 0 auto 2rem;">Let's discuss how Agenorwot Technical Contractors can bring your construction vision to life with our proven expertise and dedication to quality.</p>
                <a href="{{ route('projects') }}" class="btn-primary animated-button" style="background-color: var(--white); color: var(--earth-tone);">
                  <span class="button-text">Start Your Project</span>
                  <i class="button-icon fas fa-arrow-right"></i>
                  <span class="button-shine"></span>
                </a>
              </div>
            </div>
          </div>
        </section>
      </main>

</x-layout>