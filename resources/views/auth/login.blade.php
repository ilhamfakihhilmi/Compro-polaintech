@extends('layouts.layout_auth')

@section('title')
    Login
@endsection

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="py-5 card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="/" class="gap-2 app-brand-link">
                                <img src="{{ asset('logo/gentologo.svg') }}" alt="POLAInTech" class="app-brand-logo demo"
                                    width="250">
                                {{--  <span class="app-brand-text demo text-body fw-bolder">POLAInTech</span>  --}}
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-4">Selamat Datang! 👋</h4>

                        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}" placeholder="Masukan Email"
                                    autofocus />
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 form-password-toggle">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password"
                                        class="form-control  @error('email') is-invalid @enderror" name="password"
                                        value="{{ old('email') }}" placeholder="Masukan Password"
                                        aria-describedby="password" />
                                    <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
