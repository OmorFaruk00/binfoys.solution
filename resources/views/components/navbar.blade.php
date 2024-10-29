<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>β Infosys Solutions</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('dev')}}" class="dropdown-item">Custom Software Development</a>
                        <a href="{{route('web')}}" class="dropdown-item">Web Application Development</a>
                        <a href="{{route('mobile')}}" class="dropdown-item">Mobile Application Development</a>
                        <a href="{{route('qa')}}" class="dropdown-item">Quality Assurance & Testing</a>
                       
                    </div>
                </div>
                <a href="{{route('blog')}}" class="nav-item nav-link {{ Request::is('blog') ? 'active' : '' }}">Blog</a>
               
               
                <a href="{{route('contact')}}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
           
        </div>
    </nav>

    
</div>