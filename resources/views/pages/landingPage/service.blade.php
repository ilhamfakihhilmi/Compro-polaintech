@extends('layouts.layout_landing')

@section('title')
    POLAInTech | Solution To All Your Problems
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="py-5 container-fluid bg-primary bg-header" style="margin-bottom: 90px;">
        <div class="py-5 row">
            <div class="text-center col-12 pt-lg-5 mt-lg-5">
                <h1 class="text-white display-4 animated zoomIn">Services</h1>
                <a href="/" class="text-white h5">Home</a>
                <i class="px-2 text-white far fa-circle"></i>
                <a href="/service" class="text-white h5">Services</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    @if (count($services) > 0)
        <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
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
                                {{-- <a class="rounded btn btn-lg btn-primary" href="{{ $service->link }}">
                                    <i class="bi bi-arrow-right"></i>
                                </a> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Service End -->

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
