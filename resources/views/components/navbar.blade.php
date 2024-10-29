<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Beta Infoys Solutions</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                <a href="{{route('service')}}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a>
                <a href="{{route('blog')}}" class="nav-item nav-link {{ Request::is('blog') ? 'active' : '' }}">Blog</a>
               
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Our features</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                    </div>
                </div> --}}
                <a href="{{route('contact')}}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
           
        </div>
    </nav>

    
</div>