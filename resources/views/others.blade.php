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
            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            <a href="{{ url('/others') }}" class="nav-link current-page">Others</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

    <main>
        <section id="others" class="page active-page">
          <!-- Hero Section -->
          <div class="hero-section" style="background-image: url('images/buk\ 6.png');">
            <div class="hero-overlay"></div>
            <div class="container">
              <div class="hero-content fade-in">
                <h1 class="hero-title">More Information</h1>
                <p class="hero-subtitle">Additional resources, certifications, and company details</p>
              </div>
            </div>
          </div>
    
          <!-- Certifications & Accreditations -->
          <!-- <div class="section-padding">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 class="section-title">Certifications & Accreditations</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">Agenorwot Technical Contractors is recognized by various industry bodies and maintains the highest standards</p>
              </div>
              
              <div class="certifications-grid sequential-container">
                <div class="certification-card sequential-item">
                  <div class="certification-icon">
                    <i class="fas fa-certificate"></i>
                  </div>
                  <h3>NCA Certified Contractor</h3>
                  <p>National Construction Authority<br>Category NCA1 (Unlimited Value)</p>
                  <span class="certification-date">Since 2012</span>
                </div>
                
                <div class="certification-card sequential-item">
                  <div class="certification-icon">
                    <i class="fas fa-award"></i>
                  </div>
                  <h3>ISO 9001:2015</h3>
                  <p>Quality Management Systems<br>Certification #ISO9001-2456789</p>
                  <span class="certification-date">Renewed 2023</span>
                </div>
                
                <div class="certification-card sequential-item">
                  <div class="certification-icon">
                    <i class="fas fa-shield-alt"></i>
                  </div>
                  <h3>ISO 45001:2018</h3>
                  <p>Occupational Health & Safety<br>Certification #ISO45001-7891234</p>
                  <span class="certification-date">Renewed 2023</span>
                </div>
                
                <div class="certification-card sequential-item">
                  <div class="certification-icon">
                    <i class="fas fa-leaf"></i>
                  </div>
                  <h3>ISO 14001:2015</h3>
                  <p>Environmental Management<br>Certification #ISO14001-5678912</p>
                  <span class="certification-date">Renewed 2023</span>
                </div>
                
                <div class="certification-card sequential-item">
                  <div class="certification-icon">
                    <i class="fas fa-building"></i>
                  </div>
                  <h3>UCICO Member</h3>
                  <p>Uganda Construction Industry Chamber of Commerce<br>Member #UCICO-4578</p>
                  <span class="certification-date">Since 2015</span>
                </div>
                
                <div class="certification-card sequential-item">
                  <div class="certification-icon">
                    <i class="fas fa-hard-hat"></i>
                  </div>
                  <h3>UACE Member</h3>
                  <p>Uganda Association of Consulting Engineers<br>Member #UACE-29045</p>
                  <span class="certification-date">Since 2016</span>
                </div>
              </div>
            </div>
          </div> -->
          
          <!-- Health & Safety -->
          <div class="section-padding" style="background-color: var(--light-gray);">
            <div class="container">
              <div class="text-center flip-in">
                <h2 class="section-title">Health & Safety</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">Safety is our top priority in every project we undertake</p>
              </div>
              
              <div class="hs-content slide-in-left">
                <div class="hs-image">
                  <img src="images/safety.jpg" alt="Health & Safety on construction site" class="rounded-image">
                </div>
                <div class="hs-text">
                  <h3>Our Commitment to Safety</h3>
                  <p>At Agenorwot Technical Contractors, we are committed to maintaining the highest standards of health and safety across all our operations. Our comprehensive safety program includes:</p>
                  
                  <div class="hs-features sequential-container">
                    <div class="hs-feature sequential-item">
                      <i class="fas fa-clipboard-check"></i>
                      <div>
                        <h4>Regular Safety Training</h4>
                        <p>All staff undergo regular safety training and certification to ensure they understand and follow safety protocols.</p>
                      </div>
                    </div>
                    
                    <div class="hs-feature sequential-item">
                      <i class="fas fa-hard-hat"></i>
                      <div>
                        <h4>Personal Protective Equipment</h4>
                        <p>We ensure all personnel have appropriate PPE for their specific roles and working environments.</p>
                      </div>
                    </div>
                    
                    <div class="hs-feature sequential-item">
                      <i class="fas fa-search"></i>
                      <div>
                        <h4>Rigorous Risk Assessments</h4>
                        <p>Comprehensive risk assessments are conducted before and during all projects to identify and mitigate potential hazards.</p>
                      </div>
                    </div>
                    
                    <div class="hs-feature sequential-item">
                      <i class="fas fa-chart-line"></i>
                      <div>
                        <h4>Safety Performance Monitoring</h4>
                        <p>We track safety metrics and maintain a continuous improvement approach to our safety procedures.</p>
                      </div>
                    </div>
                  </div>
                  
                  <!-- <div class="safety-stats fade-in">
                    <div class="safety-stat">
                      <span class="stat-number count-up" data-target="1200" data-duration="2000">0</span>
                      <span class="stat-label">Days without lost time injury</span>
                    </div>
                    <div class="safety-stat">
                      <span class="stat-number count-up" data-target="100" data-duration="2000">0</span><span>%</span>
                      <span class="stat-label">Staff safety certified</span>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          
          <!-- CSR & Environmental Sustainability -->
          <div class="section-padding">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 class="section-title">Corporate Social Responsibility</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">Making a positive impact on communities and the environment</p>
              </div>
              
              <div class="csr-grid sequential-container">
                <div class="csr-card sequential-item">
                  <div class="csr-icon">
                    <i class="fas fa-tree"></i>
                  </div>
                  <h3>Environmental Sustainability</h3>
                  <p>We implement environmentally responsible practices in all our operations, including waste reduction, energy efficiency, and sustainable sourcing of materials.</p>
                </div>
                
                <div class="csr-card sequential-item">
                  <div class="csr-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <h3>Community Development</h3>
                  <p>We actively engage with local communities through employment opportunities, skills training, and infrastructure improvement projects that benefit the wider community.</p>
                </div>
                
                <div class="csr-card sequential-item">
                  <div class="csr-icon">
                    <i class="fas fa-graduation-cap"></i>
                  </div>
                  <h3>Education Support</h3>
                  <p>We partner with local educational institutions to provide internships and practical training opportunities for engineering and construction students.</p>
                </div>
                
                <div class="csr-card sequential-item">
                  <div class="csr-icon">
                    <i class="fas fa-heart"></i>
                  </div>
                  <h3>Charitable Initiatives</h3>
                  <p>We regularly contribute to local charities and participate in community service activities, particularly focusing on improving infrastructure for disadvantaged communities.</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- FAQ Section -->
          <!-- <div class="section-padding" style="background-color: var(--light-gray);">
            <div class="container">
              <div class="text-center zoom-in">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">Find answers to common questions about our services and operations</p>
              </div>
              
              <div class="faq-container fade-in">
                <div class="faq-item">
                  <div class="faq-question">
                    <h3>What is the typical timeline for a commercial building project?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                  </div>
                  <div class="faq-answer">
                    <p>Commercial building projects typically take between 9-18 months to complete, depending on the size, complexity, and specific requirements. The timeline includes planning, design, permitting, construction, and finishing phases. We provide a detailed project schedule during the initial consultation.</p>
                  </div>
                </div>
                
                <div class="faq-item">
                  <div class="faq-question">
                    <h3>Do you handle all necessary permits and approvals?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                  </div>
                  <div class="faq-answer">
                    <p>Yes, we manage the entire permitting process for our projects. Our team is well-versed in local regulations and building codes across Uganda. We handle all necessary documentation, submissions, and follow-ups with relevant authorities to ensure that all permits and approvals are secured properly and promptly.</p>
                  </div>
                </div>
                
                <div class="faq-item">
                  <div class="faq-question">
                    <h3>What types of insurance coverage do you maintain?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                  </div>
                  <div class="faq-answer">
                    <p>We maintain comprehensive insurance coverage including General Liability Insurance, Professional Indemnity Insurance, Workers' Compensation, and Contractor's All Risk Insurance. These policies protect our clients, our employees, and our company throughout the construction process. We provide certificates of insurance upon request.</p>
                  </div>
                </div>
                
                <div class="faq-item">
                  <div class="faq-question">
                    <h3>How do you ensure quality control in your projects?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                  </div>
                  <div class="faq-answer">
                    <p>We implement a rigorous quality control process that includes regular inspections, material testing, and adherence to international standards. Our ISO 9001:2015 certified quality management system ensures consistent quality across all aspects of our projects. Additionally, we conduct thorough quality assessments at key project milestones with client involvement.</p>
                  </div>
                </div>
                
                <div class="faq-item">
                  <div class="faq-question">
                    <h3>Do you provide warranties for your construction work?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                  </div>
                  <div class="faq-answer">
                    <p>Yes, we provide a comprehensive warranty on all our construction work. Our standard warranty covers structural elements for 10 years and non-structural elements for 1-2 years, depending on the specific component. This warranty covers defects in materials and workmanship and ensures that any issues that arise within the warranty period are promptly addressed.</p>
                  </div>
                </div>
                
                <div class="faq-item">
                  <div class="faq-question">
                    <h3>How do you handle project changes or modifications?</h3>
                    <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                  </div>
                  <div class="faq-answer">
                    <p>We have a structured change order process that documents any modifications to the original project scope. When a change is requested, we provide a detailed assessment of the impact on cost, timeline, and resources. This is presented to the client for approval before implementation. Our transparent approach ensures that all parties are fully informed and in agreement throughout the change process.</p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
    
          <!-- Downloads Section -->
          <div class="section-padding">
            <div class="container">
              <div class="text-center flip-in">
                <h2 class="section-title">Resources & Downloads</h2>
                <div class="heading-divider"></div>
                <p class="section-subtitle">Access useful documents and information about our company</p>
              </div>
              
              <div class="downloads-grid sequential-container">
                <div class="download-card sequential-item">
                  <div class="download-icon">
                    <i class="fas fa-file-pdf"></i>
                  </div>
                  <div class="download-content">
                    <h3>Company Profile</h3>
                    <p>Comprehensive overview of our company, services, and expertise</p>
                    <a href="assets/docs/COMPANY PROFILE.pdf" download class="download-link">Download PDF <i class="fas fa-download"></i></a>
                  </div>
                </div>
    
              </div>
            </div>
          </div>
    
          <!-- CTA Section -->
          <div class="section-padding" style="background-color: var(--earth-tone);">
            <div class="container">
              <div class="text-center fade-in">
                <h2 style="font-size: 2rem; color: var(--white); margin-bottom: 1.5rem;">Still Have Questions?</h2>
                <p style="color: var(--light-gray); margin-bottom: 2rem; max-width: 700px; margin: 0 auto 2rem;">Contact our team for more information about our services, certifications, or to discuss your specific project requirements.</p>
                <a href="contact.html" class="btn-primary animated-button" style="background-color: var(--white); color: var(--earth-tone);">
                  <span class="button-text">Contact Us Today</span>
                  <i class="button-icon fas fa-envelope"></i>
                  <span class="button-shine"></span>
                </a>
              </div>
            </div>
          </div>
        </section>
      </main>

</x-layout>