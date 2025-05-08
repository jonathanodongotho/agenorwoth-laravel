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
            <a href="{{ url('/about') }}" class="nav-link current-page">About</a>
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
        <section id="about" class="page active-page">
          <!-- Hero Section -->
          <div class="hero-section" style="background-image: url('images/buk\ 5.png');">
            <div class="hero-overlay"></div>
            <div class="container">
              <div class="hero-content fade-in">
                <h1 class="hero-title">About Us</h1>
                <p class="hero-subtitle">Learn about our company, mission, and the team behind our success</p>
              </div>
            </div>
          </div>
    
          <!-- Company Background -->
          <div class="section-padding">
            <div class="container">
              <div class="about-section">
                <div class="about-content slide-in-left">
                  <h2>Company Background</h2>
                  <div class="heading-divider" style="margin-left: 0;"></div>
                  <p class="about-text">AGENORWOT TECHNICAL CONTRACTORS LIMITED is a
                     registered and certified limited liability company with the Uganda 
                     Registration Services Board and Uganda Revenue Authority under
                      TIN No.1051391340.</p>
                  <p class="about-text">AGENORWOT TECHNICAL CONTRACTORS LIMITED provides engineering services, consultancy 
                    and routine maintenance contracts with integrity to both private and public sector clients.  
                    Our solutions are consistent with the goals of our clients. We research, develop and
                     present multiple options if appropriate and help select the best solution.
                      A partner of the firm manages each project and a qualified team of professionals
                       assists them maintaining the highest standard of customer service. 
                    </p>
                  <p class="about-text">To maintain our efficiency, timely and unique response
                     to our clients’ needs; the company has established a network based on
                      the division of labor amongst our staff and due to our professional
                       quality and clients tailored services we have been able to offer
                        services to Government, Non-Government and privately owned 
                        organizations; an assignment we have performed very diligently. </p>
                </div>
                <div class="">
                  <img src="images/wak 3.jpg" alt="Construction site with workers and equipment" class="about-image" />
                </div>
              </div>
            </div>
          </div>
    
          <!-- Mission, Vision, Values -->
          <div class="section-padding" style="background-color: var(--light-gray);">
            <div class="container">
              <div class="text-center fade-in">
                <h2 class="section-title">Our Mission, Vision & Values</h2>
                <div class="heading-divider"></div>
              </div>
              <div class="grid" style="margin-top: 3rem;">
                <div class="card fade-in">
                  <div class="card-body">
                    <h3 class="card-title" style="color: var(--steel-blue); text-align: center;">Our Mission</h3>
                    <p class="card-text">To safely deliver any project, anytime, in
                       any environment for the benefit of our customers, shareholders,
                        employees and the communities we serve. </p>
                  </div>
                </div>
                <div class="card fade-in">
                  <div class="card-body">
                    <h3 class="card-title" style="color: var(--steel-blue); text-align: center;">Our Vision</h3>
                    <p class="card-text">To be globally recognized as one of the greatest 
                      contractors and employer of choice by safely and consistently
                       delivering successful and innovative capital projects and 
                       service anywhere in the world. </p>
                  </div>
                </div>
                <div class="card fade-in">
                  <div class="card-body">
                    <h3 class="card-title" style="color: var(--steel-blue); text-align: center;">Core Values</h3>
                    <div style="display: grid; gap: 1rem; margin-top: 1rem;">
                      <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <div style="background-color: var(--construction-yellow); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                          <i class="fas fa-handshake" style="color: var(--dark-gray);"></i>
                        </div>
                        <div>
                          <h4 style="font-size: 1rem; margin-bottom: 0.3rem;">Integrity</h4>
                          <p style="font-size: 0.9rem;">We are honest, trustworthy, respectful and ethical in our actions. </p>
                        </div>
                      </div>
                      <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <div style="background-color: var(--construction-yellow); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                          <i class="fas fa-users" style="color: var(--dark-gray);"></i>
                        </div>
                        <div>
                          <h4 style="font-size: 1rem; margin-bottom: 0.3rem;">Teamwork</h4>
                          <p style="font-size: 0.9rem;">We believe teamwork wallops our individual strengths. </p>
                        </div>
                      </div>
                      <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <div style="background-color: var(--construction-yellow); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                          <i class="fas fa-chart-line" style="color: var(--dark-gray);"></i>
                        </div>
                        <div>
                          <h4 style="font-size: 1rem; margin-bottom: 0.3rem;">Performance</h4>
                          <p style="font-size: 0.9rem;">We believe performance excellence will drive the results that differentiate us from our competitors. </p>
                        </div>
                      </div>
                      <!-- <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <div style="background-color: var(--construction-yellow); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                          <i class="fas fa-shield-alt" style="color: var(--dark-gray);"></i>
                        </div>
                        <div>
                          <h4 style="font-size: 1rem; margin-bottom: 0.3rem;">Safety</h4>
                          <p style="font-size: 0.9rem;">We prioritize the well-being of our employees, clients, and the public.</p>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Business Objectives -->
          <div class="section-padding">
            <div class="container">
              <div class="text-center fade-in">
                <h2 class="section-title">Our Business Objectives</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">At Agenorwot Technical Contractors, we are guided by clear objectives that inform our business approach and strategy.</p>
              </div>
              <div class="grid fade-in" style="margin-top: 2rem;">
                <div class="card">
                  <div class="card-body">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                      <div style="background-color: var(--construction-yellow); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                        <i class="fas fa-medal" style="color: var(--dark-gray);"></i>
                      </div>
                      <h3 class="card-title" style="margin: 0;">Quality Assurance</h3>
                    </div>
                    <p class="card-text">To consistently deliver construction projects that meet or exceed quality standards, using superior materials and techniques.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                      <div style="background-color: var(--construction-yellow); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                        <i class="fas fa-hard-hat" style="color: var(--dark-gray);"></i>
                      </div>
                      <h3 class="card-title" style="margin: 0;">Skilled Workforce</h3>
                    </div>
                    <p class="card-text">To maintain a team of highly qualified professionals and invest in continuous training and development of our staff.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                      <div style="background-color: var(--construction-yellow); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                        <i class="fas fa-clock" style="color: var(--dark-gray);"></i>
                      </div>
                      <h3 class="card-title" style="margin: 0;">Timely Delivery</h3>
                    </div>
                    <p class="card-text">To complete all projects within agreed timeframes without compromising on quality or safety standards.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                      <div style="background-color: var(--construction-yellow); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                        <i class="fas fa-seedling" style="color: var(--dark-gray);"></i>
                      </div>
                      <h3 class="card-title" style="margin: 0;">Sustainability</h3>
                    </div>
                    <p class="card-text">To incorporate environmentally responsible practices in our operations and promote sustainable construction methods.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <!-- Team Section -->
          <div class="section-padding" style="background-color: var(--light-gray);">
            <div class="container">
              <div class="text-center fade-in">
                <h2 class="section-title">Organization Authorities & Responsibilities</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">Meet the structure of the authorities that lead our company with expertise and vision.</p>
              </div>
              <div class="grid team fade-in">
                <div class="team-image">
                  <img src="images/team.png" alt="">
                </div>
              </div>
            </div>
          </div>
    
          <!-- CTA Section -->
          <div class="section-padding" style="background-color: var(--earth-tone);">
            <div class="container">
              <div class="text-center fade-in">
                <h2 style="font-size: 2rem; color: var(--white); margin-bottom: 1.5rem;">Ready to Work With Us?</h2>
                <p style="color: var(--light-gray); margin-bottom: 2rem; max-width: 700px; margin: 0 auto 2rem;">Contact our team today to discuss your construction project needs and discover how we can bring your vision to life.</p>
                <a href="{{ route('contact') }}" class="btn-primary" style="background-color: var(--white); color: var(--earth-tone);">Contact Us Today</a>
              </div>
            </div>
          </div>
        </section>
      </main>

</x-layout>