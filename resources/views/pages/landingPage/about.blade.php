@extends('layouts.layout_landing')

@section('title')
    POLAInTech | Solution To All Your Problems
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="py-5 container-fluid bg-primary bg-header" style="margin-bottom: 90px;">
        <div class="py-5 row">
            <div class="text-center col-12 pt-lg-5 mt-lg-5">
                <h1 class="text-white display-4 animated zoomIn">About Us</h1>
                <a href="/" class="text-white h5">Home</a>
                <i class="px-2 text-white far fa-circle"></i>
                <a href="/about" class="text-white h5">About</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!--About Start -->
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
                                <h4 class="mb-0 text-primary">{{ $profile->telepon ? $profile->telepon : '(0264)88305518' }}
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
    <!--About End -->

    <!--Visi & Misi Start -->
    @if ($visiMisi)
        <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="rounded position-absolute w-100 h-100 wow zoomIn" data-wow-delay="0.9s"
                                src="{{ asset($visiMisi->file ? $visiMisi->file : 'assetsLandings/img/about.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="pb-3 mb-5 section-title position-relative">
                            <h5 class="fw-bold text-primary text-uppercase">Vision & Missions</h5>
                            <h1 class="mb-0">Vision</h1>
                        </div>
                        <p class="mb-4">
                            {{ $visiMisi->visi }}
                        </p>
                        <div class="pb-3 mb-5 section-title position-relative">
                            <h1 class="mb-0">Missions</h1>
                        </div>
                        <p class="mb-4">
                            {{ $visiMisi->misi }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!--Visi & Misi End -->

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
                        <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                            <div class="overflow-hidden rounded team-item bg-light">
                                <div class="overflow-hidden team-img position-relative">
                                    <img class="img-fluid w-100"
                                        src="{{ $team->file ? asset($team->file) : asset('assetsLandings/img/team-1.jpg') }}"
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
                                    <p class="m-0 text-uppercase">{{ $team->job }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
