@extends('layouts.layout_landing')

@section('title')
    POLAInTech | Solution To All Your Problems
@endsection

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    #header-carousel .carousel-caption h5,
    #header-carousel .carousel-caption h1 {
        font-family: 'Inter', sans-serif;
    }
</style>

@section('content')
    <!-- Carousel Start -->
    @if ($carousels)
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousels as $index => $carousels)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img class="w-100"
                            src="{{ asset($carousels->file ? $carousels->file : 'assetsLandings/img/carousel-1.jpg') }}"
                            alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="mb-3 text-white text-uppercase animated slideInDown">{{ $carousels->title }}</h5>
                                <h1 class="text-white display-1 mb-md-4 animated zoomIn">{{ $carousels->subtitle }}</h1>
                                <a href="{{ route('contact.index') }}"
                                    class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    @endif
    <!-- Carousel End -->

    <!-- Facts Start -->
    @if ($profile)
        <div class="py-5 container-fluid facts pt-lg-0">
            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                        <div class="p-4 shadow bg-primary d-flex align-items-center justify-content-center"
                            style="height: 150px;">
                            <div class="mb-2 bg-white rounded d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-0 text-white">Happy Clients</h5>
                                <h1 class="mb-0 text-white" data-toggle="counter-up">{{ $profile->clients }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                        <div class="p-4 shadow bg-light d-flex align-items-center justify-content-center"
                            style="height: 150px;">
                            <div class="mb-2 rounded bg-primary d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="text-white fa fa-check"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-0 text-primary">Projects Done</h5>
                                <h1 class="mb-0" data-toggle="counter-up">{{ $profile->projects }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                        <div class="p-4 shadow bg-primary d-flex align-items-center justify-content-center"
                            style="height: 150px;">
                            <div class="mb-2 bg-white rounded d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-primary"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-0 text-white">Win Awards</h5>
                                <h1 class="mb-0 text-white" data-toggle="counter-up">{{ $profile->awards }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Facts Start -->

    <!-- About Start -->
    @if ($about)
        <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="pb-3 mb-5 section-title position-relative">
                            <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                            <h1 class="mb-0">{{ $about->title }}</h1>
                        </div>
                        <p class="mb-4">
                            {{ $about->description }}
                        </p>
                        <div class="mb-4 d-flex align-items-center wow fadeIn" data-wow-delay="0.6s">
                            <div class="rounded bg-primary d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="text-white fa fa-envelope-open"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Email</h5>
                                <h4 class="mb-0 text-primary">
                                    {{ $profile->email ? $profile->email : 'genzcompany23@gmail.com' }}</h4>
                            </div>
                        </div>
                        <div class="mb-4 d-flex align-items-center wow fadeIn" data-wow-delay="0.6s">
                            <div class="rounded bg-primary d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="text-white fa fa-phone-alt"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Phone</h5>
                                <h4 class="mb-0 text-primary">
                                    {{ $profile->telepon ? $profile->telepon : '(0264)88305518' }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="rounded position-absolute w-100 h-100 wow zoomIn" data-wow-delay="0.9s"
                                src="{{ asset($about->file ? $about->file : 'assetsLanding/img/service-2.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- About End -->

    <!-- Features Start -->
    @if ($whychoose)
        <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="pb-3 mx-auto mb-5 text-center section-title position-relative" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">{{ $whychoose->title }}</h5>
                    <h1 class="mb-0">{{ $whychoose->subtitle }}</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="row g-5">
                            @foreach ($whychooseDetail1 as $detail1)
                                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                    <div class="mb-3 rounded bg-primary d-flex align-items-center justify-content-center"
                                        style="width: 60px; height: 60px;">
                                        <i class="text-white fa fa-cubes"></i>
                                    </div>
                                    <h4>{{ $detail1->title }}</h4>
                                    <p class="mb-0">{{ $detail1->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                        <div class="position-relative h-100">
                            <img class="rounded position-absolute w-100 h-100 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset($whychoose->file ? $whychoose->file : 'assetsLanding/img/feature.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-5">
                            @foreach ($whychooseDetail2 as $detail2)
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="mb-3 rounded bg-primary d-flex align-items-center justify-content-center"
                                        style="width: 60px; height: 60px;">
                                        <i class="text-white fa fa-users-cog"></i>
                                    </div>
                                    <h4>{{ $detail2->title }}</h4>
                                    <p class="mb-0">{{ $detail2->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Features End -->


    <!-- Service Start -->
    @if (count($services) > 0)
        {{-- <div class="py-5 container-xxl" id="service">
            <div class="container">
                <div class="pb-4 mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="mb-2 fw-medium text-uppercase text-primary">Our Services</p>
                    <h1 class="mb-4 display-5">Kami Memberikan Pelayanan Terbaik</h1>
                </div>
                <div class="row gy-5 gx-4">

                    @foreach ($services as $service)
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <img class="img-fluid service-img-cover"
                                    src="{{ $service->file ? asset($service->file) : asset('assetsLanding/img/placeholder.jpg') }}"
                                    alt="service">
                                <div class="service-img">
                                    <img class="img-fluid"
                                        src="{{ $service->file ? asset($service->file) : asset('assetsLanding/img/placeholder.jpg') }}"
                                        alt="service">
                                </div>
                                <div class="service-detail">
                                    <div class="service-title">
                                        <hr class="w-25">
                                        <h3 class="mb-0">{{ $service->title }}</h3>
                                        <hr class="w-25">
                                    </div>
                                    <div class="service-text">
                                        <p class="mb-0 text-white">{{ $service->description }}</p>
                                    </div>
                                </div>
                                <a class="btn btn-light" href="">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> --}}

        {{--  <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="pb-3 mx-auto mb-5 text-center section-title position-relative" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                    <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
                </div>
                <div class="row g-5">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                            <div
                                class="text-center rounded service-item bg-light d-flex flex-column align-items-center justify-content-center">
                                <div class="service-icon">
                                    <i class="text-white fa fa-{{ $service->icon ? $service->icon : 'code' }}"></i>
                                </div>
                                <h4 class="mb-3">{{ $service->title }}</h4>
                                <p class="m-0">{{ $service->description }}</p>
                                <a class="rounded btn btn-lg btn-primary" href="{{ $service->link }}">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>  --}}
    @endif
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    {{-- @if ($price)
        <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="pb-3 mx-auto mb-5 text-center section-title position-relative" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                    <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
                </div>
                <div class="row g-0">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="rounded bg-light">
                            <div class="px-5 py-4 mb-4 border-bottom">
                                <h4 class="mb-1 text-primary">Basic Plan</h4>
                                <small class="text-uppercase">For Small Size Business</small>
                            </div>
                            <div class="p-5 pt-0">
                                <h1 class="mb-3 display-5">
                                    <small class="align-top"
                                        style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                </h1>
                                <div class="mb-3 d-flex justify-content-between"><span>HTML5 & CSS3</span><i
                                        class="pt-1 fa fa-check text-primary"></i></div>
                                <div class="mb-3 d-flex justify-content-between"><span>Bootstrap v5</span><i
                                        class="pt-1 fa fa-check text-primary"></i></div>
                                <div class="mb-3 d-flex justify-content-between"><span>Responsive Layout</span><i
                                        class="pt-1 fa fa-times text-danger"></i></div>
                                <div class="mb-2 d-flex justify-content-between"><span>Cross-browser Support</span><i
                                        class="pt-1 fa fa-times text-danger"></i></div>
                                <a href="" class="px-4 py-2 mt-4 btn btn-primary">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                            <div class="px-5 py-4 mb-4 border-bottom">
                                <h4 class="mb-1 text-primary">Standard Plan</h4>
                                <small class="text-uppercase">For Medium Size Business</small>
                            </div>
                            <div class="p-5 pt-0">
                                <h1 class="mb-3 display-5">
                                    <small class="align-top"
                                        style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                </h1>
                                <div class="mb-3 d-flex justify-content-between"><span>HTML5 & CSS3</span><i
                                        class="pt-1 fa fa-check text-primary"></i></div>
                                <div class="mb-3 d-flex justify-content-between"><span>Bootstrap v5</span><i
                                        class="pt-1 fa fa-check text-primary"></i></div>
                                <div class="mb-3 d-flex justify-content-between"><span>Responsive Layout</span><i
                                        class="pt-1 fa fa-check text-primary"></i></div>
                                <div class="mb-2 d-flex justify-content-between"><span>Cross-browser Support</span><i
                                        class="pt-1 fa fa-times text-danger"></i></div>
                                <a href="" class="px-4 py-2 mt-4 btn btn-primary">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="rounded bg-light">
                            <div class="px-5 py-4 mb-4 border-bottom">
                                <h4 class="mb-1 text-primary">Advanced Plan</h4>
                                <small class="text-uppercase">For Large Size Business</small>
                            </div>
                            <div class="p-5 pt-0">
                                <h1 class="mb-3 display-5">
                                    <small class="align-top"
                                        style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                </h1>
                                <div class="mb-3 d-flex justify-content-between"><span>HTML5 & CSS3</span><i
                                        class="pt-1 fa fa-check text-primary"></i></div>
                                <div class="mb-3 d-flex justify-content-between"><span>Bootstrap v5</span><i
                                        class="pt-1 fa fa-check text-primary"></i></div>
                                <div class="mb-3 d-flex justify-content-between"><span>Responsive Layout</span><i
                                        class="pt-1 fa fa-check text-primary"></i></div>
                                <div class="mb-2 d-flex justify-content-between"><span>Cross-browser Support</span><i
                                        class="pt-1 fa fa-check text-primary"></i></div>
                                <a href="" class="px-4 py-2 mt-4 btn btn-primary">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif --}}
    <!-- Pricing Plan End -->


    <!-- Project Start -->
    @if ($project)
        <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="pb-3 mx-auto mb-5 text-center section-title position-relative" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Project Finish</h5>
                    <h1 class="mb-0">View Our Completed Project </h1>
                </div>
                <div class="row g-5">
                    @foreach ($project as $x)
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                            <div class="overflow-hidden rounded blog-item bg-light">
                                <div class="overflow-hidden blog-img position-relative" style="height: 200px">
                                    <img class="img-fluid"
                                        src="{{ $x->file ? asset($x->file) : asset('assetsLanding/img/blog-1.jpg') }}"
                                        alt="">
                                    <a class="top-0 px-4 py-2 mt-5 text-white position-absolute start-0 bg-primary rounded-end"
                                        href="">{{ $x->title }}</a>
                                </div>
                                <div class="p-4">
                                    <div class="mb-3 d-flex">
                                        <small><i
                                                class="far fa-calendar-alt text-primary me-2"></i>{{ $x->date }}</small>
                                    </div>
                                    <h4 class="mb-3">{{ $x->project_name }}</h4>
                                    <p>{{ Str::limit($x->description, 70) }}</p>
                                    <a class="text-uppercase" href="">Selengkapnya
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="overflow-hidden rounded blog-item bg-light">
                            <div class="overflow-hidden blog-img position-relative">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                <a class="top-0 px-4 py-2 mt-5 text-white position-absolute start-0 bg-primary rounded-end"
                                    href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <div class="mb-3 d-flex">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">How to build a website</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="overflow-hidden rounded blog-item bg-light">
                            <div class="overflow-hidden blog-img position-relative">
                                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                <a class="top-0 px-4 py-2 mt-5 text-white position-absolute start-0 bg-primary rounded-end"
                                    href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <div class="mb-3 d-flex">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">How to build a website</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    @endif
    <!-- Project End -->


    <!-- Testimonial Start -->
    @if ($testimonials)
        <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="pb-3 mx-auto mb-4 text-center section-title position-relative" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                    <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                    @foreach ($testimonials as $testi)
                        <div class="my-4 testimonial-item bg-light">
                            <div class="px-5 pt-5 pb-4 d-flex align-items-center border-bottom">
                                <img class="rounded img-fluid"
                                    src="{{ $testi->file ? asset($testi->file) : asset('assetsLanding/img/testimonial-1.jpg') }}"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-4">
                                    <h4 class="mb-1 text-primary">{{ $testi->name }}</h4>
                                    <small class="text-uppercase">{{ $testi->title }}</small>
                                </div>
                            </div>
                            <div class="px-5 pt-4 pb-5">
                                {{ $testi->description }}
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="my-4 testimonial-item bg-light">
                        <div class="px-5 pt-5 pb-4 d-flex align-items-center border-bottom">
                            <img class="rounded img-fluid" src="img/testimonial-2.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="mb-1 text-primary">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="px-5 pt-4 pb-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </div>
                    </div>
                    <div class="my-4 testimonial-item bg-light">
                        <div class="px-5 pt-5 pb-4 d-flex align-items-center border-bottom">
                            <img class="rounded img-fluid" src="img/testimonial-3.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="mb-1 text-primary">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="px-5 pt-4 pb-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </div>
                    </div>
                    <div class="my-4 testimonial-item bg-light">
                        <div class="px-5 pt-5 pb-4 d-flex align-items-center border-bottom">
                            <img class="rounded img-fluid" src="img/testimonial-4.jpg"
                                style="width: 60px; height: 60px;">
                            <div class="ps-4">
                                <h4 class="mb-1 text-primary">Client Name</h4>
                                <small class="text-uppercase">Profession</small>
                            </div>
                        </div>
                        <div class="px-5 pt-4 pb-5">
                            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    @endif
    <!-- Testimonial End -->


    {{-- Team Member Start --}}
    @if (count($teams) > 0)
        <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="pb-3 mx-auto mb-5 text-center section-title position-relative" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                    <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
                </div>
                <div class="row g-5">
                    @foreach ($teams as $team)
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                            <div class="overflow-hidden rounded team-item bg-light">
                                <div class="overflow-hidden team-img position-relative">
                                    <img class="img-fluid w-100"
                                        src="{{ $team->file ? asset($team->file) : asset('assetsLanding/img/team-1.jpg') }}"
                                        alt="">
                                    <div class="team-social">
                                        @if ($team->twitter)
                                            <a class="rounded btn btn-lg btn-primary btn-lg-square"
                                                href="{{ $team->twitter }}" target="_blank">
                                                <i class="fab fa-twitter fw-normal"></i>
                                            </a>
                                        @endif
                                        @if ($team->facebook)
                                            <a class="rounded btn btn-lg btn-primary btn-lg-square"
                                                href="{{ $team->facebook }}" target="_blank">
                                                <i class="fab fa-facebook-f fw-normal"></i>
                                            </a>
                                        @endif
                                        @if ($team->instagram)
                                            <a class="rounded btn btn-lg btn-primary btn-lg-square"
                                                href="{{ $team->instagram }}" target="_blank">
                                                <i class="fab fa-instagram fw-normal"></i>
                                            </a>
                                        @endif
                                        @if ($team->linkedin)
                                            <a class="rounded btn btn-lg btn-primary btn-lg-square"
                                                href="{{ $team->linkedin }}" target="_blank">
                                                <i class="fab fa-linkedin-in fw-normal"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <h4 class="text-primary">{{ $team->name }}</h4>
                                    <p class="m-0 text-uppercase">{{ $team->position }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="overflow-hidden rounded team-item bg-light">
                            <div class="overflow-hidden team-img position-relative">
                                <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="rounded btn btn-lg btn-primary btn-lg-square" href=""><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="rounded btn btn-lg btn-primary btn-lg-square" href=""><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="rounded btn btn-lg btn-primary btn-lg-square" href=""><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a class="rounded btn btn-lg btn-primary btn-lg-square" href=""><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="py-4 text-center">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="m-0 text-uppercase">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="overflow-hidden rounded team-item bg-light">
                            <div class="overflow-hidden team-img position-relative">
                                <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="rounded btn btn-lg btn-primary btn-lg-square" href=""><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="rounded btn btn-lg btn-primary btn-lg-square" href=""><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="rounded btn btn-lg btn-primary btn-lg-square" href=""><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a class="rounded btn btn-lg btn-primary btn-lg-square" href=""><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="py-4 text-center">
                                <h4 class="text-primary">Full Name</h4>
                                <p class="m-0 text-uppercase">Designation</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    @endif
    {{-- Team Member end --}}


    {{-- Client Start --}}
    @if (count($clients) > 0)
        <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 mb-5">
                <div class="bg-white">
                    <div class="owl-carousel vendor-carousel">
                        @foreach ($clients as $client)
                            <img src="{{ $client->file ? asset($client->file) : asset('assetsLanding/img/vendor-1.jpg') }}"
                                alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- client end --}}

@endsection
