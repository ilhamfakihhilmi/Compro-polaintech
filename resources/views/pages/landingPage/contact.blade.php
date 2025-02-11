@extends('layouts.layout_landing')

@section('title')
    POLAInTech | Solution To All Your Problems
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="py-5 container-fluid bg-primary bg-header" style="margin-bottom: 90px;">
        <div class="py-5 row">
            <div class="text-center col-12 pt-lg-5 mt-lg-5">
                <h1 class="text-white display-4 animated zoomIn">Contact Us</h1>
                <a href="/" class="text-white h5">Home</a>
                <i class="px-2 text-white far fa-circle"></i>
                <a href="/contact" class="text-white h5">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="py-5 container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="pb-3 mx-auto mb-5 text-center section-title position-relative" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="mb-5 row g-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="rounded bg-primary d-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <i class="text-white fa fa-phone-alt"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="mb-0 text-primary">{{ $profile->telepon ? $profile->telepon : '(0264)88305518' }}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="rounded bg-primary d-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <i class="text-white fa fa-envelope-open"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h4 class="mb-0 text-primary">
                                {{ $profile->email ? $profile->email : 'genzcompany23@gmail.com' }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="rounded bg-primary d-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <i class="text-white fa fa-map-marker-alt"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="mb-0 text-primary">
                                {{ $profile->alamat ? $profile->alamat : 'Jl.Pramuka, Purwakarta, Indonesia' }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="px-4 border-0 form-control bg-light" placeholder="Your Name"
                                    style="height: 55px;" name="name" @error('name') is-invalid @enderror id="name"
                                    value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="col-md-6">
                                <input type="email" class="px-4 border-0 form-control bg-light" placeholder="Your Email"
                                    style="height: 55px;" name="email" @error('email') is-invalid @enderror id="email"
                                    value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="col-12">
                                <input type="text" class="px-4 border-0 form-control bg-light" placeholder="Subject"
                                    style="height: 55px;" name="subject" @error('subject') is-invalid @enderror
                                    id="subject" value="{{ old('subject') }}">
                            </div>
                            @error('subject')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="col-12">
                                <textarea class="px-4 py-3 border-0 form-control bg-light" rows="4" placeholder="Message" name="message"
                                    @error('message') is-invalid @enderror id="message" value="{{ old('message') }}"></textarea>
                            </div>
                            @error('message')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="col-12">
                                <button class="py-3 btn btn-primary w-100" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1030.342254674736!2d106.79893010160119!3d-6.305759192717048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1739272285708!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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
