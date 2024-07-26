<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ url('/') }}" class="nav-item nav-link @if(URL::current() == url('/')) active @endif">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link @if(URL::current() == url('/about')) active @endif">About</a>
            <a href="{{ url('/services') }}" class="nav-item nav-link @if(URL::current() == url('/services')) active @endif">Services</a>
            <a href="{{ url('/packages') }}" class="nav-item nav-link @if(URL::current() == url('/packages')) active @endif">Packages</a>
            <a href="{{ url('/blog') }}" class="nav-item nav-link @if(URL::current() == url('/blog')) active @endif">Blog</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="destination.html" class="dropdown-item">Destination</a>
                    <a href="{{ url('/tour') }}" class="dropdown-item">Explore Tour</a>
                    <a href="{{ url('/booking') }}" class="dropdown-item">Travel Booking</a>
                    <a href="{{ url('/gallery') }}" class="dropdown-item">Our Gallery</a>
                    <a href="{{ url('/guides') }}" class="dropdown-item">Travel Guides</a>
                    <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                    <a href="{{ url('/404') }}" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
    </div>
</nav>