<!-- Footer Start -->
<div class="mt-5 container-fluid bg-dark text-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div
                    class="p-4 text-center d-flex flex-column align-items-center justify-content-center h-100 bg-primary">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-white">POLAInTech</h1>
                    </a>
                    <p class="mt-3 mb-4">
                        {{ $profile->about
                            ? $profile->about
                            : 'Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit.
                                                                            Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd
                                                                            eos duo.' }}
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="pt-5 mb-5 col-lg-4 col-md-12">
                        <div class="pb-3 mb-4 section-title section-title-sm position-relative">
                            <h3 class="mb-0 text-light">Get In Touch</h3>
                        </div>
                        <div class="mb-2 d-flex">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">
                                {{ $profile->alamat ? $profile->alamat : 'Jl.Pramuka, Purwakarta, Indonesia' }}</p>
                        </div>
                        <div class="mb-2 d-flex">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">{{ $profile->email ? $profile->email : 'genzcompany23@gmail.com' }}</p>
                        </div>
                        <div class="mb-2 d-flex">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">{{ $profile->telepon ? $profile->telepon : '(0264)88305518' }}</p>
                        </div>
                        <div class="mt-4 d-flex">
                            @if ($profile->twitter)
                                <a class="btn btn-primary btn-square me-2" href="{{ $profile->twitter }}"
                                    target="_blank">
                                    <i class="fab fa-twitter fw-normal"></i>
                                </a>
                            @endif
                            @if ($profile->facebook)
                                <a class="btn btn-primary btn-square me-2" href="{{ $profile->facebook }}"
                                    target="_blank">
                                    <i class="fab fa-facebook-f fw-normal"></i>
                                </a>
                            @endif
                            @if ($profile->linkedin)
                                <a class="btn btn-primary btn-square me-2" href="{{ $profile->linkedin }}"
                                    target="_blank">
                                    <i class="fab fa-linkedin-in fw-normal"></i>
                                </a>
                            @endif
                            @if ($profile->instagram)
                                <a class="btn btn-primary btn-square" href="{{ $profile->instagram }}" target="_blank">
                                    <i class="fab fa-instagram fw-normal"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="pt-0 mb-5 col-lg-4 col-md-12 pt-lg-5">
                        <div class="pb-3 mb-4 section-title section-title-sm position-relative">
                            <h3 class="mb-0 text-light">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="mb-2 text-light" href="/"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="mb-2 text-light" href="/about"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="mb-2 text-light" href="/service"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-light" href="/contact"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="pt-0 mb-5 col-lg-4 col-md-12 pt-lg-5">
                        <div class="pb-3 mb-4 section-title section-title-sm position-relative">
                            <h3 class="mb-0 text-light">Working hours</h3>
                        </div>
                        <p class="mb-1">Monday - Friday</p>
                        <h6 class="text-light">08:00 - 16:00</h6>
                        <p class="mb-1">Saturday</p>
                        <h6 class="text-light">09:00 - 12:00</h6>
                        <p class="mb-1">Sunday</p>
                        <h6 class="text-light">Closed</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-white container-fluid" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Komunitas Pondok Labu</a>, All
                        Right Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
