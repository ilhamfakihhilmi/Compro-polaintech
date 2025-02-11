@extends('layouts.layout_admin')

@section('title')
    Create Team
@endsection

@section('content')
    <a href="{{ route('admin.team.index') }}" type="button" class="mb-3 btn btn-primary ">
        Back
    </a>

    <div class="row">
        <div class="col-md-12">
            <div class="mb-4 card">
                <h5 class="card-header">Create Team</h5>

                <hr class="my-0" />
                <div class="card-body">
                    <form action="{{ route('admin.team.store') }}" id="formAccountSettings" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input class="form-control  @error('name') is-invalid @enderror" type="text"
                                    id="fullName" name="name" value="{{ old('name') }}" autofocus />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="job" class="form-label">Job/Position</label>
                                <input class="form-control  @error('job') is-invalid @enderror" type="text"
                                    id="job" name="job" value="{{ old('job') }}" autofocus />
                                @error('job')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input class="form-control  @error('twitter') is-invalid @enderror" type="text"
                                    id="twitter" name="twitter" value="{{ old('twitter') }}" autofocus />
                                @error('twitter')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input class="form-control  @error('facebook') is-invalid @enderror" type="text"
                                    id="facebook" name="facebook" value="{{ old('facebook') }}" autofocus />
                                @error('facebook')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input class="form-control  @error('instagram') is-invalid @enderror" type="text"
                                    id="instagram" name="instagram" value="{{ old('instagram') }}" autofocus />
                                @error('instagram')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                                <input class="form-control  @error('linkedin') is-invalid @enderror" type="text"
                                    id="linkedin" name="linkedin" value="{{ old('linkedin') }}" autofocus />
                                @error('linkedin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="formFile" class="form-label @error('file') is-invalid @enderror">
                                    Upload Photo
                                </label>
                                <input class="form-control" type="file" id="formFile" name="file"
                                    value="{{ old('file') }}" />
                                @error('file')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
