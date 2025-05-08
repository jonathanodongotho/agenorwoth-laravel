<x-layout>



    <div class="container-fluid" style="display: flex; justify-content: center; align-items: center;">
        <div class="col-md-6 py-4 mt-5">
            @if(session('success'))
                <p class="section-subtitle text-white bg-success p-2">
                    {{ session('success') }}
                </p>
            @endif


            <form action="{{ route('indexform.submit') }}" method="POST" class="needs-validation text-secondary" validate>

                @csrf

                <p class="section-subtitle">Subscribe to our newsletter to receive updates about our latest projects and services.</p>
                
                
                <!-- Name -->
                <div class="mb-3">
                    <label for="newsletter-name" class="form-label">Your Name</label>
                    <input name="name" type="text" class="form-control" id="newsletter-name" required>
                    <div class="invalid-feedback">Please enter your name</div>
                </div>
                
                <!-- Email -->
                <div class="mb-3">
                    <label for="newsletter-email" class="form-label">Your Email Address</label>
                    <input name="email" type="email" class="form-control" id="newsletter-email" required>
                    <div class="invalid-feedback">Please enter a valid email address</div>
                </div>
                
                <!-- Submit Button -->
                <div class="d-flex flex-column flex-md-row" style="justify-content: space-between;">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">
                        <i class="fas fa-envelope me-1"></i> Subscribe Now
                        </button>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('index') }}"  class="btn btn-warning">
                        <i class="fas fa-arrow-left me-1"></i> Go back home
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>



</x-layout>
