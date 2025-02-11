<!-- Topbar Start -->
<div class="px-5 container-fluid bg-dark d-none d-lg-block">
    <div class="row gx-0">
        <div class="mb-2 text-center col-lg-8 text-lg-start mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light">
                    <i class="fa fa-map-marker-alt me-2"></i>
                    {{ $profile->alamat ? $profile->alamat : 'Jl.Pramuka, Purwakarta, Indonesia' }}
                </small>
                <small class="me-3 text-light">
                    <i class="fa fa-phone-alt me-2"></i>
                    {{ $profile->telepon ? $profile->telepon : '(0264)88305518' }}
                </small>
                <small class="text-light">
                    <i class="fa fa-envelope-open me-2"></i>
                    {{ $profile->email ? $profile->email : 'genzcompany23@gmail.com' }}
                </small>
            </div>
        </div>
        <div class="text-center col-lg-4 text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                @if ($profile->twitter)
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ $profile->twitter }}" target="_blank">
                        <i class="fab fa-twitter fw-normal"></i>
                    </a>
                @endif
                @if ($profile->facebook)
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ $profile->facebook }}" target="_blank">
                        <i class="fab fa-facebook-f fw-normal"></i>
                    </a>
                @endif
                @if ($profile->linkedin)
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ $profile->linkedin }}" target="_blank">
                        <i class="fab fa-linkedin-in fw-normal"></i>
                    </a>
                @endif

                @if ($profile->instagram)
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ $profile->instagram }}" target="_blank">
                        <i class="fab fa-instagram fw-normal"></i>
                    </a>
                @endif
                @if ($profile->youtube)
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="{{ $profile->youtube }}" target="_blank">
                        <i class="fab fa-youtube fw-normal"></i>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Carousel Start -->
<div class="p-0 container-fluid position-relative">
    <nav class="px-5 py-3 navbar navbar-expand-lg navbar-dark py-lg-0">
        <a href="/" class="p-0 navbar-brand">
            <h1 class="m-0">
                <img src="/logo/gentologo.svg" alt="Gento Logo" class="me-2" style="height: 40px;">

            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="py-0 navbar-nav ms-auto">
                <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item nav-link {{ request()->is('/about') ? 'active' : '' }}">About</a>
                <a href="/service"
                    class="nav-item nav-link {{ request()->is('/service') ? 'active' : '' }}">Services</a>
                <a href="/contact"
                    class="nav-item nav-link {{ request()->is('/contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar & Carousel End -->
