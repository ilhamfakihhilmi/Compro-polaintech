@extends('layouts.layout_admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="mb-4 col-lg-12 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang! 🎉</h5>
                            <p class="mb-4">
                                Selamat datang, di sistem untuk mengelola data Company Profile
                            </p>

                            <a href="/" class="btn btn-sm btn-outline-primary">Lihat Web</a>
                        </div>
                    </div>
                    <div class="text-center col-sm-5 text-sm-left">
                        <div class="px-0 pb-0 card-body px-md-4">
                            <img src="{{ asset('assetsAdmin/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
